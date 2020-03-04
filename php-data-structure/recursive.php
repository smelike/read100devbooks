<?php

	function recursive($total)
	{
		static $current = 0;
		static $previous = 1;
		
		$newprevious = $current;
		$current += $previous;
		$newprevious = $previous;
		
		echo $current . " ";
		while (--$total) {
			recursive($total);
		}
	}
	
	
	recursive(5);