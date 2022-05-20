<?php include("header.php"); ?>
<div class="container">
    <h1>TABELAS DE _BANCO_ONLINE_</h1>
    <hr>
    <div class="container row">
        <div class="col-md-6">
            <h4>CRIAR NOVA TABELA</h4>
            <form class="form-group" method="post" action="">
                <input type="text" placeholder="NOME DA TABELA" class="form-control" onkeyup="this.value=this.value.toUpperCase();" id="ctrlSpaceCCat" required name="criarCategoria"><br>
                <input type="submit" value="CRIAR" class="btn btn-primary">
            </form>
        </div>
    </div><br />
    <div class="container row">
        <div class="col-md-6">
            <h4>VER COLUNAS DA TABELA</h4>
            <form class="form-group" method="post" action="">
                <select class="form-control" name="selecaoCategoria">
                    <option>SELECIONAR TABELA</option>
                </select><br>
                <input type="submit" value="VER" class="btn btn-success" name="verCategoria" />
            </form>
        </div>
    </div><br />
    <div class="container row">
        <div class="col-md-6">
            <h4>RENOMEAR TABELA</h4>
            <form class="form-group" method="post" action="">
                    <select class="form-control" name="selecaoCategoria">
                        <option>SELECIONAR TABELA</option>
                    </select><br>
                    <input type="text" placeholder="RENOMEAR CATEGORIA" class="form-control" onkeyup="this.value=this.value.toUpperCase();" id="ctrlSpaceECat" required name="editarCategoria"><br>
                <input type="submit" value="EDITAR" class="btn btn-primary">
            </form>
        </div>
    </div><br />
    <div class="container row">
        <div class="col-md-6">
            <h4>APAGAR TABELA</h4>
            <form class="form-group" method="post" action="">
                <select class="form-control" name="selecaoCategoria">
                    <option>SELECIONAR TABELA</option>
                </select><br>
                <input type="submit" value="APAGAR" class="btn btn-danger" name="apagarCategoria">
            </form>
        </div>
    </div>
</div>
<?php include("footer.php"); ?>
