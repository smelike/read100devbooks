<?php

	// 任何一件事情，只要你认真去做，总是能够变得简单的。
	/**
		next() -> 下一个
		current() -> 当前
		valid() -> 检查迭代结尾
		rewind() -> 从头开始
		key -> 当前元素的索引
		
		自定义迭代器
		
		迭代器使用范围：
		
		1-返回迭代器的包或库时（如：SPL ）
		2-一次调用无法获取容器的所有元素
		3-处理巨大数量的元素（数据表以 GB 计）
		4-实现常见的数据结构，如：列表，堆栈，队列和图
		
		
		
	*/
	
	/**
		迭代器内部执行过程：
		
			1- rewind -> current -> valid -> current -> current-key -> current-value -> next()
	*/
	
	
	class Sample implements Iterator
	{
		
		private $_items = array(1, 2, 3, 4, 5, 6, 7);
		
		public function __construct() {
			
		}
		public function current() {
			return current($this->_items);
		}
		public function next() {
			return next($this->_items);
		}
		public function key() {
			return key($this->_items);
		}
		public function rewind() {
			reset($this->_items);
		}
		
		public function valid() {
			return $this->current() !== false;
		}
	}
	
	$sa = new Sample();
	
	/*
	foreach ($sa as $key => $val) {
		print $key . "=>" . $val . "\n";
	}
	*/
	
	while ($sa->valid()) {
		$el = $sa->current();
		echo $sa->key() . "=" . $el . "\n";
		$sa->next();
	}
	
	