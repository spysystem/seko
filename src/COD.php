<?php

namespace Seko;

class COD
{

	/**
	 * @var boolean $EnableCOD
	 */
	protected $EnableCOD = null;

	/**
	 * @var Money $Money
	 */
	protected $Money = null;

	/**
	 * @var CODPayTypeEnum $PayType
	 */
	protected $PayType = null;

	/**
	 * @param boolean $EnableCOD
	 * @param CODPayTypeEnum $PayType
	 */
	public function __construct($EnableCOD, $PayType)
	{
		$this->EnableCOD = $EnableCOD;
		$this->PayType = $PayType;
	}

	/**
	 * @return boolean
	 */
	public function getEnableCOD()
	{
		return $this->EnableCOD;
	}

	/**
	 * @param boolean $EnableCOD
	 * @return \Seko\COD
	 */
	public function setEnableCOD($EnableCOD)
	{
		$this->EnableCOD = $EnableCOD;
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
	 * @return \Seko\COD
	 */
	public function setMoney($Money)
	{
		$this->Money = $Money;
		return $this;
	}

	/**
	 * @return CODPayTypeEnum
	 */
	public function getPayType()
	{
		return $this->PayType;
	}

	/**
	 * @param CODPayTypeEnum $PayType
	 * @return \Seko\COD
	 */
	public function setPayType($PayType)
	{
		$this->PayType = $PayType;
		return $this;
	}

}
