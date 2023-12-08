<?php
    namespace POO\FarmaGG\DAO;

    class Conexao{
        public function Conectar(){
            try{
                $conn = mysqli_connect('localhost','root','','farmaciaGG');
                if($conn){
                    return $conn;
                }
            }catch(Except $erro){
                echo $erro;
            }
        }//fim do método
    }//fim da classe
?>