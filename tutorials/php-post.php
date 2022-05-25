<!DOCTYPE html>

<html>

<body>

<!--

Switch Case Statements

-->

<form action = "" method = 'post'>

<br>

<B>Please enter your First Name:</B><input type= "text" name="Firstname" placeholder ="Enter First Name">

<br>

<B>What was your Letter Grade level :</B><input type= "text" name="grade" placeholder ="Enter Grade">

<br>

<B>Please click Submit :</B><input type = "submit">

<br>

</form>

<?php

$firstName = $_POST["Firstname"]; // Explain here

$grade = $_POST["grade"]; // Explain here

if (isset($grade)) { //Explain here

switch($grade){ // Explain here

case ("A"):

echo " An excellent effort ".$grade; // Explain here

echo " ".$firstName; // Explain here

break;

case ("a"):

echo " An excellent effort ".$grade; // Explain here

echo " ".$firstName; // Explain here

break;

case ("B"):

echo " A very good effort ".$grade; // Explain here

echo " ".$firstName;

break;

case ("b"):

echo " A very good effort ".$grade; // Explain here

echo " ".$firstName;

break;

case ("C"):

echo " An acceptable effort ".$grade; // Explain here

echo " ".$firstName;

break;

case ("c"):

echo " An acceptable effort ".$grade; // Explain here

echo " ".$firstName;

break;

case ("D"): // Explain here

echo " More of an effort next time ".$grade;

echo " ".$firstName;

break;

case ("d"): // Explain here

echo " More of an effort next time ".$grade;

echo " ".$firstName;

break;

default: // Explain here

echo " More of an effort next time ";

echo " ".$firstName;

} // Explain here

} // Explain here

else { // Explain here

echo "Not set!";

} // Explain here

?>

</body>

</http>