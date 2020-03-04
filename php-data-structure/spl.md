SPL, PHP 标准库（Standard PHP Library）。



### 重载 autoloader

includes/requires

__autoload()


```

<?php

class MyLoader {
	public static function doAutoload($class) {
		// ...
	}
}

spl_auto_register(array('MyLoader', 'doAutoload'));

// spl_autoload_unregister()

```

### 迭代器

> 遍历目录，scandir

```
<?php
	
class ScanFile extends FilterIterator {
	protected $ext = array('jpg', 'gif');
	
	public function __construct($path) {
		parent::__construct(new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path)));
	}
	
	public function accept() {
		$item = $this->getInnerIterator();
		if ($item->isFile() && in_array(pathinfo($item->getFilename(), PATHINFO_EXTENSION), $this->ext)) {
			return true;
		}
	}
}


foreach (new ScanFile('../') as $item) {
	echo $item . PHP_EOL;
}

```



----

###  SPL 提供的其他迭代器

- RecursiveIterator

- RecursiveIteratorIterator

- OuterIterator

- IteratorIterator

- FilterIterator

- RecursiveFilterIterator

- ParentIterator

- SeekableIterator

- LimitIterator

- GlobalIterator

- CachingIterator

- RecursiveCachingIterator

- NoRewindIterator

- AppendIterator

- InfiniteIterator

- RegexIterator

- RecursiveRegexIterator

- EmptyIterator

- RecursiveIterator

- RecursiveTreeIterator

- ArrayIterator


----


### SplFixArray

使用SplFixedArray 可实例化一个固定长度的数组。为何使用它？因为它更快。

PHP 常规的数组包含不同类型的键，例如数字、字符串等，并且长度是可变的。而这些【高级功能】，是 PHP 以散列（hash）的方式通过键得到对应的值——在特定情况这会造成性能问题。


SplFixedArray 是使用固定的数字键，所以并没有使用散列存储方式。

[SplFixedArray] size-1200

[SplStack]

[SplQueue]

如果需要大量的数组操作，建议使用 SPL。

----

### 数据结构

可以使用传统的变量类型，来描述数据结构。

例如：用数组来描述堆栈（Stack），使用 pop 和 push （array_pop(), array_push()）。但，得小心，毕竟不是专门用于描述数据结构的——一次误操作就有可能破坏堆栈。

