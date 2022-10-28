<?php

require 'header.php';
require 'config.php';
?>


<div class="container" style="min-height: 90vh; ">


<table class="table table-bordered table-hover" style="margin-top: 10px;">
    <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>Equipamento</th>
            <th>Modelo</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody class="table-light">
        <?php
        foreach ($data as $item):
        ?>

        <tr>
            <td><?=$item['id'];?></td>
            <td><?=$item['equipamento'];?></td>
            <td><?=$item['modelo'];?></td>
            <td>
                <a href="<?=$base;?>/editar.php?id=<?=$item['id'];?>" class="btn-sm btn-primary">Editar</a>
                <a href="<?=$base;?>/deletar.php?id=<?=$item['id'];?>" class="btn-sm btn-danger" onclick="return confirm('Realmente deseja deletar este item?')">Deletar</a>
            </td>
        </tr>

        <?php
        endforeach;
        ?>
    </tbody>
</table>


</div>

<?php
require 'footer.php';
?>