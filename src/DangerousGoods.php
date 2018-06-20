<?php

namespace Seko;

class DangerousGoods
{

	/**
	 * @var boolean $LimitedQuantityOfDG
	 */
	protected $LimitedQuantityOfDG = null;

	/**
	 * @var Measurement $Quatity
	 */
	protected $Quatity = null;

	/**
	 * @var string $UN_Number
	 */
	protected $UN_Number = null;

	/**
	 * @var boolean $ShipmentContainsDG
	 */
	protected $ShipmentContainsDG = null;

	/**
	 * @var DangerousGoodsEnum $Type
	 */
	protected $Type = null;

	/**
	 * @param boolean $LimitedQuantityOfDG
	 * @param boolean $ShipmentContainsDG
	 * @param DangerousGoodsEnum $Type
	 */
	public function __construct($LimitedQuantityOfDG, $ShipmentContainsDG, $Type)
	{
		$this->LimitedQuantityOfDG = $LimitedQuantityOfDG;
		$this->ShipmentContainsDG = $ShipmentContainsDG;
		$this->Type = $Type;
	}

	/**
	 * @return boolean
	 */
	public function getLimitedQuantityOfDG()
	{
		return $this->LimitedQuantityOfDG;
	}

	/**
	 * @param boolean $LimitedQuantityOfDG
	 * @return \Seko\DangerousGoods
	 */
	public function setLimitedQuantityOfDG($LimitedQuantityOfDG)
	{
		$this->LimitedQuantityOfDG = $LimitedQuantityOfDG;
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
	 * @return \Seko\DangerousGoods
	 */
	public function setQuatity($Quatity)
	{
		$this->Quatity = $Quatity;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getUN_Number()
	{
		return $this->UN_Number;
	}

	/**
	 * @param string $UN_Number
	 * @return \Seko\DangerousGoods
	 */
	public function setUN_Number($UN_Number)
	{
		$this->UN_Number = $UN_Number;
		return $this;
	}

	/**
	 * @return boolean
	 */
	public function getShipmentContainsDG()
	{
		return $this->ShipmentContainsDG;
	}

	/**
	 * @param boolean $ShipmentContainsDG
	 * @return \Seko\DangerousGoods
	 */
	public function setShipmentContainsDG($ShipmentContainsDG)
	{
		$this->ShipmentContainsDG = $ShipmentContainsDG;
		return $this;
	}

	/**
	 * @return DangerousGoodsEnum
	 */
	public function getType()
	{
		return $this->Type;
	}

	/**
	 * @param DangerousGoodsEnum $Type
	 * @return \Seko\DangerousGoods
	 */
	public function setType($Type)
	{
		$this->Type = $Type;
		return $this;
	}

}
