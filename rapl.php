<!DOCTYPE html>
<html lang="en">
<head>
	<title>Rapport client</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
<?php
mysql_connect("localhost","root","") or die ("Connexion a la base est impossible");
mysql_select_db("projectdb") or die ("Base de donner introuvable");

$ncin=$_POST['ncin'];
$req="select v.mat,v.mar,loc.dateloc,loc.nbj,loc.pj
	from voiture v,location loc,client c
	where c.ncin=loc.ncin and v.mat=loc.mat and c.ncin='$ncin';";
$result=mysql_query($req) or die ("Probleme de requete"); ?> <!--9assat el php-->


	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
					<table>
						<thead>
							<tr class="table100-head">
								<th class="column1">N</th>
								<th class="column2">Matricule</th>
								<th class="column3">Marque</th>
								<th class="column4">Date</th>
								<th class="column5">Nbj</th>
								<th class="column5">Pj</th>
								<th class="column5">Montant</th>
							</tr>
						</thead>
						<tbody>
								<?
								$somme=0;
								$i=0;
								while ($t=mysql_fetch_array($result)){
								$i=$i+1;
								$mont=$t[4]*$t[3];
								$somme=$somme+$mont;
								?>
								
								<tr>
									<td class="column1"> <? echo("$i"); ?> </td>
									<td class="column2"> <? echo("$t[0]"); ?></td>
									<td class="column3"> <? echo("$t[1]"); ?></td>
									<td class="column4"> <? echo("$t[2]"); ?></td>
									<td class="column5"> <? echo("$t[3]"); ?></td>
									<td class="column5"> <? echo("$t[4]"); ?></td>
									<td class="column5"> <? echo("$mont"); ?></td>
								</tr>
								<?
								}
								?>
						</tbody>
					</table>
					<?echo "<h1 style='color:tomato;'> Cette personne nous a ganger = $somme dollar </h1>";   ?>
				</div>
			</div>
		</div>
	</div>


	

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>