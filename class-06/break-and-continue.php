<?php

    for( $i = 1 ; $i <= 5 ; $i++ ) {
        if( $i%2 == 0 ){
            break;
        }
        echo "$i\n";
    }

    for( $i = 1 ; $i <= 5 ; $i++ ) {
        if( $i%2 == 0 ){
            continue;
        }
        echo "$i\n";
    }

    for( $i = 1 ; $i <= 20 ; $i++ ) {
        if( $i%2 !== 0 ){
            continue;
        }
        echo "$i\n";
    }

?>