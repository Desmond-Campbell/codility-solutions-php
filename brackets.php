<?php

header("Content-type: text/plain");

// https://app.codility.com/demo/results/training5DF4DW-Z2F/

// you can write to stdout for debugging purposes, e.g.
// print "this is a debug message\n";

function solution($S) {
    // write your code in PHP7.0
    $chars = str_split( $S, 1 );
    $count = count( $chars );
    
    $left_brackets = $right_brackets = [];
    $size = 0;
    
    $mapping = [ '{' => 1, '(' => 2, '[' => 3, ']' => -3, ')' => -2, '}' => -1 ];
    
    for ( $i = 0; $i < $count; $i++ ) {
        
        $bracket = $mapping[$S[$i]];
        
        if ( $bracket > 0 ) {
            
            array_push( $left_brackets, $bracket );
            array_push( $right_brackets, -1*$bracket );
            $size++;

        } else {

        	if ( $right_brackets[$size-1] == $bracket ) {

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

print solution( "{[()()]}" );
