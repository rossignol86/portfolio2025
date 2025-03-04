<?php

include('connexion.php');

// 1. Suppression du contact
if (isset($_GET['id_supprimer']) && is_numeric($_GET['id_supprimer'])) {
    $id_supprimer = (int) $_GET['id_supprimer'];
    
    // Requête de suppression sécurisée
    $sql_supprimer = "DELETE FROM contacts WHERE id = ?";
    $stmt = mysqli_prepare($connexion, $sql_supprimer);
    mysqli_stmt_bind_param($stmt, 'i', $id_supprimer);
    mysqli_stmt_execute($stmt);
    
    // Vérifie si la suppression a réussi
    if (mysqli_stmt_affected_rows($stmt) > 0) {
        echo "<script>alert('Contact supprimé avec succès.');</script>";
    } else {
        echo "<script>alert('Erreur lors de la suppression du contact.');</script>";
    }
    
    // Redirection pour éviter la suppression multiple en cas de rafraîchissement
    header('Location: listecontact.php');
    exit;
}

// 2. Récupération des contacts
$contacts = [];
$sql = "SELECT * FROM contacts ORDER BY id DESC";
$resultats = mysqli_query($connexion, $sql);

if ($resultats && mysqli_num_rows($resultats) > 0) {
    $contacts = mysqli_fetch_all($resultats, MYSQLI_ASSOC);
} else {
    echo "Erreur de requête : " . mysqli_error($connexion) . "<br>";
}

// 3. Fermeture de la connexion
mysqli_close($connexion);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&family=Righteous&display=swap" rel="stylesheet">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin site</title>
    <link rel="stylesheet" href="../styles/reset.css">
    <link rel="stylesheet" href="../styles/txtadmin.css">
    <link rel="icon" href="favicon.ico">
</head>

<body>
    <section class="blocgestion">
        <div>
            <div class="boutonadmingestion">
                <a href="../admin.html" class="boutonadmingestion-envoyer">Index portfolio</a>
            </div>
        </div>
        <div>
            <hr>
        </div>
    </section>

    <div class="bloclistecontact">
        <?php if (!empty($contacts)): ?>
            <?php foreach ($contacts as $contact): ?>
                <div>
                    
                    <p class="nomducontact"><?= htmlspecialchars($contact['nom']); ?></p>
                    <p class="societeducontact"><?= htmlspecialchars($contact['societe']); ?></p>
                    <p class="telducontact"><?= htmlspecialchars($contact['telephone']); ?></p>
                    <p class="telducontact"><?= htmlspecialchars($contact['email']); ?></p>
                    <p class="messageducontact"><?= nl2br(htmlspecialchars($contact['message'])); ?></p>

                    <div class="container-bouton-supprimer">
                        <a href="listecontact.php?id_supprimer=<?= $contact['id']; ?>" 
                        class="bouton-supprimer-contact"
                        onclick="return confirm('Franck, tu es sur de vouloir supprimer ce message ? Attention il va disparaître, vraiment disparaître, vraiment vraiment dispaître !');">
                            Supprimer contact
                        </a>
                    </div>
                    <hr>
                </div>    
            <?php endforeach; ?>
        <?php else: ?>
            <p>Aucun contact trouvé.</p>
        <?php endif; ?>
    </div>
</body>
</html>