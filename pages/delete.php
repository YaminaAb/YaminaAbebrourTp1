<?php
require_once "../class/Crud.php";

$crud = new Crud;

$delete = $crud->delete("donateur", "idDonateur", $_GET["idDonateur"],'donateur-list.php');


?>