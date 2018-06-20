<?php

namespace Seko;

class API_Service extends \SoapClient
{
	const WsdlUrl = 'http://seko.wallbee.dk/api_Service.asmx?WSDL';


	/**
	 * @var array $arrClassMap The defined classes
	 */
	private static $arrClassMap = [
		'CreateShipment'				=> 'Seko\\CreateShipment',
		'Shipment'						=> 'Seko\\Shipment',
		'Login'							=> 'Seko\\Login',
		'Description'					=> 'Seko\\Description',
		'Dutiable'						=> 'Seko\\Dutiable',
		'Money'							=> 'Seko\\Money',
		'Insurance'						=> 'Seko\\Insurance',
		'COD'							=> 'Seko\\COD',
		'DangerousGoods'				=> 'Seko\\DangerousGoods',
		'Measurement'					=> 'Seko\\Measurement',
		'Address'						=> 'Seko\\Address',
		'ArrayOfColli'					=> 'Seko\\ArrayOfColli',
		'Colli'							=> 'Seko\\Colli',
		'MeasurementWeight'				=> 'Seko\\MeasurementWeight',
		'PackageType'					=> 'Seko\\PackageType',
		'DryIce'						=> 'Seko\\DryIce',
		'InvoiceSettings'				=> 'Seko\\InvoiceSettings',
		'Invoice'						=> 'Seko\\Invoice',
		'EmailLabel'					=> 'Seko\\EmailLabel',
		'EmailSettings'					=> 'Seko\\EmailSettings',
		'FTPLabel'						=> 'Seko\\FTPLabel',
		'FTPSettings'					=> 'Seko\\FTPSettings',
		'ArrayOfInvoiceItem'			=> 'Seko\\ArrayOfInvoiceItem',
		'InvoiceItem'					=> 'Seko\\InvoiceItem',
		'PaperLessShipping'				=> 'Seko\\PaperLessShipping',
		'ArrayOfPaperLessDocument'		=> 'Seko\\ArrayOfPaperLessDocument',
		'PaperLessDocument'				=> 'Seko\\PaperLessDocument',
		'FDA'							=> 'Seko\\FDA',
		'FCC'							=> 'Seko\\FCC',
		'COO'							=> 'Seko\\COO',
		'CreateShipmentResponse'		=> 'Seko\\CreateShipmentResponse',
		'Reply'							=> 'Seko\\Reply',
		'ReplyStatus'					=> 'Seko\\ReplyStatus',
		'ArrayOfError'					=> 'Seko\\ArrayOfError',
		'Error'							=> 'Seko\\Error',
		'ArrayOfLabel'					=> 'Seko\\ArrayOfLabel',
		'Label'							=> 'Seko\\Label',
		'ArrayOfColliItem'				=> 'Seko\\ArrayOfColliItem',
		'ColliItem'						=> 'Seko\\ColliItem',
		'ArrayOfCost'					=> 'Seko\\ArrayOfCost',
		'Cost'							=> 'Seko\\Cost',
		'GetShippingOptions'			=> 'Seko\\GetShippingOptions',
		'GetShippingOptionsResponse'	=> 'Seko\\GetShippingOptionsResponse',
		'ReplyShippingOptions'			=> 'Seko\\ReplyShippingOptions',
		'ArrayOfShippingOptions'		=> 'Seko\\ArrayOfShippingOptions',
		'ShippingOptions'				=> 'Seko\\ShippingOptions',
	];

	/**
	 * @return API_Service
	 */
	public function Create()
	{
		return new static([
			'trace'			=> true,
			'exceptions'	=> true,
			'soap_version'	=> 2,
			'encoding'		=> 'UTF-8',
			'features'		=> 1,
		]);
	}

	/**
	 * @param string $strWsdl The wsdl file to use
	 * @param array $arrOptions A array of config values
	 * @throws \Exception
	 */
	public function __construct(array $arrOptions = [], string $strWsdl = self::WsdlUrl)
	{
		if ($strWsdl === '')
		{
			throw new \Exception('Missing WSDL!');
		}
		foreach (self::$arrClassMap as $strKey => $mValue)
		{
			if (!isset($arrOptions['classmap'][$strKey]))
			{
				$arrOptions['classmap'][$strKey]	= $mValue;
			}
		}
		parent::__construct($strWsdl, $arrOptions);
	}

	/**
	 * @param CreateShipment $parameters
	 * @return CreateShipmentResponse
	 */
	public function CreateShipment(CreateShipment $parameters)
	{
		return $this->__soapCall('CreateShipment', [$parameters]);
	}

	/**
	 * @param GetShippingOptions $parameters
	 * @return GetShippingOptionsResponse
	 */
	public function GetShippingOptions(GetShippingOptions $parameters)
	{
		return $this->__soapCall('GetShippingOptions', [$parameters]);
	}

}
