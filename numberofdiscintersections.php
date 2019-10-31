<?php

header("Content-type: text/plain");

// https://app.codility.com/demo/results/trainingSW97D4-H47/

function solution($A) {
    // write your code in PHP7.0
    $count = count( $A );
    $intersects = 0;
    
    for ( $i = 0; $i < $count; $i++ ) {

    	$x1 = $i - $A[$i];
    	$x2 = $i + $A[$i];

    	$discs[] = [ $x1, $x2 ];
    
    }

    for ( $j = 0; $j < $count; $j++ ) {

    	for ( $k = $j; $k < $count; $k++ ) {
    	
    		if ( $j != $k ) {

    			$x1 = $discs[$j][0];
    			$x2 = $discs[$j][1];

    			$x3 = $discs[$k][0];
    			$x4 = $discs[$k][1];

    			if ( 
    				!( ( $x1 < $x3 && $x2 < $x3  ) || ( $x1 > $x4 && $x2 > $x4 ) )
    			) {

    				$intersects++;

    			}

    		}

    	}
    
    }

    // print_r( $discs );

    return $intersects;
    
}

$A = [];
$A[0] = 1;
$A[1] = 5;
$A[2] = 2;
$A[3] = 1;
$A[4] = 4;
$A[5] = 0;

print solution( $A );
