<?php 
use Doctrine\ORM\Query\ResultSetMappingBuilder;
require_once "../bootstrap.php";
require "../includes/config.php";

login_required_user();

if(isset($_GET['logout'])){
	logout_user();
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
					<li><a href="<?php echo DIRUSER;?>">Šis puslapis</a></li>		
					<li><a href="<?php echo DIR;?>" target="_blank">Vartotojo puslapis</a></li>
					<li><a href="<?php echo DIRUSER;?>?logout">Atsijungti</a></li>
					<?php $user = $_SESSION['username'];?>
					<li class="login_user"> Sveiki! Esate prisijungęs kaip <b><i><?php echo $user; ?></i></b> ir turite galimybę įkelti naujus bei redaguoti esamus įrašus</li>
				</ul>
			</div>
			<div id="content">
				<?php messages(); ?>
				<h1>Straipsnių redagavimo laukas</h1>
				<table>
					<tr>
						<th>Antraštės</th>
						<th>Galimi veiksmai</th>
					</tr>
					<?php
					$sql = "SELECT * FROM pages ORDER BY id";
					$rsm = new ResultSetMappingBuilder($entityManager);
					$rsm->addRootEntityFromClassMetadata('Page', 'p');
					$query = $entityManager->createNativeQuery($sql, $rsm);
					$pages = $query->getResult();
					foreach($pages as $page){
						echo "<tr>";
						echo "<td>".$page->getTitle()."</td>";
						echo "<td><a class=\"edit\" href=\"".DIRUSER."edit.php?id=".$page->getId()."\">Redaguoti</a></td>";
						echo "</tr>";
					}
					?>
				</table>
				<p><a href="<?php echo DIRUSER;?>add.php" class="button">Pridėti straipsnį</a></p>
			</div>
		</main>
		<footer>
			<div>
				&copy; Kuriant šį darbą panaudota informacija iš puslapio  <a href="http://geraprienuose.lt/">Gera Prienuose</a>	
			</div>	
		</footer>
	</body>
</html>