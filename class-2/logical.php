<?php
        
        // and / && - Logocal AND Operator
        // এটি চেক করে যে বাম পাশের এবং ডান পাশের উভয়ই শর্ত সত্য (true) কিনা।
        // যদি উভয় শর্ত সত্য হয়, তাহলে এটি true রিটার্ন করে,
        // আর যদি কোন একটি শর্ত মিথ্যা (false) হয়, তাহলে এটি false রিটার্ন করে।

        $t = true;
        $f = false;

        $and = $t && $f;
        var_dump($and);
        // output bool(false)



        // or / || - Logical OR Operator
        // এটি চেক করে যে বাম পাশের বা ডান পাশের কোন একটি শর্ত সত্য (true) কিনা।
        // যদি কোন একটি শর্ত সত্য হয়, তাহলে এটি true রিটার্ন করে,   
        // আর যদি উভয় শর্ত মিথ্যা (false) হয়, তাহলে এটি false রিটার্ন করে।
        $or = $t || $f;
        var_dump($or);
        // output bool(true)



        // not / ! - Logical NOT Operator
        // এটি একটি শর্তের বিপরীত মান রিটার্ন করে।
        // যদি শর্ত সত্য (true) হয়, তাহলে এটি false রিটার্ন করে,
        // আর যদি শর্ত মিথ্যা (false) হয়, তাহলে এটি true রিটার্ন করে।
        $not = !$t;
        var_dump($not);
        // output bool(false)



        var_dump( $t && $f ); // output bool(false)
        var_dump( $t || $f ); // output bool(true)
        var_dump( !$t ); // output bool(false)
        var_dump( !$f ); // output bool(true)
        var_dump( $t && $t ); // output bool(true)
        var_dump( $f || $f ); // output bool(false)
        var_dump( $t || $t ); // output bool(true)
        var_dump( $f && $f ); // output bool(false)
        var_dump( $t && $f || $t ); // output bool(true)
        var_dump( $t && $f && $t ); // output bool(false)
        var_dump( $t || $f && $t ); // output bool(true)
        var_dump( $t || $f || $t ); // output bool(true)
        var_dump( $f || $f && $t ); // output bool(true)
        var_dump( $f || $f || $t ); // output bool(true)
        var_dump( $f || $f && $f ); // output bool(false)
        var_dump( $f || $t && $f ); // output bool(true)
        var_dump( $f || $t && $t ); // output bool(true)
        var_dump( $f || $t || $f ); // output bool(true)
        var_dump( $f || $t || $t ); // output bool(true)
        var_dump( $f || $f || $f ); // output bool(false)