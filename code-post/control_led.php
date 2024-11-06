<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Récupérer les données envoyées
    $action = $_POST['action'];
    $color = $_POST['color']; // Couleur de la LED

    // Déterminer le chemin du script à exécuter
    $script_path = '/var/www/html/code-post/'; // Chemin vers les scripts Python

    if ($action == 'on') {
        // Allumer la LED
        if ($color == 'green') {
            exec('python3 ' . $script_path . 'led_green_on.py', $output, $return_var);
        } elseif ($color == 'blue') {
            exec('python3 ' . $script_path . 'led_blue_on.py', $output, $return_var);
        } elseif ($color == 'red') {
            exec('python3 ' . $script_path . 'led_red_on.py', $output, $return_var);
        }
    } elseif ($action == 'off') {
        // Éteindre la LED
        if ($color == 'green') {
            exec('python3 ' . $script_path . 'led_green_off.py', $output, $return_var);
        } elseif ($color == 'blue') {
            exec('python3 ' . $script_path . 'led_blue_off.py', $output, $return_var);
        } elseif ($color == 'red') {
            exec('python3 ' . $script_path . 'led_red_off.py', $output, $return_var);
        }
    }

    // Rediriger vers la page précédente
    header('Location: index.html');
    exit();
}
?>
