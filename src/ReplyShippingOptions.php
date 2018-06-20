<?php

namespace Seko;

class ReplyShippingOptions
{

	/**
	 * @var ArrayOfShippingOptions $Options
	 */
	protected $Options = null;

	/**
	 * @var ReplyStatus $Status
	 */
	protected $Status = null;

	
	public function __construct()
	{
	
	}

	/**
	 * @return ArrayOfShippingOptions
	 */
	public function getOptions()
	{
		return $this->Options;
	}

	/**
	 * @param ArrayOfShippingOptions $Options
	 * @return \Seko\ReplyShippingOptions
	 */
	public function setOptions($Options)
	{
		$this->Options = $Options;
		return $this;
	}

	/**
	 * @return ReplyStatus
	 */
	public function getStatus()
	{
		return $this->Status;
	}

	/**
	 * @param ReplyStatus $Status
	 * @return \Seko\ReplyShippingOptions
	 */
	public function setStatus($Status)
	{
		$this->Status = $Status;
		return $this;
	}

}
