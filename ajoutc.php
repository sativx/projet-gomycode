<?
mysql_connect("localhost","root","") or die ("Connexion a la base est impossible");
mysql_select_db("projectdb") or die ("Base de donner introuvable");

$mat=$_POST['mat'];
$mar=$_POST['mar'];

$req="insert into voiture
		values ('$mat','$mar');";
$result=mysql_query($req) or die ("Probleme de requete");
	if ($result==true){
	echo("<h1>L ajout de la voiture est fait avec succes</h1>");
	}

?>