<?php $theme = json_decode(file_get_contents("http://45.80.152.239/api/template/all"))->data; if($theme): ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?=$theme->style->bootstrap;?>">
    <link rel="stylesheet" href="<?=$theme->style->fontawesome;?>">
    <link rel="stylesheet" href="<?=$theme->style->fonts;?>">
    <link rel="stylesheet" href="<?=$theme->style->css;?>">
</head>
<body>
    <?php include_once __DIR__ . "/header.php"; ?>
    <div class="container tab-pane active" id="home">
        <h1>CONFIGURAÇÕES</h1>
        <p>Você tem opção de contratar um servidor externo ou de utilizar o servidor padrão. <a href="#" target="_blank" title="SAIBA MAIS" data-toggle="pill" data-placement="right" data-tt="tooltip"><i class="far fa-question-circle"></i></a></p>
        <div class="row">
            <div class="col-6">
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <label for="new_server">Servidor:</label><input type="text" placeholder="SERVIDOR" required name="new_server"><br>
                    <label for="db_new_server">Banco de Dados:</label><input type="text" placeholder="BANCO DE DADOS" required name="db_new_server"><br>
                    <label for="user_new_server">Usuário:</label><input type="text" placeholder="USUÁRIO" required name="user_new_server"><br>
                    <label for="pwd_new_server">Senha:</label><input type="password" placeholder="SENHA" required name="pwd_new_server"><br>
                    <input type="submit" value="Salvar" name="use_new_server">
                </form>
            </div>
            <div class="col-2 text-center">OU</div>
            <div class="col-2">
                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <input type="submit" value="USAR PADRÃO" name="use_server_default">
                </form>
            </div>
        </div>
    </div>
    <script src="<?=$theme->script->bootstrap;?>"></script>
    <script src="<?=$theme->script->jquery111;?>"></script>
    <?php include_once __DIR__ . "/footer.php"; ?>
</body>
</html>
<?php endif;