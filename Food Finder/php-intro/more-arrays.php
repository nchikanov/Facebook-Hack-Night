<?php
	$ucla_buildings=array(
		"Library"=>"Powell",
		"Track"=>"Drake Stadium",
		"Gym"=>"Wooden",
	);
	print_r($ucla_buildings);
	$ucla_buildings["Football"] = "Rose Bowl";
	echo "<br>".count($ucla_buildings)."<br>";
	print_r($ucla_buildings);
?> 