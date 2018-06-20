<?php

namespace Seko;

class FTPLabel
{

	/**
	 * @var boolean $TransferLabelToFTP
	 */
	protected $TransferLabelToFTP = null;

	/**
	 * @var FTPSettings $Settings
	 */
	protected $Settings = null;

	/**
	 * @param boolean $TransferLabelToFTP
	 */
	public function __construct($TransferLabelToFTP)
	{
		$this->TransferLabelToFTP = $TransferLabelToFTP;
	}

	/**
	 * @return boolean
	 */
	public function getTransferLabelToFTP()
	{
		return $this->TransferLabelToFTP;
	}

	/**
	 * @param boolean $TransferLabelToFTP
	 * @return \Seko\FTPLabel
	 */
	public function setTransferLabelToFTP($TransferLabelToFTP)
	{
		$this->TransferLabelToFTP = $TransferLabelToFTP;
		return $this;
	}

	/**
	 * @return FTPSettings
	 */
	public function getSettings()
	{
		return $this->Settings;
	}

	/**
	 * @param FTPSettings $Settings
	 * @return \Seko\FTPLabel
	 */
	public function setSettings($Settings)
	{
		$this->Settings = $Settings;
		return $this;
	}

}
