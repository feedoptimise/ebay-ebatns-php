<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'EbatNs_ComplexType.php';
require_once 'BrandMPNType.php';

class ProductListingDetailsType extends EbatNs_ComplexType
{
	// start props
	// @var string $ProductID
	var $ProductID;
	// @var boolean $IncludeStockPhotoURL
	var $IncludeStockPhotoURL;
	// @var boolean $IncludePrefilledItemInformation
	var $IncludePrefilledItemInformation;
	// @var boolean $UseStockPhotoURLAsGallery
	var $UseStockPhotoURLAsGallery;
	// @var anyURI $StockPhotoURL
	var $StockPhotoURL;
	// @var string $Copyright
	var $Copyright;
	// @var string $GTIN
	var $GTIN;
	// @var BrandMPNType $BrandMPN
	var $BrandMPN;
	// end props

/**
 *

 * @return string
 */
	function getProductID()
	{
		return $this->ProductID;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setProductID($value)
	{
		$this->ProductID = $value;
	}
/**
 *

 * @return boolean
 */
	function getIncludeStockPhotoURL()
	{
		return $this->IncludeStockPhotoURL;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setIncludeStockPhotoURL($value)
	{
		$this->IncludeStockPhotoURL = $value;
	}
/**
 *

 * @return boolean
 */
	function getIncludePrefilledItemInformation()
	{
		return $this->IncludePrefilledItemInformation;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setIncludePrefilledItemInformation($value)
	{
		$this->IncludePrefilledItemInformation = $value;
	}
/**
 *

 * @return boolean
 */
	function getUseStockPhotoURLAsGallery()
	{
		return $this->UseStockPhotoURLAsGallery;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setUseStockPhotoURLAsGallery($value)
	{
		$this->UseStockPhotoURLAsGallery = $value;
	}
/**
 *

 * @return anyURI
 */
	function getStockPhotoURL()
	{
		return $this->StockPhotoURL;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setStockPhotoURL($value)
	{
		$this->StockPhotoURL = $value;
	}
/**
 *

 * @return string
 * @param  $index 
 */
	function getCopyright($index = null)
	{
		if ($index) {
		return $this->Copyright[$index];
	} else {
		return $this->Copyright;
	}

	}
/**
 *

 * @return void
 * @param  $value 
 * @param  $index 
 */
	function setCopyright($value, $index = null)
	{
		if ($index) {
	$this->Copyright[$index] = $value;
	} else {
	$this->Copyright = $value;
	}

	}
/**
 *

 * @return string
 */
	function getGTIN()
	{
		return $this->GTIN;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setGTIN($value)
	{
		$this->GTIN = $value;
	}
/**
 *

 * @return BrandMPNType
 */
	function getBrandMPN()
	{
		return $this->BrandMPN;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setBrandMPN($value)
	{
		$this->BrandMPN = $value;
	}
/**
 *

 * @return 
 */
	function ProductListingDetailsType()
	{
		$this->EbatNs_ComplexType('ProductListingDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'ProductID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'IncludeStockPhotoURL' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'IncludePrefilledItemInformation' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'UseStockPhotoURLAsGallery' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'StockPhotoURL' =>
				array(
					'required' => false,
					'type' => 'anyURI',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'Copyright' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => true,
					'cardinality' => '0..*'
				),
				'GTIN' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'BrandMPN' =>
				array(
					'required' => false,
					'type' => 'BrandMPNType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
