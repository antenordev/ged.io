<?php
require "__db.php";
class CRUD extends DB{
    private $crud,$contador;
    #Declarativas e Parâmetros
    private function stmt($query,$parametro){$this->contPar($parametro);$this->crud=$this->conectar()->prepare($query);if($this->contador>0){for($i=1;$i<=$this->contador;$i++){$this->crud->bindValue($i,$parametro[$i-1]);}}$this->crud->execute();}
    private function contPar($parametro){$this->contador=count($parametro);}
    #TAction
    public function mostrarTabela(){$this->stmt("SHOW TABLES;",array());return $this->crud;}
    public function criarTabela($tabela){$this->stmt("CREATE TABLE IF NOT EXISTS {$tabela}(id INT NOT NULL AUTO_INCREMENT, PRIMARY KEY(id))ENGINE=InnoDB DEFAULT CHARSET=utf8;",array());return $this->crud;}
    public function verTabela($tabela){$this->stmt("DESC {$tabela};",array());return $this->crud;}
    public function editarTabela($tabela,$condicao){$this->stmt("RENAME TABLE {$tabela} TO {$condicao};",array());return $this->crud;}
    public function apagarTabela($tabela){$this->stmt("DROP TABLE {$tabela};",array());return $this->crud;}
    #CAction
    public function mostrarColuna($tabela){$this->stmt("SHOW COLUMNS FROM {$tabela};",array());return $this->crud;}
    public function criarColuna($tabela,$coluna,$condicao,$parametro){$this->stmt("ALTER TABLE {$tabela} ADD {$coluna} {$condicao};",$parametro);return $this->crud;}
    public function verColuna($coluna,$tabela,$condicao,$parametro){$this->stmt("SELECT {$coluna} FROM {$tabela} {$condicao};",$parametro);return $this->crud;}
    public function editarColuna($tabela,$coluna,$condicao,$parametro){$this->stmt("ALTER TABLE {$tabela} CHANGE {$coluna} {$condicao};",$parametro);return $this->crud;}
    public function apagarColuna($tabela,$coluna,$condicao,$parametro){$this->stmt("ALTER TABLE {$tabela} DROP COLUMN {$coluna} {$condicao};",$parametro);return $this->crud;}
    #LAction
    public function mostrarLinha($tabela){$this->stmt("SELECT * FROM {$tabela};",array());return $this->crud;}
    public function criarLinha($tabela,$condicao,$parametro){$this->stmt("INSERT INTO {$tabela} VALUES({$condicao});",$parametro);return $this->crud;}
    public function verLinha($coluna,$tabela,$condicao,$parametro){$this->stmt("SELECT {$coluna} FROM {$tabela} WHERE id={$condicao};",$parametro);return $this->crud;}
    public function editarLinha($tabela,$coluna,$dado,$condicao,$parametro){$this->stmt("UPDATE {$tabela} SET {$coluna}='{$dado}' WHERE id={$condicao};",$parametro);return $this->crud;}
    public function apagarLinha($tabela,$condicao,$parametro){$this->stmt("DELETE FROM {$tabela} WHERE id={$condicao};",$parametro);return $this->crud;}
}