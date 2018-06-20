<?php

namespace Seko;

class COO
{

	/**
	 * @var boolean $CreateCertificateOfOrigin
	 */
	protected $CreateCertificateOfOrigin = null;

	/**
	 * @var EmailSettings $Email
	 */
	protected $Email = null;

	/**
	 * @var FTPSettings $FTP
	 */
	protected $FTP = null;

	/**
	 * @param boolean $CreateCertificateOfOrigin
	 */
	public function __construct($CreateCertificateOfOrigin)
	{
		$this->CreateCertificateOfOrigin = $CreateCertificateOfOrigin;
	}

	/**
	 * @return boolean
	 */
	public function getCreateCertificateOfOrigin()
	{
		return $this->CreateCertificateOfOrigin;
	}

	/**
	 * @param boolean $CreateCertificateOfOrigin
	 * @return \Seko\COO
	 */
	public function setCreateCertificateOfOrigin($CreateCertificateOfOrigin)
	{
		$this->CreateCertificateOfOrigin = $CreateCertificateOfOrigin;
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
	 * @return \Seko\COO
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
	 * @return \Seko\COO
	 */
	public function setFTP($FTP)
	{
		$this->FTP = $FTP;
		return $this;
	}

}
