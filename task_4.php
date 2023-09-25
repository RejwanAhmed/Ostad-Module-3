<?php
$studentGrades = [
    ["Math" => 78, "English" => 86, "Science" => 67],
    ["Math" => 72, "English" => 68, "Science" => 68],
    ["Math" => 59, "English" => 75, "Science" => 69],
];

function averageGrades( $Grades ) {
    $avgEachStudent = array();

    foreach ( $Grades as $marks ) {
        $sum = 0;

        foreach ( $marks as $number ) {
            $sum += $number;
        }

        $avg = $sum / 3;
        array_push( $avgEachStudent, $avg );
    }

    return $avgEachStudent;
}

$avgEachStudent = averageGrades( $studentGrades );

foreach ( $avgEachStudent as $key => $avg ) {
    echo "average = {$avg}\n";
}
