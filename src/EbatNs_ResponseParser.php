<?php 
// $Id: EbatNs_ResponseParser.php,v 1.1 2007/05/31 11:38:00 michael Exp $
/* $Log: EbatNs_ResponseParser.php,v $
/* Revision 1.1  2007/05/31 11:38:00  michael
/* - initial checkin
/* - version < 513
/*
 * 
 * 5     6.02.06 14:15 Mcoslar
 * 
 * 4     3.02.06 15:47 Mcoslar
 * 
 * 3     3.02.06 10:44 Mcoslar
 * 
 * 2     30.01.06 16:44 Mcoslar
 * �nderungen eingef�gt
 */
	define ('EBATNS_PARSEMODE_CALL', 1);
	define ('EBATNS_PARSEMODE_NOTIFICATION', 2);
	define ('EBATNS_PARSEMODE_CALLEXTENSION', 3);
	
	define ('EBATNS_PSTATENOT_INITIAL', 0);
	define ('EBATNS_PSTATENOT_HAS_SIGNATURE', 1);
	define ('EBATNS_PSTATENOT_FOUND_ENVBODY', 2);	
	define ('EBATNS_PSTATENOT_IN_RESPONSE', 3);
	
	class EbatNs_ResponseParser
	{
		var $_client;
		
		var $_options;
		
		var $_responseObject = null;
		var $_waitForResponseTag = null;
		var $_responseTypeName = null;
		var $_inResponse = false;
		
		var $_stData = array();
		var $_stValue = array();
		var $_stMap = array();
		
		var $_depth = 0;
		
		var $_typeNs = null;
		
		var $_typeMap = array();
		
		var $_hasFault = false;
		var $_hasError = false;
		
		var $_parseMode = EBATNS_PARSEMODE_CALL;
		var $_tmpNotificationSignature = null;
		var $_notificationParseState = EBATNS_PSTATENOT_INITIAL;
		
		var $_extensionPrefix = null;
		
		function EbatNs_ResponseParser(& $client, $typeNs, $options = null)
		{
			$this->_client = & $client;
			
			$this->_typeNs = $typeNs;

			$this->setOption('NO_ATTRIBUTES', false);
			$this->setOption('NO_UNSET_METADATA', false);
			$this->setOption('NO_REDUCE', false);
			$this->setOption('NO_EMPTY_ARRAYS');
			$this->setOption('NO_EMPTY_VALUES');
			$this->setOption('FLATTEN_ON_ARRAYTYPE');

			if ($options)
			{
				$this->_options = array_merge($this->_options, $options);
			}
		}
		
		function setOption($name, $value = true)
		{
			$this->_options[$name] = $value;
		}
		
		function setMode($newMode)
		{
			$this->_parseMode = $newMode;
		}
		
		function setExtensionPrefix($extensionPrefix)
		{
			$this->_extensionPrefix = $extensionPrefix;
		}
		
		function _reduceElement(& $element)
		{
			if ($this->_options['NO_REDUCE'])
				return true;
				
			if ($this->_options['NO_EMPTY_VALUES'])
			{
				foreach (get_object_vars($element) as $member => $value)
					if ($member[0] == '_' || ($value === null))
						unset($element->{$member});
			}
			else
			{
				foreach (get_object_vars($element) as $member => $value)
					if ($member[0] == '_')
						unset($element->{$member});
			}
			
			return count(get_object_vars($element)) > 0;
		}
		
		function _includeType($typeName)
		{
			if (!class_exists($typeName)) {
				$typeFileName = basename($typeName);
				require_once $typeFileName . '.php';
			}
			
			return (class_exists($typeName));
		}
		
		function & _makeValue($typeName)
		{
			// if ($this->_parseMode == EBATNS_PARSEMODE_CALLEXTENSION)
			//	$typeName = $this->_extensionPrefix . $typeName;
			
			if ($this->_includeType($typeName))
			{
				$t = new $typeName();
			
				// transfer the typeInfo to the typeMap
				$typeInfo['typeName'] = $typeName;
				$typeInfo['elements'] = isset($t->_elements) ? $t->_elements : null;
				$typeInfo['attributes'] = isset($t->_attributes) ? $t->_attributes : null;
				
				$this->_typeMap[strtolower($typeName)] = $typeInfo;
				
				// unset the type-information from 
				// the resulting value
				if (!$this->_options['NO_UNSET_METADATA'])
				{
					unset($t->_elements);				
					unset($t->_attributes);
				}
				
				return $t;
			}
			else
				return null;
		}
		
		function & decode($responseName, $messageText, $parseMode = EBATNS_PARSEMODE_CALL, $responseTypeName = null)
		{
			$this->_responseObject = null;
	        $this->_stValue = array();
			$this->_stData  = array();
			$this->_stMap   = array();
			$this->_depth   = 0;

			$this->_hasError = false;
			$this->_hasFault = false;

			$this->_waitForResponseTag = $responseName;
			
			if ($responseTypeName != null)
				$this->_responseTypeName = $responseTypeName;
			else
				$this->_responseTypeName = $responseName . 'Type';
				
			if ($parseMode != EBATNS_PARSEMODE_CALL)
				$this->setMode($parseMode);
						
			$encoding = 'UTF-8';

            $parser = xml_parser_create($encoding);
            xml_parser_set_option($parser, XML_OPTION_CASE_FOLDING, 0);
            xml_set_object($parser, $this);
            xml_set_element_handler($parser, '_startElement', '_endElement');
            xml_set_character_data_handler($parser, '_cData');
            
            if (!xml_parse($parser, $messageText, true)) {
                $errMsg = sprintf('XML error on line %d col %d byte %d %s',
                    xml_get_current_line_number($parser),
                    xml_get_current_column_number($parser),
                    xml_get_current_byte_index($parser),
                    xml_error_string(xml_get_error_code($parser)));
                
                // create a error-object
                $errResponse = new EbatNs_ResponseError();
                $errResponse->raise($errMsg, 90000 + 1);
                return $errResponse;
            }
            xml_parser_free($parser);
            
            if ($this->_hasFault)
            {
				return ($t = & $this->_decodeFault($messageText));				
			}
			
            return ($t = & $this->_responseObject);
		}

		function _decodeFault($msg)
		{
			$errResponse = new EbatNs_ResponseError();
			
			$p = xml_parser_create();
			xml_parse_into_struct($p, $msg, $lstValues, $index);
			xml_parser_free($p);
			
			foreach ($lstValues as $value)
			{
				if ($value['type'] == 'complete')
				{
					switch ($value['tag'])
					{
						case 'FAULTSTRING':
							$errResponse->raise('soap-fault: ' . utf8_decode($value['value']), 90000 + 2);
							break;
						case 'ERRORCODE':
							$code = $value['value'];
							break;
						case 'SEVERITY':
							$severity = $value['value'];
							break;
						case 'DETAILEDMESSAGE':
							$errResponse->raise($value['value'], $code, $severity);
							break; 
					}
				}
			}
			$this->_reduceElement($errResponse);
			return $errResponse;
		}
				
	    function _startElement($parser, $name, $attrs)
		{
			// wait for the starting-element
			if ((	($this->_parseMode == EBATNS_PARSEMODE_CALL ||
					$this->_parseMode == EBATNS_PARSEMODE_CALLEXTENSION ) && 
					!$this->_inResponse	&& $name != $this->_waitForResponseTag
				)
				||
				(
					 $this->_parseMode == EBATNS_PARSEMODE_NOTIFICATION &&
					 $this->_notificationParseState < EBATNS_PSTATENOT_IN_RESPONSE
				))
			{
				if ($this->_parseMode == EBATNS_PARSEMODE_CALL ||
					$this->_parseMode == EBATNS_PARSEMODE_CALLEXTENSION )
				{
					if ($name == 'soapenv:Fault')
						$this->_hasFault = true;
					return;
				}
				else
				{
					if (strstr($name, ':NotificationSignature') !== false)
					{
						$this->_notificationParseState = EBATNS_PSTATENOT_HAS_SIGNATURE;
						return;
					}
					
					if ($name == 'soapenv:Body')
					{
						$this->_notificationParseState = EBATNS_PSTATENOT_FOUND_ENVBODY;
						return;
					}
					
					if ($this->_notificationParseState == EBATNS_PSTATENOT_FOUND_ENVBODY)
					{
						// know we will have the name of the response in $name
						// so we just set the state and recall the method again !
						$this->_notificationParseState = EBATNS_PSTATENOT_IN_RESPONSE;
						$this->_waitForResponseTag = $name;
						$this->_responseTypeName = $name . 'Type';
						
						$this->_depth = 0;

						return $this->_startElement($parser, $name, $attrs);
					}
				}
			}
			else
			{
				// setup the response-object
				if (!$this->_inResponse)
				{
					$parent  = null;
					$current = & $this->_makeValue($this->_responseTypeName);
					$this->_inResponse = true;
					$mapName = null;
				}
				else
				{
					$mapName = $name;
					
					$parent = & $this->_stValue[$this->_depth];
					$typeInfo = $this->_typeMap[strtolower(get_class($parent))];
					
					$elementInfo = $typeInfo['elements'][$name];
					// if (!$elementInfo)
					// 	echo "info not found " . get_class($parent) . " $name\n";

					if ($elementInfo['nsURI'] == $this->_typeNs)
					{
						// let CodeTypes (Facets/enums) be result in just
						// plain strings but child-objects
						if (strpos($elementInfo['type'], 'CodeType') === false)
						{
							$current = & $this->_makeValue($elementInfo['type']);

							if ($attrs)
							{
								foreach($attrs as $attKey => $attValue)
								{
									$current->setTypeAttribute($attKey, $attValue);
								}
							}
						}
						else
						{
							// echo "1 no type found $name\n";
							$current = null;
						}
					}
					else
					{
						// echo "xsd-type found " . get_class($parent) . " $name\n";
						$current = null;
					}
				}
			}
			
			$this->_depth++;
			$this->_stData[$this->_depth] = null;
			$this->_stValue[$this->_depth] = & $current;
			$this->_stMap[$this->_depth] = $mapName;
		}
		
		function _endElement($parser, $name)
		{
			if ($this->_parseMode == EBATNS_PARSEMODE_NOTIFICATION && $this->_notificationParseState == EBATNS_PSTATENOT_HAS_SIGNATURE)
			{
				$this->_tmpNotificationSignature = $this->_stData[$this->_depth];
				return;
			}
			
			if (!$this->_inResponse)
			{
				return;
			}
				
			if ($name == $this->_waitForResponseTag)
			{
				$this->_responseObject = & $this->_stValue[1];
				
				if ($this->_parseMode == EBATNS_PARSEMODE_NOTIFICATION)
					 $this->_responseObject->NotificationSignature = $this->_tmpNotificationSignature;
					 
				$this->_reduceElement($this->_responseObject);
				// switch off the parsing again
				$this->_inResponse = false;	
				return;
			}
			
			$current = & $this->_stValue[$this->_depth];
			$parent = & $this->_stValue[$this->_depth - 1];
			$mapName = $this->_stMap[$this->_depth];			
			$data = $this->_stData[$this->_depth];
			$this->_depth--;
			
			if ($current)
				$typeInfoCurrent = $this->_typeMap[strtolower(get_class($current))];				
			if ($parent)
				$typeInfoParent = $this->_typeMap[strtolower(get_class($parent))];				
			
			$infoMember = $typeInfoParent['elements'][$mapName];
			$data = $this->_decodeData($data, $infoMember['type']);

			if ($mapName)
			{
				if ($current)
				{
					if (count($typeInfoCurrent['elements']) == 0)
					{					
						$currentIsEmpty = false;
						if (count($typeInfoCurrent['attributes']) == 0 || $this->_options['NO_ATTRIBUTES'])
						{
							// in case there neither child-elements nor attributes
							// we reduced the data to a plain-value !
							$current = $data;	
						}
						else
						{
							$current->setTypeValue($data);
						}
					}
					if (is_object($current))
					{
						$currentIsEmpty = ! $this->_reduceElement($current);
						
						if (!$currentIsEmpty)
						{
							if ($this->_client->_hasCallbacks)
							{
								if ($this->_client->_handleDataType($infoMember['type'], $current, $mapName))
									return;
							}
						}
					}
				}
				else
				{
					$current = $data;
					$currentIsEmpty = false;
				}
				
				if ($infoMember)
				{
					list($lower, $upper) = preg_split("/\.\./", $infoMember['cardinality']);
					if ($upper == '*' || $upper > 1)
					{
						if ($this->_options['NO_EMPTY_ARRAYS'] && $currentIsEmpty)
						{
							// do not add an "empty" object
							return;
						}
						else
						{	
							$parent->{$mapName}[] = $current;
							return;
						}
					}
				}
				
				// do not set an "empty" value
				if ($this->_options['NO_EMPTY_VALUES'] && $currentIsEmpty)
					return;

				if ($this->_options['FLATTEN_ON_ARRAYTYPE'])
				{
					// using this option will flatten type that contain "ArrayType"
					// so instead of CategoryArray -> Category -> php-array()
					// you will just get CategoryArray -> php-array(), so leaving out the 
					// "Category" - subelement
					
					// check if the parents-element's typename
					// contains arraytype
					if (strpos($infoMember['type'], 'ArrayType') !== false)
					{
						$arrayTypeInfo = $this->_typeMap[strtolower($infoMember['type'])];
						if (count($arrayTypeInfo['elements']) == 1)
						{
							$key = array_keys($arrayTypeInfo['elements']);
							
							$current = $current->{$key[0]};
						}
					}	
				}
				$parent->{$mapName} = $current;
			}
		}

		function _cData($parser, $data)
		{
			if ($this->_parseMode == EBATNS_PARSEMODE_NOTIFICATION && $this->_notificationParseState == EBATNS_PSTATENOT_HAS_SIGNATURE)
			{
				$this->_stData[$this->_depth] .= $data;
			}
			
			if (!$this->_inResponse)
				return;
			
			$this->_stData[$this->_depth] .= $data;
		}
		
		function _decodeData($data, $type = 'string')
		{
			if ($this->_client->_dataConverter != null)
			{
				return $this->_client->_dataConverter->decodeData($data, $type);
			}
			else
			{
				return $data;
			}
		}
	}
?>