<?php

namespace Seko;

class Label
{

	/**
	 * @var LabelTypeEnum $LabelType
	 */
	protected $LabelType = null;

	/**
	 * @var LabelSizeEnum $LabelSize
	 */
	protected $LabelSize = null;

	/**
	 * @var string $Image
	 */
	protected $Image = null;

	/**
	 * @var ImageTypeEnum $ImageType
	 */
	protected $ImageType = null;

	/**
	 * @param LabelTypeEnum $LabelType
	 * @param LabelSizeEnum $LabelSize
	 * @param ImageTypeEnum $ImageType
	 */
	public function __construct($LabelType, $LabelSize, $ImageType)
	{
		$this->LabelType = $LabelType;
		$this->LabelSize = $LabelSize;
		$this->ImageType = $ImageType;
	}

	/**
	 * @return LabelTypeEnum
	 */
	public function getLabelType()
	{
		return $this->LabelType;
	}

	/**
	 * @param LabelTypeEnum $LabelType
	 * @return \Seko\Label
	 */
	public function setLabelType($LabelType)
	{
		$this->LabelType = $LabelType;
		return $this;
	}

	/**
	 * @return LabelSizeEnum
	 */
	public function getLabelSize()
	{
		return $this->LabelSize;
	}

	/**
	 * @param LabelSizeEnum $LabelSize
	 * @return \Seko\Label
	 */
	public function setLabelSize($LabelSize)
	{
		$this->LabelSize = $LabelSize;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getImage()
	{
		return $this->Image;
	}

	/**
	 * @param string $Image
	 * @return \Seko\Label
	 */
	public function setImage($Image)
	{
		$this->Image = $Image;
		return $this;
	}

	/**
	 * @return ImageTypeEnum
	 */
	public function getImageType()
	{
		return $this->ImageType;
	}

	/**
	 * @param ImageTypeEnum $ImageType
	 * @return \Seko\Label
	 */
	public function setImageType($ImageType)
	{
		$this->ImageType = $ImageType;
		return $this;
	}

}
