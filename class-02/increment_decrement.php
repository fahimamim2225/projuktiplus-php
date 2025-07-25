<?php

    // Increment Operator (++)
    // এটি একটি ভেরিয়েবলের মান 1 দ্বারা বাড়ায়। এটি দুইভাবে ব্যবহার করা যেতে পারে:
    // 1. Post-increment: $a++ (এটি প্রথমে মান ব্যবহার করে এবং পরে 1 বাড়ায়)
    // 2. Pre-increment: ++$a (এটি প্রথমে 1 বাড়ায় এবং পরে মান ব্যবহার করে)
    $a = 5;
    $b = 5;

    $c = $a++; // Post-increment
    echo "$c\n"; // Output: 5
    
    $d = ++$b; // Pre-increment
    echo "$d\n"; // Output: 6



    // Decrement Operator (--)
    // এটি একটি ভেরিয়েবলের মান 1 দ্বারা কমায়। এটি দুইভাবে ব্যবহার করা যেতে পারে:
    // 1. Post-decrement: $a-- (এটি প্রথমে মান ব্যবহার করে এবং পরে 1 কমায়)
    // 2. Pre-decrement: --$a (এটি প্রথমে 1 কমায় এবং পরে মান ব্যবহার করে)
    $c = $a--; // Post-increment
    echo "$c\n"; // Output: 6
    
    $d = --$b; // Pre-increment
    echo "$d\n"; // Output: 5