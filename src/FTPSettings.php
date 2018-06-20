<?php

namespace Seko;

class FTPSettings
{

	/**
	 * @var string $IPAddress
	 */
	protected $IPAddress = null;

	/**
	 * @var string $RemotePath
	 */
	protected $RemotePath = null;

	/**
	 * @var string $FTPUserName
	 */
	protected $FTPUserName = null;

	/**
	 * @var string $FTPPassword
	 */
	protected $FTPPassword = null;

	/**
	 * @var boolean $Secure
	 */
	protected $Secure = null;

	/**
	 * @var string $SaveFileName
	 */
	protected $SaveFileName = null;

	/**
	 * @var boolean $PassiveMode
	 */
	protected $PassiveMode = null;

	/**
	 * @param boolean $Secure
	 * @param boolean $PassiveMode
	 */
	public function __construct($Secure, $PassiveMode)
	{
		$this->Secure = $Secure;
		$this->PassiveMode = $PassiveMode;
	}

	/**
	 * @return string
	 */
	public function getIPAddress()
	{
		return $this->IPAddress;
	}

	/**
	 * @param string $IPAddress
	 * @return \Seko\FTPSettings
	 */
	public function setIPAddress($IPAddress)
	{
		$this->IPAddress = $IPAddress;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getRemotePath()
	{
		return $this->RemotePath;
	}

	/**
	 * @param string $RemotePath
	 * @return \Seko\FTPSettings
	 */
	public function setRemotePath($RemotePath)
	{
		$this->RemotePath = $RemotePath;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getFTPUserName()
	{
		return $this->FTPUserName;
	}

	/**
	 * @param string $FTPUserName
	 * @return \Seko\FTPSettings
	 */
	public function setFTPUserName($FTPUserName)
	{
		$this->FTPUserName = $FTPUserName;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getFTPPassword()
	{
		return $this->FTPPassword;
	}

	/**
	 * @param string $FTPPassword
	 * @return \Seko\FTPSettings
	 */
	public function setFTPPassword($FTPPassword)
	{
		$this->FTPPassword = $FTPPassword;
		return $this;
	}

	/**
	 * @return boolean
	 */
	public function getSecure()
	{
		return $this->Secure;
	}

	/**
	 * @param boolean $Secure
	 * @return \Seko\FTPSettings
	 */
	public function setSecure($Secure)
	{
		$this->Secure = $Secure;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getSaveFileName()
	{
		return $this->SaveFileName;
	}

	/**
	 * @param string $SaveFileName
	 * @return \Seko\FTPSettings
	 */
	public function setSaveFileName($SaveFileName)
	{
		$this->SaveFileName = $SaveFileName;
		return $this;
	}

	/**
	 * @return boolean
	 */
	public function getPassiveMode()
	{
		return $this->PassiveMode;
	}

	/**
	 * @param boolean $PassiveMode
	 * @return \Seko\FTPSettings
	 */
	public function setPassiveMode($PassiveMode)
	{
		$this->PassiveMode = $PassiveMode;
		return $this;
	}

}
