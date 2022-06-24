<?php
require_once "../class/Crud.php";

$crud = new Crud;
$donateur = $crud->selectId("donateur", "idDonateur", $_GET["idDonateur"]);

$association = $crud->select("association");


foreach($donateur as $key=>$value){
    $$key = $value;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Dons</title>
    <link rel="stylesheet" href="../styles/style.css">
</head>
<body>
    <div class="header">
    <a  class="acceuil"href = "../index.php"> Acceuil</a>
    </div>
    <div class="container-page">
        
        <div class="container"> 
             <div class="container-close">&times;</div>
             <img  src="../img/image2.jpg" alt="image">

            <div class="container-text">
                <h2>Ajouter un don </h2>
            
                <form action="don-post.php" method="post">
                   
                    <label for="date" >Date </label>
                    <input  class="input" type="date" name="date" > 
             
                    <label for="montant" >Montant </label>
                    <input  class="input" type="numeric"  name="montant" >

                    <input  class="input" type="hidden" value="<?php echo $idDonateur; ?>" name="Donateur_idDonateur">

                  
                    <label for="association">Sélectionner une Association:</label>

                        <select class="input select"  name="Association_idAssociation">
                            
                            <?php foreach($association as $row){ ?>

                                <option  value ="<?php echo $row["idAssociation"];?>"><?php echo $row["nomAssociation"];?></option>
                            <?php }?>
                        
                        </select> 

                    <button type="submit"> Ajouter</button>
             
                                
                </form>
            </div>

        </div>
    </div>