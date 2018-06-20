<?php

namespace Seko;

class EmailSettings
{

	/**
	 * @var string $SendFromEmail
	 */
	protected $SendFromEmail = null;

	/**
	 * @var string $SendToEmail
	 */
	protected $SendToEmail = null;

	/**
	 * @var string $SMTP
	 */
	protected $SMTP = null;

	/**
	 * @var string $UserName
	 */
	protected $UserName = null;

	/**
	 * @var string $Password
	 */
	protected $Password = null;

	/**
	 * @var string $Subject
	 */
	protected $Subject = null;

	/**
	 * @var string $Body
	 */
	protected $Body = null;

	
	public function __construct()
	{
	
	}

	/**
	 * @return string
	 */
	public function getSendFromEmail()
	{
		return $this->SendFromEmail;
	}

	/**
	 * @param string $SendFromEmail
	 * @return \Seko\EmailSettings
	 */
	public function setSendFromEmail($SendFromEmail)
	{
		$this->SendFromEmail = $SendFromEmail;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getSendToEmail()
	{
		return $this->SendToEmail;
	}

	/**
	 * @param string $SendToEmail
	 * @return \Seko\EmailSettings
	 */
	public function setSendToEmail($SendToEmail)
	{
		$this->SendToEmail = $SendToEmail;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getSMTP()
	{
		return $this->SMTP;
	}

	/**
	 * @param string $SMTP
	 * @return \Seko\EmailSettings
	 */
	public function setSMTP($SMTP)
	{
		$this->SMTP = $SMTP;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getUserName()
	{
		return $this->UserName;
	}

	/**
	 * @param string $UserName
	 * @return \Seko\EmailSettings
	 */
	public function setUserName($UserName)
	{
		$this->UserName = $UserName;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getPassword()
	{
		return $this->Password;
	}

	/**
	 * @param string $Password
	 * @return \Seko\EmailSettings
	 */
	public function setPassword($Password)
	{
		$this->Password = $Password;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getSubject()
	{
		return $this->Subject;
	}

	/**
	 * @param string $Subject
	 * @return \Seko\EmailSettings
	 */
	public function setSubject($Subject)
	{
		$this->Subject = $Subject;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getBody()
	{
		return $this->Body;
	}

	/**
	 * @param string $Body
	 * @return \Seko\EmailSettings
	 */
	public function setBody($Body)
	{
		$this->Body = $Body;
		return $this;
	}

}
