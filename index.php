<?php
include 'common.php';

// if user comes back to first page, reset session and question cookie
resetCookieSession();

?>
<!DOCTYPE html>
<html lang="en-US">
  <head>
    <title>Jeapordy Game</title>
    <link rel="stylesheet" href="style.css">
  </head>

<body>
  

  <div class="login">
    
    <div class="container">
        <h1 id="gameTitle">Jeopardy</h1>
        <h2>by Team Victory<br>(Bliena, Ruqayyah, Neveah, Abe, Keidra)</h2>
        <br>
        <br>

        <form method="get" action="game.php">
            <label for="name">Enter a Name:</label><br>
            <input type="text" name="name" id="name" size="16">
            <input type="submit" value="Start Game">
        </form>
    </div>

    <table>
        <caption>Leaderboard</caption>
        <tr>
            <th>User</th>
            <th>Points</th>
        </tr>
        <?php
            // if there are saved previous winners in the last 30 days
            if(isset($_COOKIE['players'])) {
                // turn cookie into array
                $players = decodePlayerCookie($_COOKIE['players']);
                $player_users = array_keys($players);

                // show only top 5 players
                $num = count($players);
                if ($num > 5) {
                    $num = 5;
                }

                for ($i=0; $i < $num; $i++) { 
                    $user = $player_users[$i];
                    $points = $players[$player_users[$i]];
                    echo "<tr> <td>".$user."</td><td>".$points."</td></tr>";
                }

            } else {
                echo "<tr> <td>---</td><td>---</td></tr>";
            }
        ?>
    </table>

  </div>
</body>
</html>