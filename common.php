<?php

// Cookie should be in string of format:
// user1--1000||user2--900||user3--320

function decodePlayerCookie($str) {
    // split each user-point pair
    $players_old = explode("||", $str);
    $updated_players = array();

    // create an associative array with user name
    // as key and point as value

    for ($i=0; $i < count($players_old) - 1; $i++) { 
        $pair = explode("--", $players_old[$i]);
        // print_r($pair);
        $updated_players[$pair[0]] = $pair[1];
    }
    // foreach($players_old as $user_points) {
    //     $i = explode("--", $user_points);
    //     print_r($i);
    //     $updated_players[$i[0]] = $i[1]; //this is causing an undefined key error, can't figure it out?
    // }

    // return associative array of form:
    // Array ( "user1" => 1000, "user2" => 900... )
    return $updated_players;
}

// change array back into string to save cookie
function addToPlayerCookie($players) {
    $cookie = "";

    foreach($players as $key => $val) {
        $cookie .= ($key . "--". $val."||");
    }

    return $cookie;
}

$mapping = array("cat1" => 0, "cat2" => 1, "cat3" => 2, "cat4" => 3, "cat5" => 4);

?>