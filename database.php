<?php

require_once __DIR__ . "/base/config/parameters.php";

$connection = new PDO("mysql:dbname=" . DB_NAME . ";host=" . DB_HOST, DB_USER, DB_PASS, [
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8', lc_time_names = 'fr_FR';",
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_EMULATE_PREPARES => false
]);

/**
 * Rechercher l'ensemble des lignes d'un table
 * @param string $table Nom de la table
 * @param string|null $orderby Tri
 * @param int|null $limit Limite
 * @return array Lignes retournées par la requête SQL
 */
function getAllRows(string $table, string $orderby = null, int $limit = null) {
    global $connection;

    $query = "SELECT * FROM $table";

    if ($orderby != null) {
        $query = $query . " ORDER BY $orderby";
    }
    if ($limit != null) {
        $query = $query . " LIMIT $limit";
    }

    $stmt = $connection->prepare($query);
    $stmt->execute();

    return $stmt->fetchAll();
}


/**
 * Rechercher une ligne dans une table
 * @param string $table Nom de la table
 * @param int $id L'identifiant de la ligne
 * @return array Ligne retournée par la requête SQL
 */
function getOneRow(string $table, int $id) {
    global $connection;

    $query = "SELECT * FROM $table WHERE id = :id";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetch();
}


function getAllSejoursByPays(int $id) {
    global $connection;

    $query = "
        SELECT
            sejour.*,
            pays.titre AS pays
        FROM sejour
        INNER JOIN pays ON sejour.pays_id = pays.id
        WHERE sejour.pays_id = :id
    ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetchAll();
}

function getAllDepartsBySejour(string $table, int $id) {
    global $connection;

    $query = "
        SELECT
            depart.*,
            DATE_ADD(depart.date_depart, INTERVAL sejour.duree DAY) AS date_retour
        FROM depart
        INNER JOIN sejour ON depart.sejours_id = sejour.id
        WHERE depart.sejours_id = :id
    ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetchAll();
}