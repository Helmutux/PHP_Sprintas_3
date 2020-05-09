<?php 
require "../includes/config.php"; 
require "../bootstrap.php";

if(isset($_POST['submit'])){
	
	$title = $_POST['title'];
	$content = $_POST['textas'];
	
	$page = new Page();
	$page->setTitle($title);
	$page->setTextas($content);
	
	$entityManager->persist($page);
	$entityManager->flush();
	
	$_SESSION['success'] = 'Straipsnis pridėtas!';
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
			</ul>
		</div>

		<div id="content">
			<h2>Pridėti naują straipsnį</h2>
			<form action="" method="post">
				<p>Antraštė:<br /> <input name="title" type="text" value="" size="100" /></p>
				<p>Straipsnio turinys:<br /><textarea name="textas" cols="100" rows="20"></textarea></p>
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