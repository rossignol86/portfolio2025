<?php
// Paramètres de connexion
$serveur = "localhost";
$utilisateur = "root";
$mot_de_passe = "";
$base_de_donnees = "portfolio";

// Établir la connexion
$connexion = mysqli_connect($serveur, $utilisateur, $mot_de_passe, $base_de_donnees);

// Vérifier la connexion
if (!$connexion) {
    die("Échec de la connexion : " . mysqli_connect_error());
}

// Récupérer l'ID à partir des paramètres de l'URL
$id = $_GET['id'];

// Requête pour récupérer les données de la table "creations"
$sql = "SELECT * FROM creations";
$resultats = mysqli_query($connexion, $sql);
// $contacts = $resultats->fetch_all(MYSQLI_ASSOC);







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
<html lang="en">
  <head>
    <meta charset="UTF-8" />
      
    <link rel="stylesheet" href="../styles/reset.css">

    <link rel="stylesheet" href="../styles/styles.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Righteous&display=swap" rel="stylesheet">  
      
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio</title>
      
      
  </head>
    
  <body>
      
    <div class="container">
  
        
<!-- partie gauche noir et fixe -->     
      <aside>
            <div>
                <img class="imagefixe" src="images/franck.png" alt="Image description">
            </div>
            <div class="blocinfos">
                <h1 class="nom">Franck Rossignol</h1>
                <div>
                    <p class="textepresentation">Après un parcours professionnelle de plus de 35 ans comme Infographiste, Chef de studio, WebDesigner & Freelance,
                    j'ai décidé de me lancer de nouveaux défis professionnels
                    afin de faire évoluer ma carrière vers un secteur d'activité stimulant
                    et innovant les métiers du web.</p>
                    <p class="textecontact">
                        <img class="flecheverte" src="images/flecheverte1.png" alt="fleche verte">
                        <a class="textecontact" href="tel:+330662939679">
                            06 62 93 96 79
                        </a>
                    </p>
                    <p class="textecontact">
                        <img class="flecheverte" src="images/flecheverte1.png" alt="fleche verte">
                        <a class="textecontact" href="mailto:ff.rossignol@yahoo.fr">
                            ff.rossignol@yahoo.fr
                        </a>
                    </p>
                    <p class="textecontact">
                        <img class="flecheverte" src="images/flecheverte1.png" alt="fleche verte">
                        <a class="textecontact" href="images/Franck Rossignol Graphiste.pdf" target="_blank" download="CV Franck ROSSIGNOL.pdf">
                            Téléchargez mon CV
                        </a>
                    </p>
                    <p class="textecontact">
                        <img class="flecheverte" src="images/linkedin.png" alt="linkedin">
                        <a class="textecontact" href="https://www.linkedin.com/in/rossignol-franck-4a755a98/" target="_blank">
                            Linkedin
                        </a>
                    </p>
                </div>
            </div>
      </aside>
        
        
        
<!-- partie droite mobile sauf la navbar -->        
      <main>
          
<!-- barre de navigation -->           
        <nav class="navbar">                    
                <ul>
                    <li><a href="index.html">Accueil</a></li>
                    <li><a href="creations.html">Mes créations</a></li>
                    <li><a href="parcours.html">Mon parcours</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
        </nav>
          
                  
<!-- partie centrale mobile -->
 <section class="containerrealisations">       
    <div >
        <?php if (!empty($creations)): ?>
            <?php foreach ($creations as $creation): ?>
                <div>
                    <h1 class="titrerealisation"><?= $creation['titre']; ?></h1>
                    <div class="blocimagerealisation">
                    <img class="imagerealisation" src="<?= $creation['photo1']; ?>">
                    </div>
                    <p class="descriptionrealisation"><?= $creation['texte']; ?></p>
                    <hr>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>Aucun contact trouvé.</p>
        <?php endif; ?>
    </div>
        </section>     
<!-- fin de la partie centrale mobile -->  



    </div>                
</container>
           
                  
<!-- section footer fond vert -->
            <section class="sectionfooterfondvert">
                    <footer class="stylefooter">
                        <div class="navbarfooter">
                            <ul>
                                <li><a href="index.html">Accueil</a></li>
                                <li><a href="creations.html">Mes créations</a></li>
                                <li><a href="parcours.html">Mon parcours</a></li>
                                <li><a href="contact.php">Contact</a></li>
                            </ul>
                        </div>
                        
                        <div class="coordonnees">
                            <p class="mentions">ff.rossignol@yahoo.fr - 86190 VOUILLE - ©rossignol - 2024 -&nbsp;Webdesign&nbsp;sur&nbsp;FIGMA - HTML & CSS sur Visual Studio Code</p>
                        </div>
                    </footer>

            </section>
            
        </div>
                 
      </main>
        
    </div>
  </body>
</html>
