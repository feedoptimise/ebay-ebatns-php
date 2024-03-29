<?php

require_once 'AbstractRequestType.php';

class GetSessionIDRequestType extends AbstractRequestType
{
	// start props
	// @var string $RuName
	var $RuName;
	// end props

/**
 *

 * @return string
 */
	function getRuName()
	{
		return $this->RuName;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setRuName($value)
	{
		$this->RuName = $value;
	}
/**
 *

 * @return 
 */
	function GetSessionIDRequestType()
	{
		$this->AbstractRequestType('GetSessionIDRequestType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'RuName' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
