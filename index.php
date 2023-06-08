<?php
try {
    // Connect to MySQL
    $mysqlClient = new PDO('mysql:host=localhost;dbname=games;charset=utf8', 'root', 'root');
} catch (PDOException $error) {
    die('Erreur : ' . $error->getMessage());
}

$gamesQuery = 'SELECT * FROM games';
$gamesStatement = $mysqlClient->query($gamesQuery);
$games = $gamesStatement->fetchAll();

foreach ($games as $recipe) {
    ?>
    <p>
        <?= $recipe['id'] . ' ' . $recipe['name'] ?>
    </p>
    <?php
}
?>
