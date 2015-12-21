<?php
// autogenerated file 30.08.2007 09:37
// $Id$
// $Log$
//
require_once 'EbatNs_FacetType.php';

class AuthTokenTypeCodeType extends EbatNs_FacetType
{
	// start props
	// @var string $RESTToken
	var $RESTToken = 'RESTToken';
	// @var string $ClientAlertsToken
	var $ClientAlertsToken = 'ClientAlertsToken';
	// @var string $CustomCode
	var $CustomCode = 'CustomCode';
	// end props

/**
 *

 * @return 
 */
	function AuthTokenTypeCodeType()
	{
		$this->EbatNs_FacetType('AuthTokenTypeCodeType', 'urn:ebay:apis:eBLBaseComponents');

	}
}

$Facet_AuthTokenTypeCodeType = new AuthTokenTypeCodeType();

?>
