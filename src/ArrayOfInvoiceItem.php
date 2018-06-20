<?php

namespace Seko;

class ArrayOfInvoiceItem implements \ArrayAccess, \Iterator, \Countable
{

	/**
	 * @var InvoiceItem[] $InvoiceItem
	 */
	protected $InvoiceItem = null;

	
	public function __construct()
	{
	
	}

	/**
	 * @return InvoiceItem[]
	 */
	public function getInvoiceItem()
	{
		return $this->InvoiceItem;
	}

	/**
	 * @param InvoiceItem[] $InvoiceItem
	 * @return \Seko\ArrayOfInvoiceItem
	 */
	public function setInvoiceItem(array $InvoiceItem = null)
	{
		$this->InvoiceItem = $InvoiceItem;
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
		return isset($this->InvoiceItem[$offset]);
	}

	/**
	 * ArrayAccess implementation
	 *
	 * @param mixed $offset The offset to retrieve
	 * @return InvoiceItem
	 */
	public function offsetGet($offset)
	{
		return $this->InvoiceItem[$offset];
	}

	/**
	 * ArrayAccess implementation
	 *
	 * @param mixed $offset The offset to assign the value to
	 * @param InvoiceItem $value The value to set
	 * @return void
	 */
	public function offsetSet($offset, $value)
	{
		if (!isset($offset))
		{
			$this->InvoiceItem[] = $value;
		}
		else
		{
			$this->InvoiceItem[$offset] = $value;
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
		unset($this->InvoiceItem[$offset]);
	}

	/**
	 * Iterator implementation
	 *
	 * @return InvoiceItem Return the current element
	 */
	public function current()
	{
		return current($this->InvoiceItem);
	}

	/**
	 * Iterator implementation
	 * Move forward to next element
	 *
	 * @return void
	 */
	public function next()
	{
		next($this->InvoiceItem);
	}

	/**
	 * Iterator implementation
	 *
	 * @return string|null Return the key of the current element or null
	 */
	public function key()
	{
		return key($this->InvoiceItem);
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
		reset($this->InvoiceItem);
	}

	/**
	 * Countable implementation
	 *
	 * @return InvoiceItem Return count of elements
	 */
	public function count()
	{
		return count($this->InvoiceItem);
	}

}
