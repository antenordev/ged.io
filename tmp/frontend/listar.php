<?php include("header.php"); ?>
<div class="container">
    <h1>CONTROLE DE <strong>_NOME_TABELA_</strong></h1>
    <hr>
    <div class="container row">
        <div class="col-md-12"><input type="search" placeholder="DIGITE AQUI PARA FILTRAR" class="form-control" id="search"></div>
    </div>
    <div class="container-fluid row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped table-hover table-borderless color-white" id="table">
                    <thead class="thead-dark">
                        <th scope="col"><h4>COL 1</h4></th>
                        <th scope="col"><h4>COL 2</h4></th>
                        <th scope="col"><h4>COL 3</h4></th>
                        <th scope="col"><h4>AÇÃO</h4></th>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="color-white">NOME</td>
                            <td class="color-white">NOME</td>
                            <td class="color-white">NOME</td>
                            <td scope="row" class="color-white">
                                <button type="submit" name="editarCadastro">
                                    <a title="EDITAR" href="#" data-tt="tooltip" data-placement="right">
                                        <i class="far fa-edit"></i>
                                    </a>
                                </button>
                                <button type="submit" name="apagarCadastro">
                                    <a title="APAGAR" href="#" data-tt="tooltip" data-placement="right">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php include("footer.php"); ?>
