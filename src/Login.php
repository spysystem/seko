<?php

namespace Seko;

class Login
{

	/**
	 * @var string $UserName
	 */
	protected $UserName = null;

	/**
	 * @var string $Password
	 */
	protected $Password = null;

	
	public function __construct()
	{
	
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
	 * @return \Seko\Login
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
	 * @return \Seko\Login
	 */
	public function setPassword($Password)
	{
		$this->Password = $Password;
		return $this;
	}

}
