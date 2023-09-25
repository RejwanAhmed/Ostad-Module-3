<?php
$numbers = range( 1, 10 );

function removeEven( $numbers ) {
    return ( $numbers % 2 == 1 );
}

$oddNumbers = array_filter( $numbers, "removeEven" );

foreach ( $oddNumbers as $value ) {
    echo "{$value} \n";
}
