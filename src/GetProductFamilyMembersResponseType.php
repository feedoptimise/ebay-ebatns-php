<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'DataElementSetType.php';
require_once 'ProductSearchResultType.php';
require_once 'AbstractResponseType.php';

class GetProductFamilyMembersResponseType extends AbstractResponseType
{
	// start props
	// @var DataElementSetType $DataElementSets
	var $DataElementSets;
	// @var ProductSearchResultType $ProductSearchResult
	var $ProductSearchResult;
	// end props

/**
 *

 * @return DataElementSetType
 * @param  $index 
 */
	function getDataElementSets($index = null)
	{
		if ($index) {
		return $this->DataElementSets[$index];
	} else {
		return $this->DataElementSets;
	}

	}
/**
 *

 * @return void
 * @param  $value 
 * @param  $index 
 */
	function setDataElementSets($value, $index = null)
	{
		if ($index) {
	$this->DataElementSets[$index] = $value;
	} else {
	$this->DataElementSets = $value;
	}

	}
/**
 *

 * @return ProductSearchResultType
 * @param  $index 
 */
	function getProductSearchResult($index = null)
	{
		if ($index) {
		return $this->ProductSearchResult[$index];
	} else {
		return $this->ProductSearchResult;
	}

	}
/**
 *

 * @return void
 * @param  $value 
 * @param  $index 
 */
	function setProductSearchResult($value, $index = null)
	{
		if ($index) {
	$this->ProductSearchResult[$index] = $value;
	} else {
	$this->ProductSearchResult = $value;
	}

	}
/**
 *

 * @return 
 */
	function GetProductFamilyMembersResponseType()
	{
		$this->AbstractResponseType('GetProductFamilyMembersResponseType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'DataElementSets' =>
				array(
					'required' => false,
					'type' => 'DataElementSetType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				),
				'ProductSearchResult' =>
				array(
					'required' => false,
					'type' => 'ProductSearchResultType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				)
			));

	}
}
?>
