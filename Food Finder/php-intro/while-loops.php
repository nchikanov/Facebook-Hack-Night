<?php
	$i = 0;
	while($i < 5){
		echo $i."<br>"; $i++;
	}
	$i = 0;
	$ucla_buildings=array("Powell", "Drake Stadium", "Wooden");
	while($ucla_buildings[$i]){
		echo "Building: $i, Name: $ucla_buildings[$i]"."<br>"; $i++;
	}
?>