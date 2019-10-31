<?php

function solution($N) {
    // write your code in PHP7.0

    if ( $N < 1 ) return 0;    

    // Convert the integer to a binary number
    $binary = decbin( $N );
    
    $digits = str_split( $binary, 1 );
    $count = count( $digits );

    $gap_counter = $max_gap = 0;

    for ( $i = 0; $i < $count; $i++ ) {
        
        if ( $digits[$i] == 1 ) {
            
            // Reset the counter when the binary digit is 1
            $max_gap = max( $gap_counter, $max_gap );
            $gap_counter = 0;

        } elseif( $i == ( $count - 1 ) && $digits[$i] == 1  ){

            // Checks on final binary digit; if 0, don't count, and if 1, capture gap
            $gap_counter++;
            $max_gap = max( $gap_counter, $max_gap );

        } else {
            
            $gap_counter++;
        
        }

    }

    return $max_gap;
    
}

solution(20);

