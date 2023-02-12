<?php
	$languages = array("PHP", "Javascript", "MYSQL");	//Indexed Arrays
	$age = array("Gaurav"=>"35", "Amit"=>"37", "Sumit"=>"43");	//Associative Arrays
	$cars = array(array("Volvo",22,18),array("BMW",15,13),array("Saab",5,2),array("Land Rover",17,15));	//Multidimensional Arrays

	$arrlength=count($languages);
	
	echo "I like " . $languages[0] . ", " . $languages[1] . " and " . $languages[2] . "."; 	
	echo "<br>";
	echo "There is ".$arrlength." languages.";

	for($x = 0; $x < $arrlength; $x++)	//Loop Through an Indexed Array
	{
		echo "<br>";
	    echo $languages[$x];    
	}
	
	echo "<br>";
	echo "Gaurav is " . $age['Gaurav'] . " years old.<br><br>";

	foreach($age as $x => $x_value)	//Loop Through an Associative Array
	{
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
	}

	for ($row = 0; $row < 4; $row++) 
	{
	  echo "<p><b>Row number $row</b></p>";
	  echo "<ul>";
	  for ($col = 0; $col < 3; $col++) 
	  {
	    echo "<li>".$cars[$row][$col]."</li>";
	  }
	  echo "</ul>";
	}
?>