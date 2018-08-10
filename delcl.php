<?
mysql_connect("localhost","root","") or die ("Connexion a la base est impossible");
mysql_select_db("projectdb") or die ("Base de donner introuvable");

$ncin=$_POST['ncin'];
$req="delete from client
		where ncin='$ncin';";
$result=mysql_query($req) or die ("Probleme de requete");
	if ($result==true){
	echo("<h1>La modification est faite avec succes</h1>");
	}

?>