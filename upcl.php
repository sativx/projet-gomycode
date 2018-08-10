<?
mysql_connect("localhost","root","") or die ("Connexion a la base est impossible");
mysql_select_db("projectdb") or die ("Base de donner introuvable");

$ncin=$_POST['ncin'];
$tel=$_POST['tel'];

$req="update client
		set tel='$tel'
		where ncin='$ncin';";
$result=mysql_query($req) or die ("Probleme de requete update ");
	if ($result==true){
	echo("<h1>La modification de tel est faite avec succes</h1>");
	}

?>