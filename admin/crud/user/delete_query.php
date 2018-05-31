<?php

require_once '../../../model/database.php';

$id = $_GET["id"];

$user = getOneEntity("user", $id);

deleteEntity("user", $id);

echo json_encode($user);