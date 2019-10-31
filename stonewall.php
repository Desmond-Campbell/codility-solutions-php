<?php

header("content-type: text/plain");
// you can write to stdout for debugging purposes, e.g.
// print "this is a debug message\n";

//https://app.codility.com/demo/results/trainingQP8W6S-B6X/

function solution($H) {
    // write your code in PHP7.0
    
    $count = count( $H );
    $blocks = 1;
    $height = $H[0];
    $floors = [ $H[0] ];
    $floor_count = 1;
    
    // print "i\thght\tH(i)\tflrs\tflrcnt\tflrs2\tflrcnt2\tblcks\n";
	// print "0\t$height\t{$H[0]}\t\t0\t8\t1\t1\n";

    for ( $i = 1; $i < $count; $i++ ) {

    	$new_floor = 0;

    	$str_floors = implode( ',', $floors );

    	for ( $f = $floor_count; $f > 0; $f-- ) {
                
            if ( $floors[$f-1] > $H[$i] ) {
                
                array_pop( $floors );
                $floor_count--;
                
            }
            
        }

        if ( ( $floors[$floor_count-1] ?? 0 ) < $H[$i] ) {
                
            $floors[] = $H[$i];
            $floor_count++;
            $new_floor = 1;

            // Adding a floor because the last one is less than the current height
            
        } 


        if ( $H[$i] > $height ) {
        
            $blocks++;
            
        } elseif ( $H[$i] < $height ) {
            
            if ( $new_floor ) {

            	$blocks++;

            }
            
        }

    	$str_floors_2 = implode( ',', $floors );
    	$floor_count_2 = count( $floors );
    	
    	// print "$i\t$height\t{$H[$i]}\t$str_floors\t$floor_count\t$str_floors_2\t$floor_count_2\t$blocks\n";

        
        $height = $H[$i];
        
    }
    
    return $blocks;
    
}

$H = [ 8, 8, 5, 7, 9, 8, 7, 4, 8 ];

print solution( $H );