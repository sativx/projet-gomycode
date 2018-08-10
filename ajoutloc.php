<?
mysql_connect("localhost","root","") or die ("Connexion a la base est impossible");
mysql_select_db("projectdb") or die ("Base de donner introuvable");

$ncin=$_POST['ncin'];
$mat=$_POST['mat'];
$nbj=$_POST['nbj'];
$pj=$_POST['pj'];
$dateloc=date("Y-m-d");

$req="select * from client where ncin='$ncin';";
$result=mysql_query($req) or die ("probleme de recherche");
$l=mysql_num_rows($result);
	if ($l==0){
		echo("il faut inscrire ce client");
		echo("<a href='ajoutcl.html'>Click here</a>");
	}
	else {
		$req="select * from voiture where mat='$mat';";
		$result=mysql_query($req) or die ("probleme de recherche");
		$l=mysql_num_rows($result);
			if ($l==0){
				echo("cette voiture n existe pas");
			}	
			else{
				$req="insert into location
					values ('$ncin','$mat','$dateloc','$nbj','$pj');";
				$result=mysql_query($req) or die ("Probleme de requete");
				if ($result==true){
				echo("<h1>L ajout est fait avec succes</h1>");
				}
			}
		 }
?>



