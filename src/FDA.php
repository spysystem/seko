<?php

namespace Seko;

class FDA
{

	/**
	 * @var boolean $CreateFDA
	 */
	protected $CreateFDA = null;

	/**
	 * @var EmailSettings $Email
	 */
	protected $Email = null;

	/**
	 * @var FTPSettings $FTP
	 */
	protected $FTP = null;

	/**
	 * @param boolean $CreateFDA
	 */
	public function __construct($CreateFDA)
	{
		$this->CreateFDA = $CreateFDA;
	}

	/**
	 * @return boolean
	 */
	public function getCreateFDA()
	{
		return $this->CreateFDA;
	}

	/**
	 * @param boolean $CreateFDA
	 * @return \Seko\FDA
	 */
	public function setCreateFDA($CreateFDA)
	{
		$this->CreateFDA = $CreateFDA;
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
	 * @return \Seko\FDA
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
	 * @return \Seko\FDA
	 */
	public function setFTP($FTP)
	{
		$this->FTP = $FTP;
		return $this;
	}

}
