<?php

require 'config.php';

$id = filter_input(INPUT_POST, 'id');
$equipamento = filter_input(INPUT_POST, 'equipamento');
$modelo = filter_input(INPUT_POST, 'modelo');


if ($equipamento && $modelo && $id) {

    $sql = $pdo->prepare("UPDATE equip SET equipamento=:equipamento, modelo = :modelo WHERE id = :id");
    $sql->bindValue(':equipamento', $equipamento);
    $sql->bindValue(':id', $id);
    $sql->bindValue(':modelo', $modelo);
    $sql->execute();

    header("Location: lista.php");
    exit;

} else {
    header("Location: cadastrar.php?msg=falha");
    exit;
}
