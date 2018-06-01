<?php

function getAllGuideSejour(int $id) {
    /* @var $connection PDO */
    global $connection;

    $query = "SELECT *
            FROM guide
            WHERE guide.sejour_id = :id;";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetchAll();
}
