<?php

namespace Seko;

class Description
{

	/**
	 * @var string $ShipmentDescription
	 */
	protected $ShipmentDescription = null;

	/**
	 * @var string $HarmonizedCode
	 */
	protected $HarmonizedCode = null;

	
	public function __construct()
	{
	
	}

	/**
	 * @return string
	 */
	public function getShipmentDescription()
	{
		return $this->ShipmentDescription;
	}

	/**
	 * @param string $ShipmentDescription
	 * @return \Seko\Description
	 */
	public function setShipmentDescription($ShipmentDescription)
	{
		$this->ShipmentDescription = $ShipmentDescription;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getHarmonizedCode()
	{
		return $this->HarmonizedCode;
	}

	/**
	 * @param string $HarmonizedCode
	 * @return \Seko\Description
	 */
	public function setHarmonizedCode($HarmonizedCode)
	{
		$this->HarmonizedCode = $HarmonizedCode;
		return $this;
	}

}
