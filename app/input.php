<html>
<head>
	<style>
        * {
            margin: 10;
            padding: 10;
        }
        .image {
            display: grid;
            height: 100%;
        }
        .center-fit {
            max-width: 100%;
            max-height: 100vh;
            margin: auto;
        }
    </style>
</head>
<body>

<?php
define("systolicmin", 70);
define("systolicmax", 190);
define("diastolicmin", 40);
define("diastolicmax", 100);
define("Low", "Low Blood Pressure, maybe a cup of coffee?");
define("Ideal", "Ideal Blood Presure! Keep living healthy!");
define("PreHigh", "Pre-High Blood Presure - think about changing your lifestyle.");
define("High", "High Blood Presure - please consult your GP!");

$name=$_POST["name"];
$systolic=$_POST["systolic"];
$diastolic=$_POST["diastolic"];

if ($systolic<systolicmin or $systolic>systolicmax){
    echo "Hi " . $name . ", systolic value should be between 70 and 190 - please provide a correct value!<br>";
}
if($diastolic<diastolicmin or $diastolic>diastolicmax){
    echo "Hi " .$name. ", diastolic value should be between 40 and 100 - please provide a correct value!";
} 
else {
    $s = $systolic;
    $d = $diastolic;
    if ($d>$s){
        echo "Hi " . $name ."!<br>";
		echo "Please ensure you have provided correct data - Systolic pressure is always greater than Distolic pressure!";
    } 
    else {
        if ($s <= systolicmax and $s >= 140 or $d <= diastolicmax and $d >= 90) {
            echo "Hi " . $name . ", Bad news! You have a " . High;
        }
        //if Sysyolic between 120(inclusive) and 140 AND Diastolic between 80(inclusive) and 90
        elseif ($s >= 120 and $s < 140 or $d >= 60 and $d < 80) {
            echo "Hi " . $name . ", Bad news! You have a " . PreHigh;
        }
        //if Systolic between 90(inclusive) and 120 AND Diastolic between 60(inclusive) and 80
        elseif ($s >= 90 and $s < 120 or $d >= 60 and $d < 80) {
            echo "Hi " . $name . ", Good news! You have a " . Ideal;
        }
        //if Systolic between 70(inclusive) and 90 AND Diastolic between 40(inclusive) and 60
        elseif ($s >= systolicmin and $s < 90 or $d >= diastolicmin and $d < 60) {
            echo "Hi " . $name . ", Bad news! You have a " . Low;
        } 
        else {
            echo "Hi " . $name . "<br> Something went wrong with your data input - please try again!";
        }
    }
}
?>
<div class="image">
	<img class="center-fit" src="figure.png" alt="Blood Presure Chart">
</div>
<a href="javascript:history.back()">Go Back</a>
<br><br>
</body>
</html>