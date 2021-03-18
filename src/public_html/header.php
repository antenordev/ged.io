<!-- Início Página Crud -->
<style>
    .crud_app{ text-transform:uppercase; }
    .crud_app select{ text-transform:uppercase; }
    .crud_app button{ background-color:transparent; border:none; }
    .crud_app .online{ font-size:13px; color:#00EE00; }
</style>
<div class="container-fluid bg-dark crud_app">
    <nav class="navbar navbar-expand-lg">
        <a href="#" class="navbar-brand">GED.io</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#collapsibleNavbar">
            <i class="fas fa-tachometer-alt btn btn-success"></i>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="pagination nav navbar-nav nav-pills" role="tablist">
                <li class="page-item nav-item"><a href="index.php" class="page-link nav-link active"><i class="fas fa-cogs"></i></a></li>
                <li class="page-item nav-item"><a href="categorias.php" class="page-link nav-link"><i class="fas fa-table"></i> Categorias</a></li>
                <li class="page-item nav-item"><a href="campos.php" class="page-link nav-link"><i class="fas fa-columns"></i> Campos</a></li>
                <li class="page-item nav-item"><a href="cadastrar.php" class="page-link nav-link"><i class="fas fa-plus"></i> Cadastrar</a></li>
                <li class="page-item nav-item"><a href="listar.php" class="page-link nav-link"><i class="fas fa-list"></i> Listar</a></li>
                <div class="col">
                    <form class="form-group" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <select class="form-control" name="selecaoCategoria">
                            <option>SELECIONAR</option>
                        </select>
                        <input type="submit" value="VER" class="btn btn-success" name="verCategoria">
                        <label class="text-light" for="<?php echo $logTabela; ?>"><i class="fas fa-circle online"></i> <?php echo $logTabela; ?></label>
                    </form>
                </div>
            </ul>
        </div>
    </nav>
    <div class="jumbotron border border-danger">
        <div class="tab-content">