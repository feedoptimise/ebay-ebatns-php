<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'EbatNs_FacetType.php';

class PromotionalSaleStatusCodeType extends EbatNs_FacetType
{
	// start props
	// @var string $Active
	var $Active = 'Active';
	// @var string $Scheduled
	var $Scheduled = 'Scheduled';
	// @var string $Processing
	var $Processing = 'Processing';
	// @var string $Inactive
	var $Inactive = 'Inactive';
	// @var string $Deleted
	var $Deleted = 'Deleted';
	// @var string $CustomCode
	var $CustomCode = 'CustomCode';
	// end props

/**
 *

 * @return 
 */
	function PromotionalSaleStatusCodeType()
	{
		$this->EbatNs_FacetType('PromotionalSaleStatusCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_PromotionalSaleStatusCodeType = new PromotionalSaleStatusCodeType();

?>
