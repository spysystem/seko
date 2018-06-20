<?php

namespace Seko;

class PaperLessShipping
{

	/**
	 * @var boolean $UsePaperLessShipment
	 */
	protected $UsePaperLessShipment = null;

	/**
	 * @var ArrayOfPaperLessDocument $Documents
	 */
	protected $Documents = null;

	/**
	 * @param boolean $UsePaperLessShipment
	 */
	public function __construct($UsePaperLessShipment)
	{
		$this->UsePaperLessShipment = $UsePaperLessShipment;
	}

	/**
	 * @return boolean
	 */
	public function getUsePaperLessShipment()
	{
		return $this->UsePaperLessShipment;
	}

	/**
	 * @param boolean $UsePaperLessShipment
	 * @return \Seko\PaperLessShipping
	 */
	public function setUsePaperLessShipment($UsePaperLessShipment)
	{
		$this->UsePaperLessShipment = $UsePaperLessShipment;
		return $this;
	}

	/**
	 * @return ArrayOfPaperLessDocument
	 */
	public function getDocuments()
	{
		return $this->Documents;
	}

	/**
	 * @param ArrayOfPaperLessDocument $Documents
	 * @return \Seko\PaperLessShipping
	 */
	public function setDocuments($Documents)
	{
		$this->Documents = $Documents;
		return $this;
	}

}
