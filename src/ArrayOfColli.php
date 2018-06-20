<?php

namespace Seko;

class ArrayOfColli implements \ArrayAccess, \Iterator, \Countable
{

	/**
	 * @var Colli[] $Colli
	 */
	protected $Colli = null;

	
	public function __construct()
	{
	
	}

	/**
	 * @return Colli[]
	 */
	public function getColli()
	{
		return $this->Colli;
	}

	/**
	 * @param Colli[] $Colli
	 * @return \Seko\ArrayOfColli
	 */
	public function setColli(array $Colli = null)
	{
		$this->Colli = $Colli;
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
		return isset($this->Colli[$offset]);
	}

	/**
	 * ArrayAccess implementation
	 *
	 * @param mixed $offset The offset to retrieve
	 * @return Colli
	 */
	public function offsetGet($offset)
	{
		return $this->Colli[$offset];
	}

	/**
	 * ArrayAccess implementation
	 *
	 * @param mixed $offset The offset to assign the value to
	 * @param Colli $value The value to set
	 * @return void
	 */
	public function offsetSet($offset, $value)
	{
		if (!isset($offset))
		{
			$this->Colli[] = $value;
		}
		else
		{
			$this->Colli[$offset] = $value;
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
		unset($this->Colli[$offset]);
	}

	/**
	 * Iterator implementation
	 *
	 * @return Colli Return the current element
	 */
	public function current()
	{
		return current($this->Colli);
	}

	/**
	 * Iterator implementation
	 * Move forward to next element
	 *
	 * @return void
	 */
	public function next()
	{
		next($this->Colli);
	}

	/**
	 * Iterator implementation
	 *
	 * @return string|null Return the key of the current element or null
	 */
	public function key()
	{
		return key($this->Colli);
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
		reset($this->Colli);
	}

	/**
	 * Countable implementation
	 *
	 * @return Colli Return count of elements
	 */
	public function count()
	{
		return count($this->Colli);
	}

}
