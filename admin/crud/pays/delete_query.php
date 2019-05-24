<?php
require_once __DIR__ . "/../../security.php";
require_once __DIR__ . "/../../../database.php";

$id = $_POST["id"];

$error = deleteRow("pays", $id);

if ($error) {
    header("Location: index.php?errcode=" . $error->getCode());
    exit;
}

header("Location: index.php");