<?php

namespace Seko;

class ArrayOfCost implements \ArrayAccess, \Iterator, \Countable
{

	/**
	 * @var Cost[] $Cost
	 */
	protected $Cost = null;

	
	public function __construct()
	{
	
	}

	/**
	 * @return Cost[]
	 */
	public function getCost()
	{
		return $this->Cost;
	}

	/**
	 * @param Cost[] $Cost
	 * @return \Seko\ArrayOfCost
	 */
	public function setCost(array $Cost = null)
	{
		$this->Cost = $Cost;
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
		return isset($this->Cost[$offset]);
	}

	/**
	 * ArrayAccess implementation
	 *
	 * @param mixed $offset The offset to retrieve
	 * @return Cost
	 */
	public function offsetGet($offset)
	{
		return $this->Cost[$offset];
	}

	/**
	 * ArrayAccess implementation
	 *
	 * @param mixed $offset The offset to assign the value to
	 * @param Cost $value The value to set
	 * @return void
	 */
	public function offsetSet($offset, $value)
	{
		if (!isset($offset))
		{
			$this->Cost[] = $value;
		}
		else
		{
			$this->Cost[$offset] = $value;
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
		unset($this->Cost[$offset]);
	}

	/**
	 * Iterator implementation
	 *
	 * @return Cost Return the current element
	 */
	public function current()
	{
		return current($this->Cost);
	}

	/**
	 * Iterator implementation
	 * Move forward to next element
	 *
	 * @return void
	 */
	public function next()
	{
		next($this->Cost);
	}

	/**
	 * Iterator implementation
	 *
	 * @return string|null Return the key of the current element or null
	 */
	public function key()
	{
		return key($this->Cost);
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
		reset($this->Cost);
	}

	/**
	 * Countable implementation
	 *
	 * @return Cost Return count of elements
	 */
	public function count()
	{
		return count($this->Cost);
	}

}
