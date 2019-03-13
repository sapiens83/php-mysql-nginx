<?php

$value = "Result";

$db = new PDO('mysql:host=database;dbname=mydb;charset=utf8mb4', 'myuser', 'secret');

$databaseTest = ($db->query('SELECT * FROM dockerSample'))->fetchAll(PDO::FETCH_OBJ);

?>

<html>
    <body>
        <h1>Database, <?= $value ?>!</h1>

        <?php foreach($databaseTest as $row): ?>
            <p>Database , <?= $row->name ?></p>
        <?php endforeach; ?>
    </body>
</html>
