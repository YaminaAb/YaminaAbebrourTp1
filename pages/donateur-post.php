<?php
require_once "../class/Crud.php";

$crud = new Crud;

$insertDonateur = $crud->insert("donateur", $_POST);



header("Location:donateur-list.php");
?>