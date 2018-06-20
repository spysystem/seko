<?php

namespace Seko;

class Measurement
{

	/**
	 * @var UnitTypeEnum $UnitType
	 */
	protected $UnitType = null;

	/**
	 * @var float $Value
	 */
	protected $Value = null;

	/**
	 * @param UnitTypeEnum $UnitType
	 * @param float $Value
	 */
	public function __construct($UnitType, $Value)
	{
		$this->UnitType = $UnitType;
		$this->Value = $Value;
	}

	/**
	 * @return UnitTypeEnum
	 */
	public function getUnitType()
	{
		return $this->UnitType;
	}

	/**
	 * @param UnitTypeEnum $UnitType
	 * @return \Seko\Measurement
	 */
	public function setUnitType($UnitType)
	{
		$this->UnitType = $UnitType;
		return $this;
	}

	/**
	 * @return float
	 */
	public function getValue()
	{
		return $this->Value;
	}

	/**
	 * @param float $Value
	 * @return \Seko\Measurement
	 */
	public function setValue($Value)
	{
		$this->Value = $Value;
		return $this;
	}

}
