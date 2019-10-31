<?php

function solution($A) {

	$N = count( $A );
	$max_sum = 0;

	$S = array_pad( [], $N, 0 );
	$S[0] = $A[0];

	for ( $n = 1; $n < $N; $n++ ) {

		$S[$n] = $A[$n] + $S[$n-1];

	}

	for ( $i = 0; $i < $N - 4; $i++ ) {

		for ( $j = $i + 2; $j < $N - 2; $j++ ) {

			for ( $k = $N - 1; $k > $j + 2; $k-- ) {

				$sum1 = $S[$k] - $S[$j];
				$sum2 = $S[$j] - $S[$i];
				$sum = $sum1 + $sum2;

				if ( $sum > $max_sum ) {

					$max_sum = $sum;

				}

			}

		}

	}

	return $max_sum;

}

$A = [ 3, 2, 6, -1, 4, 5, -1, 2 ];

print solution( $A );