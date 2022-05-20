<?php include("header.php"); ?>
<div class="container">
    <h1>CAMPOS DE <strong>_NOME_TABELA_</strong></h1>
    <hr />
    <div class="container row">
        <div class="col-md-6">
            <h4>CRIAR NOVO CAMPO</h4>
            <form class="form-group" method="post" action="">
                <input type="text" placeholder="NOME DO CAMPO" class="form-control" onkeyup="this.value=this.value.toUpperCase();" id="ctrlSpaceCCol" required name="criarCampo"><br>
                <input type="submit" value="SALVAR" class="btn btn-primary">
            </form>
        </div>
    </div><br/>
    <div class="container row">
        <div class="col-md-12">
            <h4>EFETUAR NOVO CADASTRO EM <a href="#" title="NOVO CADASTRO" data-toggle="pill" data-placement="right" data-tt="tooltip">_NOME_TABELA_&nbsp;<i class="fas fa-plus"></i></a></h4>
        </div>
    </div><br/>
    <div class="container row">
        <div class="col-md-6">
            <h4>EDITAR CAMPO DA TABELA</h4>
            <form class="form-group" method="post" action="">
                <select class="form-control" name="selecaoCampo">
                    <option>SELECIONAR CAMPO</option>
                </select><br>
                <input type="text" placeholder="NOME DO CAMPO" class="form-control" onkeyup="this.value=this.value.toUpperCase();" id="ctrlSpaceECol" required name="editarCampo"><br />
                <input type="submit" value="EDITAR" class="btn btn-primary">
            </form>
        </div>
    </div><br/>
    <div class="container row">
        <div class="col-md-6">
            <h4>APAGAR CAMPO</h4>
            <form class="form-group" method="post" action="">
                <select class="form-control" name="selecaoCampo">
                    <option>SELECIONAR CAMPO</option>
                </select><br />
                <input type="submit" value="APAGAR" class="btn btn-danger" name="apagarCampo">
            </form>
        </div>
    </div>
</div>
<?php include("footer.php"); ?>
