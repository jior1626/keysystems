<?php
    require_once('app.php');
    require_once('config.php');

    $ENV = $config['ENV'];

    $DB_HOST = $config['DB_HOST'];
    $DB_USERNAME = $config['DB_USERNAME'];
    $DB_PASSWORD = $config['DB_PASSWORD'];
    $DB_DATABASE = $config['DB_DATABASE'];

    $con = new mysqli($DB_HOST, $DB_USERNAME, $DB_PASSWORD, $DB_DATABASE);

    if ($con->connect_errno) {
        echo "Failed to connect to MySQL: " . $con->connect_error;
    }
?>
