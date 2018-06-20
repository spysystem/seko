<?php

namespace Seko;

class ReplyStatus
{

	/**
	 * @var ArrayOfError $ErrorList
	 */
	protected $ErrorList = null;

	
	public function __construct()
	{
	
	}

	/**
	 * @return ArrayOfError
	 */
	public function getErrorList()
	{
		return $this->ErrorList;
	}

	/**
	 * @param ArrayOfError $ErrorList
	 * @return \Seko\ReplyStatus
	 */
	public function setErrorList($ErrorList)
	{
		$this->ErrorList = $ErrorList;
		return $this;
	}

}
