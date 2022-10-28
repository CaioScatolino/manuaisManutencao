<?php

require 'config.php';

$id = filter_input(INPUT_GET, 'id');

$sql = $pdo->prepare("DELETE FROM equip WHERE id = :id");
$sql->bindValue(':id', $id);
$sql->execute();

header("location: lista.php");
exit;