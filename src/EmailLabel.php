<?php

namespace Seko;

class EmailLabel
{

	/**
	 * @var boolean $SendLabelByEmail
	 */
	protected $SendLabelByEmail = null;

	/**
	 * @var EmailSettings $Settings
	 */
	protected $Settings = null;

	/**
	 * @param boolean $SendLabelByEmail
	 */
	public function __construct($SendLabelByEmail)
	{
		$this->SendLabelByEmail = $SendLabelByEmail;
	}

	/**
	 * @return boolean
	 */
	public function getSendLabelByEmail()
	{
		return $this->SendLabelByEmail;
	}

	/**
	 * @param boolean $SendLabelByEmail
	 * @return \Seko\EmailLabel
	 */
	public function setSendLabelByEmail($SendLabelByEmail)
	{
		$this->SendLabelByEmail = $SendLabelByEmail;
		return $this;
	}

	/**
	 * @return EmailSettings
	 */
	public function getSettings()
	{
		return $this->Settings;
	}

	/**
	 * @param EmailSettings $Settings
	 * @return \Seko\EmailLabel
	 */
	public function setSettings($Settings)
	{
		$this->Settings = $Settings;
		return $this;
	}

}
