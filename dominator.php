<?php

// https://app.codility.com/demo/results/trainingMN6ZXP-FMB/

// you can write to stdout for debugging purposes, e.g.
// print "this is a debug message\n";

function solution($A) {
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
    
    $index = -1;
    
    if ( $size > 0 ) {
        $leader = $stack[0];
        $hits = 0;
        $check_value = floor( $count / 2 );
        
        for ( $i = 0; $i < $count; $i++ ) {
            
            if ( $A[$i] == $leader ) {
                
                $hits++;
                $index = $i;
                
            }
            
            if ( $hits > $check_value ) return $index;
            
        }
        
    }
    
    return $index;
    
}
