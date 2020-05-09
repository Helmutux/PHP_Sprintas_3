<?php
	if (!defined('included')){
		die('You cannot access this file directly!');
	}

	//administratoriaus prisijungimo algoritmas naudojant funkcini php
	function login($conn, $user, $password){
		
		$user = strip_tags(mysqli_real_escape_string($conn, $user));
		$pass = strip_tags(mysqli_real_escape_string($conn, $password));
		$password = md5($password);
		$sql = "SELECT * FROM users WHERE name = '$user' AND password = '$password'";
		$result = mysqli_query($conn, $sql) or die('Užklausa nepavyko. ' . mysql_error());
		if (mysqli_num_rows($result) == 1) {
			$_SESSION['authorized'] = true;
			header('Location: '.DIRADMIN);
			exit();
		} else {
			$_SESSION['error'] = 'Blogas prisijungimo vardas ir/arba slaptažodis';
		}
	}

	// autorizacijos algoritmas
	function logged_in() {
		if($_SESSION['authorized'] == true) {
			return true;
		} else {
			return false;
		}	
	}
	function login_required() {
		if(logged_in()) {	
			return true;
		} else {
			header('Location: '.DIRADMIN.'login.php');
			exit();
		}	
	}
	function logout(){
		unset($_SESSION['authorized']);
		header('Location: ' . DIRADMIN . 'login.php');
		exit();
	}

	//pranesimai
	function messages() {
		$message = '';
		if($_SESSION['success'] != '') {
			$message = '<div class="success">'.$_SESSION['success'].'</div>';
			$_SESSION['success'] = '';
		}
		if($_SESSION['error'] != '') {
			$message = '<div class="error">'.$_SESSION['error'].'</div>';
			$_SESSION['error'] = '';
		}
		echo "$message";
	}

	function errors($error){
		if (!empty($error)){
			$i = 0;
			while ($i < count($error)){
			$showError.= '<div class="error">'.$error[$i].'</div>';
			$i ++;}
			echo $showError;
		}
	}
?>