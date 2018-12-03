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

<form action="Location: ../layouts/master.blade.php" method="post">
 <input type="hidden" name="nom" value="$nom" />
 <input type="hidden" name="data" value="$data" />
 <input type="submit" value="Buscar" />
</form>