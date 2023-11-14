<?php 
include 'questions_answers.php';
include 'common.php';
session_start();

// if this is the user's first round, initialize points and name and save to session
if(isset($_GET['name'])) {
    $name = $_GET['name'];
    $points = 0;
    $answered = "";

    $_SESSION["user"] = $name;
    $_SESSION["points"] = $points;
    $_SESSION["answered"] = $answered;
} 
// otherwise, get name and current points from stored session cookie
else if(isset($_SESSION['user'])) {
    $name = $_SESSION['user'];
    $points = $_SESSION['points'];
    $answered = $_SESSION['answered'];
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
            <div>
                <a href="end.php"><div class="button">End Game</div></a>
            </div>
        </div>

        
        <table>
            
            <tr>
                <?php 
                    foreach($topics as $topic) {
                        echo "<th>$topic</th>";
                    }
                ?>

            </tr>

            <?php
                $previous_questions = explode(",", $answered);
                if(isset($_COOKIE["currentQ"]) and !in_array($_COOKIE["currentQ"], $previous_questions)) {
                    array_push($previous_questions, $_COOKIE["currentQ"]);
                }

                if (count($previous_questions) == (count($question_pool) * count($question_pool[0]) + 1)) {
                    header('Location: end.php');
                    exit;
                }

                for ($i=0; $i < count($question_pool[0]); $i++) {
                    echo "<tr>"; 
                    for ($j=0; $j < count($question_pool); $j++) { 
                        $question_id = "cat". ($j+1) . "_" . ($i+1) ."00";
                        if(!in_array($question_id, $previous_questions)) {
                            echo "<td><a href='question.php?question=".$question_id."'>$". ($i+1) ."00</a></td>";   
                        } else {
                            echo "<td class='answered'>$". ($i+1) ."00</td>";
                        }
                    }
                    echo "</tr>";
                }

                $_SESSION['answered'] = implode(",", $previous_questions);
            ?>

        </table>
    
    </body>
</html>