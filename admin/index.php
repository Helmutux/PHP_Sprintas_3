<?php 
require('../includes/config.php'); 

login_required();

if(isset($_GET['logout'])){
	logout();
}

//iraso trynimo algoritmas
if(isset($_GET['delpage'])){
	$delpage = $_GET['delpage'];
	$delpage = mysqli_real_escape_string($conn, $delpage);
	$sql = mysqli_query($conn, "DELETE FROM pages WHERE id = '$delpage'");
    $_SESSION['success'] = "Page Deleted"; 
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
				if (confirm("Ar tikrai norite ištrinti įrašą '" + title + "'")){
					window.location.href = '<?php echo DIRADMIN;?>?delpage=' + id;
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
		<div id="meniu">
			<ul class="meniu">
				<li><a href="<?php echo DIRADMIN;?>">Šis puslapis</a></li>		
				<li><a href="<?php echo DIR;?>" target="_blank">Vartotojo puslapis</a></li>
				<li><a href="<?php echo DIRADMIN;?>?logout">Atsijungti</a></li>
			</ul>
		</div>
		<!-- END NAV -->

		<div id="content">

		<?php 
			//show any messages if there are any.
			messages();
		?>

		<h1>Straipsnių redagavimo puslapis</h1>

		<table>
		<tr>
			<th>Antraštės</th>
			<th>Galimi veiksmai</th>
		</tr>

		<?php
		$sql = mysqli_query($conn, "SELECT * FROM pages ORDER BY id");
		while($row = mysqli_fetch_object($sql)) 
		{
			echo "<tr>";
			echo "<td>$row->title</td>";
			echo "<td><a class=\"edit\" href=\"".DIRADMIN."edit.php?id=$row->id\">Redaguoti</a> <a class=\"delete\" href=\"javascript:delpage('$row->id','$row->title');\">Trinti</a></td>";
			echo "</tr>";
		}
		?>
		</table>

		<p><a href="<?php echo DIRADMIN;?>add.php" class="button">Pridėti straipsnį</a></p>
		</div>

		<footer>
			<div>
				&copy; Kuriant šį darbą panaudota informacija iš puslapio  <a href="http://geraprienuose.lt/">Gera Prienuose</a>	
			</div>	
		</footer>
		

	</body>
</html>