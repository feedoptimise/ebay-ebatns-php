<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'EbatNs_FacetType.php';

class AccountHistorySelectionCodeType extends EbatNs_FacetType
{
	// start props
	// @var string $LastInvoice
	var $LastInvoice = 'LastInvoice';
	// @var string $SpecifiedInvoice
	var $SpecifiedInvoice = 'SpecifiedInvoice';
	// @var string $BetweenSpecifiedDates
	var $BetweenSpecifiedDates = 'BetweenSpecifiedDates';
	// @var string $CustomCode
	var $CustomCode = 'CustomCode';
	// end props

/**
 *

 * @return 
 */
	function AccountHistorySelectionCodeType()
	{
		$this->EbatNs_FacetType('AccountHistorySelectionCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_AccountHistorySelectionCodeType = new AccountHistorySelectionCodeType();

?>
