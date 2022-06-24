<?php
require_once "../class/Crud.php";

$crud = new Crud;

$insertDon = $crud->insert("don", $_POST);




header("Location:../index.php");
?>