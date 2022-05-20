<?php
class Model{
    // ATRIBUTOS
    private $header,$footer;
    // MANIPULADOS
    private $content;
    // ESPECIAIS
    public function setHEADER($header){$this->header=$header;}
    public function getHEADER(){return $this->header;}
    public function setCONTENT($content){$this->content=$content;}
    public function getCONTENT(){return $this->content;}
    public function setFOOTER($footer){$this->footer=$footer;}
    public function getFOOTER(){return $this->footer;}
    // CONSTRUTOR
    public function __construct()
    {
        //$this->setHEADER($this->style());
        $this->getCONTENT();
        //$this->setFOOTER($this->script());
    }
    // COMPORTAMENTOS
    public function style(){
        echo '
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>beta-v.1.0</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no"/>
    <meta name="theme-color" content="transparent"/>
            ';
            if(isset($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS'])==$_SERVER['PHP_SELF']){
                echo '
    <meta name="robots" content="noindex,nofollow"/>
    <link rel="canonical" href="'.$_SERVER['HTTPS'].'">
                    ';
            }
        echo '
    <link rel="icon" href="img/favicon.png"/>
    <link rel="apple-touch-icon" href="img/apple.png"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat|Raleway&display=swap"/>
    <link rel="stylesheet" href="style.css"/>
    <!--link rel="manifest" href="/app/manifest.webmanifest"/-->
</head>
<body>
            ';
    }
    public function script(){
        echo '
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://rawgithub.com/stidges/jquery-searchable/master/dist/jquery.searchable-1.0.0.min.js"></script>
    <!--script rel="javascript" src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script-->
    <script rel="javascript" src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script rel="javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script rel="javascript" src="script.js"></script>
    <!--script>
    if("serviceWorker" in navigator){
        window.addEventListener("load",function(){
            navigator.serviceWorker.register("/app/sw.js").then(function(registration){
                console.log("Work-in:",registration.scope);
            },function(err){
                console.log("Erro:",err);
            });
        });
    }
    </script-->
</body>
</html>
            ';
    }
}