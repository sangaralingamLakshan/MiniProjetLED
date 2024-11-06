<?php
if (isset($_GET['action'])) {
    $action = $_GET['action'];
    if ($action == 'on' || $action == 'off') {
        // Simulate LED control
        file_put_contents('led_status.txt', $action);
        echo "LED turned " . ($action == 'on' ? 'on' : 'off');
    } else {
        echo "Unrecognized action.";
    }
} else {
    echo "No action specified.";
}
?>
