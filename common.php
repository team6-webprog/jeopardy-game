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
function encodePlayerCookie($players) {
    $cookie = "";

    foreach($players as $key => $val) {
        $cookie .= ($key . "--". $val."||");
    }

    return $cookie;
}

// reset cookies and session data 
function resetCookieSession() {
    if(isset($_SESSION['user'])) {
        session_unset();
    }
    
    if(isset($_COOKIE['currentQ'])) {
        setcookie("currentQ", $_COOKIE['currentQ'], time() - 3600);
    }
}

// update leaderboard on game end
function updateLeaderBoard($new_user, $new_points) {
    $updated_cookie = "";

    // if there is already a saved leaderboard
    if(isset($_COOKIE['players'])) {
        // decode the current cookie into an array
        $oldPlayers = $_COOKIE['players'];
        $player_list = decodePlayerCookie($oldPlayers);

        // add current user to leaderboard and sort in desc. order
        $player_list[$new_user] = $new_points;
        arsort($player_list);

        // reformat array into a string
        $updated_cookie = encodePlayerCookie($player_list);
        
    } else {
        // if this is the first user to play, initialize the cookie
        $updated_cookie = encodePlayerCookie(array($new_user => $new_points));
    }
    // save the cookie
    setcookie('players', $updated_cookie, time()+60*60*24*30);
}

// response when user answers question/question times out
function responseToDisplay($question_status, $number) {
    $points_gained = ((int)$number * 100);
    $h1  = "";
    if ($question_status == "correct") {
        $_SESSION["points"] += $points_gained;
        $h1 = "Your answer is Correct!";
        $verb = "earned";
    } else if ($question_status == "wrong" or $question_status == "timeout") {
        $_SESSION["points"] -= $points_gained;
        $verb = "lost";

        if($question_status == "wrong") {
            $h1 = "Sorry, your answer is Wrong.";
        } else {
            $h1 = "Sorry, you ran out of time.";
        }
    }

    return "<div><h1>$h1</h1> 
    <label>You $verb $". $points_gained ." points.</label>
    <br> <a href='game.php'><div class='button'>Return to Board</div></a> </div>";
}


// map a category to array index position

$mapping = array();

for ($i=0; $i < count($topics); $i++) { 
    $category = "cat".($i+1);
    $mapping[$category] = $i;
}

?>