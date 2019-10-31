<?php


function solution($A, $B) {
    // write your code in PHP7.0
    $N = count( $A );
    
    $alive = $N;
    
    $last_fish = $first_downstream_fish = $k = 0;
    
    while ( $k < $N ) {
        if ( $B[$k] != 0 ) {
            $first_downstream_fish = $k;
            $k = $N;
        }
        $k++;
    }

    $last_fish = $B[$first_downstream_fish];
    $last_fish_size = $A[$first_downstream_fish];
    
    for ( $i = $first_downstream_fish + 1; $i < $N; $i++ ) {
        
        $current_fish = $B[$i];
        $current_fish_size = $A[$i];
        
        if ( $current_fish != $last_fish ) {
            
            // who eats who?
            if ( $A[$i] > $last_fish_size ) {
                $last_fish_size = $A[$i];
                $last_fish = $B[$i];
            }
            
            $alive--;
            
        }
        
    }
    
    return $alive;
    
}

$A = $B = [];

$A[0] = 4;	$B[0] = 1;
$A[1] = 3;	$B[1] = 0;
$A[2] = 2;	$B[2] = 1;
$A[3] = 1;	$B[3] = 0;
$A[4] = 5;	$B[4] = 0;
$A[5] = 6;	$B[5] = 1;

print solution( $A, $B );

/*

4 3 2 1 5 6
1 0 1 0 0 1
1 - 1 0 0 1
1 - 1 - 0 1
1 - 1 - - 1

4 3 2 1 5
0 1 0 0 0


*/