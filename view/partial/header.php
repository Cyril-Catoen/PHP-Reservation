<!DOCTYPE html>
<html lang="en">
<head>
        <!-- Permet de configurer le site en responsive -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <!-- Import du fichier style.css -->
        <link rel="stylesheet" href="../css/style.css?v=<?= time(); ?>" />

        <!-- Nomme l'onglet du navigateur -->
        <title>Renta'Roof</title>
</head>

<body>
<header>
    <nav>
        <ul>
            <li><a href="reservation.controller.php">Réserver</a></li>
            <li><a href="cancel-reservation.controller.php">Annuler</a></li>
        </ul>
    </nav>
</header>