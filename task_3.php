<?php

$grades = array(85, 92, 78, 88, 95);

function sortGrades($value1, $value2){
    if($value1 == $value2)
        return 0;
    return ($value1 > $value2) ? -1 : 1;
}

usort($grades, "sortGrades");

foreach($grades as $value){
    echo "{$value} \n";
}