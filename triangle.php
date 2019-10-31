<?php

function solution($A) {
    // write your code in PHP7.0
    $count = count( $A );
    //sort( $A );
    
    for ( $i = 0; $i < $count - 2; $i++ ) {
        
        $P = $i;
        $Q = $i+1;
        $R = $i+2;
        
        if ( ( $A[$P] + $A[$Q] ) > $A[$R] 
                && ( $A[$R] + $A[$Q] ) > $A[$P] 
                && ( $A[$P] + $A[$R] ) > $A[$Q] ) return 1;
        
    }
    
    return 0;
    
}