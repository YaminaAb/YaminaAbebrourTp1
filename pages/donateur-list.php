<?php
require_once "../class/Crud.php";
$crud = new Crud;
$select = $crud->select("donateur");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste Donateur</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>
<body>

    
    <div class="header">
    <a  class="acceuil"href = "../index.php"> Acceuil</a>
    </div>

    <div class="container-page page--list">
    <div class="container--donateurs">
    
    <h1>La liste des Donateurs</h1>
        <?php foreach($select as $row){   ?>
    <div class='container-info'> 

       
        <h3>  Nom - Prénom : <?php echo $row["nom"] . ' ' .  $row["prenom"];?></h3>

        <p> Adresse : <?php echo $row["adresse"];?></p>
   
        
        <div class="btn">
        <a href="formulair-don.php?idDonateur=<?php echo $row["idDonateur"];?>" >Ajouter un don </a>
        </div>
        
        <div class="btn">
        <a href="update-infoDonateur.php?idDonateur=<?php echo $row["idDonateur"];?>" >Modiffier  les information de donateur</a>
        </div>
        <div class="btn">
            
        <a href="delete.php?idDonateur=<?php echo $row["idDonateur"];?>" >Supprimer </a>
        </div>
        
        
        
    </div>
    <?php
}
?>
     

</div>


    </div>
   
    
</body>
</html>