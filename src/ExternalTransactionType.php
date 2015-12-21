<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'EbatNs_ComplexType.php';
require_once 'AmountType.php';

class ExternalTransactionType extends EbatNs_ComplexType
{
	// start props
	// @var string $ExternalTransactionID
	var $ExternalTransactionID;
	// @var dateTime $ExternalTransactionTime
	var $ExternalTransactionTime;
	// @var AmountType $FeeOrCreditAmount
	var $FeeOrCreditAmount;
	// @var AmountType $PaymentOrRefundAmount
	var $PaymentOrRefundAmount;
	// end props

/**
 *

 * @return string
 */
	function getExternalTransactionID()
	{
		return $this->ExternalTransactionID;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setExternalTransactionID($value)
	{
		$this->ExternalTransactionID = $value;
	}
/**
 *

 * @return dateTime
 */
	function getExternalTransactionTime()
	{
		return $this->ExternalTransactionTime;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setExternalTransactionTime($value)
	{
		$this->ExternalTransactionTime = $value;
	}
/**
 *

 * @return AmountType
 */
	function getFeeOrCreditAmount()
	{
		return $this->FeeOrCreditAmount;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setFeeOrCreditAmount($value)
	{
		$this->FeeOrCreditAmount = $value;
	}
/**
 *

 * @return AmountType
 */
	function getPaymentOrRefundAmount()
	{
		return $this->PaymentOrRefundAmount;
	}
/**
 *

 * @return void
 * @param  $value 
 */
	function setPaymentOrRefundAmount($value)
	{
		$this->PaymentOrRefundAmount = $value;
	}
/**
 *

 * @return 
 */
	function ExternalTransactionType()
	{
		$this->EbatNs_ComplexType('ExternalTransactionType', 'urn:ebay:apis:eBLBaseComponents');
		$this->_elements = array_merge($this->_elements,
			array(
				'ExternalTransactionID' =>
				array(
					'required' => false,
					'type' => 'string',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'ExternalTransactionTime' =>
				array(
					'required' => false,
					'type' => 'dateTime',
					'nsURI' => 'http://www.w3.org/2001/XMLSchema',
					'array' => false,
					'cardinality' => '0..1'
				),
				'FeeOrCreditAmount' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				),
				'PaymentOrRefundAmount' =>
				array(
					'required' => false,
					'type' => 'AmountType',
					'nsURI' => 'urn:ebay:apis:eBLBaseComponents',
					'array' => false,
					'cardinality' => '0..1'
				)
			));

	}
}
?>
