<?php echo file_get_contents(__DIR__."/../layout/cabecalho.php"); ?>
<div class="row justify-content-center">
    <div class="col-3">
        <div class="card">
            <div class="card-body">
                <h3 class="text-center">Faça parte da nossa comunidade</h3>
                <form action="/salvar-usuario" method="post">
                    <div class="form-group">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" name="nome" id="nome">
                    </div>
                    <div class="form-group">
                        <label for="login" class="form-label">Apelido para login</label>
                        <input type="text" name="login" id="login">
                    </div>
                    <div class="form-group">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email">
                    </div>
                    <div class="form-group">
                        <label for="senha" class="form-label">Senha</label>
                        <input type="password" name="senha" id="senha">
                    </div>
                    <button class="btn btn-success" type="submit">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php echo file_get_contents(__DIR__."/../layout/rodape.php"); ?>