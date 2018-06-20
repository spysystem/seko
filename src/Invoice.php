<?php

namespace Seko;

class Invoice
{

	/**
	 * @var boolean $CreateInvoice
	 */
	protected $CreateInvoice = null;

	/**
	 * @var string $CompanyLogo
	 */
	protected $CompanyLogo = null;

	/**
	 * @var \DateTime $InvoiceDate
	 */
	protected $InvoiceDate = null;

	/**
	 * @var InvoiceTypeEnum $InvoiceType
	 */
	protected $InvoiceType = null;

	/**
	 * @var string $InvoiceNumber
	 */
	protected $InvoiceNumber = null;

	/**
	 * @var string $PaymentTerms
	 */
	protected $PaymentTerms = null;

	/**
	 * @var LabelTypeEnum $Type
	 */
	protected $Type = null;

	/**
	 * @var CurrencyCodeEnum $Valuta
	 */
	protected $Valuta = null;

	/**
	 * @var float $TaxAmount
	 */
	protected $TaxAmount = null;

	/**
	 * @var float $FreightCharge
	 */
	protected $FreightCharge = null;

	/**
	 * @var float $InsuranceCharge
	 */
	protected $InsuranceCharge = null;

	/**
	 * @var string $Signature
	 */
	protected $Signature = null;

	/**
	 * @var Address $ReceiverAddress
	 */
	protected $ReceiverAddress = null;

	/**
	 * @var Address $BillingAddress
	 */
	protected $BillingAddress = null;

	/**
	 * @var Address $SenderAddress
	 */
	protected $SenderAddress = null;

	/**
	 * @var EmailLabel $EmailInvoice
	 */
	protected $EmailInvoice = null;

	/**
	 * @var FTPLabel $FTPInvoice
	 */
	protected $FTPInvoice = null;

	/**
	 * @var ArrayOfInvoiceItem $InvoiceLines
	 */
	protected $InvoiceLines = null;

	/**
	 * @param boolean $CreateInvoice
	 * @param \DateTime $InvoiceDate
	 * @param InvoiceTypeEnum $InvoiceType
	 * @param LabelTypeEnum $Type
	 * @param CurrencyCodeEnum $Valuta
	 * @param float $TaxAmount
	 * @param float $FreightCharge
	 * @param float $InsuranceCharge
	 */
	public function __construct($CreateInvoice, \DateTime $InvoiceDate, $InvoiceType, $Type, $Valuta, $TaxAmount, $FreightCharge, $InsuranceCharge)
	{
		$this->CreateInvoice = $CreateInvoice;
		$this->InvoiceDate = $InvoiceDate->format(\DateTime::ATOM);
		$this->InvoiceType = $InvoiceType;
		$this->Type = $Type;
		$this->Valuta = $Valuta;
		$this->TaxAmount = $TaxAmount;
		$this->FreightCharge = $FreightCharge;
		$this->InsuranceCharge = $InsuranceCharge;
	}

	/**
	 * @return boolean
	 */
	public function getCreateInvoice()
	{
		return $this->CreateInvoice;
	}

	/**
	 * @param boolean $CreateInvoice
	 * @return \Seko\Invoice
	 */
	public function setCreateInvoice($CreateInvoice)
	{
		$this->CreateInvoice = $CreateInvoice;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getCompanyLogo()
	{
		return $this->CompanyLogo;
	}

	/**
	 * @param string $CompanyLogo
	 * @return \Seko\Invoice
	 */
	public function setCompanyLogo($CompanyLogo)
	{
		$this->CompanyLogo = $CompanyLogo;
		return $this;
	}

	/**
	 * @return \DateTime
	 */
	public function getInvoiceDate()
	{
		if ($this->InvoiceDate == null)
		{
			return null;
		}
		else
		{
			try
			{
				return new \DateTime($this->InvoiceDate);
			}
			catch (\Exception $oException)
			{
				return false;
			}
		}
	}

	/**
	 * @param \DateTime $InvoiceDate
	 * @return \Seko\Invoice
	 */
	public function setInvoiceDate(\DateTime $InvoiceDate)
	{
		$this->InvoiceDate = $InvoiceDate->format(\DateTime::ATOM);
		return $this;
	}

	/**
	 * @return InvoiceTypeEnum
	 */
	public function getInvoiceType()
	{
		return $this->InvoiceType;
	}

	/**
	 * @param InvoiceTypeEnum $InvoiceType
	 * @return \Seko\Invoice
	 */
	public function setInvoiceType($InvoiceType)
	{
		$this->InvoiceType = $InvoiceType;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getInvoiceNumber()
	{
		return $this->InvoiceNumber;
	}

	/**
	 * @param string $InvoiceNumber
	 * @return \Seko\Invoice
	 */
	public function setInvoiceNumber($InvoiceNumber)
	{
		$this->InvoiceNumber = $InvoiceNumber;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getPaymentTerms()
	{
		return $this->PaymentTerms;
	}

	/**
	 * @param string $PaymentTerms
	 * @return \Seko\Invoice
	 */
	public function setPaymentTerms($PaymentTerms)
	{
		$this->PaymentTerms = $PaymentTerms;
		return $this;
	}

	/**
	 * @return LabelTypeEnum
	 */
	public function getType()
	{
		return $this->Type;
	}

	/**
	 * @param LabelTypeEnum $Type
	 * @return \Seko\Invoice
	 */
	public function setType($Type)
	{
		$this->Type = $Type;
		return $this;
	}

	/**
	 * @return CurrencyCodeEnum
	 */
	public function getValuta()
	{
		return $this->Valuta;
	}

	/**
	 * @param CurrencyCodeEnum $Valuta
	 * @return \Seko\Invoice
	 */
	public function setValuta($Valuta)
	{
		$this->Valuta = $Valuta;
		return $this;
	}

	/**
	 * @return float
	 */
	public function getTaxAmount()
	{
		return $this->TaxAmount;
	}

	/**
	 * @param float $TaxAmount
	 * @return \Seko\Invoice
	 */
	public function setTaxAmount($TaxAmount)
	{
		$this->TaxAmount = $TaxAmount;
		return $this;
	}

	/**
	 * @return float
	 */
	public function getFreightCharge()
	{
		return $this->FreightCharge;
	}

	/**
	 * @param float $FreightCharge
	 * @return \Seko\Invoice
	 */
	public function setFreightCharge($FreightCharge)
	{
		$this->FreightCharge = $FreightCharge;
		return $this;
	}

	/**
	 * @return float
	 */
	public function getInsuranceCharge()
	{
		return $this->InsuranceCharge;
	}

	/**
	 * @param float $InsuranceCharge
	 * @return \Seko\Invoice
	 */
	public function setInsuranceCharge($InsuranceCharge)
	{
		$this->InsuranceCharge = $InsuranceCharge;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getSignature()
	{
		return $this->Signature;
	}

	/**
	 * @param string $Signature
	 * @return \Seko\Invoice
	 */
	public function setSignature($Signature)
	{
		$this->Signature = $Signature;
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
	 * @return \Seko\Invoice
	 */
	public function setReceiverAddress($ReceiverAddress)
	{
		$this->ReceiverAddress = $ReceiverAddress;
		return $this;
	}

	/**
	 * @return Address
	 */
	public function getBillingAddress()
	{
		return $this->BillingAddress;
	}

	/**
	 * @param Address $BillingAddress
	 * @return \Seko\Invoice
	 */
	public function setBillingAddress($BillingAddress)
	{
		$this->BillingAddress = $BillingAddress;
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
	 * @return \Seko\Invoice
	 */
	public function setSenderAddress($SenderAddress)
	{
		$this->SenderAddress = $SenderAddress;
		return $this;
	}

	/**
	 * @return EmailLabel
	 */
	public function getEmailInvoice()
	{
		return $this->EmailInvoice;
	}

	/**
	 * @param EmailLabel $EmailInvoice
	 * @return \Seko\Invoice
	 */
	public function setEmailInvoice($EmailInvoice)
	{
		$this->EmailInvoice = $EmailInvoice;
		return $this;
	}

	/**
	 * @return FTPLabel
	 */
	public function getFTPInvoice()
	{
		return $this->FTPInvoice;
	}

	/**
	 * @param FTPLabel $FTPInvoice
	 * @return \Seko\Invoice
	 */
	public function setFTPInvoice($FTPInvoice)
	{
		$this->FTPInvoice = $FTPInvoice;
		return $this;
	}

	/**
	 * @return ArrayOfInvoiceItem
	 */
	public function getInvoiceLines()
	{
		return $this->InvoiceLines;
	}

	/**
	 * @param ArrayOfInvoiceItem $InvoiceLines
	 * @return \Seko\Invoice
	 */
	public function setInvoiceLines($InvoiceLines)
	{
		$this->InvoiceLines = $InvoiceLines;
		return $this;
	}

}
