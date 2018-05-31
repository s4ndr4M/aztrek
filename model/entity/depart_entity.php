<?php

function getAllDepartBySejour(int $id) {
    /* @var $connection PDO */
    global $connection;

    $query = "SELECT
                    depart.*,
                    depart.nb_places_total - IFNULL(SUM(reservation.nb_places), 0) AS nb_places_restantes
            FROM depart
            LEFT JOIN reservation ON reservation.depart_id = depart.id
            WHERE depart.sejour_id = :id
            GROUP BY depart.id;";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetchAll();
}
