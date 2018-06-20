<?php

namespace Seko;

class Shipment
{

	/**
	 * @var Login $LoginToService
	 */
	protected $LoginToService = null;

	/**
	 * @var int $AccountNumber
	 */
	protected $AccountNumber = null;

	/**
	 * @var int $TransportProduct
	 */
	protected $TransportProduct = null;

	/**
	 * @var \DateTime $ShipDate
	 */
	protected $ShipDate = null;

	/**
	 * @var string $SenderReference
	 */
	protected $SenderReference = null;

	/**
	 * @var string $ReceiverReference
	 */
	protected $ReceiverReference = null;

	/**
	 * @var IncotermEnum $Incoterm
	 */
	protected $Incoterm = null;

	/**
	 * @var Description $ShipmentDescription
	 */
	protected $ShipmentDescription = null;

	/**
	 * @var Dutiable $Customs
	 */
	protected $Customs = null;

	/**
	 * @var Insurance $Insurance
	 */
	protected $Insurance = null;

	/**
	 * @var COD $SendAsCOD
	 */
	protected $SendAsCOD = null;

	/**
	 * @var ExportReasonEnum $ShipmentType
	 */
	protected $ShipmentType = null;

	/**
	 * @var DangerousGoods $DangerousGoods
	 */
	protected $DangerousGoods = null;

	/**
	 * @var ShipDirectionEnum $ShipmentDirection
	 */
	protected $ShipmentDirection = null;

	/**
	 * @var Address $PickupAddress
	 */
	protected $PickupAddress = null;

	/**
	 * @var Address $ReceiverAddress
	 */
	protected $ReceiverAddress = null;

	/**
	 * @var Address $SenderAddress
	 */
	protected $SenderAddress = null;

	/**
	 * @var ArrayOfColli $Collies
	 */
	protected $Collies = null;

	/**
	 * @var string $Handling
	 */
	protected $Handling = null;

	/**
	 * @var boolean $CreatePickup
	 */
	protected $CreatePickup = null;

	/**
	 * @var InvoiceSettings $InvoiceSettings
	 */
	protected $InvoiceSettings = null;

	/**
	 * @var PaperLessShipping $PaperLessShipping
	 */
	protected $PaperLessShipping = null;

	/**
	 * @var FDA $CreateFDA
	 */
	protected $CreateFDA = null;

	/**
	 * @var FCC $CreateFCC
	 */
	protected $CreateFCC = null;

	/**
	 * @var COO $CreateCOO
	 */
	protected $CreateCOO = null;

	/**
	 * @param \DateTime $ShipDate
	 * @param IncotermEnum $Incoterm
	 * @param ExportReasonEnum $ShipmentType
	 * @param ShipDirectionEnum $ShipmentDirection
	 * @param boolean $CreatePickup
	 */
	public function __construct(\DateTime $ShipDate, $Incoterm, $ShipmentType, $ShipmentDirection, $CreatePickup)
	{
		$this->ShipDate = $ShipDate->format(\DateTime::ATOM);
		$this->Incoterm = $Incoterm;
		$this->ShipmentType = $ShipmentType;
		$this->ShipmentDirection = $ShipmentDirection;
		$this->CreatePickup = $CreatePickup;
	}

	/**
	 * @return Login
	 */
	public function getLoginToService()
	{
		return $this->LoginToService;
	}

	/**
	 * @param Login $LoginToService
	 * @return \Seko\Shipment
	 */
	public function setLoginToService($LoginToService)
	{
		$this->LoginToService = $LoginToService;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getAccountNumber()
	{
		return $this->AccountNumber;
	}

	/**
	 * @param int $AccountNumber
	 * @return \Seko\Shipment
	 */
	public function setAccountNumber($AccountNumber)
	{
		$this->AccountNumber = $AccountNumber;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getTransportProduct()
	{
		return $this->TransportProduct;
	}

	/**
	 * @param int $TransportProduct
	 * @return \Seko\Shipment
	 */
	public function setTransportProduct($TransportProduct)
	{
		$this->TransportProduct = $TransportProduct;
		return $this;
	}

	/**
	 * @return \DateTime
	 */
	public function getShipDate()
	{
		if ($this->ShipDate == null)
		{
			return null;
		}
		else
		{
			try
			{
				return new \DateTime($this->ShipDate);
			}
			catch (\Exception $oException)
			{
				return false;
			}
		}
	}

	/**
	 * @param \DateTime $ShipDate
	 * @return \Seko\Shipment
	 */
	public function setShipDate(\DateTime $ShipDate)
	{
		$this->ShipDate = $ShipDate->format(\DateTime::ATOM);
		return $this;
	}

	/**
	 * @return string
	 */
	public function getSenderReference()
	{
		return $this->SenderReference;
	}

	/**
	 * @param string $SenderReference
	 * @return \Seko\Shipment
	 */
	public function setSenderReference($SenderReference)
	{
		$this->SenderReference = $SenderReference;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getReceiverReference()
	{
		return $this->ReceiverReference;
	}

	/**
	 * @param string $ReceiverReference
	 * @return \Seko\Shipment
	 */
	public function setReceiverReference($ReceiverReference)
	{
		$this->ReceiverReference = $ReceiverReference;
		return $this;
	}

	/**
	 * @return IncotermEnum
	 */
	public function getIncoterm()
	{
		return $this->Incoterm;
	}

	/**
	 * @param IncotermEnum $Incoterm
	 * @return \Seko\Shipment
	 */
	public function setIncoterm($Incoterm)
	{
		$this->Incoterm = $Incoterm;
		return $this;
	}

	/**
	 * @return Description
	 */
	public function getShipmentDescription()
	{
		return $this->ShipmentDescription;
	}

	/**
	 * @param Description $ShipmentDescription
	 * @return \Seko\Shipment
	 */
	public function setShipmentDescription($ShipmentDescription)
	{
		$this->ShipmentDescription = $ShipmentDescription;
		return $this;
	}

	/**
	 * @return Dutiable
	 */
	public function getCustoms()
	{
		return $this->Customs;
	}

	/**
	 * @param Dutiable $Customs
	 * @return \Seko\Shipment
	 */
	public function setCustoms($Customs)
	{
		$this->Customs = $Customs;
		return $this;
	}

	/**
	 * @return Insurance
	 */
	public function getInsurance()
	{
		return $this->Insurance;
	}

	/**
	 * @param Insurance $Insurance
	 * @return \Seko\Shipment
	 */
	public function setInsurance($Insurance)
	{
		$this->Insurance = $Insurance;
		return $this;
	}

	/**
	 * @return COD
	 */
	public function getSendAsCOD()
	{
		return $this->SendAsCOD;
	}

	/**
	 * @param COD $SendAsCOD
	 * @return \Seko\Shipment
	 */
	public function setSendAsCOD($SendAsCOD)
	{
		$this->SendAsCOD = $SendAsCOD;
		return $this;
	}

	/**
	 * @return ExportReasonEnum
	 */
	public function getShipmentType()
	{
		return $this->ShipmentType;
	}

	/**
	 * @param ExportReasonEnum $ShipmentType
	 * @return \Seko\Shipment
	 */
	public function setShipmentType($ShipmentType)
	{
		$this->ShipmentType = $ShipmentType;
		return $this;
	}

	/**
	 * @return DangerousGoods
	 */
	public function getDangerousGoods()
	{
		return $this->DangerousGoods;
	}

	/**
	 * @param DangerousGoods $DangerousGoods
	 * @return \Seko\Shipment
	 */
	public function setDangerousGoods($DangerousGoods)
	{
		$this->DangerousGoods = $DangerousGoods;
		return $this;
	}

	/**
	 * @return ShipDirectionEnum
	 */
	public function getShipmentDirection()
	{
		return $this->ShipmentDirection;
	}

	/**
	 * @param ShipDirectionEnum $ShipmentDirection
	 * @return \Seko\Shipment
	 */
	public function setShipmentDirection($ShipmentDirection)
	{
		$this->ShipmentDirection = $ShipmentDirection;
		return $this;
	}

	/**
	 * @return Address
	 */
	public function getPickupAddress()
	{
		return $this->PickupAddress;
	}

	/**
	 * @param Address $PickupAddress
	 * @return \Seko\Shipment
	 */
	public function setPickupAddress($PickupAddress)
	{
		$this->PickupAddress = $PickupAddress;
		return $this;
	}

	/**
	 * @return Address
	 */
	public function getReceiverAddress()
	{
		return $this->ReceiverAddress;
	}

	/**
	 * @param Address $ReceiverAddress
	 * @return \Seko\Shipment
	 */
	public function setReceiverAddress($ReceiverAddress)
	{
		$this->ReceiverAddress = $ReceiverAddress;
		return $this;
	}

	/**
	 * @return Address
	 */
	public function getSenderAddress()
	{
		return $this->SenderAddress;
	}

	/**
	 * @param Address $SenderAddress
	 * @return \Seko\Shipment
	 */
	public function setSenderAddress($SenderAddress)
	{
		$this->SenderAddress = $SenderAddress;
		return $this;
	}

	/**
	 * @return ArrayOfColli
	 */
	public function getCollies()
	{
		return $this->Collies;
	}

	/**
	 * @param ArrayOfColli $Collies
	 * @return \Seko\Shipment
	 */
	public function setCollies($Collies)
	{
		$this->Collies = $Collies;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getHandling()
	{
		return $this->Handling;
	}

	/**
	 * @param string $Handling
	 * @return \Seko\Shipment
	 */
	public function setHandling($Handling)
	{
		$this->Handling = $Handling;
		return $this;
	}

	/**
	 * @return boolean
	 */
	public function getCreatePickup()
	{
		return $this->CreatePickup;
	}

	/**
	 * @param boolean $CreatePickup
	 * @return \Seko\Shipment
	 */
	public function setCreatePickup($CreatePickup)
	{
		$this->CreatePickup = $CreatePickup;
		return $this;
	}

	/**
	 * @return InvoiceSettings
	 */
	public function getInvoiceSettings()
	{
		return $this->InvoiceSettings;
	}

	/**
	 * @param InvoiceSettings $InvoiceSettings
	 * @return \Seko\Shipment
	 */
	public function setInvoiceSettings($InvoiceSettings)
	{
		$this->InvoiceSettings = $InvoiceSettings;
		return $this;
	}

	/**
	 * @return PaperLessShipping
	 */
	public function getPaperLessShipping()
	{
		return $this->PaperLessShipping;
	}

	/**
	 * @param PaperLessShipping $PaperLessShipping
	 * @return \Seko\Shipment
	 */
	public function setPaperLessShipping($PaperLessShipping)
	{
		$this->PaperLessShipping = $PaperLessShipping;
		return $this;
	}

	/**
	 * @return FDA
	 */
	public function getCreateFDA()
	{
		return $this->CreateFDA;
	}

	/**
	 * @param FDA $CreateFDA
	 * @return \Seko\Shipment
	 */
	public function setCreateFDA($CreateFDA)
	{
		$this->CreateFDA = $CreateFDA;
		return $this;
	}

	/**
	 * @return FCC
	 */
	public function getCreateFCC()
	{
		return $this->CreateFCC;
	}

	/**
	 * @param FCC $CreateFCC
	 * @return \Seko\Shipment
	 */
	public function setCreateFCC($CreateFCC)
	{
		$this->CreateFCC = $CreateFCC;
		return $this;
	}

	/**
	 * @return COO
	 */
	public function getCreateCOO()
	{
		return $this->CreateCOO;
	}

	/**
	 * @param COO $CreateCOO
	 * @return \Seko\Shipment
	 */
	public function setCreateCOO($CreateCOO)
	{
		$this->CreateCOO = $CreateCOO;
		return $this;
	}

}
