<?php include("header.php"); ?>
<div class="container">
    <h1>CADASTRO DE <strong><?php echo $logTabela; ?></strong>&nbsp;&nbsp;<a href="#" title="LISTAR CADASTROS" data-toggle="pill" data-placement="right" data-tt="tooltip"><i class="fas fa-address-card"></i></a></h1>
    <hr>
    <div class="container row">
        <div class="col-md-6">
            <form class="form-group" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <input type="submit" value="Salvar" class="btn btn-primary" name="criarCadastro">
                <input type="reset" value="Limpar" class="btn btn-danger">
            </form>
        </div>
    </div>
</div>
<?php include("footer.php"); ?>