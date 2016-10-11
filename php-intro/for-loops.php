<?php
	for($i = 0; $i < 5; $i++){
		echo $i."<br>";
	}
	$ucla_buildings=array("Library"=>"Powell", "Track"=>"Drake Stadium", "Gym"=>"Wooden");
	foreach($ucla_buildings as $key=>$value){
		echo "Building: $key, Name: $value"."<br>";
	}
?>