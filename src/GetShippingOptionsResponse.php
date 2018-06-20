<?php

namespace Seko;

class GetShippingOptionsResponse
{

	/**
	 * @var ReplyShippingOptions $GetShippingOptionsResult
	 */
	protected $GetShippingOptionsResult = null;

	/**
	 * @param ReplyShippingOptions $GetShippingOptionsResult
	 */
	public function __construct($GetShippingOptionsResult)
	{
		$this->GetShippingOptionsResult = $GetShippingOptionsResult;
	}

	/**
	 * @return ReplyShippingOptions
	 */
	public function getGetShippingOptionsResult()
	{
		return $this->GetShippingOptionsResult;
	}

	/**
	 * @param ReplyShippingOptions $GetShippingOptionsResult
	 * @return \Seko\GetShippingOptionsResponse
	 */
	public function setGetShippingOptionsResult($GetShippingOptionsResult)
	{
		$this->GetShippingOptionsResult = $GetShippingOptionsResult;
		return $this;
	}

}
