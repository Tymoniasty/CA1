<?php require_once "./input.php";

//when the submit was pressed  
if (isset($_POST['submit'])){
    //check values
    if (is_string($_POST['name']) and is_numeric($_POST['systolic']) and is_numeric($_POST['diastolic'])){
        $input = new \app\input;
        }
    if (is_numeric($_POST['name'])){
        // Print error message to the browser
        echo 'Non numeric values are required';
        }
    elseif(is_string($_POST['systolic']) or is_string($_POST['diastolic'])){
        // Print error message to the browser
        echo 'Numeric values are required';
        }   
} 
