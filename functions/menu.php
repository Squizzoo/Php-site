<?php
function menu($db)
{
	$sql = "SELECT * FROM menu";
	$result = mysqli_query($db, $sql);
	$out = "";
	if (mysqli_num_rows($result) > 0) {
	    // output data of each row
	    while($row = mysqli_fetch_assoc($result)) {
	        $out .=  '<a href="'.$row["href"].'" >' . $row["label"].  '</a>';
	    }
	}

	return $out;
}
 ?>
