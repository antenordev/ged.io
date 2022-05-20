var input=document.querySelector('#ctrlSpaceCCat');
var enviado=document.querySelector('#enviado');
input.addEventListener('keydown',function(e){if(e.keyCode==32){e.preventDefault();return enviar(this.value);}
mostrador.innerHTML=this.value.split('').reverse().join('');});
function enviar(texto){enviado.innerHTML='Valor: '+texto;}
var input=document.querySelector('#ctrlSpaceECat');
var enviado=document.querySelector('#enviado');
input.addEventListener('keydown',function(e){if(e.keyCode==32){e.preventDefault();return enviar(this.value);}
mostrador.innerHTML=this.value.split('').reverse().join('');});
function enviar(texto){enviado.innerHTML='Valor: '+texto;}
var input=document.querySelector('#ctrlSpaceCCol');
var enviado=document.querySelector('#enviado');
input.addEventListener('keydown',function(e){if(e.keyCode==32){e.preventDefault();return enviar(this.value);}
mostrador.innerHTML=this.value.split('').reverse().join('');});
function enviar(texto){enviado.innerHTML='Valor: '+texto;}
var input=document.querySelector('#ctrlSpaceECol');
var enviado=document.querySelector('#enviado');
input.addEventListener('keydown',function(e){if(e.keyCode==32){e.preventDefault();return enviar(this.value);}
mostrador.innerHTML=this.value.split('').reverse().join('');});
function enviar(texto){enviado.innerHTML='Valor: '+texto;}

$(document).ready(function(){
    // Início Script Padrão
        // tooltip design
        $("[data-tt=tooltip]").tooltip();
    // Fim Script Padrão

    // Início Scripts Login
        $("#login").click(function(){
            document.getElementById("ocultar").style.display="none";
            document.getElementById("mostrar").style.display="block";
        });
    // Fim Scripts Login

    // Início Scripts Nav
    // Buscador
    // Fim Scripts Nav

    // Início Scripts Admin
        $("#cadastrar").click(function() {document.getElementById('content').innerHTML='<iframe src="/" width="100%" frameborder="0"></iframe>';	});
        // tutorial administrador
        $("#btnTutorial").click(function(){
            var intervalo=setInterval(function(){
                document.getElementById("tutorial").click();
                clearInterval(intervalo);
            },500)
        });
        // iframe administrador
        $("#menu1").click(function(){document.getElementById("content").innerHTML='<iframe class="resp-iframe" src="/app/template/categoria.php" gesture="media"  allow="encrypted-media" allowfullscreen></iframe>'; });
        $("#menu2").click(function(){document.getElementById("content").innerHTML='<iframe class="resp-iframe" src="/app/template/campo.php" gesture="media"  allow="encrypted-media" allowfullscreen></iframe>'; });
        $("#menu3").click(function(){document.getElementById("content").innerHTML='<iframe class="resp-iframe" src="/app/template/cadastro.php" gesture="media"  allow="encrypted-media" allowfullscreen></iframe>'; });
        $("#menu4").click(function(){document.getElementById("content").innerHTML='<iframe class="resp-iframe" src="/app/template/lista.php" gesture="media"  allow="encrypted-media" allowfullscreen></iframe>'; });
    // Fim Scripts Admin

    // Início Scripts Crud
    // Fim Scripts Crud

    // Início Scripts Footer
    // Formulário de Suporte com Ticket
    // Fim Scripts Footer

    // Início Scripts Portal Escola
        // painel de controle do usuário
        $("#myInput").on("keyup",function(){
            var value=$(this).val().toLowerCase();
        });
        $("#myTable tr").filter(function(){
            $(this).toggle($(this).text().toLowerCase().indexOf(value)>-1)
        });
    // Fim Scripts Portal Escola
});
