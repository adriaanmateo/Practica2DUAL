<?php

$nom = $_GET['nom'];
$data = $_GET['data'];

if($nom==null || $data==null){
	 header('Location: ../biorritmo/404.blade.php');
}
else{
	header('Location: ../layouts/master.blade.php');
}
?>