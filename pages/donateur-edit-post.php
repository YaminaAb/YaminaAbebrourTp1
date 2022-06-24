<?php
require_once "../class/Crud.php";

$crud = new Crud;

$update = $crud->update("donateur", $_POST, "idDonateur", $_POST["idDonateur"]);


header("Location:donateur-list.php");






?>