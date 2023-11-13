<?php 
include 'questions_answers.php';
include 'common.php';
session_start();

// save the user's category and point choice to a cookie
if(isset($_GET['question'])) {
    setcookie("currentQ", $_GET['question']);
}
?>

<!DOCTYPE html>
<html lang="en-US">
  <head>
    <title>Jeapordy Game</title>
    <link rel="stylesheet" href="style.css">
  </head>

    <body>
        
        <?php

            // determine which question was chosen
            if (isset($_GET['question'])) {
                $questionType = $_GET['question'];
            } else if(isset($_COOKIE['currentQ'])) {
                $questionType = $_COOKIE['currentQ'];
            } 

            // parse out category and the number (100 or 200 or...)
            $category = substr($questionType, 0, 4);
            $number = substr($questionType, 5, 1);
            
            // determine the category - $topics is defined in questions_answers.php
            $cat_name = $topics[$mapping[$category]];

            // if the user has submitted their answer
            if(isset($_POST['userResponse'])) {
                // get the answer - $answer_pool defined in questions_answers.php
                $a = $answer_pool[$mapping[$category]][$number-1];

                // if answer is identical, update user's points
                if(strtolower($_POST['userResponse']) == strtolower($a)) {
                    $_SESSION["points"] += ((int)$number * 100);
                    echo "<div><h1>Your answer is Correct!</h1> 
                    <label>You earned $". ((int)$number * 100)." points!</label>
                    <br> <button><a href='game.php'>Return to Board</a></button></div>";
                    exit;
                } else {
                    $_SESSION["points"] -= ((int)$number * 100);
                    echo "<div><h1>Sorry, your answer is Wrong.</h1> 
                    <label>You lost $". ((int)$number * 100)." points.</label>
                    <br> <button><a href='game.php'>Return to Board</a></button></div>";
                    exit;
                }

                
            }
            // if user needs to answer the question, determine question and run remaining code
            else {
                $q = $question_pool[$mapping[$category]][$number-1];
            }
            
        ?>
        <form method="POST" action="question.php">
            <label for="userResponse"><?= $q ?></label>
            <br>
            <input type="text" name="userResponse" id="userResponse" size='20'>
            <input type="submit" value="Enter">
        </form>

        <div class="timer-container">
            <div class="timer-bar">
                <div class="timer_1"></div>
                <div class="timer_2"></div>
                <div class="timer_3"></div>
                <div class="timer_4"></div>
                <div class="timer_5"></div>
                <div class="timer_6"></div>
                <div class="timer_7"></div>
                <div class="timer_8"></div>
                <div class="timer_9"></div>
            </div>
        </div>

    </body>

</html>