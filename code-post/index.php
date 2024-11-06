<?php
// index.php
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contrôle de LED</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Contrôle des LED</h1>

    <!-- LED Verte -->
    <div class="button-container">
        <form method="post" action="control_led.php">
            <button type="submit" name="action" value="on" class="button green-on">Allumer la LED Verte</button>
            <input type="hidden" name="color" value="green">
        </form>
        
        <form method="post" action="control_led.php">
            <button type="submit" name="action" value="off" class="button green-off">Éteindre la LED Verte</button>
            <input type="hidden" name="color" value="green">
        </form>
    </div>

    <!-- LED Bleue -->
    <div class="button-container">
        <form method="post" action="control_led.php">
            <button type="submit" name="action" value="on" class="button blue-on">Allumer la LED Bleue</button>
            <input type="hidden" name="color" value="blue">
        </form>

        <form method="post" action="control_led.php">
            <button type="submit" name="action" value="off" class="button blue-off">Éteindre la LED Bleue</button>
            <input type="hidden" name="color" value="blue">
        </form>
    </div>

    <!-- LED Rouge -->
    <div class="button-container">
        <form method="post" action="control_led.php">
            <button type="submit" name="action" value="on" class="button red-on">Allumer la LED Rouge</button>
            <input type="hidden" name="color" value="red">
        </form>

        <form method="post" action="control_led.php">
            <button type="submit" name="action" value="off" class="button red-off">Éteindre la LED Rouge</button>
            <input type="hidden" name="color" value="red">
        </form>
    </div>
</body>
</html>
