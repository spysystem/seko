<?php

namespace Seko;

class Colli
{

	/**
	 * @var MeasurementWeight $Weight
	 */
	protected $Weight = null;

	/**
	 * @var Measurement $Length
	 */
	protected $Length = null;

	/**
	 * @var Measurement $Width
	 */
	protected $Width = null;

	/**
	 * @var Measurement $Height
	 */
	protected $Height = null;

	/**
	 * @var COD $CODColliLevel
	 */
	protected $CODColliLevel = null;

	/**
	 * @var PackageType $Packaging
	 */
	protected $Packaging = null;

	/**
	 * @var DryIce $DryIce
	 */
	protected $DryIce = null;

	
	public function __construct()
	{
	
	}

	/**
	 * @return MeasurementWeight
	 */
	public function getWeight()
	{
		return $this->Weight;
	}

	/**
	 * @param MeasurementWeight $Weight
	 * @return \Seko\Colli
	 */
	public function setWeight($Weight)
	{
		$this->Weight = $Weight;
		return $this;
	}

	/**
	 * @return Measurement
	 */
	public function getLength()
	{
		return $this->Length;
	}

	/**
	 * @param Measurement $Length
	 * @return \Seko\Colli
	 */
	public function setLength($Length)
	{
		$this->Length = $Length;
		return $this;
	}

	/**
	 * @return Measurement
	 */
	public function getWidth()
	{
		return $this->Width;
	}

	/**
	 * @param Measurement $Width
	 * @return \Seko\Colli
	 */
	public function setWidth($Width)
	{
		$this->Width = $Width;
		return $this;
	}

	/**
	 * @return Measurement
	 */
	public function getHeight()
	{
		return $this->Height;
	}

	/**
	 * @param Measurement $Height
	 * @return \Seko\Colli
	 */
	public function setHeight($Height)
	{
		$this->Height = $Height;
		return $this;
	}

	/**
	 * @return COD
	 */
	public function getCODColliLevel()
	{
		return $this->CODColliLevel;
	}

	/**
	 * @param COD $CODColliLevel
	 * @return \Seko\Colli
	 */
	public function setCODColliLevel($CODColliLevel)
	{
		$this->CODColliLevel = $CODColliLevel;
		return $this;
	}

	/**
	 * @return PackageType
	 */
	public function getPackaging()
	{
		return $this->Packaging;
	}

	/**
	 * @param PackageType $Packaging
	 * @return \Seko\Colli
	 */
	public function setPackaging($Packaging)
	{
		$this->Packaging = $Packaging;
		return $this;
	}

	/**
	 * @return DryIce
	 */
	public function getDryIce()
	{
		return $this->DryIce;
	}

	/**
	 * @param DryIce $DryIce
	 * @return \Seko\Colli
	 */
	public function setDryIce($DryIce)
	{
		$this->DryIce = $DryIce;
		return $this;
	}

}
