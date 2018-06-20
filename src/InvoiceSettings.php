<?php

namespace Seko;

class InvoiceSettings
{

	/**
	 * @var boolean $CreateInvoice
	 */
	protected $CreateInvoice = null;

	/**
	 * @var Invoice $ShipmentInvoice
	 */
	protected $ShipmentInvoice = null;

	/**
	 * @var EmailSettings $Email
	 */
	protected $Email = null;

	/**
	 * @var FTPSettings $FTP
	 */
	protected $FTP = null;

	/**
	 * @param boolean $CreateInvoice
	 */
	public function __construct($CreateInvoice)
	{
		$this->CreateInvoice = $CreateInvoice;
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
	 * @return \Seko\InvoiceSettings
	 */
	public function setCreateInvoice($CreateInvoice)
	{
		$this->CreateInvoice = $CreateInvoice;
		return $this;
	}

	/**
	 * @return Invoice
	 */
	public function getShipmentInvoice()
	{
		return $this->ShipmentInvoice;
	}

	/**
	 * @param Invoice $ShipmentInvoice
	 * @return \Seko\InvoiceSettings
	 */
	public function setShipmentInvoice($ShipmentInvoice)
	{
		$this->ShipmentInvoice = $ShipmentInvoice;
		return $this;
	}

	/**
	 * @return EmailSettings
	 */
	public function getEmail()
	{
		return $this->Email;
	}

	/**
	 * @param EmailSettings $Email
	 * @return \Seko\InvoiceSettings
	 */
	public function setEmail($Email)
	{
		$this->Email = $Email;
		return $this;
	}

	/**
	 * @return FTPSettings
	 */
	public function getFTP()
	{
		return $this->FTP;
	}

	/**
	 * @param FTPSettings $FTP
	 * @return \Seko\InvoiceSettings
	 */
	public function setFTP($FTP)
	{
		$this->FTP = $FTP;
		return $this;
	}

}
