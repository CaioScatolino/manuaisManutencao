<?php
require 'header.php';
?>

<div class="container-fluid bg-dark" style="min-height: 80.1vh; margin-top:80px">
        <?php
        if (isset($_GET['msg']) && $_GET['msg'] == 'Sucesso'):
        ?>
        <div class="alert alert-success" role="alert" id="sucesso">
            <?php echo 'Cadastro realizado com sucesso';?>
        </div>
        <?php
        endif;
        ?>
        <?php
        if (isset($_GET['msg']) && $_GET['msg'] == 'equipJaCadastrado'):
        ?>
        <div class="alert alert-danger" role="alert" id="sucesso">
            <?php echo 'Este equipamento já está cadastrado, favor verificar na lista';?>
        </div>
        <?php
        endif;
        ?>
        
    <form id="form" action="cadastrar_action.php" method="get">
        <div class="row text-light">
            <div class="col">
                <div class="form-group">
                    <label for="formGroupExampleInput">Insira o Equipamento</label>
                    <input type="text" class="form-control" name="equipamento" id="formGroupExampleInput" placeholder="Insira o Equipamento">
                </div>
            </div>
            <div class="col">
                <label for="formGroupExampleInput">Selecione o Tipo de Equipamento</label>
                <select class="form-control" name="modelo">
                    <option>Aplicador de Selo</option>
                    <option>Aquecedor de Correias</option>
                    <option>Corte Cabo de Bateria</option>
                    <option>Corte de Presilha</option>
                    <option>Corte de Tubos</option>
                    <option>Enfaixadeira</option>
                    <option>Kabatec</option>
                    <option>Kappa</option>
                    <option>Máquina de Corte</option>
                    <option>Marcadora</option>
                    <option>Mesas</option>
                    <option>Ondal</option>
                    <option>Prensas</option>
                    <option>Sonic</option>
                    <option>Twister</option>
                </select>
            </div>
        </div>
        <!-- 
        <form action="cadastrar_action.php" method="post" enctype="multipart/form-data">
            Select image to upload:
            <input type="file" name="file" id="file">
        </form> -->



        <button class="btn btn-primary" type="submit">Cadastrar</button>
    </form>
</div>

<?php
require 'footer.php';
?>