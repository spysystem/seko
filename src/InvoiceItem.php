<?php

namespace Seko;

class InvoiceItem
{

	/**
	 * @var string $TextLine
	 */
	protected $TextLine = null;

	/**
	 * @var int $Quantity
	 */
	protected $Quantity = null;

	/**
	 * @var CountryCodeEnum $OriginCountryCode
	 */
	protected $OriginCountryCode = null;

	/**
	 * @var Money $PricePerUnit
	 */
	protected $PricePerUnit = null;

	/**
	 * @var string $HarmonizedCode
	 */
	protected $HarmonizedCode = null;

	/**
	 * @var Measurement $UnitType
	 */
	protected $UnitType = null;

	/**
	 * @param int $Quantity
	 * @param CountryCodeEnum $OriginCountryCode
	 */
	public function __construct($Quantity, $OriginCountryCode)
	{
		$this->Quantity = $Quantity;
		$this->OriginCountryCode = $OriginCountryCode;
	}

	/**
	 * @return string
	 */
	public function getTextLine()
	{
		return $this->TextLine;
	}

	/**
	 * @param string $TextLine
	 * @return \Seko\InvoiceItem
	 */
	public function setTextLine($TextLine)
	{
		$this->TextLine = $TextLine;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getQuantity()
	{
		return $this->Quantity;
	}

	/**
	 * @param int $Quantity
	 * @return \Seko\InvoiceItem
	 */
	public function setQuantity($Quantity)
	{
		$this->Quantity = $Quantity;
		return $this;
	}

	/**
	 * @return CountryCodeEnum
	 */
	public function getOriginCountryCode()
	{
		return $this->OriginCountryCode;
	}

	/**
	 * @param CountryCodeEnum $OriginCountryCode
	 * @return \Seko\InvoiceItem
	 */
	public function setOriginCountryCode($OriginCountryCode)
	{
		$this->OriginCountryCode = $OriginCountryCode;
		return $this;
	}

	/**
	 * @return Money
	 */
	public function getPricePerUnit()
	{
		return $this->PricePerUnit;
	}

	/**
	 * @param Money $PricePerUnit
	 * @return \Seko\InvoiceItem
	 */
	public function setPricePerUnit($PricePerUnit)
	{
		$this->PricePerUnit = $PricePerUnit;
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
	 * @return \Seko\InvoiceItem
	 */
	public function setHarmonizedCode($HarmonizedCode)
	{
		$this->HarmonizedCode = $HarmonizedCode;
		return $this;
	}

	/**
	 * @return Measurement
	 */
	public function getUnitType()
	{
		return $this->UnitType;
	}

	/**
	 * @param Measurement $UnitType
	 * @return \Seko\InvoiceItem
	 */
	public function setUnitType($UnitType)
	{
		$this->UnitType = $UnitType;
		return $this;
	}

}
