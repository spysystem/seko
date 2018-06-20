<?php

namespace Seko;

class CreateShipment
{

	/**
	 * @var Shipment $shipmentRequest
	 */
	protected $shipmentRequest = null;

	/**
	 * @param Shipment $shipmentRequest
	 */
	public function __construct($shipmentRequest)
	{
		$this->shipmentRequest = $shipmentRequest;
	}

	/**
	 * @return Shipment
	 */
	public function getShipmentRequest()
	{
		return $this->shipmentRequest;
	}

	/**
	 * @param Shipment $shipmentRequest
	 * @return \Seko\CreateShipment
	 */
	public function setShipmentRequest($shipmentRequest)
	{
		$this->shipmentRequest = $shipmentRequest;
		return $this;
	}

}
