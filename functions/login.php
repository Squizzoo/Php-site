<?php
function logon($db) {

	if(isset($_POST['logoff'])) {
		$_SESSION= array();
	}
	elseif (isset($_POST['logon'])){
		$username = $_POST['acc'];
		$password = $_POST['pass'];
		$query = "SELECT * FROM `members` WHERE `username` = '$username'
		and `password` = '$password'";
		if ($result = mysqli_query($db, $query)) {
			while($row = mysqli_fetch_assoc($result)) {
				$_SESSION['logon'] = true;
			}
		}
	}

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
?>
