<?php

namespace Seko;

class ShippingOptions
{

	/**
	 * @var int $TransportProductID
	 */
	protected $TransportProductID = null;

	/**
	 * @var string $TransportProduct
	 */
	protected $TransportProduct = null;

	/**
	 * @var float $BillableWeight
	 */
	protected $BillableWeight = null;

	/**
	 * @var string $Transit
	 */
	protected $Transit = null;

	/**
	 * @var string $LatestBookingTime
	 */
	protected $LatestBookingTime = null;

	/**
	 * @var ArrayOfCost $Price
	 */
	protected $Price = null;

	/**
	 * @param int $TransportProductID
	 * @param float $BillableWeight
	 */
	public function __construct($TransportProductID, $BillableWeight)
	{
		$this->TransportProductID = $TransportProductID;
		$this->BillableWeight = $BillableWeight;
	}

	/**
	 * @return int
	 */
	public function getTransportProductID()
	{
		return $this->TransportProductID;
	}

	/**
	 * @param int $TransportProductID
	 * @return \Seko\ShippingOptions
	 */
	public function setTransportProductID($TransportProductID)
	{
		$this->TransportProductID = $TransportProductID;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getTransportProduct()
	{
		return $this->TransportProduct;
	}

	/**
	 * @param string $TransportProduct
	 * @return \Seko\ShippingOptions
	 */
	public function setTransportProduct($TransportProduct)
	{
		$this->TransportProduct = $TransportProduct;
		return $this;
	}

	/**
	 * @return float
	 */
	public function getBillableWeight()
	{
		return $this->BillableWeight;
	}

	/**
	 * @param float $BillableWeight
	 * @return \Seko\ShippingOptions
	 */
	public function setBillableWeight($BillableWeight)
	{
		$this->BillableWeight = $BillableWeight;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getTransit()
	{
		return $this->Transit;
	}

	/**
	 * @param string $Transit
	 * @return \Seko\ShippingOptions
	 */
	public function setTransit($Transit)
	{
		$this->Transit = $Transit;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getLatestBookingTime()
	{
		return $this->LatestBookingTime;
	}

	/**
	 * @param string $LatestBookingTime
	 * @return \Seko\ShippingOptions
	 */
	public function setLatestBookingTime($LatestBookingTime)
	{
		$this->LatestBookingTime = $LatestBookingTime;
		return $this;
	}

	/**
	 * @return ArrayOfCost
	 */
	public function getPrice()
	{
		return $this->Price;
	}

	/**
	 * @param ArrayOfCost $Price
	 * @return \Seko\ShippingOptions
	 */
	public function setPrice($Price)
	{
		$this->Price = $Price;
		return $this;
	}

}
