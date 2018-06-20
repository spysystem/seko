<?php

namespace Seko;

class PaperLessDocument
{

	/**
	 * @var string $Document
	 */
	protected $Document = null;

	/**
	 * @var DocTypeEnum $DocumentType
	 */
	protected $DocumentType = null;

	/**
	 * @param DocTypeEnum $DocumentType
	 */
	public function __construct($DocumentType)
	{
		$this->DocumentType = $DocumentType;
	}

	/**
	 * @return string
	 */
	public function getDocument()
	{
		return $this->Document;
	}

	/**
	 * @param string $Document
	 * @return \Seko\PaperLessDocument
	 */
	public function setDocument($Document)
	{
		$this->Document = $Document;
		return $this;
	}

	/**
	 * @return DocTypeEnum
	 */
	public function getDocumentType()
	{
		return $this->DocumentType;
	}

	/**
	 * @param DocTypeEnum $DocumentType
	 * @return \Seko\PaperLessDocument
	 */
	public function setDocumentType($DocumentType)
	{
		$this->DocumentType = $DocumentType;
		return $this;
	}

}
