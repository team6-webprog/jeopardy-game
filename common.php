<?php

include 'questions_answers.php';

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
        $updated_players[$pair[0]] = $pair[1];
    }

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

$mapping = array();

for ($i=0; $i < count($topics); $i++) { 
    $category = "cat".($i+1);
    $mapping[$category] = $i;
}

?>