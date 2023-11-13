<?php

include 'common.php';

session_start();

// if there is already a saved leaderboard
if(isset($_COOKIE['players'])) {
    // decode the current cookie into an array
    $oldPlayers = $_COOKIE['players'];
    $player_list = decodePlayerCookie($oldPlayers);

    // add current user to leaderboard and sort in desc. order
    $player_list[$_SESSION['user']] = $_SESSION['points'];
    arsort($player_list);

    // reformat array into a string
    $updated_cookie = addToPlayerCookie($player_list);
    
    // save the cookie
    setcookie('players', $updated_cookie, time()+60*60*24*30);
} else {
    // if this is the first user to play, initialize the cookie
    $cookie_val = addToPlayerCookie(array($_SESSION['user'] => $_SESSION['points']))
    setcookie('players', $cookie_val, time()+60*60*24*30);
}

?>
<!DOCTYPE html>
<html lang="en-US">
  <head>
    <title>Jeapordy Game</title>
    <link rel="stylesheet" href="style.css">
  </head>

<body>
  <div class="container">

    <h1 id="gameTitle">Congrats! Thank you for playing.</h1>
    <h2>Your Final Score:</h2>

    <p><?= $_SESSION['user'] ?> - <?= $_SESSION['points'] ?></p>
    <button><a href="index.php">Play Again</a></button>
  </div>

</body>
</html>