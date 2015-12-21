<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'NameValueListType.php';
require_once 'EbatNs_ComplexType.php';

class NameValueListArrayType extends EbatNs_ComplexType
{
	// start props
	// @var NameValueListType $NameValueList
	var $NameValueList;
	// end props

/**
 *

 * @return NameValueListType
 * @param  $index 
 */
	function getNameValueList($index = null)
	{
		if ($index) {
		return $this->NameValueList[$index];
	} else {
		return $this->NameValueList;
	}

	}
/**
 *

 * @return void
 * @param  $value 
 * @param  $index 
 */
	function setNameValueList($value, $index = null)
	{
		if ($index) {
	$this->NameValueList[$index] = $value;
	} else {
	$this->NameValueList = $value;
	}

	}
/**
 *

 * @return 
 */
	function NameValueListArrayType()
	{
		$this->EbatNs_ComplexType('NameValueListArrayType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'NameValueList' =>
				array(
					'required' => false,
					'type' => 'NameValueListType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				)
			));

	}
}
?>
