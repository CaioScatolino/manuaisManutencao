<?php

require 'config.php';
require 'header.php';

?>


<div class="container bg-dark text-white" style="min-height: 85vh;">
    <div class="row">


        <div class="row">
            <?php foreach ($data as $item) : ?>

                <div class="col-3">
                <div class="col" style="margin-top: 50px; display:flex; justify-content: center;">
                   <img width="200px" src="<?=$base;?>/imagens/<?=$item['equipamento'];?>.jpg" alt="">
                </div>

                <div class="col" style="text-align: center;">
                    <?= $item['equipamento']; ?>
                </div>

                <div class="col" style="text-align: center;">
                    <?= $item['modelo']; ?>
                </div>
                </div>


            <?php endforeach ?>
        </div>

    </div>
</div>


<?php
require 'footer.php';
