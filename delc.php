<?
mysql_connect("localhost","root","") or die ("Connexion a la base est impossible");
mysql_select_db("projectdb") or die ("Base de donner introuvable");

$mat=$_POST['mat'];
$req="delete from voiture
		where mat='$mat';";
$result=mysql_query($req) or die ("Probleme de requete");
	if ($result==true){
	echo("<h1>La modification est faite avec succes voiture effacer</h1>");
	}

?>