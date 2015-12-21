<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'UserIDType.php';
require_once 'GranularityLevelCodeType.php';
require_once 'AbstractRequestType.php';

class GetBidderListRequestType extends AbstractRequestType
{
	// start props
	// @var boolean $ActiveItemsOnly
	var $ActiveItemsOnly;
	// @var dateTime $EndTimeFrom
	var $EndTimeFrom;
	// @var dateTime $EndTimeTo
	var $EndTimeTo;
	// @var UserIDType $UserID
	var $UserID;
	// @var GranularityLevelCodeType $GranularityLevel
	var $GranularityLevel;
	// end props

/**
 *

 * @return boolean
 */
	function getActiveItemsOnly()
	{
		return $this->ActiveItemsOnly;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setActiveItemsOnly($value)
	{
		$this->ActiveItemsOnly = $value;
	}
/**
 *

 * @return dateTime
 */
	function getEndTimeFrom()
	{
		return $this->EndTimeFrom;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setEndTimeFrom($value)
	{
		$this->EndTimeFrom = $value;
	}
/**
 *

 * @return dateTime
 */
	function getEndTimeTo()
	{
		return $this->EndTimeTo;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setEndTimeTo($value)
	{
		$this->EndTimeTo = $value;
	}
/**
 *

 * @return UserIDType
 */
	function getUserID()
	{
		return $this->UserID;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setUserID($value)
	{
		$this->UserID = $value;
	}
/**
 *

 * @return GranularityLevelCodeType
 */
	function getGranularityLevel()
	{
		return $this->GranularityLevel;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setGranularityLevel($value)
	{
		$this->GranularityLevel = $value;
	}
/**
 *

 * @return 
 */
	function GetBidderListRequestType()
	{
		$this->AbstractRequestType('GetBidderListRequestType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'ActiveItemsOnly' =>
				array(
					'required' => false,
					'type' => 'boolean',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'EndTimeFrom' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'EndTimeTo' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'UserID' =>
				array(
					'required' => false,
					'type' => 'UserIDType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'GranularityLevel' =>
				array(
					'required' => false,
					'type' => 'GranularityLevelCodeType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
