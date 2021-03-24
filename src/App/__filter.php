<?php
require "__crud.php";
$crud=new CRUD();
// Sessões Iniciadas
session_start();
$_SESSION['tabela']="logs";
$_SESSION['prefixo']="g_2004120001_";
// INICIA CRUD
    // INICIA CONTROLES DE TABELAS
        #TFilter=CATEGORIA
        if(isset($_POST['criarCategoria'])){
            $categoria=filter_input(INPUT_POST,'criarCategoria',FILTER_SANITIZE_STRING);
        }elseif(isset($_GET['criarCategoria'])){
            $categoria="";
        }else{
            $categoria="";
        }
        if(isset($_POST['selecaoCategoria'])){
            $categoria=filter_input(INPUT_POST,'selecaoCategoria',FILTER_SANITIZE_STRING);
        }elseif(isset($_GET['selecaoCategoria'])){
            $categoria="";
        }else{
            $categoria="";
        }
        if(isset($_POST['verCategoria'])&&($_POST['selecaoCategoria'])){
            $categoria=filter_input(INPUT_POST,'selecaoCategoria',FILTER_SANITIZE_STRING);
        }elseif(isset($_GET['verCategoria'])&&($_GET['selecaoCategoria'])){
            $categoria="";
        }else{
            $categoria="";
        }
        if(isset($_POST['editarCategoria'])&&($_POST['selecaoCategoria'])){
            $categoria=filter_input(INPUT_POST,'selecaoCategoria',FILTER_SANITIZE_STRING);
        }elseif(isset($_GET['editarCategoria'])&&($_GET['selecaoCategoria'])){
            $categoria="";
        }else{
            $categoria="";
        }
        if(isset($_POST['apagarCategoria'])&&($_POST['selecaoCategoria'])){
            $categoria=filter_input(INPUT_POST,'selecaoCategoria',FILTER_SANITIZE_STRING);
        }elseif(isset($_GET['apagarCategoria'])&&($_GET['selecaoCategoria'])){
            $categoria="";
        }else{
            $categoria="";
        }
// TERMINA CRUD
// Sessão em Execução
$logTabela=$_SESSION['tabela'];
$prefixo=$_SESSION['prefixo'];

$resultadomostrarTabela=$crud->mostrarTabela();
/*while($fetch=$resultadomostrarTabela->fetch(PDO::FETCH_ASSOC)){
    $bftech=implode($fetch)."\n";
    echo $bftech;foreach($resultadomostrarTabela as $key=>$value){
        if(($value[0]<>"g_adm")&&($value[0]<>"saves")){
            echo '<option value="'.$value[0].'">'.$value[0].'</option>';
            var_dump($value[0]);
        }
    }
}*/

// ÁREA DE TESTES
$testes=$categoria;
var_dump($testes);