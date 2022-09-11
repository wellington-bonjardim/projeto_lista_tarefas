<?php
    $host = 'localhost';
    $dbname = 'projeto_lista_tarefas';
    $user = 'root';
    $pass = '';

    class Conexao {
        public function conectar() {
            try {
                $conexao = new PDO(
                    "mysql:host=$this->host; dbname=$this->$dbname", //DSN
                    "$this->$user", //usuario
                    "$this->$pass" //senha
                );

                return $conexao;

            } catch(PDOException $e) {
                echo '<p>'.$e->getMessege().'</p>';
            }
        }
    }
?>