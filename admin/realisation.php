<?php
// Paramètres de connexion
$serveur = "localhost";
$utilisateur = "root";
$mot_de_passe = "";
$base_de_donnees = "portfolio";

// Créer la connexion
$connexion = mysqli_connect($serveur, $utilisateur,
$mot_de_passe, $base_de_donnees);

// Vérifier la connexion
if ($connexion->connect_error) {
    die("Connexion échouée: " . $connexion->connect_error);
}

// Requete pour Récupérer l'ID à partir des paramètres de l'URL
$id = $_GET['id'];

// Préparer et exécuter la requête SQL
$sql = "SELECT * FROM creations WHERE ID = ?";
$stmt = $connexion->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$resultats = $stmt->get_result();


$creations = [];


if ($resultats) {
    foreach ($resultats as $resultat) {
        $creations[] = $resultat;
    }
} else {
    echo "Erreur de requête : " . mysqli_error($connexion) . "<br>";
}


// Fermer la connexion
mysqli_close($connexion);

?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
      
    <link rel="stylesheet" href="../styles/reset.css">
    <link rel="stylesheet" href="../styles/styles.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Righteous&display=swap" rel="stylesheet">  

    <link rel="icon" href="favicon.ico">

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio</title>
      
      
  </head>
    
  <body>
      
        <section>       
                <div >
                    <?php if (!empty($creations)): ?>
                        <?php foreach ($creations as $creation): ?>
                            <div>
                                <h1 class="titrerealisation"><?= $creation['titre']; ?></h1>
                                <div class="blocimagerealisation">
                                <img class="imagerealisation" alt="Mes realisations" src="<?= $creation['photo1']; ?>">
                                </div>
                                <p class="descriptionrealisation"><?= $creation['texte']; ?></p>
                            </div>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <p>Aucun contact trouvé.</p>
                    <?php endif; ?>
                </div>
                
            </section>     
            <section class="sectionfooterfondvert">
                    <footer class="stylefooter">
                        <div class="navbarfooter">
                            <ul>
                                <li><a href="../index.html">Accueil</a></li>
                                <li><a href="../creations.html">Mes créations</a></li>
                                <li><a href="../parcours.html">Mon parcours</a></li>
                                <li><a href="../contact.php">Contact</a></li>
                            </ul>
                        </div>
                        
                        <div class="coordonnees">
                            <p class="mentions">ff.rossignol@yahoo.fr - 86190 VOUILLE - ©rossignol - 2024 -&nbsp;Webdesign&nbsp;sur&nbsp;FIGMA - HTML & CSS sur Visual Studio Code</p>
                        </div>
                    </footer>

            </section>
            
        </div>
                 
      </main>
  </body>
</html>
