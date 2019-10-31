<?php

function solution($A) {
    // write your code in PHP7.0
    $count = count( $A );
    sort( $A );
    
    $distinct = 0;
    
    for ( $i = 0; $i < $count; $i++ ) {
        
        if ( $i == 0 ) {
            $distinct++;
        } else {
            if ( $A[$i] != $A[$i-1] ) {
                $distinct++;
            }
        }
    }
    
    return $distinct;
    
}
