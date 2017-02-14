<?php
function gallery($db) {
	$sql = "SELECT * FROM gallery";
	$result = mysqli_query($db, $sql);

	$out2 = "";
	if (mysqli_num_rows($result) > 0) {
	    // output data of each row
	    while($row = mysqli_fetch_assoc($result)) {
	        $out2 .=  '<a href="'.$row["href"].'" ></a>';
	    }
	}
	return $out2;
}
 ?>
