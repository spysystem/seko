<?php

namespace Seko;

class ArrayOfColliItem implements \ArrayAccess, \Iterator, \Countable
{

	/**
	 * @var ColliItem[] $ColliItem
	 */
	protected $ColliItem = null;

	
	public function __construct()
	{
	
	}

	/**
	 * @return ColliItem[]
	 */
	public function getColliItem()
	{
		return $this->ColliItem;
	}

	/**
	 * @param ColliItem[] $ColliItem
	 * @return \Seko\ArrayOfColliItem
	 */
	public function setColliItem(array $ColliItem = null)
	{
		$this->ColliItem = $ColliItem;
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
		return isset($this->ColliItem[$offset]);
	}

	/**
	 * ArrayAccess implementation
	 *
	 * @param mixed $offset The offset to retrieve
	 * @return ColliItem
	 */
	public function offsetGet($offset)
	{
		return $this->ColliItem[$offset];
	}

	/**
	 * ArrayAccess implementation
	 *
	 * @param mixed $offset The offset to assign the value to
	 * @param ColliItem $value The value to set
	 * @return void
	 */
	public function offsetSet($offset, $value)
	{
		if (!isset($offset))
		{
			$this->ColliItem[] = $value;
		}
		else
		{
			$this->ColliItem[$offset] = $value;
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
		unset($this->ColliItem[$offset]);
	}

	/**
	 * Iterator implementation
	 *
	 * @return ColliItem Return the current element
	 */
	public function current()
	{
		return current($this->ColliItem);
	}

	/**
	 * Iterator implementation
	 * Move forward to next element
	 *
	 * @return void
	 */
	public function next()
	{
		next($this->ColliItem);
	}

	/**
	 * Iterator implementation
	 *
	 * @return string|null Return the key of the current element or null
	 */
	public function key()
	{
		return key($this->ColliItem);
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
		reset($this->ColliItem);
	}

	/**
	 * Countable implementation
	 *
	 * @return ColliItem Return count of elements
	 */
	public function count()
	{
		return count($this->ColliItem);
	}

}
