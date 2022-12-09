<?php

$pdo = new PDO('sqlite:basePrueba');

$nombre = $_GET['nombre'];

$statement = $pdo->query("INSERT INTO torneo
(participantes)
VALUES('$nombre');
");

$statement = $pdo->query("SELECT * FROM torneo");

$rows = $statement->fetchAll(PDO::FETCH_ASSOC);


var_dump($rows);