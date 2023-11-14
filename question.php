<?php 
include 'questions_answers.php';
include 'common.php';
session_start();

// save the user's category and point choice to a cookie
if(isset($_GET['question'])) {
    setcookie("currentQ", $_GET['question']);
}

// timer (visually represented with divs below)
if(!isset($_POST['userResponse']) and (!isset($_GET['status']) or !$_GET['status'] == "timeout")) {
    header( "refresh:10;url=question.php?status=timeout" );
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

            // get the answer - $answer_pool defined in questions_answers.php
            $a = $answer_pool[$mapping[$category]][$number-1];

            // if the user has submitted their answer
            if(isset($_POST['userResponse'])) {
                
                // if answer is correct, update user's points
                if($_POST['userResponse'] == $a["r"]) {
                    echo responseToDisplay("correct", $number);
                    exit;
                } else {
                    echo responseToDisplay("wrong", $number);
                    exit;
                }
            } 
            // else if user didn't answer in time
            else if (isset($_GET['status'])) {
                if($_GET['status'] == "timeout") {
                    echo responseToDisplay("timeout", $number);
                    exit;
                }
            }
            // if user needs to answer the question, determine question and run remaining code
            else {
                $q = $question_pool[$mapping[$category]][$number-1];
            }
            
        ?>

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


        <form method="POST" action="question.php" class="question_form">
            <label><?= $q ?></label>
            <br>
            
            <div class="radioOptions">
            <?php 
                // shuffle associative array
                $keys = array_keys($a);
                shuffle($keys);
                $shuffled_options = array();
                foreach($keys as $key) {
                  $shuffled_options[$key] = $a[$key]; 
                }

                foreach($shuffled_options as $key => $answer_choice) {
                    echo "<input type='radio' id='$key' name='userResponse' value='$answer_choice' required>
                    <label for='$key' class='radioLabel'>$answer_choice</label><br>";
                }
            ?>
            </div>

            <input type="submit" value="Enter">
        </form>

    </body>

</html>