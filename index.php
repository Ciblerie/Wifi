<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ssid = $_POST['ssid'];
    $password = $_POST['password'];

    $file = fopen("wifi_config.txt", "w");
    fwrite($file, "SSID: " . $ssid . "\n");
    fwrite($file, "Password: " . $password . "\n");
    fclose($file);

    echo "Enregistrement réussi !";
}
?>