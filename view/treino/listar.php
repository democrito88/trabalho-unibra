<?php echo file_get_contents(__DIR__."/../layout/cabecalho.php"); ?>
<?php echo file_get_contents(__DIR__."/../layout/navbar.php"); ?>
<div class="card">
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Descrição</th>
                    <th>Local</th>
                    <th>Quando?</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if(isset($treinos)){
                    foreach ($treinos as $i => $treino) {
                        echo "<tr>
                        <td>".$treino->getId()."</td>
                        <td>".$treino->getDescricao()."</td>
                        <td>".$treino->getLocal()."</td>
                        <td>".$treino->getDataHora()."</td>
                        <td>
                            <a href='/editar-treino?id=".$treino->getId()."' class='btn btn-primary'>Editar</a>
                            <a href='/remover-treino?id=".$treino->getId()."' class='btn btn-danger'>Remover</a>
                        </td>
                        </tr>";
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
<?php echo file_get_contents(__DIR__."/../layout/rodape.php"); ?>