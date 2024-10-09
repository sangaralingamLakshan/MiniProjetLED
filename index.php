<?php
if (isset($_GET['action'])) {
    $action = $_GET['action'];
    $script = '';

    if ($action === 'allumer') {
        $couleur = isset($_GET['couleur']) ? $_GET['couleur'] : '';
        $intensite = isset($_GET['intensite']) ? intval($_GET['intensite']) : 0;

        // En fonction de la couleur, définissez le script
        if ($couleur === 'rouge') {
            $script = 'rouge.py'; 
        } elseif ($couleur === 'vert') {
            $script = 'vert.py';
        } elseif ($couleur === 'bleu') {
            $script = 'bleu.py';  
        }

        // Si un script valide a été trouvé, exécutez-le
        if ($script) {
            // Exécutez le script avec l'intensité comme argument
            $output = shell_exec("python3 /home/aichi_a/Public/html/" . $script . " " . $intensite);
            echo $output ? $output : "Commande exécutée avec succès.";
        } else {
            echo "Action ou script invalide.";
        }
    } elseif ($action === 'eteindre') {
        // Pour éteindre la LED, exécutez le script d'extinction
        $output = shell_exec("python3 /home/aichi_a/Public/html/eteindre.py");
        echo $output ? $output : "LED éteinte.";
    } else {
        echo "Action invalide.";
    }
} else {
    echo "Aucune action spécifiée.";
}
?>
