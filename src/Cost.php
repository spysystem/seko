<?php

namespace Seko;

class Cost
{

	/**
	 * @var string $CostText
	 */
	protected $CostText = null;

	/**
	 * @var PriceLineTypeEnum $Type
	 */
	protected $Type = null;

	/**
	 * @var Money $Money
	 */
	protected $Money = null;

	/**
	 * @param PriceLineTypeEnum $Type
	 */
	public function __construct($Type)
	{
		$this->Type = $Type;
	}

	/**
	 * @return string
	 */
	public function getCostText()
	{
		return $this->CostText;
	}

	/**
	 * @param string $CostText
	 * @return \Seko\Cost
	 */
	public function setCostText($CostText)
	{
		$this->CostText = $CostText;
		return $this;
	}

	/**
	 * @return PriceLineTypeEnum
	 */
	public function getType()
	{
		return $this->Type;
	}

	/**
	 * @param PriceLineTypeEnum $Type
	 * @return \Seko\Cost
	 */
	public function setType($Type)
	{
		$this->Type = $Type;
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
	 * @return \Seko\Cost
	 */
	public function setMoney($Money)
	{
		$this->Money = $Money;
		return $this;
	}

}
