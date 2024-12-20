<?php
require("../config/config.php");
require("../classes/Stage.php");

$valide = true;

$attributs = ["miniature", "titre", "date", "horaire_debut", "horaire_fin", "description", "nb_places", "lieu", "tarif_min", "tarif_max", "id_categorie"];

foreach ($attributs as $attribut) {
    if (isset($_POST[$attribut]) == false) {
        $valide = false;
        break;
    }
}

if ($valide == true) {
    $stage = new Stage(
        null,
        $_POST["miniature"],
        $_POST["titre"],
        $_POST["date"],
        $_POST["horaire_debut"],
        $_POST["horaire_fin"],
        $_POST["description"],
        $_POST["nb_places"],
        $_POST["lieu"],
        $_POST["tarif_min"],
        $_POST["tarif_max"],
        $_POST["id_categorie"]
    );
    
    $stage->ajouterBDD();
}
else {
    header("Location: ../redirection.php");
    exit();
}
?>