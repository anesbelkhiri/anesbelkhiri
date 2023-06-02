<?php 
$nom=$post['nom'];
$brénom=$post['brenom'];
$date_du_naissance=$post['jj'],$post['mm'],$post['aa'];
require 'bd.php';
$ins="INSERT INTO formulaire( 'nom' ,'brénom','date du naissance') values($nom,$brénom,$date_du_naissance)";
$q=mysqli_query($con,$ins);
if (isset($q)){
	echo"<h1>insertion avec success</h1>";
}else{
	echo"<h1>erreur</h1>";
}
?>