<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'EbatNs_ComplexType.php';

class PaginationType extends EbatNs_ComplexType
{
	// start props
	// @var int $EntriesPerPage
	var $EntriesPerPage;
	// @var int $PageNumber
	var $PageNumber;
	// end props

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

 * @return 
 */
	function PaginationType()
	{
		$this->EbatNs_ComplexType('PaginationType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
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
				)
			));

	}
}
?>
