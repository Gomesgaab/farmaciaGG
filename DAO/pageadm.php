<?php
    namespace POO\FarmaGG\DAO;
    require_once('Conexao.php');//Acessando a minha classe de conexão
    require_once('Consultar.php');//Acessando a minha classe de conexão

    use POO\FarmaGG\DAO\Conexao;
    use POO\FarmaGG\DAO\ConsultarTudo;

     
 
    class Adm {
        public function login($email, $senha_adm) {
            if ($email == $this->email && $senha_adm == $this->senha_adm) {
                echo "Login bem-sucedido!\n";
                header("Location: page1.php");
            } else {
                echo "Login inválido!\n";
            }//Fim do IF...Else
        }//Fim do Método
    
        private function exibirRanking() {
            $sql = 
                "SELECT f.id, f.nome, COUNT(u.id) AS quantidade_usuarios
                FROM farmacias f
                LEFT JOIN usuarios u ON f.id = u.id_farmacia
                GROUP BY f.id
                ORDER BY quantidade_usuarios DESC";
    
            $resultado = $this->ConexaoAdm->query($sql);
    
            if ($this->ConexaoAdm->error) {
                echo "Erro ao exibir o ranking: " . $this->ConexaoAdm->error;
            }//Fim do IF
    
            echo "Ranking das Farmácias por quantidade de usuários cadastrados:\n";
            while ($row = $resultado->fetch_assoc()) {
                echo $row['nome'] . " - " . $row['quantidade_usuarios'] . " usuários\n";
            }//Fim do While
        }//Fim da Private Func
    }//Fim da Classe Administrador

    
   
 
?>