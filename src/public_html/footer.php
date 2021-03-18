        </div>
    </div>
    <div class="hidden row"></div>
    </div>
</div>
<script>
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
</script>
<!-- Fim Página Crud -->