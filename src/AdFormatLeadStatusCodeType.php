<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'EbatNs_FacetType.php';

class AdFormatLeadStatusCodeType extends EbatNs_FacetType
{
	// start props
	// @var string $New
	var $New = 'New';
	// @var string $Responded
	var $Responded = 'Responded';
	// @var string $CustomCode
	var $CustomCode = 'CustomCode';
	// end props

/**
 *

 * @return 
 */
	function AdFormatLeadStatusCodeType()
	{
		$this->EbatNs_FacetType('AdFormatLeadStatusCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_AdFormatLeadStatusCodeType = new AdFormatLeadStatusCodeType();

?>
