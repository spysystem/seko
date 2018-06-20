<?php

namespace Seko;

class FCC
{

	/**
	 * @var boolean $CreateFCC
	 */
	protected $CreateFCC = null;

	/**
	 * @var EmailSettings $Email
	 */
	protected $Email = null;

	/**
	 * @var FTPSettings $FTP
	 */
	protected $FTP = null;

	/**
	 * @param boolean $CreateFCC
	 */
	public function __construct($CreateFCC)
	{
		$this->CreateFCC = $CreateFCC;
	}

	/**
	 * @return boolean
	 */
	public function getCreateFCC()
	{
		return $this->CreateFCC;
	}

	/**
	 * @param boolean $CreateFCC
	 * @return \Seko\FCC
	 */
	public function setCreateFCC($CreateFCC)
	{
		$this->CreateFCC = $CreateFCC;
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
	 * @return \Seko\FCC
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
	 * @return \Seko\FCC
	 */
	public function setFTP($FTP)
	{
		$this->FTP = $FTP;
		return $this;
	}

}
