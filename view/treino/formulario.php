<div class="form-group">
    <label for="descricao" class="form-label">Descrição</label>
    <input class="form-control" type="text" name="descricao" id="descricao" value="<?= isset($treino) ? $treino->getDescricao() : "" ?>">
</div>
<div class="form-group">
    <label for="local" class="form-label">Local</label>
    <input class="form-control" type="text" name="local" id="local" value="<?= isset($treino) ? $treino->getLocal() : "" ?>">
</div>
<div class="form-group mb-3">
    <label for="dataHora" class="form-label">Quando?</label>
    <input class="form-control" type="datetime" name="dataHora" id="dataHora" value="<?= isset($treino) ? $treino->getDataHora() : "" ?>">
</div>