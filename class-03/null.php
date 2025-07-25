<?php

    // Null Coalescing Operator
    // null হচ্ছে এমন একটি special type, যা বোঝায় — "কোনো ভ্যালু নেই"। অর্থাৎ, একটি ভেরিয়েবলের মধ্যে যদি কোনো মান না থাকে, সেটি null হতে পারে।    
    $customer = null;

    $result = $customer ?? "Visitor";
    echo $result;


        
    ?>