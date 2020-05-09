<?php
	ob_start();
	session_start();

	define('DBHOST','localhost');
	define('DBUSER','root');
	define('DBPASS','mysql');
	define('DBNAME','mano_tvs');


	$conn = @mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);
	if(!$conn){
		die( "Problema jungiantis prie serverio. Pabandykite vėliau");
	}

	define('DIR','http://localhost/Sprintas3/');

	define('DIRADMIN','http://localhost/Sprintas3/admin/');

	define('SITETITLE','Prienų krašto naujienos');

	define('included', 1);

	include('functions.php');
?>
