<?php

namespace Seko;

class Address
{

	/**
	 * @var CountryCodeEnum $CountryCode
	 */
	protected $CountryCode = null;

	/**
	 * @var StatesEnum $StateCode
	 */
	protected $StateCode = null;

	/**
	 * @var string $Addressline1
	 */
	protected $Addressline1 = null;

	/**
	 * @var string $Addressline2
	 */
	protected $Addressline2 = null;

	/**
	 * @var string $Addressline3
	 */
	protected $Addressline3 = null;

	/**
	 * @var string $Zip
	 */
	protected $Zip = null;

	/**
	 * @var string $City
	 */
	protected $City = null;

	/**
	 * @var string $Phone
	 */
	protected $Phone = null;

	/**
	 * @var string $Email1
	 */
	protected $Email1 = null;

	/**
	 * @var string $AttPerson
	 */
	protected $AttPerson = null;

	/**
	 * @var string $CompanyName
	 */
	protected $CompanyName = null;

	/**
	 * @param CountryCodeEnum $CountryCode
	 * @param StatesEnum $StateCode
	 */
	public function __construct($CountryCode, $StateCode)
	{
		$this->CountryCode = $CountryCode;
		$this->StateCode = $StateCode;
	}

	/**
	 * @return CountryCodeEnum
	 */
	public function getCountryCode()
	{
		return $this->CountryCode;
	}

	/**
	 * @param CountryCodeEnum $CountryCode
	 * @return \Seko\Address
	 */
	public function setCountryCode($CountryCode)
	{
		$this->CountryCode = $CountryCode;
		return $this;
	}

	/**
	 * @return StatesEnum
	 */
	public function getStateCode()
	{
		return $this->StateCode;
	}

	/**
	 * @param StatesEnum $StateCode
	 * @return \Seko\Address
	 */
	public function setStateCode($StateCode)
	{
		$this->StateCode = $StateCode;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getAddressline1()
	{
		return $this->Addressline1;
	}

	/**
	 * @param string $Addressline1
	 * @return \Seko\Address
	 */
	public function setAddressline1($Addressline1)
	{
		$this->Addressline1 = $Addressline1;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getAddressline2()
	{
		return $this->Addressline2;
	}

	/**
	 * @param string $Addressline2
	 * @return \Seko\Address
	 */
	public function setAddressline2($Addressline2)
	{
		$this->Addressline2 = $Addressline2;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getAddressline3()
	{
		return $this->Addressline3;
	}

	/**
	 * @param string $Addressline3
	 * @return \Seko\Address
	 */
	public function setAddressline3($Addressline3)
	{
		$this->Addressline3 = $Addressline3;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getZip()
	{
		return $this->Zip;
	}

	/**
	 * @param string $Zip
	 * @return \Seko\Address
	 */
	public function setZip($Zip)
	{
		$this->Zip = $Zip;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getCity()
	{
		return $this->City;
	}

	/**
	 * @param string $City
	 * @return \Seko\Address
	 */
	public function setCity($City)
	{
		$this->City = $City;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getPhone()
	{
		return $this->Phone;
	}

	/**
	 * @param string $Phone
	 * @return \Seko\Address
	 */
	public function setPhone($Phone)
	{
		$this->Phone = $Phone;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getEmail1()
	{
		return $this->Email1;
	}

	/**
	 * @param string $Email1
	 * @return \Seko\Address
	 */
	public function setEmail1($Email1)
	{
		$this->Email1 = $Email1;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getAttPerson()
	{
		return $this->AttPerson;
	}

	/**
	 * @param string $AttPerson
	 * @return \Seko\Address
	 */
	public function setAttPerson($AttPerson)
	{
		$this->AttPerson = $AttPerson;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getCompanyName()
	{
		return $this->CompanyName;
	}

	/**
	 * @param string $CompanyName
	 * @return \Seko\Address
	 */
	public function setCompanyName($CompanyName)
	{
		$this->CompanyName = $CompanyName;
		return $this;
	}

}
