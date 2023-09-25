<?php

$text = "The quick brown fox jumps over the lazy dog";

function convertText( $text ) {
    // string to lowercase
    $text = strtolower( $text );

    // Replace brown with red in the string
    $text = str_replace( "brown", "red", $text );
    return $text;

}

$convertedText = convertText( $text );

echo $convertedText;