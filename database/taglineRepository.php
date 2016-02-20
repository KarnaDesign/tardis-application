<?php

    function readAllTaglines($connectionInfo)
    {
       $connection = new mysqli($connectionInfo["serverName"], $connectionInfo["username"], $connectionInfo["password"],
           $connectionInfo["database"]);
        if ($connection->connect_error) {
            die("Connection failed: " . $connection->connect_error);
        }

        $sql = "SELECT id, quote FROM tagline";
        $result = $connection->query($sql);

        $taglines = $result->fetch_all(MYSQLI_ASSOC); //Gets all rows from result as an associative array

        $connection->close();

        return $taglines;
    }

?>