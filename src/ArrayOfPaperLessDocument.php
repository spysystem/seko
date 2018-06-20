<?php

namespace Seko;

class ArrayOfPaperLessDocument implements \ArrayAccess, \Iterator, \Countable
{

	/**
	 * @var PaperLessDocument[] $PaperLessDocument
	 */
	protected $PaperLessDocument = null;

	
	public function __construct()
	{
	
	}

	/**
	 * @return PaperLessDocument[]
	 */
	public function getPaperLessDocument()
	{
		return $this->PaperLessDocument;
	}

	/**
	 * @param PaperLessDocument[] $PaperLessDocument
	 * @return \Seko\ArrayOfPaperLessDocument
	 */
	public function setPaperLessDocument(array $PaperLessDocument = null)
	{
		$this->PaperLessDocument = $PaperLessDocument;
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
		return isset($this->PaperLessDocument[$offset]);
	}

	/**
	 * ArrayAccess implementation
	 *
	 * @param mixed $offset The offset to retrieve
	 * @return PaperLessDocument
	 */
	public function offsetGet($offset)
	{
		return $this->PaperLessDocument[$offset];
	}

	/**
	 * ArrayAccess implementation
	 *
	 * @param mixed $offset The offset to assign the value to
	 * @param PaperLessDocument $value The value to set
	 * @return void
	 */
	public function offsetSet($offset, $value)
	{
		if (!isset($offset))
		{
			$this->PaperLessDocument[] = $value;
		}
		else
		{
			$this->PaperLessDocument[$offset] = $value;
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
		unset($this->PaperLessDocument[$offset]);
	}

	/**
	 * Iterator implementation
	 *
	 * @return PaperLessDocument Return the current element
	 */
	public function current()
	{
		return current($this->PaperLessDocument);
	}

	/**
	 * Iterator implementation
	 * Move forward to next element
	 *
	 * @return void
	 */
	public function next()
	{
		next($this->PaperLessDocument);
	}

	/**
	 * Iterator implementation
	 *
	 * @return string|null Return the key of the current element or null
	 */
	public function key()
	{
		return key($this->PaperLessDocument);
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
		reset($this->PaperLessDocument);
	}

	/**
	 * Countable implementation
	 *
	 * @return PaperLessDocument Return count of elements
	 */
	public function count()
	{
		return count($this->PaperLessDocument);
	}

}
