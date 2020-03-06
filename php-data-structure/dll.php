<?php

$dlist = new SplDoublyLinkedList();

$dlist->push('zhuzizizi');
$dlist->push('peishan');
$dlist->push('foobar');


// unshift inserts 

$dlist->unshift(1);
$dlist->unshift(2);
$dlist->unshift(3);


for($dlist->rewind();$dlist->valid();$dlist->next()) {
	echo $dlist->current() . "\n";
}




// delete an item from the bottom of the list by using pop()
$dlist->pop();
for($dlist->rewind();$dlist->valid();$dlist->next()) {
	echo $dlist->current() . "\n";
}

// delete an item from the top of the list by using shift()
$dlist->shift();
for($dlist->rewind();$dlist->valid();$dlist->next()) {
	echo $dlist->current() . "\n";
}