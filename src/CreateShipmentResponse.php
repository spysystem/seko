<?php

namespace Seko;

class CreateShipmentResponse
{

	/**
	 * @var Reply $CreateShipmentResult
	 */
	protected $CreateShipmentResult = null;

	/**
	 * @param Reply $CreateShipmentResult
	 */
	public function __construct($CreateShipmentResult)
	{
		$this->CreateShipmentResult = $CreateShipmentResult;
	}

	/**
	 * @return Reply
	 */
	public function getCreateShipmentResult()
	{
		return $this->CreateShipmentResult;
	}

	/**
	 * @param Reply $CreateShipmentResult
	 * @return \Seko\CreateShipmentResponse
	 */
	public function setCreateShipmentResult($CreateShipmentResult)
	{
		$this->CreateShipmentResult = $CreateShipmentResult;
		return $this;
	}

}
