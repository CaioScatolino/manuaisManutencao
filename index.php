<?php

require 'config.php';
require 'header.php';

?>


<div class="container bg-dark text-white" style="min-height: 100vh;">
    <div class="row">


        <div class="row">
            <?php foreach ($data as $item) : ?>
                </a>
                <div class="col-3">
                    <div class="col" style="margin-top: 50px; display:flex; justify-content: center;">
                    <a href="<?=$base;?>/manuais/<?=$item['equipamento'];?>.pdf">
                        <img height="150px" width="500px" class="img-thumbnail" style="height: 200px; width: 500px;" src="<?= $base; ?>/imagens/<?= $item['equipamento']; ?>.jpg" alt="">
                    </a>
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

if(isset($_GET['msg'])){
    echo $_GET['msg'];
  }

?>


