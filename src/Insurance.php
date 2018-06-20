<?php

namespace Seko;

class Insurance
{

	/**
	 * @var boolean $InsureShipment
	 */
	protected $InsureShipment = null;

	/**
	 * @var Money $Money
	 */
	protected $Money = null;

	/**
	 * @param boolean $InsureShipment
	 */
	public function __construct($InsureShipment)
	{
		$this->InsureShipment = $InsureShipment;
	}

	/**
	 * @return boolean
	 */
	public function getInsureShipment()
	{
		return $this->InsureShipment;
	}

	/**
	 * @param boolean $InsureShipment
	 * @return \Seko\Insurance
	 */
	public function setInsureShipment($InsureShipment)
	{
		$this->InsureShipment = $InsureShipment;
		return $this;
	}

	/**
	 * @return Money
	 */
	public function getMoney()
	{
		return $this->Money;
	}

	/**
	 * @param Money $Money
	 * @return \Seko\Insurance
	 */
	public function setMoney($Money)
	{
		$this->Money = $Money;
		return $this;
	}

}
