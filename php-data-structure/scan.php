<?php

class ScanFile extends FilterIterator {
	//protected $ext = array('jpg', 'gif');
	protected $ext = array('pdf', 'epub');
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