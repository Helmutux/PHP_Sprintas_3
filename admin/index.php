<?php 
use Doctrine\ORM\Query\ResultSetMappingBuilder;
require_once "../bootstrap.php";
require "../includes/config.php";

login_required_admin();

if(isset($_GET['logout'])){
	logout_admin();
}

//iraso trynimo algoritmas
if(isset($_GET['delpage'])){
	$delpage = $_GET['delpage'];
	$page = $entityManager->find('\Page', $delpage);
	$entityManager->remove($page);
	$entityManager->flush();

    $_SESSION['success'] = "Įrašas ištrintas"; 
    header('Location: ' .DIRADMIN);
   	exit();
}
//vartotojo trynimo algoritmas
if(isset($_GET['deluser'])){
	$deluser = $_GET['deluser'];
	$user = $entityManager->find('\User', $deluser);
	$entityManager->remove($user);
	$entityManager->flush();

    $_SESSION['success'] = "Įrašas ištrintas"; 
    header('Location: ' .DIRADMIN);
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
		<script language="JavaScript" type="text/javascript">
			function delpage(id, title){
				
				if (confirm("Ar tikrai norite ištrinti įrašą?")){
					window.location.href = '<?php echo DIRADMIN;?>?delpage=' + id;
				}
			}
		</script>
		<script language="JavaScript" type="text/javascript">
			function deluser(id, name){
				if (confirm("Ar tikrai norite ištrinti vartotoją?")){
					window.location.href = '<?php echo DIRADMIN;?>?deluser=' + id;
				}
			}
		</script>
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
					<li><a href="<?php echo DIRADMIN;?>">Šis puslapis</a></li>		
					<li><a href="<?php echo DIR;?>" target="_blank">Vartotojo puslapis</a></li>
					<li><a href="<?php echo DIRADMIN;?>?logout">Atsijungti</a></li>
					<?php $user = $_SESSION['adminname'];?>
					<li class="login_user"> Sveiki! Esate prisijungęs kaip <b><i><?php echo $user; ?></i></b> ir turite visas šio puslapio administratoriaus teises</li>
				</ul>
				
			</div>
			<div id="content">
				<?php 	
					messages();
				?>
				<!-- STRAIPSNIU redagavimas -->
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
						echo "<td><a class=\"edit\" href=\"".DIRADMIN."edit.php?id=".$page->getId()."\">Redaguoti</a> <a class=\"delete\" href=\"javascript:delpage(".$page->getId().");\">Trinti</a></td>";
						echo "</tr>";
					}
					?>
				</table>
				<p><a href="<?php echo DIRADMIN;?>add.php" class="button">Pridėti straipsnį</a></p>
			</div>
			<!-- REGISTRUOTU VARTOTOJU redagavimas -->
			<div id="content">
				<?php 	
					messages();
				?>
				<h1>Registruotų vartotojų redagavimo laukas</h1>
				<table>
					<tr>
						<th>Vartotojai</th>
						<th>Funkcionalas</th>
						<th>Galimi veiksmai</th>
					</tr>
					<?php
					$sql = "SELECT * FROM users WHERE id > 1 ORDER BY id";
					$rsm = new ResultSetMappingBuilder($entityManager);
					$rsm->addRootEntityFromClassMetadata('User', 'p');
					$query = $entityManager->createNativeQuery($sql, $rsm);
					$users = $query->getResult();
					foreach($users as $user){
						echo "<tr>";
						echo "<td>".$user->getName()."</td>";
						if($user->getStatus()==1) { 
							echo "<td>Administratorius</td>";
						} 
						else 
						{ 
							echo "<td>Paprastas vartotojas</td>";
						};
						echo "<td><a class=\"edit\" href=\"".DIRADMIN."edit_user.php?id=".$user->getId()."\">Redaguoti</a> <a class=\"delete\" href=\"javascript:deluser(".$user->getId().");\">Trinti</a></td>";
						echo "</tr>";
					}
					?>
				</table>
				<p><a href="<?php echo DIRADMIN;?>add_user.php" class="button">Pridėti naują</a></p>
			</div>
		</main>
		<footer>
			<div>
				&copy; Kuriant šį darbą panaudota informacija iš puslapio  <a href="http://geraprienuose.lt/">Gera Prienuose</a>	
			</div>	
		</footer>
	</body>
</html>