<?php 
$nom=$post['nom'];
$br�nom=$post['brenom'];
$date_du_naissance=$post['jj'],$post['mm'],$post['aa'];
require 'bd.php';
$ins="INSERT INTO formulaire( 'nom' ,'br�nom','date du naissance') values($nom,$br�nom,$date_du_naissance)";
$q=mysqli_query($con,$ins);
if (isset($q)){
	echo"<h1>insertion avec success</h1>";
}else{
	echo"<h1>erreur</h1>";
}
?>