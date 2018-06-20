<?php

namespace Seko;

class ColliItem
{

	/**
	 * @var Label $AWBLabel
	 */
	protected $AWBLabel = null;

	/**
	 * @var string $ColliID1
	 */
	protected $ColliID1 = null;

	/**
	 * @var string $ColliID2
	 */
	protected $ColliID2 = null;

	/**
	 * @var string $ColliID3
	 */
	protected $ColliID3 = null;

	
	public function __construct()
	{
	
	}

	/**
	 * @return Label
	 */
	public function getAWBLabel()
	{
		return $this->AWBLabel;
	}

	/**
	 * @param Label $AWBLabel
	 * @return \Seko\ColliItem
	 */
	public function setAWBLabel($AWBLabel)
	{
		$this->AWBLabel = $AWBLabel;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getColliID1()
	{
		return $this->ColliID1;
	}

	/**
	 * @param string $ColliID1
	 * @return \Seko\ColliItem
	 */
	public function setColliID1($ColliID1)
	{
		$this->ColliID1 = $ColliID1;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getColliID2()
	{
		return $this->ColliID2;
	}

	/**
	 * @param string $ColliID2
	 * @return \Seko\ColliItem
	 */
	public function setColliID2($ColliID2)
	{
		$this->ColliID2 = $ColliID2;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getColliID3()
	{
		return $this->ColliID3;
	}

	/**
	 * @param string $ColliID3
	 * @return \Seko\ColliItem
	 */
	public function setColliID3($ColliID3)
	{
		$this->ColliID3 = $ColliID3;
		return $this;
	}

}
