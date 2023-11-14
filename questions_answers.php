<?php

// Trivia Questions by Category

$sci_questions = array(
    "What is the chemical symbol for water?", 
    "Which planet is known as the Red Planet?", 
    "What is the powerhouse of the cell?", 
    "What is the largest mammal on Earth?", 
    "What is the speed of light in a vacuum?"
);

$lit_questions = array(
    "Who wrote 'Romeo and Juliet'?", 
    "Who wrote 'The Colour Purple'?", 
    "What is the opening line of Charles Dickens' 'A Tale of Two Cities'?", 
    "Who wrote the play 'Hamlet'?", 
    "In George Orwell's '1984', what is the oppressive regime called?"
);

$hist_questions = array(
    "Who was the first President of the United States?", 
    "In what year did Christopher Columbus first reach the Americas?", 
    "Who was the leader of the Soviet Union during World War II?", 
    "What event marked the start of World War I?", 
    "What ancient wonder was located in Alexandria, Egypt?"
);

$tech_questions = array(
    "What does the acronym 'CPU' stand for?", 
    "Who is the co-founder of Microsoft Corporation?", 
    "What does 'HTML' stand for in web development?", 
    "In computing, what does the acronym 'URL' stand for?", 
    "Who is known as the father of computer science?"
);

$rand_questions = array(
    "What is the capital city of Australia?", 
    "What is the largest ocean on Earth?", 
    "Which element has the chemical symbol 'K' on the periodic table?", 
    "What is the world's longest river?", 
    "In what year did the Titanic sink?"
);

$diff_questions = array(
    "What does CORS stand for in web development?", 
    "What is the purpose of a CSS preprocessor?", 
    "Which of the following is not a valid HTTP status code?", 
    "What is the purpose of the `async` attribute in a script tag?", 
    "What is the difference between `localStorage` and `sessionStorage` in JavaScript?"
);

// Trivia Answers by Category

$sci_answers = array(
    array("r"=>"H2O", "w1" => "CO2", "w2" => "NaCl", "w3" => "O2"), 
    array("r" => "Mars", "w1" => "Earth", "w2" => "Jupiter", "w3" => "Venus"), 
    array("r" => "Mitochondria", "w1" => "Nucleus", "w2" => "Endoplasmic reticulum", "w3" => "Ur Mom??? 😯"), 
    array("r" => "Blue whale", "w1" => "Elephant", "w2" => "Giraffe", "w3" => "Dolphin"), 
    array("r" => "299,792 km/s", "w1" => "150,000 km/s", "w2" => "500,000 km/s", "w3" => "1,000,000 km/s")
);

$lit_answers = array(
    array("r" => "William Shakespeare", "w1" => "William Faulkner", "w2" => "William Wordsworth", "w3" => "Jane Austen"), 
    array("r" => "Alice Walker", "w1" => "Frederick Douglass", "w2" => "Stephen King", "w3" => "Solomon Northup"), 
    array("r" => "It was the best of times, it was the worst of times", "w1" => "Once upon a time...", "w2" => "In the beginning...", "w3" => "Call me Ishmael."), 
    array("r" => "William Shakespeare", "w1" => "Christopher Marlowe", "w2" => "William Wordsworth", "w3" => "Jane Austen"), 
    array("r" => "The Party", "w1" => "The Empire", "w2" => "The Republic", "w3" => "The Order")
);

$hist_answers = array(
    array("r" => "George Washington", "w1" => "Thomas Jefferson", "w2" => "John Adams", "w3" => "Abraham Lincoln"), 
    array("r" => "1492", "w1" => "1776", "w2" => "1607", "w3" => "1620"), 
    array("r" => "Joseph Stalin", "w1" => "Vladimir Putin", "w2" => "Mikhail Gorbachev", "w3" => "Nikita Khrushchev"), 
    array("r" => "The assassination of Archduke Franz Ferdinand", "w1" => "The sinking of the Lusitania", "w2" => "The Treaty of Versailles", "w3" => "The Battle of Stalingrad"), 
    array("r" => "The Lighthouse of Alexandria", "w1" => "The Hanging Gardens of Babylon", "w2" => "The Colossus of Rhodes", "w3" => "The Great Pyramid of Giza")
);

$tech_answers = array(
    array("r" =>  "Central Processing Unit", "w1" => "Central Power Unit", "w2" => "Computer Processing Unit", "w3" => "Center Processor Unit"), 
    array("r" => "Bill Gates", "w1" => "Steve Jobs", "w2" => "Mark Zuckerberg", "w3" => "Larry Page"), 
    array("r" => "Hypertext Markup Language", "w1" => "Hyperlink and Text Markup Language", "w2" => "Home Tool Markup Language", "w3" => "Hyperlink Text Management Language"), 
    array("r" => "Uniform Resource Locator", "w1" => "Universal Resource Locator", "w2" => "Unified Resource Locator", "w3" => "User Resource Locator"), 
    array("r" => "Alan Turing", "w1" => "Bill Gates", "w2" => "Steve Jobs", "w3" => "Tim Berners-Lee")
);

$rand_answers = array(
    array("r" => "Canberra", "w1" => "Sydney", "w2" => "Melbourne", "w3" => "Brisbane"), 
    array("r" => "Pacific Ocean", "w1" => "Southern Ocean", "w2" => "Atlantic Ocean", "w3" => "Indian Ocean"), 
    array("r" => "Potassium", "w1" => "Krypton", "w2" => "Xenon", "w3" => "Helium"), 
    array("r" => "Amazon River", "w1" => "Nile River", "w2" => "Yangtze River", "w3" => "Mississippi River"), 
    array("r" => "1912", "w1" => "1905", "w2" => "1920", "w3" => "1931")
);

$diff_answers = array(
    array("r" => "Cross-Origin Resource Sharing", "w1" => "Centralized Object Retrieval System", "w2" => "Controlled Origin Request System", "w3" => "Cross-Origin Rendering System"),
    array("r" => "To generate CSS code using a scripting language", "w1" => "To compress CSS files for faster loading", "w2" => "To enhance browser compatibility", "w3" => "To minify JavaScript code"),
    array("r" => "303 See Other", "w1" => "404 Not Found", "w2" => "200 OK", "w3" => " 503 Service Unavailable"),
    array("r" => "To indicate that the script should be executed asynchronously", "w1" => "To load the script after the page has finished parsing", "w2" => "To ensure the script is loaded in a specific order", "w3" => "To prevent the script from being cached"),
    array("r" => "`localStorage` persists across sessions, while `sessionStorage` is only accessible within the same session.", "w1" => "`localStorage` is only accessible within the same session, while `sessionStorage` persists across sessions.", "w2" => "`sessionStorage` is more secure and can only be accessed by the same page that stored the data.", "w3" => "There is no difference; they are interchangeable.")
);

// Category Names
$topics = array("Science", "Literature", "History", "Technology", "Random Trivia", "HARD: Web Prog");

// Array of Questiosn and Answers
$question_pool = array($sci_questions, $lit_questions, $hist_questions, $tech_questions, $rand_questions, $diff_questions);
$answer_pool = array($sci_answers, $lit_answers, $hist_answers, $tech_answers, $rand_answers, $diff_answers);
?>