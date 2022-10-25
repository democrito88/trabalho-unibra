<?php echo file_get_contents(__DIR__."/../layout/cabecalho.php"); ?>
<div class="row justify-content-center my-5">
    <div class="col-3 align-self-center">
        <div class="card border border-dark">
            <div class="card-body">
                <h3 class="text-center">Bem vindo!</h3>
                <form action="/autenticar" method="post">
                    <div class="form-group">
                        <label for="login" class="form-label">Login</label>
                        <input class="form-control" type="text" name="login" id="login">
                    </div>
                    <div class="form-group">
                        <label for="senha" class="form-label">Senha</label>
                        <input class="form-control" type="password" name="senha" id="senha">
                    </div>
                    <div class="form-group py-2">
                        <button class="btn btn-success" type="submit">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php echo file_get_contents(__DIR__."/../layout/rodape.php"); ?>