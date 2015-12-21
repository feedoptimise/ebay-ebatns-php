<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'CharitySellerStatusCodeType.php';
require_once 'EbatNs_ComplexType.php';
require_once 'CharityAffiliationType.php';

class CharitySellerType extends EbatNs_ComplexType
{
	// start props
	// @var CharitySellerStatusCodeType $CharitySellerStatus
	var $CharitySellerStatus;
	// @var CharityAffiliationType $CharityAffiliation
	var $CharityAffiliation;
	// end props

/**
 *

 * @return CharitySellerStatusCodeType
 */
	function getCharitySellerStatus()
	{
		return $this->CharitySellerStatus;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setCharitySellerStatus($value)
	{
		$this->CharitySellerStatus = $value;
	}
/**
 *

 * @return CharityAffiliationType
 * @param  $index 
 */
	function getCharityAffiliation($index = null)
	{
		if ($index) {
		return $this->CharityAffiliation[$index];
	} else {
		return $this->CharityAffiliation;
	}

	}
/**
 *

 * @return void
 * @param  $value 
 * @param  $index 
 */
	function setCharityAffiliation($value, $index = null)
	{
		if ($index) {
	$this->CharityAffiliation[$index] = $value;
	} else {
	$this->CharityAffiliation = $value;
	}

	}
/**
 *

 * @return 
 */
	function CharitySellerType()
	{
		$this->EbatNs_ComplexType('CharitySellerType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'CharitySellerStatus' =>
				array(
					'required' => false,
					'type' => 'CharitySellerStatusCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'CharityAffiliation' =>
				array(
					'required' => false,
					'type' => 'CharityAffiliationType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				)
			));

	}
}
?>
