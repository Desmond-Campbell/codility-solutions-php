<?php

// you can write to stdout for debugging purposes, e.g.
// print "this is a debug message\n";

// https://app.codility.com/demo/results/trainingH8GC5X-DE7/

function solution($S) {
    // write your code in PHP7.0
    $chars = str_split( $S, 1 );
    $count = count( $chars );
    
    $left_brackets = $right_brackets = [];
    $size = 1;
    
    $mapping = [ '(' => 2, ')' => -2 ];
    
    $left_brackets[] = $mapping[$S[0]];
    $right_brackets[] = $mapping[$S[0]] * -1;
    
    for ( $i = 1; $i < $count; $i++ ) {
        
        $bracket = $mapping[$S[$i]];
        
        if ( $bracket > 0 ) {
            
            array_push( $left_brackets, $bracket );
            array_push( $right_brackets, -1*$bracket );
            $size++;

        } else {

        	if ( ( $right_brackets[$size-1] ?? null ) == $bracket ) {

        		$size--;
        		array_pop( $left_brackets );
        		array_pop( $right_brackets );

            } else {

                return 0;
                
            }   
            
        }
        
    }

    return 1;
    
}
