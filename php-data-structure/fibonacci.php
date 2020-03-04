<?php

/**
	斐波那契数列：由 0 和 1 开始，之后的斐波那契数就是由之前的两数相加而得出。
*/

	class Fibonacci implements Iterator {
		private $previous = 1;
		private $current = 0;
		private $key = 0;
		
		public function current() {
			return $this->current;
		}
		
		public function key() {
			return $this->key;
		}
		
		public function next() {
			$newprevious = $this->current;
			$this->current += $this->previous;
			$this->previous = $newprevious;
			$this->key++;
		}
		
		
		public function rewind() {
			/*
			$this->previous = 1;
			$this->current = 0;
			$this->key = 0;
			*/
		}
		
		
		public function valid() {
			return true;
		}
	}
	
	$seq = new Fibonacci();
	$i = 0;
	
	foreach ($seq as $f) {
		echo "{$f} ";
		if ($i++ === 18) break;
	}