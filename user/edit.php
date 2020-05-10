<?php 
	require "../includes/config.php"; 
	require "../bootstrap.php"; 
	login_required_user();

	if(!isset($_GET['id']) || $_GET['id'] == ''){
		header('Location: '.DIRUSER); 
	}
	//redagavimo algoritmas
	if(isset($_POST['submit'])){
		$title = $_POST['title'];
		$content = $_POST['textas'];
		$id = $_POST['id'];

		$page = $entityManager->find('\Page', $id);
		
		$page->setTitle($title);
		$page->setTextas($content);
		
		$entityManager->persist($page);
		$entityManager->flush();

		$_SESSION['success'] = 'Įrašas atnaujintas!';
		header('Location: '.DIRUSER);
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
					<li><a href="<?php echo DIRUSER;?>">Atgal</a></li>
					<li><a href="<?php echo DIR;?>" target="_blank">Vartotojo puslapis</a></li>
					<li><a href="<?php echo DIRUSER;?>?logout">Atsijungti</a></li>
					<?php $user = $_SESSION['username'];?>
					<li class="login_user"> Sveiki! Esate prisijungęs kaip <b><i><?php echo $user; ?></i></b> ir turite galimybę įkelti naujus ir redaguoti esamus įrašus</li>
				</ul>
			</div>
			<div id="content">
			<h2>Redaguoti įrašą</h2>
			<?php
				$id = $_GET['id'];
				$page = $entityManager->find('\Page', $id);
			?>

			<form action="" method="post">
				<input type="hidden" name="id" value="<?php echo $page->getId();?>" />
				<p>Antraštė:<br /><input name="title" type="text" value="<?php echo $page->getTitle();?>" size="100" /></p>
				<p>Straipsnio tekstas<br /><textarea name="textas" cols="100" rows="20"><?php echo $page->getTextas();?></textarea></p>
				<p><input type="submit" name="submit" value="Atnaujinti įrašą" class="button" /></p>
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
