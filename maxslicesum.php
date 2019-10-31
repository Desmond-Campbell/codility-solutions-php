<?php

// you can write to stdout for debugging purposes, e.g.
// print "this is a debug message\n";

// https://app.codility.com/demo/results/training87SJXT-GUH/

function solution($A) {
    // write your code in PHP7.0

	$count = count( $A );
	$max_sum = $A[0];
	$max_slice = $A[0];

	for ( $i = 1; $i < $count; $i++ ) {

		$max_sum = max( 0, $max_sum + $A[$i] );

		$max_slice = max( $max_sum, $max_slice );

	}

	return $max_slice ?? 0;

}

$A = [];
$A[0] = 3;  
$A[1] = 2;  
$A[2] = -6;
$A[3] = 4;  
$A[4] = 0;

$B = [ 3, 9, 0, 1, -9, 5 ];
$C = [ 1, 9, -5, -10, 0, 4 ];
$D = [ 1, 8, -2, 5, -13, 3, 0, 14, -9 ];

print solution( $D );