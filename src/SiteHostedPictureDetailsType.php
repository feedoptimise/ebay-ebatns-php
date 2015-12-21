<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'EbatNs_ComplexType.php';
require_once 'PictureFormatCodeType.php';
require_once 'PictureSetMemberType.php';
require_once 'PictureSetCodeType.php';

class SiteHostedPictureDetailsType extends EbatNs_ComplexType
{
	// start props
	// @var string $PictureName
	var $PictureName;
	// @var PictureSetCodeType $PictureSet
	var $PictureSet;
	// @var PictureFormatCodeType $PictureFormat
	var $PictureFormat;
	// @var anyURI $FullURL
	var $FullURL;
	// @var anyURI $BaseURL
	var $BaseURL;
	// @var PictureSetMemberType $PictureSetMember
	var $PictureSetMember;
	// end props

/**
 *

 * @return string
 */
	function getPictureName()
	{
		return $this->PictureName;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setPictureName($value)
	{
		$this->PictureName = $value;
	}
/**
 *

 * @return PictureSetCodeType
 */
	function getPictureSet()
	{
		return $this->PictureSet;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setPictureSet($value)
	{
		$this->PictureSet = $value;
	}
/**
 *

 * @return PictureFormatCodeType
 */
	function getPictureFormat()
	{
		return $this->PictureFormat;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setPictureFormat($value)
	{
		$this->PictureFormat = $value;
	}
/**
 *

 * @return anyURI
 */
	function getFullURL()
	{
		return $this->FullURL;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setFullURL($value)
	{
		$this->FullURL = $value;
	}
/**
 *

 * @return anyURI
 */
	function getBaseURL()
	{
		return $this->BaseURL;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setBaseURL($value)
	{
		$this->BaseURL = $value;
	}
/**
 *

 * @return PictureSetMemberType
 * @param  $index 
 */
	function getPictureSetMember($index = null)
	{
		if ($index) {
		return $this->PictureSetMember[$index];
	} else {
		return $this->PictureSetMember;
	}

	}
/**
 *

 * @return void
 * @param  $value 
 * @param  $index 
 */
	function setPictureSetMember($value, $index = null)
	{
		if ($index) {
	$this->PictureSetMember[$index] = $value;
	} else {
	$this->PictureSetMember = $value;
	}

	}
/**
 *

 * @return 
 */
	function SiteHostedPictureDetailsType()
	{
		$this->EbatNs_ComplexType('SiteHostedPictureDetailsType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'PictureName' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PictureSet' =>
				array(
					'required' => false,
					'type' => 'PictureSetCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PictureFormat' =>
				array(
					'required' => false,
					'type' => 'PictureFormatCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'FullURL' =>
				array(
					'required' => false,
					'type' => 'anyURI',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'BaseURL' =>
				array(
					'required' => false,
					'type' => 'anyURI',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PictureSetMember' =>
				array(
					'required' => false,
					'type' => 'PictureSetMemberType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => true,
					'cardinality' => '0..*'
				)
			));

	}
}
?>
