<?php

class Sample implements Iterator {

	private $_items;
	
	public function __construct(&$data) {
		
		$this->_items = $data;
	}
	
	public function current() {
		return current($this->_items);
	}
	
	public function next()
	{
		return next($this->_items);
	}
	
	public function key()
	{
		return key($this->_items);
	}
	
	public function rewind()
	{
		reset($this->_items);
	}
	
	public function valid()
	{
		return ($this->current() !== FALSE);
	}
	
}

$data = array(111, 222, 333, 444, 555, 6666);

$sample = new Sample($data);

foreach($sample as $key => $row) {
	echo $key, ' ', $row, '<n/>';
}