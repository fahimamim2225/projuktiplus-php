<?php
        $n1 = 10;
        $n2 = "10";


      
        // এখানে "==" নাম হল Operator বা তুলনাকারি । এইটা শুধু Value চেক করে। Type চেক করে না। এক কথায় Value মান বা সমান কি না চেক করে।
        $equal = $n1 == $n2;
        echo $equal;
        // output 1


        // এখানে != হল Not Equal Operator, যেটি দুইটি ভেরিয়েবলের value সমান নয় কি না, তা যাচাই করে।
        // এটি শুধু value চেক করে, type চেক করে না।
        // যদি value সমান না হয়, তাহলে এটি true রিটার্ন করে,
        // আর value মান সমান হয়, তাহলে false রিটার্ন করে।
        $notEqual = $n1 != $n2;
        echo $notEqual;
        // output bool(false)


        // এখানে "===" নাম হল Strict Equal Operator বা Identity Operator । এটি value এবং type উভয়ই চেক করে।
        // যদি value এবং type উভয়ই সমান হয়, তাহলে এটি true রিটার্ন করে,
        // আর যদি value বা type এর মধ্যে কোন একটি সমান না হয়, তাহলে এটি false রিটার্ন করে।
        $identical = $n1 === $n2;
        var_dump($identical);
        // output bool(false)



        // এখানে "!==" হল Strict Not Equal Operator । এটি value এবং type উভয়ই চেক করে।
        // যদি value এবং type উভয়ই সমান না হয়, তাহলে এটি true রিটার্ন করে,
        // আর যদি value বা type এর মধ্যে কোন একটি সমান হয়, তাহলে এটি false রিটার্ন করে।
        $notIdentical = $n1 !== $n2;
        var_dump($notIdentical);
        // output bool(true)




        // এখানে ">" হল Greater Than Operator । এটি চেক করে যে বাম পাশের মান ডান পাশের মানের চেয়ে বড় কি না।
        // যদি বাম পাশের মান ডান পাশের মানের চেয়ে বড় হয়,
        // তাহলে এটি true রিটার্ন করে, আর যদি বাম পাশের মান ডান পাশের মানের চেয়ে ছোট বা সমান হয়,
        // তাহলে এটি false রিটার্ন করে।
        $m1 = 11;
        $m2 = "10";
        $greater = $m1 > $m2;
        var_dump($greater);
        // output bool(true)




        // এখানে "<" হল Less Than Operator । এটি চেক করে যে বাম পাশের মান ডান পাশের মানের চেয়ে ছোট কি না।
        // যদি বাম পাশের মান ডান পাশের মানের চেয়ে ছোট হয়,    
        // তাহলে এটি true রিটার্ন করে, আর যদি বাম পাশের মান ডান পাশের মানের চেয়ে বড় বা সমান হয়,
        // তাহলে এটি false রিটার্ন করে।
        $less = $m1 < $m2;
        var_dump($less);
        // output bool(false)



        // এখানে ">=" হল Greater Than or Equal Operator । এটি চেক করে যে বাম পাশের মান ডান পাশের মানের চেয়ে বড় বা সমান কি না।
        // যদি বাম পাশের মান ডান পাশের মানের চেয়ে বড় বা সমান হয়,
        // তাহলে এটি true রিটার্ন করে, আর যদি বাম পাশের মান ডান পাশের মানের চেয়ে ছোট হয়,
        // তাহলে এটি false রিটার্ন করে।
        $greaterOrEqual = $m1 >= $m2;
        var_dump($greaterOrEqual);
        // output bool(true)



        // এখানে "<=" হল Less Than or Equal Operator । এটি চেক করে যে বাম পাশের মান ডান পাশের মানের চেয়ে ছোট বা সমান কি না।
        // যদি বাম পাশের মান ডান পাশের মানের চেয়ে ছোট বা সমান হয়,
        // তাহলে এটি true রিটার্ন করে, আর যদি বাম পাশের মান ডান পাশের মানের চেয়ে বড় হয়,
        // তাহলে এটি false রিটার্ন করে।        
        $lessOrEqual = $m1 <= $m2;
        var_dump($lessOrEqual);
        // output bool(false)



        // "সমান নয়" (Not Equal) এটি চেক করে যে বাম পাশের মান ডান পাশের মানের সমান নয় কি না।
        // যদি বাম পাশের মান ডান পাশের মানের সমান না হয়,            
        // তাহলে এটি true রিটার্ন করে, আর যদি বাম পাশের মান ডান পাশের মানের সমান হয়,
        // তাহলে এটি false রিটার্ন করে।
        $notEqual = $m1 <> $m2;
        // Note: "<>" is an alternative syntax for "!=" 
        var_dump($notEqual);
        // output bool(true)
