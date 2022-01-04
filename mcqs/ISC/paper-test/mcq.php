<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Quiz</title>
    <link rel="stylesheet" href="css/mcq.css">
</head>
    <body onload ="NextQuestion(0)">
        <nav class="topnav">
            <img src="img/logo.png" alt="English Learners Logo"><br>
            <a id = "mainway" href="main.php">Click Here to Go Home</a><br>&nbsp
        </nav>
        <main>
            <!-- creating a modal for when quiz ends -->
            <div class="modal-container" id="score-modal">
    
                <div class="modal-content-container">
    
                    <h1>Congratulations, Quiz Completed.</h1>
    
                    <div class="grade-details">
                        <p>Attempts : 12</p>
                        <p>Wrong Answers : <span id="wrong-answers"></span></p>
                        <p>Right Answers : <span id="right-answers"></span></p>
                        <p>Grade : <span id="grade-percentage"></span>%</p>
                        <p ><span id="remarks"></span></p>
                    </div>
    
                    <div class="modal-button-container">
                        <button onclick="closeScoreModal()">Continue</button>
                    </div>
    
                </div>
            </div>
    <!-- end of modal of quiz details-->
    
            <div class="game-quiz-container">
    
                <div class="game-details-container">
                    <h1>Score : <span id="player-score"></span> / 12</h1>
                    <h1> Question : <span id="question-number"></span> / 12</h1>
                </div>
    
                <div class="game-question-container">
                    <h1 id="display-question"></h1>
                </div>
    
                <div class="game-options-container">
    
                   <div class="modal-container" id="option-modal">
    
                        <div class="modal-content-container">
                             <h1>Please Pick An Option</h1>
    
                             <div class="modal-button-container">
                                <button onclick="closeOptionModal()">Continue</button>
                            </div>
    
                        </div>
    
                   </div>
    
                    <span>
                        <input type="radio" id="option-one" name="option" class="radio" value="optionA" />
                        <label for="option-one" class="option" id="option-one-label"></label>
                    </span>
    
    
                    <span>
                        <input type="radio" id="option-two" name="option" class="radio" value="optionB" />
                        <label for="option-two" class="option" id="option-two-label"></label>
                    </span>
    
    
                    <span>
                        <input type="radio" id="option-three" name="option" class="radio" value="optionC" />
                        <label for="option-three" class="option" id="option-three-label"></label>
                    </span>
    
    
                    <span>
                        <input type="radio" id="option-four" name="option" class="radio" value="optionD" />
                        <label for="option-four" class="option" id="option-four-label"></label>
                    </span>
    
    
                </div>
    
                <div class="next-button-container">
                    <button id="btn" value="Confirm" onclick="handleNextQuestion()">Confirm</button>
                </div>
    
            </div>
        </main>
        <script src="mcqs/echoes-isc/qp.js"></script>
        <script src="js/mcq.js"></script>
    </body>
</html>