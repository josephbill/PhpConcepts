<?php

// to define a variable
//this is a global varibale
$name;
$name = "Joseph";

//function
function helloWorld(){
   // using global variable
	//local variable 
	 $name2;
	$name2 = "Bill";
	echo $name2;
}



echo helloWorld();
echo helloWorld();

?>