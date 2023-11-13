<?php

// Trivia Questions by Category

$sci_questions = array("What is the chemical symbol for water?", "Which planet is known as the Red Planet?", "What is the powerhouse of the cell?", "What is the largest mammal on Earth?", "What is the speed of light in a vacuum?");

$lit_questions = array("Who wrote 'Romeo and Juliet'?", "Who wrote 'The Colour Purple'?", "What is the opening line of Charles Dickens' 'A Tale of Two Cities'?", "Who wrote the play 'Hamlet'?", "In George Orwell's '1984', what is the oppressive regime called?");

$hist_questions = array("Who was the first President of the United States?", "In what year did Christopher Columbus first reach the Americas?", "Who was the leader of the Soviet Union during World War II?", "What event marked the start of World War I?", "What ancient wonder was located in Alexandria, Egypt?");

$tech_questions = array("What does the acronym 'CPU' stand for?", "Who is the co-founder of Microsoft Corporation?", "What does 'HTML' stand for in web development?", "In computing, what does the acronym 'URL' stand for?", "Who is known as the father of computer science?");

$rand_questions = array("What is the capital city of Australia?", "What is the largest ocean on Earth?", "Which element has the chemical symbol 'K' on the periodic table?", "What is the world's longest river?", "In what year did the Titanic sink?");

// Trivia Answers by Category

$sci_answers = array("H2O", "Mars", "Mitochondria", "Blue whale", "299,792 km/s");

$lit_answers = array("William Shakespeare", "Alice Walker", "It was the best of times, it was the worst of times", "William Shakespeare", "The Party");

$hist_answers = array("George Washington", "1492", "Joseph Stalin", "The assassination of Archduke Franz Ferdinand", "The Lighthouse of Alexandria");

$tech_answers = array("Central Processing Unit", "Bill Gates", "Hypertext Markup Language", "Uniform Resource Locator", "Alan Turing");

$rand_answers = array("Canberra", "Pacific Ocean", "Potassium", "Amazon River", "1912");

// Category Names
$topics = array("Science", "Literature", "History", "Technology", "Random Trivia");

// Array of Questiosn and Answers
$question_pool = array($sci_questions, $lit_questions, $hist_questions, $tech_questions, $rand_questions);
$answer_pool = array($sci_answers, $lit_answers, $hist_answers, $tech_answers, $rand_answers);
?>