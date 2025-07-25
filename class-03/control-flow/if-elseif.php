<?php

    // Example of if-elseif statement in PHP
    $score = 50;

    if ( $score >= 80 ) {
        echo "A+" . "<br/>";
    }elseif(  $score >= 70 ) {
        echo "A" . "<br/>";
    }elseif(  $score >= 60 ) {
        echo "A-" . "<br/>";
    }elseif(  $score >= 50 ) {
        echo "B" . "<br/>";
    }elseif(  $score >= 40 ) {
        echo "C" . "<br/>";
    }elseif(  $score >= 33 ) {
        echo "D" . "<br/>";
    }
    else {
        echo "Fail";
    }


?>