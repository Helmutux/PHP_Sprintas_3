<?php 
require "../includes/config.php"; 
require "../bootstrap.php";
login_required_admin();

//naujo vartotojo pridėjimo algoritmas
if(isset($_POST['submit'])){
	
	$name = $_POST['name'];
	$password = $_POST['password'];
	$status =  $_POST['status'];
	
	$user = new User();
	$user->setName($name);
	$user->setPassword(MD5($password));
	$user->setStatus($status);
	
	$entityManager->persist($user);
	$entityManager->flush();
	
	$_SESSION['success'] = 'Naujas vartotojas pridėtas!';
	header('Location: '.DIRADMIN);
	exit();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php echo SITETITLE;?></title>
	<link href="https://fonts.googleapis.com/css2?family=Lemonada:wght@700&display=swap" rel="stylesheet">
	<link href="<?php echo DIR;?>css/style.css" rel="stylesheet" type="text/css" />
</head>
<body id="container">
	<header>
		<a href="<?php echo DIR;?>">
			<?php echo "<h1>".SITETITLE."</h1>";?>
		</a>
	</header>
	<main>
		<div id="meniu">
			<ul class="meniu">
				<li><a href="<?php echo DIRADMIN;?>">Atgal</a></li>
				<li><a href="<?php echo DIR;?>" target="_blank">Vartotojo puslapis</a></li>
				<li><a href="<?php echo DIRADMIN;?>?logout">Atsijungti</a></li>
				<?php $user = $_SESSION['adminname'];?>
				<li class="login_user"> Sveiki! Esate prisijungęs kaip <b><i><?php echo $user; ?></i></b> ir turite visas šio puslapio administratoriaus teises</li>
			</ul>
		</div>

		<div id="content">
			<h2>Pridėti naują registruotą vartotoją</h2>
			<form action="" method="post">
				<p>Vardas:<br> <input name="name" type="text" value="" size="100" /></p>
				<p>Slaptažodis:<br> <input name="password" type="password" value="" size="100" /></p>
				<p>Funkcionalas</p>
				<input type="radio" id="admin" name="status" value="1">
				<label for="admin">Administratorius</label><br>
				<input type="radio" id="simple" name="status" value="0" checked>
				<label for="simple">Paprastas vartotojas</label><br>
				<p><input type="submit" name="submit" value="Įvesti naują" class="button" /></p>
			</form>
		</div>
	</main>
	<footer>
		<div>
			&copy; Kuriant šį darbą panaudota informacija iš puslapio  <a href="http://geraprienuose.lt/">Gera Prienuose</a>	
		</div>
	</footer>
</body>
</html>