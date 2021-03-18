<?php include("header.php"); ?>
<div class="container">
    <h1>CAMPOS DE <strong><?php echo $logTabela; ?></strong></h1>
    <hr>
    <div class="container row">
        <div class="col-md-6">
            <h4>CRIAR</h4>
            <form class="form-group" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <input type="text" placeholder="NOME DO CAMPO" class="form-control" onkeyup="this.value=this.value.toUpperCase();" id="ctrlSpaceCCol" required name="criarCampo"><br>
                <input type="submit" value="SALVAR" class="btn btn-primary">
            </form>
        </div>
    </div>
    <hr>
    <div class="container row">
        <div class="col-md-12">
            <h4>EFETUAR NOVO CADASTRO DE <a href="#" title="NOVO CADASTRO" data-toggle="pill" data-placement="right" data-tt="tooltip"><?php echo $logTabela; ?>&nbsp;<i class="fas fa-plus"></i></a></h4>
        </div>
    </div>
    <hr>
    <div class="container row">
        <div class="col-md-6">
            <h4>EDITAR</h4>
            <form class="form-group" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <select class="form-control" name="selecaoCampo">
                    <option>SELECIONAR CAMPO</option>
                </select><br>
                <input type="text" placeholder="NOME DO CAMPO" class="form-control" onkeyup="this.value=this.value.toUpperCase();" id="ctrlSpaceECol" required name="editarCampo"><br>
                <input type="submit" value="EDITAR" class="btn btn-primary">
            </form>
        </div>
    </div>
    <hr>
    <div class="container row">
        <div class="col-md-6">
            <h4>APAGAR</h4>
            <form class="form-group" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <select class="form-control" name="selecaoCampo">
                    <option>SELECIONAR CAMPO</option>
                </select><br>
                <input type="submit" value="APAGAR" class="btn btn-danger" name="apagarCampo">
            </form>
        </div>
    </div>
</div>
<?php include("footer.php"); ?>