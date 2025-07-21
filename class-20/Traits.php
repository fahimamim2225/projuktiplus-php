<?php
// trait Logger {
//     public function log($message) {
//         echo "$message";
//     }
// }

// trait TimeTracker {
//     public function trackTime () {
//         echo "Tracking Time:" . date('Y-m-d');
//     }
// }

// class User {
//     use Logger, TimeTracker;
//     public function createUser($username) {
//         $this->log("Username $username has been created\n");
//         $this->trackTime();
//     }
// }

// $user = new User();
// $user->createUser("mim");


trait Logger {
    public function log() {
        echo "Logger log method";
    }
}

trait TimeTracker {
    public function log () {
        echo "TimeTracker log method";
    }
}

class User {
    // use Logger, TimeTracker {
    // TimeTracker::log insteadOf Logger;
    // }

    use Logger {
        log as private;
    }
    public function createUser($username) {
        echo "Username $username has been created\n";
        $this->log();
    }
}

$user = new User();
$user->createUser("mim");


/*
Namespace:

project/ 
    frontEnd/ 
        Services.php
    backEnd/ 
        Services.php


namespace project\frontEnd
namespace project\backEnd
*/