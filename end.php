<?php

include 'common.php';

session_start();

updateLeaderBoard($_SESSION['user'], $_SESSION['points'])

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

    <label><?= $_SESSION['user'] ?> ~ $<?= $_SESSION['points'] ?></label><br>
    <a href="index.php"><div class="button">Play Again</div></a>
  </div>

</body>
</html>