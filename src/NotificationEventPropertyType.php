<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'EbatNs_ComplexType.php';
require_once 'NotificationEventTypeCodeType.php';
require_once 'NotificationEventPropertyNameCodeType.php';

class NotificationEventPropertyType extends EbatNs_ComplexType
{
	// start props
	// @var NotificationEventTypeCodeType $EventType
	var $EventType;
	// @var NotificationEventPropertyNameCodeType $Name
	var $Name;
	// @var string $Value
	var $Value;
	// end props

/**
 *

 * @return NotificationEventTypeCodeType
 */
	function getEventType()
	{
		return $this->EventType;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setEventType($value)
	{
		$this->EventType = $value;
	}
/**
 *

 * @return NotificationEventPropertyNameCodeType
 */
	function getName()
	{
		return $this->Name;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setName($value)
	{
		$this->Name = $value;
	}
/**
 *

 * @return string
 */
	function getValue()
	{
		return $this->Value;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setValue($value)
	{
		$this->Value = $value;
	}
/**
 *

 * @return 
 */
	function NotificationEventPropertyType()
	{
		$this->EbatNs_ComplexType('NotificationEventPropertyType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'EventType' =>
				array(
					'required' => false,
					'type' => 'NotificationEventTypeCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Name' =>
				array(
					'required' => false,
					'type' => 'NotificationEventPropertyNameCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Value' =>
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
