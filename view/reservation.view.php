<?php 
require_once('partial/header.php');
?>

<main>
    <h2>Réserver</h2>
        <!-- Création du formulaire en méthode POST pour que les données soumises du formulaire puissent être récupérées dans la page. Par défaut le formulaire est en GET si rien n'est précisé.-->

    <form method="POST" action="">
        <div class="w80">
            <input type="text" id="name" name="name" placeholder="Entrez votre prénom et nom" required>
        </div>

        <div class="w80">
            <input type="date" id="" name="startDate" placeholder="Date de début" required>
        </div>

        <div class="w80">
            <input type="date" id="" name="endDate" placeholder="Date de fin" required>
        </div>

        <div class="w80">
            <!-- Créer une ligne de formulaire de type select pour offrir à l'utilisateur un choix multiples entre des valeurs prédéfinies. -->
            <select name="place">
                    <!-- On insère une option en selected disabled pour qu'aucune option à valeur soit présélectionné de base et indiquer à l'utilisateur la marche à suivre -->
                    <option selected disabled>Choisissez votre résidence</option>
                    <option value="Versailles">Château de Versailles</option> 
                    <option value="SkyTower">Tokyo Sky Tower</option>
                    <option value="ISS">Station Spatial Internationale</option>
            </select>
        </div>

        <div class="w80">
                <input type="checkbox" id="cleaning" name="cleaningChoice" required>
        </div>

        <button class="submit3" type="submit">Réserver</button>

    </form>
</main>

<?php
require_once('partial/footer.php');

?>