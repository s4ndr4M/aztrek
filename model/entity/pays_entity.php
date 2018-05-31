<?php

function insertPays(string $nom, string $picture) {
    /* @var $connection PDO */
    global $connection;

    $query = "INSERT INTO pays (nom, photo)
                VALUES (:nom, :photo);";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":nom", $nom);
    $stmt->bindParam(":photo", $picture);
    $stmt->execute();
}