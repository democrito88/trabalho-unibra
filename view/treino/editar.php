<?php echo file_get_contents(__DIR__ . "/../layout/cabecalho.php"); ?>
<?php echo file_get_contents(__DIR__ . "/../layout/navbar.php"); ?>
<div class="row justify-content-center mt-5">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <h3 class="text-center">Editar treino</h3>
                <form action="/atualizar-treino" method="POST">
                    <?php require __DIR__ . '/formulario.php'; ?>
                    <button class="btn btn-success" type="submit">Editar</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php echo file_get_contents(__DIR__ . "/../layout/rodape.php"); ?>