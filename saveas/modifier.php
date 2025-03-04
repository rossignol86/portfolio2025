<?php
 
// Paramètres de connexion
$serveur = "localhost";
$utilisateur = "root";
$mot_de_passe = "";
$base_de_donnees = "portfolio";
 
// Établir la connexion
 $connexion = mysqli_connect($serveur, $utilisateur,
$mot_de_passe, $base_de_donnees);
 
// Vérifier la connexion
if (!$connexion) {
    die("Échec de la connexion : " . mysqli_connect_error());
} else {
    echo "Connexion réussie à la base de données.";
}
 
 
// Vérification si le formulaire est soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
// Récupération des données du formulaire
    $titre = $_POST['titre'];
    $photolegende = $_POST['photolegende'];
    $photo1 = $_POST['photo1'];
    $texte = $_POST['texte'];
    $phototexte = $_POST['phototexte'];
   
// Requête d'insertion des données
    $sql = "INSERT INTO creations (titre, photolegende, photo1, texte, phototexte)
    VALUES ('$titre', '$photolegende', '$photo1', '$texte', '$phototexte')";
 
// Exécution de la requête d'insertion
    mysqli_query($connexion,$sql);
}
 
// Fermer la connexion
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
      
    <link rel="stylesheet" href="../styles/reset.css">

    <link rel="stylesheet" href="../styles/styles.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Righteous&display=swap" rel="stylesheet">  
      
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Modifier</title>
      
      
  </head>
    
  <body>
      
    <div class="container">
        
        
        
<!-- partie droite mobile sauf la navbar -->        
        <main>
          
<!-- barre de navigation -->           

            <nav class="navbar">                    
                <ul>
                    <li><a href="../index.html">Accueil</a></li>
                    <li><a href="../creations.html">Mes créations</a></li>
                    <li><a href="../parcours.html">Mon parcours</a></li>
                    <li><a href="../contact.php">Contact</a></li>
                </ul>
            </nav>
        
                  

<!-- partie centrale mobile -->

        <container class="blocajouterrealisation">

            <div>
                <form class="boutonensavoirplus" action="../admin.html" method="GET">
                    <input type="hidden" name="id" value="1">
                    <button type="submit">Admin</button>
                </form>
            </div>


            <div>
                <h1 class="contact">
                <img class="flechevertecontact" src="../images/flecheverte1.png" alt="fleche verte">
                    Modifier contenu
                </h1>

            <!-- Formulaire de renseignement -->
                <form action="contact.php" method="post">
                    <label for="nom">titre :</label>
                    <input class="formulaire" type="text" id="titre" name="titre"><br><br>
                    
                    <label for="societe">photolegende :</label>
                    <input class="formulaire" type="text" id="photolegende" name="photolegende"><br><br>
                    
                    <label for="photo1">photo1</label>
                    <input class="formulaire" type="text" id="photo1" name="photo1"><br><br>
                    
                    <label for="email">texte</label>
                    <input class="formulaire" type="text" id="texte" name="texte" required><br><br>
                                        
                    <label for="photo1">photo1</label>
                    <input class="formulaire" type="text" id="photo1" name="photo1"><br><br>                    
                    
                    <div class="blocajouterrealisation">
                        <div class="boutonadmingestion">
                            <a href="admin/ajouter.php" class="boutonadmingestion-envoyer">Modifier contenu</a>
                        </div>
                    </div>    
                </form>

                    
            </div>
        </container>  
    
<!-- fin de la partie centrale mobile -->  
           
            
        </div>
                 
      </main>
  </body>
</html>
