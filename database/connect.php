<?php
function conn() {
$db =  parse_ini_file("./database/core.ini");
//print_r($db);


// Create <connect></connect>ion
$conn = mysqli_connect($db['host'], $db['root'], $db['pass'], $db['db']);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

return $conn;
}
?>
