<?php

namespace Seko;

class DryIce
{

	/**
	 * @var boolean $ShipmentContainsDryIce
	 */
	protected $ShipmentContainsDryIce = null;

	/**
	 * @var Measurement $Quatity
	 */
	protected $Quatity = null;

	/**
	 * @var RegulationSetEnum $Regulationset
	 */
	protected $Regulationset = null;

	/**
	 * @param boolean $ShipmentContainsDryIce
	 * @param RegulationSetEnum $Regulationset
	 */
	public function __construct($ShipmentContainsDryIce, $Regulationset)
	{
		$this->ShipmentContainsDryIce = $ShipmentContainsDryIce;
		$this->Regulationset = $Regulationset;
	}

	/**
	 * @return boolean
	 */
	public function getShipmentContainsDryIce()
	{
		return $this->ShipmentContainsDryIce;
	}

	/**
	 * @param boolean $ShipmentContainsDryIce
	 * @return \Seko\DryIce
	 */
	public function setShipmentContainsDryIce($ShipmentContainsDryIce)
	{
		$this->ShipmentContainsDryIce = $ShipmentContainsDryIce;
		return $this;
	}

	/**
	 * @return Measurement
	 */
	public function getQuatity()
	{
		return $this->Quatity;
	}

	/**
	 * @param Measurement $Quatity
	 * @return \Seko\DryIce
	 */
	public function setQuatity($Quatity)
	{
		$this->Quatity = $Quatity;
		return $this;
	}

	/**
	 * @return RegulationSetEnum
	 */
	public function getRegulationset()
	{
		return $this->Regulationset;
	}

	/**
	 * @param RegulationSetEnum $Regulationset
	 * @return \Seko\DryIce
	 */
	public function setRegulationset($Regulationset)
	{
		$this->Regulationset = $Regulationset;
		return $this;
	}

}
