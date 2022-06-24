<?php
require_once "../class/Crud.php";

$crud = new Crud;
$donateur = $crud->selectId("donateur", "idDonateur", $_GET["idDonateur"]);

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
            <img  src="../img/image3.jpg" alt="image">
               
            <div class="container-text">
                <h2>Modifier un donnateur </h2>
        
                <form action="donateur-edit-post.php" method="post">
                    <div>
                        <input  class="input" type="hidden" value="<?php echo $idDonateur; ?>" name="idDonateur">
                        <label for="nom">Nom </label>
                        <input  class="input" type="text" id="nom" name="nom" value="<?php echo $nom; ?>">
                    </div>
                    
                    <div>
                        <label for="prenom">Prénom </label>
                        <input  class="input" type="text" id="prenom" name="prenom" value="<?php echo $prenom; ?>">
                    </div>
                    <div>
                        <label for="adresse">Adresse </label>
                        <input  class="input" type="text" id="adresse" name="adresse" value ="<?php echo $adresse; ?>">
                    </div>
                    <div>
                    
                    
                    <button type="submit">Modifier</button>

                    </div>
                                    
                </form>
            </div>
        </div>
    </div>
  
    

    
          

  
   
</body>
</html>