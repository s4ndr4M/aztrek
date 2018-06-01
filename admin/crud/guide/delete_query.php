<?php

require_once '../../../model/database.php';

$id = $_GET["id"];

deleteEntity("guide", $id);

header("Location: index.php");