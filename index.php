<?php
if (isset($_GET['action'])) {
    $action = $_GET['action'];
    $script = '';

    if ($action === 'allumer') {
        $couleur = isset($_GET['couleur']) ? $_GET['couleur'] : '';
        $intensite = isset($_GET['intensite']) ? intval($_GET['intensite']) : 0;

        // En fonction de la couleur, vous pouvez ajuster les valeurs PWM pour les GPIO correspondants.
        if ($couleur === 'rouge') {
            $script = 'rouge.py'; 
        } elseif ($couleur === 'vert') {
            $script = 'vert.py';
        } elseif ($couleur === 'bleu') {
            $script = 'blue.py';
        }

        if ($script) {
            // Exécutez le script avec l'intensité en argument
            $output = shell_exec("python3 /home/aichi_a/Public/html/" . $script . " " . $intensite);
            echo $output ? $output : "Commande exécutée avec succès.";
        } else {
            echo "Action ou script invalide.";
        }
    } elseif ($action === 'eteindre') {
        $script = 'eteindre.py'; 
    }

    if ($script) {
        $output = shell_exec("python3 /home/aichi_a/Public/html/" . $script);
        echo $output ? $output : "Commande exécutée avec succès.";
    } else {
        echo "Action ou script invalide.";
    }
} else {
    echo "Aucune action spécifiée.";
}
?>
