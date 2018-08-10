<?
mysql_connect("localhost","root","") or die ("Connexion a la base est impossible");
mysql_select_db("projectdb") or die ("Base de donner introuvable");

$mat=$_POST['mat'];
$ncin=$_POST['ncin'];
$dateloc=$_POST['dateloc'];

$req="delete from location
		where mat='$mat' and ncin='$ncin' and dateloc='$dateloc';";
$result=mysql_query($req) or die ("Probleme de requete");
	if ($result==true){
	echo("<h1>La modification est faite avec succes location effacer</h1>");
	}

?>