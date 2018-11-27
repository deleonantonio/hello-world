<?php

/* reference -> PHP Variables Tutorial - Learn PHP Programming 
* https://www.youtube.com/watch?v=esCHWLYIusU
*/

const BR = '<br />';

$firstName = 'Antonio';
$lastName = 'de Leon';
$age = 29;
$game = 'Sega';

echo "My first name is ".$firstName;
echo " and my last name is ".$lastName .".".BR;
echo "I am " .$age ." years old.".BR;

$int = sqrt(16);
echo $int.BR;

// ternery expression
$age = 33;
$eval = $age > 21 ? "You're over 21, here is your drink" :
					"You're not old enough!";
echo $eval.BR;

// variable variable
$$game = '16-bit console' ; //$Sega = '16-bit console';
echo $Sega.BR;


// referencing
	$copy = &$game; //$game = Sega
	echo $copy.BR;

	$game = 'XBOX ONE';
	echo $copy.BR;

	// delete the source variable
	unset($game);
	echo $game;

	// but the copy lives on
	echo $copy;

// manipulation

	// associative
	$named = array('pet' => 'Wallace', 'car' => 'Acura',
    	'income' => 50000, 'gender' => 'M', 'age' => 33);

	unset($named['car']); // deletes the car key from the array output

	// numeric array 
	// numeric index keys 0 => 1983, 1 => 33, 2 => 14, 3 => 12, 4 => 07, 5 => 42
	$numeric = array( 1983, 33, 14, 12, 07 ,42);


	unset($numeric[0]); // deletes the value from index 0
	
	echo '<pre>'; // to make the printed arrays nicely printed
	print_r($named);
	print_r($numeric);
	echo '</pre>'.BR;

	print_r($numeric[0]); // note that index 0 is undefined but the array doesn't shift

	// function to see if key is set
	echo isset($named['income']) ? "You have an income!".BR :
		"you don't have any income!".BR;
	unset($named['age']);
	echo isset($named['age']) ? "You have an age!".BR :
		"You don't have an age!".BR;

	$numeric[0] = 2000;
	print_r($numeric[0].BR); // note that index 0 is undefined but the array doesn't shift

	// function to determine data type of array
	echo is_array($numeric) ? "I'm an array".BR : "I'm not an array".BR;

	/* gettype(), is_array(), is_float(), is_int(), is_object(), 
	* is_bool, is_string()
	*/

	echo gettype($named); echo BR;
	echo gettype($firstName); echo BR;
	echo gettype($age); echo BR;

	// scoping
	function test() {
		// local scope
		$local = "I live in side the function";
		global $global; 
		$global = "I'm a global function";
	}

	// call the function
	test();
	// global scope
	echo $local; // error
	echo $global;
?>