<?php echo file_get_contents(__DIR__ . "/../layout/cabecalho.php"); ?>
<?php echo file_get_contents(__DIR__ . "/../layout/navbar.php"); ?>
<div class="row justify-content-center">
    <div class="col-8">
        <div class="card">
            <div class="card-body">
                <button class="btn btn-success" onclick="location.href = '/criar-treino'">
                    <i class="bi bi-plus"></i>
                    &nbsp;Novo
                </button>
                <table class="table table-striped">
                    <caption>Treinos adicionados recentemente</caption>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Descrição</th>
                            <th>Onde?</th>
                            <th>Quando?</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (isset($treinos)) {
                            foreach ($treinos as $treino) {
                        ?>
                                <tr>
                                    <td><?= $treino->getId(); ?></td>
                                    <td><?= $treino->getDescricao(); ?></td>
                                    <td><?= $treino->getLocal(); ?></td>
                                    <td><?= $treino->getDataHora()->format('d/m/Y H:i:s'); ?></td>
                                </tr>
                        <?php
                            }
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php echo file_get_contents(__DIR__ . "/../layout/rodape.php"); ?>