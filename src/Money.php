<?php

namespace Seko;

class Money
{

	/**
	 * @var float $Value
	 */
	protected $Value = null;

	/**
	 * @var CurrencyCodeEnum $ValutaCode
	 */
	protected $ValutaCode = null;

	/**
	 * @param float $Value
	 * @param CurrencyCodeEnum $ValutaCode
	 */
	public function __construct($Value, $ValutaCode)
	{
		$this->Value = $Value;
		$this->ValutaCode = $ValutaCode;
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
	 * @return \Seko\Money
	 */
	public function setValue($Value)
	{
		$this->Value = $Value;
		return $this;
	}

	/**
	 * @return CurrencyCodeEnum
	 */
	public function getValutaCode()
	{
		return $this->ValutaCode;
	}

	/**
	 * @param CurrencyCodeEnum $ValutaCode
	 * @return \Seko\Money
	 */
	public function setValutaCode($ValutaCode)
	{
		$this->ValutaCode = $ValutaCode;
		return $this;
	}

}
