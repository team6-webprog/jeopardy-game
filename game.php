<?php 
include 'questions_answers.php';
session_start();

// if this is the user's first round, initialize points and name and save to session
if(isset($_GET['name'])) {
    $name = $_GET['name'];
    $points = 0;

    $_SESSION["user"] = $name;
    $_SESSION["points"] = $points;
} 
// otherwise, get name and current points from stored session cookie
else if(isset($_SESSION['user'])) {
    $name = $_SESSION['user'];
    $points = $_SESSION['points'];
}
?>
<!DOCTYPE html>
<html>
    <head lang="en-US">
        <title>Jeopardy Game</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <div class="player_info">
            <div>
                <h2>Player:&nbsp;</h2>
                <h2><?= $name ?></h2>
            </div>
            <div>
                <h2>Points:&nbsp;</h2>
                <h2>$<?= $points ?></h2>
            </div>
        </div>
        <table>
            <tr>
                <th><?= $topics[0] ?></th>
                <th><?= $topics[1] ?></th>
                <th><?= $topics[2] ?></th>
                <th><?= $topics[3] ?></th>
                <th><?= $topics[4] ?></th>
            </tr>

            <tr>
                <td><a href="question.php?question=cat1_100">$100</a></td>
                <td><a href="question.php?question=cat2_100">$100</a></td>
                <td><a href="question.php?question=cat3_100">$100</a></td>
                <td><a href="question.php?question=cat4_100">$100</a></td>
                <td><a href="question.php?question=cat5_100">$100</a></td>
            </tr>

            <tr>
                <td><a href="question.php?question=cat1_200">$200</a></td>
                <td><a href="question.php?question=cat2_200">$200</a></td>
                <td><a href="question.php?question=cat3_200">$200</a></td>
                <td><a href="question.php?question=cat4_200">$200</a></td>
                <td><a href="question.php?question=cat5_200">$200</a></td>
            </tr>

            <tr>
                <td><a href="question.php?question=cat1_300">$300</a></td>
                <td><a href="question.php?question=cat2_300">$300</a></td>
                <td><a href="question.php?question=cat3_300">$300</a></td>
                <td><a href="question.php?question=cat4_300">$300</a></td>
                <td><a href="question.php?question=cat5_300">$300</a></td>
            </tr>

            <tr>
                <td><a href="question.php?question=cat1_400">$400</a></td>
                <td><a href="question.php?question=cat2_400">$400</a></td>
                <td><a href="question.php?question=cat3_400">$400</a></td>
                <td><a href="question.php?question=cat4_400">$400</a></td>
                <td><a href="question.php?question=cat5_400">$400</a></td>
            </tr>

            <tr>
                <td><a href="question.php?question=cat1_500">$500</a></td>
                <td><a href="question.php?question=cat2_500">$500</a></td>
                <td><a href="question.php?question=cat3_500">$500</a></td>
                <td><a href="question.php?question=cat4_500">$500</a></td>
                <td><a href="question.php?question=cat5_500">$500</a></td>
            </tr>
        </table>
        <div>
            <button><a href="end.php">End Game</a></button>
        </div>
    
    </body>
</html>