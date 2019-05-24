<?php

require_once __DIR__ . "/config/parameters.php";

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

/**
 * Supprimer une ligne dans une table
 * @param string $table Nom de la table
 * @param int $id Identifiant de la ligne
 */
function deleteRow(string $table, int $id) {
    global $connection;

    $query = "DELETE FROM $table WHERE id = :id";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);

    try {
        $stmt->execute();
    } catch (PDOException $exception) {
        return $exception;
    }

    return null;
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

function insertPays(string $titre, string $image) {
    global $connection;

    $query = "
        INSERT INTO pays(titre, image)
        VALUES (:titre, :image)
    ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":titre", $titre);
    $stmt->bindParam(":image", $image);
    $stmt->execute();
}

function updatePays(int $id, string $titre, string $image) {
    global $connection;

    $query = "
        UPDATE pays
        SET titre = :titre,
            image = :image
        WHERE id = :id
    ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":titre", $titre);
    $stmt->bindParam(":image", $image);
    $stmt->execute();
}





function getUtilisateurByEmailMotDePasse(string $email, string $password) {
    global $connection;

    $query = "
        SELECT *
        FROM utilisateur
        WHERE utilisateur.email = :email
        AND utilisateur.password= SHA1(:password)
    ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":password", $password);
    $stmt->execute();

    return $stmt->fetch();
}


function insertSejour(string $titre, string $intro, string $img1, string $img2, string $img3, string $recap, int $niveau, int $duree, int $pays_id) {
    global $connection;

    $query = "
        INSERT INTO sejour (titre, intro, img1, img2, img3, recap1, difficulte, duree, pays_id)
        VALUES (:titre, :intro, :img1, :img2, :img3, :recap1, :difficulte, :duree, :pays_id)
    ";

    $stmt = $connection->prepare($query);
    
    $stmt->bindParam(":titre", $titre);
    $stmt->bindParam(":intro", $intro);
    $stmt->bindParam(":img1", $img1);
    $stmt->bindParam(":img2", $img2);
    $stmt->bindParam(":img3", $img3);
    $stmt->bindParam(":recap1", $recap);
    $stmt->bindParam(":difficulte", $niveau);
    $stmt->bindParam(":duree", $duree);
    $stmt->bindParam(":pays_id", $pays_id);
    $stmt->execute();

    $sejour_id = $connection->lastInsertId();

    
}

function updateSejour (int $id, string $titre, string $intro, string $img1, string $img2, string $img3, string $recap, int $duree, int $niveau, int $pays_id) {
    global $connection;

    $query = "
        UPDATE sejour
        SET 
            titre = :titre,
            intro = :intro,
            img1 = :img1,
            img2 = :img2,
            img3 = :img3,
            recap1 = :recap1,
            difficulte = :difficulte,
            duree = :duree,
            pays_id = :pays_id

        WHERE id = :id
    ";

    $stmt = $connection->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":titre", $titre);
    $stmt->bindParam(":intro", $intro);
    $stmt->bindParam(":img1", $img1);
    $stmt->bindParam(":img2", $img2);
    $stmt->bindParam(":img3", $img3);
    $stmt->bindParam(":recap1", $recap);
    $stmt->bindParam(":difficulte", $niveau);
    $stmt->bindParam(":duree", $duree);
    $stmt->bindParam(":pays_id", $pays_id);
    $stmt->execute();
}

?>