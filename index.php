<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Dons</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>

    <div class="header">
      <a  class="acceuil"href = "pages/donateur-list.php"> Liste des donateurs </a>
    </div>

  <div class="container-page">

    <div class="container">
      <div class="container-close">&times;</div>
      <img  src="img/image1.jpg" alt="image">
       
    
      <div class="container-text">
        <h2>Pour Ajouter un don veuillez vous inscrire </h2>
        
          <form action="pages/donateur-post.php" method="post">
            
              
              <input class="input" type="text" name="nom" placeholder=" Nom">

          
              <input class="input" type="text" name="prenom"  placeholder="Prénom">

              
              <input class="input" type="email" name="adresse"   placeholder="Courriel">

              <button type="submit">Ajouter</button>
          </form>
      </div>
    </div>
  </div>



</body>


