<?php include("header.php"); ?>
<div class="container">
    <h1>CATEGORIAS</h1>
    <hr>
    <div class="container row">
        <div class="col-md-6">
            <h4>CRIAR</h4>
            <form class="form-group" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <input type="text" placeholder="NOVA CATEGORIA" class="form-control" onkeyup="this.value=this.value.toUpperCase();" id="ctrlSpaceCCat" required name="criarCategoria"><br>
                <input type="submit" value="CRIAR" class="btn btn-primary">
            </form>
        </div>
    </div>
    <hr>
    <div class="container row">
        <div class="col-md-6">
            <h4>VER</h4>
            <form class="form-group" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <select class="form-control" name="selecaoCategoria">
                    <option>SELECIONAR CATEGORIA</option>
                </select><br>
                <input type="submit" value="VER" class="btn btn-success" name="verCategoria">
            </form>
        </div>
    </div>
    <hr>
    <div class="container row">
        <div class="col-md-6">
            <h4>EDITAR</h4>
            <form class="form-group" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <select class="form-control" name="selecaoCategoria">
                        <option>SELECIONAR CATEGORIA</option>
                    </select><br>
                    <input type="text" placeholder="RENOMEAR CATEGORIA" class="form-control" onkeyup="this.value=this.value.toUpperCase();" id="ctrlSpaceECat" required name="editarCategoria"><br>
                <input type="submit" value="EDITAR" class="btn btn-primary">
            </form>
        </div>
    </div>
    <hr>
    <div class="container row">
        <div class="col-md-6">
            <h4>APAGAR </h4>
            <form class="form-group" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <select class="form-control" name="selecaoCategoria">
                    <option>SELECIONAR CATEGORIA</option>
                </select><br>
                <input type="submit" value="APAGAR" class="btn btn-danger" name="apagarCategoria">
            </form>
        </div>
    </div>
</div>
<?php include("footer.php"); ?>