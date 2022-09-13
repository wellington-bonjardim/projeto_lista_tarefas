<?php
    class Conexao {
        private $host = 'localhost';
        private $dbname = 'projeto_lista_tarefas';
        private $user = 'root';
        private $pass = '';

        public function conectar() {
            try {
                $conexao = new PDO(
                    "mysql:host=$this->host; dbname=$this->dbname", //DSN
                    "$this->user", //usuario
                    "$this->pass" //senha
                );

                return $conexao;

            } catch(PDOException $e) {
                echo '<p>'.$e->getMessege().'</p>';
            }
        }
    }
?>