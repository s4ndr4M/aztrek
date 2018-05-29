<?php

function getAllSejoursByPays(int $id) {
    /* @var $connection PDO */
    global $connection;

    $query = "SELECT *
            FROM sejour
            WHERE sejour.pays_id = :id;";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetchAll();
}
