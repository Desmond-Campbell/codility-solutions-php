<?php

header('content-type: text/plain');

// you can write to stdout for debugging purposes, e.g.
// print "this is a debug message\n";
// https://app.codility.com/demo/results/trainingZS62NQ-BPA/

function solution($A) {
    // write your code in PHP7.0

    $count = count( $A );
    $leaders = [];
    $leaders_count = 0;

    for ( $i = 0; $i < $count - 1; $i++ ) {

    	$a = $A;
    	$b = array_splice( $a, $i+1 );

    	$leader_a = findLeader( $a );
    	$leader_b = findLeader( $b );

    	$str_a = implode( ',', $a );
    	$str_b = implode( ',', $b );

    	// print "$str_a\t$leader_a\t$str_b\t$leader_b\n";

    	if ( $leader_a == $leader_b && $leader_a != -1 ) {
    		$leaders[] = $i;
    		$leaders_count++;
    	}

    }

    return $leaders_count;

}

function findLeader($A) {
    // write your code in PHP7.0
    
    $count = count( $A );
    $stack = [];
    $size = 0;
    
    for ( $i = 0; $i < $count; $i++ ) {
        
        $stack[] = $A[$i];
        $size++;
        
        if ( $size > 1 ) {
            
            if ( $stack[$size-1] != $stack[$size-2] ) {
                array_pop( $stack );
                array_pop( $stack );
                $size--; $size--;
            }
                
        }
        
    }
    
    $leader = -1;
    
    if ( $size > 0 ) {
        
        $leader = $stack[0];
        $hits = 0;
        $check_value = floor( $count / 2 );
        
        for ( $i = 0; $i < $count; $i++ ) {
            
            if ( $A[$i] == $leader ) {
                
                $hits++;
                
            }
            
            if ( $hits > $check_value ) return $leader;
            
        }
        
    }
    
    return $leader;
    
}

$A[0] = 4;
$A[1] = 3;
$A[2] = 4;
$A[3] = 4;
$A[4] = 4;
$A[5] = 2;

print_r( solution( $A ) );