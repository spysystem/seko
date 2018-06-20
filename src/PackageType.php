<?php

namespace Seko;

class PackageType
{

	/**
	 * @var PackagingTypeEnum $CustomeType
	 */
	protected $CustomeType = null;

	/**
	 * @var int $TransportDefinedType
	 */
	protected $TransportDefinedType = null;

	/**
	 * @param PackagingTypeEnum $CustomeType
	 * @param int $TransportDefinedType
	 */
	public function __construct($CustomeType, $TransportDefinedType)
	{
		$this->CustomeType = $CustomeType;
		$this->TransportDefinedType = $TransportDefinedType;
	}

	/**
	 * @return PackagingTypeEnum
	 */
	public function getCustomeType()
	{
		return $this->CustomeType;
	}

	/**
	 * @param PackagingTypeEnum $CustomeType
	 * @return \Seko\PackageType
	 */
	public function setCustomeType($CustomeType)
	{
		$this->CustomeType = $CustomeType;
		return $this;
	}

	/**
	 * @return int
	 */
	public function getTransportDefinedType()
	{
		return $this->TransportDefinedType;
	}

	/**
	 * @param int $TransportDefinedType
	 * @return \Seko\PackageType
	 */
	public function setTransportDefinedType($TransportDefinedType)
	{
		$this->TransportDefinedType = $TransportDefinedType;
		return $this;
	}

}
