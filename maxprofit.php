<?php

header('content-type: text/plain');

// you can write to stdout for debugging purposes, e.g.
// print "this is a debug message\n";

function solution0($A) {
    // write your code in PHP7.0
    $count = count( $A );
    $max_profit = 0;
    
    for ( $i = 0; $i < $count; $i++ ) {

    	for ( $j = $i; $j < $count; $j++ ) {

    		$profit = $A[$j] - $A[$i];

    		if ( $max_profit < $profit ) $max_profit = $profit;

    	}

    }

    return $max_profit;

}

function solution($A) {
    // write your code in PHP7.0
    $count = count( $A );
    $max_profit = 0;
    $min = $A[0];

    for ( $i = 1; $i < $count; $i++ ) {

    	$profit = $A[$i] - $min;

    	if ( $profit > $max_profit ) $max_profit = $profit;

    	if ( $A[$i] < $min ) $min = $A[$i];

    }

    return $max_profit;

}

$A = [];
$A[0] = 23171;
$A[1] = 21011;
$A[2] = 21123;
$A[3] = 21366;
$A[4] = 21013;
$A[5] = 21367;

$B = [];
$B[0] = 23150;
$B[1] = 20011;
$B[2] = 21128;
$B[3] = 21366;
$B[4] = 28000;
$B[5] = 21367;

$C = [];
$C[0] = 10;
$C[1] = 12;
$C[2] = 8;
$C[3] = 23;
$C[4] = 6;
$C[5] = 19;

print solution( $A );

/*
10, 10, 0, 10
12, 10, 2, 10
8, 10, -2, 8

23, 8, 15, 8
6, 8, 15, 6
19, 6, 15, 6
*/