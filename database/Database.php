<?php
    const serverName = "localhost";
    const port = 3307;
    const database = "accomodation_request";
    const username = "root";
    const connectionString = "mysql:host=" . serverName . ";dbname=" . database . ";port=" . port;
    
    try {
        $connection = new PDO(connectionString, username);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $exception) {
        echo "Connection Failed: {$exception->getMessage()}";
    }

?>