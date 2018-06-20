<?php

namespace Seko;

class Dutiable
{

	/**
	 * @var boolean $IsDocumentFlag
	 */
	protected $IsDocumentFlag = null;

	/**
	 * @var boolean $IsDutiable
	 */
	protected $IsDutiable = null;

	/**
	 * @var Money $Money
	 */
	protected $Money = null;

	/**
	 * @param boolean $IsDocumentFlag
	 * @param boolean $IsDutiable
	 */
	public function __construct($IsDocumentFlag, $IsDutiable)
	{
		$this->IsDocumentFlag = $IsDocumentFlag;
		$this->IsDutiable = $IsDutiable;
	}

	/**
	 * @return boolean
	 */
	public function getIsDocumentFlag()
	{
		return $this->IsDocumentFlag;
	}

	/**
	 * @param boolean $IsDocumentFlag
	 * @return \Seko\Dutiable
	 */
	public function setIsDocumentFlag($IsDocumentFlag)
	{
		$this->IsDocumentFlag = $IsDocumentFlag;
		return $this;
	}

	/**
	 * @return boolean
	 */
	public function getIsDutiable()
	{
		return $this->IsDutiable;
	}

	/**
	 * @param boolean $IsDutiable
	 * @return \Seko\Dutiable
	 */
	public function setIsDutiable($IsDutiable)
	{
		$this->IsDutiable = $IsDutiable;
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
	 * @return \Seko\Dutiable
	 */
	public function setMoney($Money)
	{
		$this->Money = $Money;
		return $this;
	}

}
