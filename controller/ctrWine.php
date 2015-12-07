<?php 
	
	require "../config/config.php";
	require "../library/DataBase.php";
	require "../model/wine.php";

	$w = new Wine();
	$mensaje = "";

	if(isset($_POST["btnGuardar"])){

		$w->__SET("name", $_POST["txtName"]);
		$w->__SET("year", $_POST["txtYear"]);
		$w->__SET("grapes", $_POST["txtGrapes"]);
		$w->__SET("description", $_POST["txtDescription"]);
		if($w->save()){
			$mensaje = "alert('guardo')";
		}else{
			$mensaje = "alert('no guardo')";
		}
	}

	$datos = $w->read();
	include "../view/index.php";

 ?>