<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'ItemArrayType.php';
require_once 'DomainHistogramType.php';
require_once 'ProductArrayType.php';
require_once 'AbstractResponseType.php';

class GetSearchResultsExpressResponseType extends AbstractResponseType
{
	// start props
	// @var DomainHistogramType $Histogram
	var $Histogram;
	// @var ItemArrayType $ItemArray
	var $ItemArray;
	// @var ProductArrayType $ProductArray
	var $ProductArray;
	// @var int $EntriesPerPage
	var $EntriesPerPage;
	// @var int $PageNumber
	var $PageNumber;
	// @var boolean $HasMoreEntries
	var $HasMoreEntries;
	// end props

/**
 *

 * @return DomainHistogramType
 */
	function getHistogram()
	{
		return $this->Histogram;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setHistogram($value)
	{
		$this->Histogram = $value;
	}
/**
 *

 * @return ItemArrayType
 */
	function getItemArray()
	{
		return $this->ItemArray;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setItemArray($value)
	{
		$this->ItemArray = $value;
	}
/**
 *

 * @return ProductArrayType
 */
	function getProductArray()
	{
		return $this->ProductArray;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setProductArray($value)
	{
		$this->ProductArray = $value;
	}
/**
 *

 * @return int
 */
	function getEntriesPerPage()
	{
		return $this->EntriesPerPage;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setEntriesPerPage($value)
	{
		$this->EntriesPerPage = $value;
	}
/**
 *

 * @return int
 */
	function getPageNumber()
	{
		return $this->PageNumber;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setPageNumber($value)
	{
		$this->PageNumber = $value;
	}
/**
 *

 * @return boolean
 */
	function getHasMoreEntries()
	{
		return $this->HasMoreEntries;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setHasMoreEntries($value)
	{
		$this->HasMoreEntries = $value;
	}
/**
 *

 * @return 
 */
	function GetSearchResultsExpressResponseType()
	{
		$this->AbstractResponseType('GetSearchResultsExpressResponseType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'Histogram' =>
				array(
					'required' => false,
					'type' => 'DomainHistogramType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ItemArray' =>
				array(
					'required' => false,
					'type' => 'ItemArrayType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ProductArray' =>
				array(
					'required' => false,
					'type' => 'ProductArrayType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'EntriesPerPage' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PageNumber' =>
				array(
					'required' => false,
					'type' => 'int',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'HasMoreEntries' =>
				array(
					'required' => true,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '1..1'
				)
			));

	}
}
?>
