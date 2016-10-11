<?php
	$number = 25;
	echo ($number/2)."<br>"; // Can perform math computations inline
	$professor = "David Smallberg";
	echo "$professor is teaching CS 31"."<br>"; // Can insert other variables inside a string
	echo $professor. "is teaching CS 31"."<br>"; // Can append variables together using .
	$name = "Eggert";
	$n = "name";
	echo $$n; // Can double reference variables using $$
?> 