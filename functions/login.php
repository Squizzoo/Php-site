<?php
function logon($db) {
include_once 'database/connect.php';
//var_dump($_SESSION);
$_SESSION['logon'] = false;
//print_r($_POST);

	if(isset($_POST['logoff'])) {
  //echo "hoi" ; die;
		//unset($_SESSION);
		$_SESSION= array();
		//session_destroy();
	}

	$query = "SELECT * FROM `members` WHERE username and password";

	if ($result = mysqli_query($db, $query)) {
		while($row = mysqli_fetch_assoc($result)) {
			if($_POST['logon'] == $row["username"] && $_POST['pass'] == $row["password"]) {
				$_SESSION['logon'] = true;
			}
		}
	}
	// if(isset($_POST['logon']) && $_POST['acc'] && $_POST['pass']) {
	// 	$_SESSION['logon'] = true;
	// }

	if(isset($_SESSION['logon']) && $_SESSION['logon'] == true) {
		$form = '<form action="" method="post">';
		$form .= '<input type="submit" name="logoff" value="logoff">';
		$form .= '</form>';
	}
	else{
		$form = '<form action="" method="post">';
		$form .= 'Account<input type="text" name="acc"><br>';
		$form .= 'Password<input type="password" name="pass"><br>';
		$form .= '<input type="submit" name="logon" value="logon">';
		$form .= '</form>';
	}
	return $form;
}

//session_destroy();

// $b = array(	s
// 	array('Login:'),
// 	array('<input type="text" name="login" placeholder="Login">'),
// 	array('Password:'),
// 	array('<input type="password" name="ww" placeholder="Password">'),
// 	array('<input type="submit" name="knop" value="Log in">')
// );
// 	$i = 0;
// 	$login = '';
// 	$login .= '<table>';
// 		foreach ($b as $rowKey) {
// 			$i++;
// 			$login .= '<tr><td>'.$rowKey[0].'</td></tr>';
// 		}
// 	$login .= '</table>';

// $log1 = "testo";
// $pass1 = "testo1";

// if(isset($_POST['knop'])) {
// 	$dbName = ($_POST['login']);
// 	$dbPass = ($_POST['ww']);
// 	if($dbName == $log1) {
// 		if($dbPass == $pass1) {
// 			$_SESSION['loggedin'] = true;
// 			echo "You're logged in";
// 			//$logout = '<a href ="../loggedin/loggedin.php">logout</a>';
// 			if($_SESSION['loggedin'] = true;)
// 				echo
// 		}
// 		else {
// 			echo "wrong password";
// 		}
// 	}
// 	else {
// 		echo "wrong login";
// 	}
// }
// else {
// 	echo "Not even close to log in";
// }
?>
