<?php
	// require "../bootstrap.php";

	if (!defined('included')){
		die('You cannot access this file directly!');
	}

	//administratoriaus (CRUD straipsniams ir kitiems useriams) ir user (gali prideti, redaguoti straipsnius) prisijungimo algoritmai naudojant funkcini php
	function login($conn, $user, $password){
		
		$user = strip_tags(mysqli_real_escape_string($conn, $user));
		$pass = strip_tags(mysqli_real_escape_string($conn, $password));
		$password = md5($password);
		$sql = "SELECT * FROM users WHERE name = '$user' AND password = '$password' AND status in(0, 1)";
		$result = mysqli_query($conn, $sql) or die('Užklausa nepavyko. ' . mysql_error());
		$r = mysqli_fetch_object($result);
		
		//admin 
		if ((mysqli_num_rows($result)==1) && ($r->status==1)) {
			$_SESSION['adminname'] = $user;
			$_SESSION['admin_authorized'] = true;
			header('Location: '.DIRADMIN);
			exit();
		} elseif ((mysqli_num_rows($result)==1) && ($r->status==0)) {
			$_SESSION['username'] = $user;
			$_SESSION['user_authorized'] = true;
			header('Location: '.DIRUSER);
			exit();
		}
		else {
			$_SESSION['error'] = 'Blogas prisijungimo vardas ir/arba slaptažodis';
		}
	}

	// admin autorizacijos algoritmas
	function logged_in_admin() {
		if($_SESSION['admin_authorized'] == true) {
			return true;
		} else {
			return false;
		}	
	}
	function login_required_admin() {
		if(logged_in_admin()) {	
			return true;
		} else {
			header('Location: '.DIRADMIN.'login.php');
			exit();
		}	
	}
	function logout_admin(){
		unset($_SESSION['admin_authorized']);
		header('Location: ' . DIRADMIN . 'login.php');
		exit();
	}
	// user autorizacijos algoritmas
	function logged_in_user() {
		if($_SESSION['user_authorized'] == true) {
			return true;
		} else {
			return false;
		}	
	}
	function login_required_user() {
		if(logged_in_user()) {	
			return true;
		} else {
			header('Location: '.DIRUSER.'login.php');
			exit();
		}	
	}
	function logout_user(){
		unset($_SESSION['user_authorized']);
		header('Location: ' . DIRUSER. 'login.php');
		exit();
	}

	//pranesimai
	function messages() {
		$message = '';
		if($_SESSION['success'] != '') {
			$message = '<div>'.$_SESSION['success'].'</div>';
			$_SESSION['success'] = '';
		}
		if($_SESSION['error'] != '') {
			$message = '<div>'.$_SESSION['error'].'</div>';
			$_SESSION['error'] = '';
		}
		echo "$message";
	}

	function errors($error){
		if (!empty($error)){
			$i = 0;
			while ($i < count($error)){
			$showError.= '<div>'.$error[$i].'</div>';
			$i ++;}
			echo $showError;
		}
	}
?>