<?php

function generatePassword( $length ) {
    $all_chrs = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+';
    $lowercase = 'abcdefghijklmnopqrstuvwxyz';
    $uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numbers = '0123456789';
    $special_ch = '!@#$%^&*()_+';
    $password = '';
    $stringlen = strlen( $all_chrs );

    for ( $i = 0; $i < $length - 4; $i++ ) {
        $randomIndex = rand( 0, $stringlen - 1 );
        $password .= $all_chrs[$randomIndex];
    }

    // at least a lowercase, 1 uppercase, 1 number, and 1 special character.
    $password .= $lowercase[rand( 0, 25 )];
    $password .= $uppercase[rand( 0, 25 )];
    $password .= $numbers[rand( 0, 9 )];
    $password .= $special_ch[rand( 0, 11 )];

    return $password;
}

$password = generatePassword( 12 );

echo $password;