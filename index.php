<?php 

use Doctrine\ORM\Query\ResultSetMappingBuilder;
require_once "bootstrap.php";
require "includes/config.php"; 

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
			<div>
				<?php
					//paimu duomenis apie visus straipsnius (įrašus) iš duomenų bazės ir atvaizduoju jų antraštes
					$sql = "SELECT * FROM pages";
					$rsm = new ResultSetMappingBuilder($entityManager);
					$rsm->addRootEntityFromClassMetadata('Page', 'p');
					$query = $entityManager->createNativeQuery($sql, $rsm);
					$pages = $query->getResult();
					foreach($pages as $page){
						echo "<h4><a class=\"pages\" href=\"".DIR."?p=".$page->getId()."\">&#9758; ".$page->getTitle()."</a></h4>"; 
					}
				?>
			</div>
			<div id="content">
				<?php	
				if(!isset($_GET['p'])){
					//siųlau pasirinkti norimą skaityti straipsnį
					echo "<p>Norėdami skaityti naujienas, pasirinkite bet kurį straipsnį viršuje</p>";
					} else {
					//atvaizduoju pasirinktą straipsnį (antraštę ir turinį)	
					$p = $_GET['p'];
					$page = $entityManager->find('\Page', $p);
					echo "<h4 class=\"pages read\">".$page->getTitle()."</h4>";
					echo "<p class=\"textas\">".$page->getTextas()."</p>";
				}
				?>
			</div>
		</main>
		<footer id="footer">
			<div>
				D.Kulvinskas
			</div>
			<div>
				2020-ieji, 56 karantino diena
			</div>
			<div>
				<a href="http://donatas.site">Asmeninis studento puslapis</a>
			</div>
			<div>
				&copy; Kuriant šį darbą panaudota informacija iš puslapio  <a href="http://geraprienuose.lt/">Gera Prienuose</a>
			</div>
		</footer>
	</body>
</html>