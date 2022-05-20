<?php include_once __DIR__ . "/header.php"; ?>
<div class="container tab-pane active" id="home">
    <h1>CONFIGURAÇÕES</h1>
    <hr />
    <p>Conectar banco de dados. <a href="novo-banco.php" target="_blank" title="SAIBA MAIS" data-toggle="pill" data-placement="right" data-tt="tooltip"><i class="far fa-question-circle"></i></a></p>
    <div class="container row">
        <div class="col-md-6">
            <form method="post" action="">
                <label for="new_server">Servidor:</label><input type="text" placeholder="SERVIDOR" required name="new_server"><br>
                <label for="db_new_server">Banco de Dados:</label><input type="text" placeholder="BANCO DE DADOS" required name="db_new_server"><br>
                <label for="user_new_server">Usuário:</label><input type="text" placeholder="USUÁRIO" required name="user_new_server"><br>
                <label for="pwd_new_server">Senha:</label><input type="password" placeholder="SENHA" required name="pwd_new_server"><br>
                <input type="submit" class="btn btn-success"  value="Salvar" name="use_new_server">
            </form>
        </div>
    </div>
    <p>Cards dos Bancos salvos</p>
    <p>Quando clicar no card, abrir modal com a config do banco</p>
    <div class="container row">
        <div class="col">
            <form class="form-group" method="post" action="">
                <select class="form-control" name="selecaoCategoria">
                    <option>SELECIONAR</option>
                    <option>Banco 1</option>
                    <option>Banco 2</option>
                    <option>Banco 3</option>
                </select>
                <input type="submit" value="Escolher" class="btn btn-success" name="verCategoria" />
                <input type="submit" value="Ativar" class="btn btn-primary" />
                <input type="submit" value="Desativar" class="btn btn-danger" />
            </form>
        </div>
    </div>
</div>
<?php include_once __DIR__ . "/footer.php"; ?>
