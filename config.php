<?php

$base = 'http://localhost:8080/manuaisManutencao';

$db_name = 'manuaisManutencao';
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_type = 'mysql';

$pdo = new PDO("$db_type:dbname=$db_name;host=$db_host",$db_user,$db_pass);

$equipamento = '';
$modelo = '';
// $id = '';

$sql = $pdo->query("SELECT * FROM equip ORDER BY modelo ASC");

$sql->execute();

$data =[];

$data = $sql->fetchAll(PDO::FETCH_ASSOC);
