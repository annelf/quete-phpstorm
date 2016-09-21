<?php

    $students = array (
        'Emnnauel' => 42,
        'Thierry' => 51,
        'Pascal' => 45,
        'Eric' => 48,
        'Nicolas' => 19
    );

    var_dump($students);

    $moyenne = array_sum($students )/ count($students);
        echo $moyenne;
?>