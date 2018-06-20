<?php

namespace Seko;

class Reply
{

	/**
	 * @var ReplyStatus $Status
	 */
	protected $Status = null;

	/**
	 * @var ArrayOfLabel $Documents
	 */
	protected $Documents = null;

	/**
	 * @var ArrayOfColliItem $ColliList
	 */
	protected $ColliList = null;

	/**
	 * @var ArrayOfCost $CostList
	 */
	protected $CostList = null;

	/**
	 * @var string $MainAWB
	 */
	protected $MainAWB = null;

	/**
	 * @var string $DaysInTransit
	 */
	protected $DaysInTransit = null;

	/**
	 * @var string $TrackandTraceLink
	 */
	protected $TrackandTraceLink = null;

	
	public function __construct()
	{
	
	}

	/**
	 * @return ReplyStatus
	 */
	public function getStatus()
	{
		return $this->Status;
	}

	/**
	 * @param ReplyStatus $Status
	 * @return \Seko\Reply
	 */
	public function setStatus($Status)
	{
		$this->Status = $Status;
		return $this;
	}

	/**
	 * @return ArrayOfLabel
	 */
	public function getDocuments()
	{
		return $this->Documents;
	}

	/**
	 * @param ArrayOfLabel $Documents
	 * @return \Seko\Reply
	 */
	public function setDocuments($Documents)
	{
		$this->Documents = $Documents;
		return $this;
	}

	/**
	 * @return ArrayOfColliItem
	 */
	public function getColliList()
	{
		return $this->ColliList;
	}

	/**
	 * @param ArrayOfColliItem $ColliList
	 * @return \Seko\Reply
	 */
	public function setColliList($ColliList)
	{
		$this->ColliList = $ColliList;
		return $this;
	}

	/**
	 * @return ArrayOfCost
	 */
	public function getCostList()
	{
		return $this->CostList;
	}

	/**
	 * @param ArrayOfCost $CostList
	 * @return \Seko\Reply
	 */
	public function setCostList($CostList)
	{
		$this->CostList = $CostList;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getMainAWB()
	{
		return $this->MainAWB;
	}

	/**
	 * @param string $MainAWB
	 * @return \Seko\Reply
	 */
	public function setMainAWB($MainAWB)
	{
		$this->MainAWB = $MainAWB;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getDaysInTransit()
	{
		return $this->DaysInTransit;
	}

	/**
	 * @param string $DaysInTransit
	 * @return \Seko\Reply
	 */
	public function setDaysInTransit($DaysInTransit)
	{
		$this->DaysInTransit = $DaysInTransit;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getTrackandTraceLink()
	{
		return $this->TrackandTraceLink;
	}

	/**
	 * @param string $TrackandTraceLink
	 * @return \Seko\Reply
	 */
	public function setTrackandTraceLink($TrackandTraceLink)
	{
		$this->TrackandTraceLink = $TrackandTraceLink;
		return $this;
	}

}
