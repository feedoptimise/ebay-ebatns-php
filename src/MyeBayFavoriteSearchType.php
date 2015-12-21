<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'EbatNs_ComplexType.php';

class MyeBayFavoriteSearchType extends EbatNs_ComplexType
{
	// start props
	// @var string $SearchName
	var $SearchName;
	// @var string $SearchQuery
	var $SearchQuery;
	// end props

/**
 *

 * @return string
 */
	function getSearchName()
	{
		return $this->SearchName;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setSearchName($value)
	{
		$this->SearchName = $value;
	}
/**
 *

 * @return string
 */
	function getSearchQuery()
	{
		return $this->SearchQuery;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setSearchQuery($value)
	{
		$this->SearchQuery = $value;
	}
/**
 *

 * @return 
 */
	function MyeBayFavoriteSearchType()
	{
		$this->EbatNs_ComplexType('MyeBayFavoriteSearchType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'SearchName' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'SearchQuery' =>
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