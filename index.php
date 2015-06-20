<?php
/** 
 * Computes the factorial of a number as an integer, not as double, without using gmp_* functions.
 *
 */

function get_factorial( $data ){
	$factorial = 1;
	
	for ( $i = 1; $i <= $data; $i++ ){	
		$factorial = bcmul( $factorial, $i );
	}
	
	return $factorial;
}

$data = 42;
echo get_factorial( $data );
 
?>