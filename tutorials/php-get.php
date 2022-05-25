<!DOCTYPE html>

<html>

<body>

<!--

If..elseif Statements with $_GET

-->

<form action = "" method = 'get'>

<br>

<B>What was your Letter Grade level :</B><input type= "text" name="grade" placeholder ="Enter Grade">

<br>

<B>Please type your first name:</B><input type= "text" name="Name" placeholder ="Enter Name">

<br>

<B>Please click Submit :</B><input type = "submit">

<br>

</form>

<?php

$grade = $_GET["grade"];

$Name = $_GET["Name"];

//if (isset($grade)) { //This gets whatever is inputted into the 'grade' and 'name' field and assigns it into the corresponding $grade and $name variable

if ($grade == ("A" || "a")){ /* This sets 'A' as a grade and assigns it to an action if A is detected in the input field where it returns
    the text 'An excellent effort' along with the $grade variable and $name variable*/

echo " An excellent effort ".$grade;

echo " ".$Name;

echo "<br>";

}

elseIf ($grade == ("B" || "b")){ /* This sets 'B' as a grade and assigns it to an action where if B is detected in the input field
    it will return the text 'A very good effort' along with $grade variable and $name variable */

echo " A very good effort ".$grade;

echo " ".$Name;

echo "<br>";

}

elseIf ($grade == ("C" || "c")){ /* This sets 'C' as a grade and assigns it to an action where if C is detected in the input field
    it will return the text 'A very good effort' along with $grade variable and $name variable  */

echo " A very good effort ".$grade;

echo " ".$Name;

echo "<br>";

}

elseIf ($grade == ("D" || "d")){ /* This sets 'D' as a grade and assigns it to an action where if D is detected in the input field
    it will return the text 'A reasonable effort, please try harder' along with $grade variable and $name variable */

echo " A reasonable effort, please try harder ".$grade;

echo " ".$Name;

echo "<br>";

}

else { /* This returns the text 'More effort, next time, please try harder' along with the $grade variable and $name variable if the grade detected in the input field is not 'A', 'B', 'C', or 'D' 
     */

echo " More effort, next time, please try harder ".$grade;

echo " ".$Name;

echo "<br>";

}

?>

</body>

</http>