<?php

namespace Seko;

class ArrayOfLabel implements \ArrayAccess, \Iterator, \Countable
{

	/**
	 * @var Label[] $Label
	 */
	protected $Label = null;

	
	public function __construct()
	{
	
	}

	/**
	 * @return Label[]
	 */
	public function getLabel()
	{
		return $this->Label;
	}

	/**
	 * @param Label[] $Label
	 * @return \Seko\ArrayOfLabel
	 */
	public function setLabel(array $Label = null)
	{
		$this->Label = $Label;
		return $this;
	}

	/**
	 * ArrayAccess implementation
	 *
	 * @param mixed $offset An offset to check for
	 * @return boolean true on success or false on failure
	 */
	public function offsetExists($offset)
	{
		return isset($this->Label[$offset]);
	}

	/**
	 * ArrayAccess implementation
	 *
	 * @param mixed $offset The offset to retrieve
	 * @return Label
	 */
	public function offsetGet($offset)
	{
		return $this->Label[$offset];
	}

	/**
	 * ArrayAccess implementation
	 *
	 * @param mixed $offset The offset to assign the value to
	 * @param Label $value The value to set
	 * @return void
	 */
	public function offsetSet($offset, $value)
	{
		if (!isset($offset))
		{
			$this->Label[] = $value;
		}
		else
		{
			$this->Label[$offset] = $value;
		}
	}

	/**
	 * ArrayAccess implementation
	 *
	 * @param mixed $offset The offset to unset
	 * @return void
	 */
	public function offsetUnset($offset)
	{
		unset($this->Label[$offset]);
	}

	/**
	 * Iterator implementation
	 *
	 * @return Label Return the current element
	 */
	public function current()
	{
		return current($this->Label);
	}

	/**
	 * Iterator implementation
	 * Move forward to next element
	 *
	 * @return void
	 */
	public function next()
	{
		next($this->Label);
	}

	/**
	 * Iterator implementation
	 *
	 * @return string|null Return the key of the current element or null
	 */
	public function key()
	{
		return key($this->Label);
	}

	/**
	 * Iterator implementation
	 *
	 * @return boolean Return the validity of the current position
	 */
	public function valid()
	{
		return $this->key() !== null;
	}

	/**
	 * Iterator implementation
	 * Rewind the Iterator to the first element
	 *
	 * @return void
	 */
	public function rewind()
	{
		reset($this->Label);
	}

	/**
	 * Countable implementation
	 *
	 * @return Label Return count of elements
	 */
	public function count()
	{
		return count($this->Label);
	}

}
