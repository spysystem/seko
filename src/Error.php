<?php

namespace Seko;

class Error
{

	/**
	 * @var ErrorLevels $ErrorLevel
	 */
	protected $ErrorLevel = null;

	/**
	 * @var string $SystemErrorMessage
	 */
	protected $SystemErrorMessage = null;

	/**
	 * @var string $TransportErrorMessage
	 */
	protected $TransportErrorMessage = null;

	/**
	 * @var string $TransportErrorNumber
	 */
	protected $TransportErrorNumber = null;

	/**
	 * @param ErrorLevels $ErrorLevel
	 */
	public function __construct($ErrorLevel)
	{
		$this->ErrorLevel = $ErrorLevel;
	}

	/**
	 * @return ErrorLevels
	 */
	public function getErrorLevel()
	{
		return $this->ErrorLevel;
	}

	/**
	 * @param ErrorLevels $ErrorLevel
	 * @return \Seko\Error
	 */
	public function setErrorLevel($ErrorLevel)
	{
		$this->ErrorLevel = $ErrorLevel;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getSystemErrorMessage()
	{
		return $this->SystemErrorMessage;
	}

	/**
	 * @param string $SystemErrorMessage
	 * @return \Seko\Error
	 */
	public function setSystemErrorMessage($SystemErrorMessage)
	{
		$this->SystemErrorMessage = $SystemErrorMessage;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getTransportErrorMessage()
	{
		return $this->TransportErrorMessage;
	}

	/**
	 * @param string $TransportErrorMessage
	 * @return \Seko\Error
	 */
	public function setTransportErrorMessage($TransportErrorMessage)
	{
		$this->TransportErrorMessage = $TransportErrorMessage;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getTransportErrorNumber()
	{
		return $this->TransportErrorNumber;
	}

	/**
	 * @param string $TransportErrorNumber
	 * @return \Seko\Error
	 */
	public function setTransportErrorNumber($TransportErrorNumber)
	{
		$this->TransportErrorNumber = $TransportErrorNumber;
		return $this;
	}

}
