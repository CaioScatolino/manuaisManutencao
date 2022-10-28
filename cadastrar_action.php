<?php

require 'config.php';

$equipamento = filter_input(INPUT_POST, 'equipamento');
$modelo = filter_input(INPUT_POST, 'modelo');


if ($equipamento && $modelo) {

    $verify = $pdo->prepare("SELECT * FROM equip WHERE equipamento = :equipamento");
    $verify->bindValue(":equipamento", $equipamento);
    $verify->execute();

    if ($verify->rowCount() > 0) {
        header("location:cadastrar.php?msg=equipJaCadastrado");
        exit;
    } else {

        $sql = $pdo->prepare("INSERT INTO equip (equipamento, modelo)
     VALUES (:equipamento, :modelo)");
        $sql->bindValue(':equipamento', $equipamento);
        $sql->bindValue(':modelo', $modelo);
        $sql->execute();


        header("location:cadastrar.php?msg=Sucesso");
        exit;
    }
} else {
    header("Location: cadastrar.php?msg=Deu ruim parceiro");
    exit;
}
