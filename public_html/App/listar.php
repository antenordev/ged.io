<?php include("header.php"); ?>
<div class="container">
    <h1>CONTROLE DE <strong><?php echo $logTabela; ?></strong></h1>
    <hr>
    <div class="container row">
        <div class="col-md-12"><input type="search" placeholder="DIGITE AQUI PARA FILTRAR" class="form-control" id="search"></div>
    </div>
    <div class="container-fluid row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped table-hover table-borderless" id="table">
                    <thead class="thead-dark">
                        <th scope="col"><h4>AÇÃO</h4></th>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>    
        </div>
    </div>
</div>
<?php include("footer.php"); ?>