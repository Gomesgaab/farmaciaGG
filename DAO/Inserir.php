<?php
    namespace POO\FarmaGG\DAO;

    require_once('Conexao.php');//Acessando a minha classe de conexão

    use POO\FarmaGG\DAO\Conexao;

    class Inserir{
        public function Insert(Conexao $conexao,string $nomeTabela,int $cpf,string $nome,string $telefone,string $endereco,string $email, string $produtos_farmacia_popular)
        {
            try{
                $conn = $conexao->Conectar();
                $sql = "insert into $nomeTabela(cpf, nome, telefone, endereco, email,produtos_farmacia_popular) values('$cpf','$nome','$telefone','$endereco','$email','$produtos_farmacia_popular')";
                $result = mysqli_query($conn, $sql);

                if($result){
                    return "<br><br>Inserido com sucesso!";
                }else{
                    return "<br><br>Não Inserido!";
                }

                mysqli_close($conn);//Fechando a conexão com o BD
            }catch(Except $erro){
                echo $erro;
            }
        }//fim do método insert

    }//fim da classe
    
    class InserirFun{
        public function InsertF(Conexao $conexao,string $nomeTabela,int $cpf,string $nome,string $telefone,string $endereco,string $email, string $senha_adm)
        {
            try{
                $conn = $conexao->Conectar();
                $sql = "insert into $nomeTabela(cpf, nome, telefone, endereco, email,senha_adm) values('$cpf','$nome','$telefone','$endereco','$email','$senha_adm')";
                $result = mysqli_query($conn, $sql);

                if($result){
                    return "<br><br>Inserido com sucesso!";
                }else{
                    return "<br><br>Não Inserido!";
                }

                mysqli_close($conn);//Fechando a conexão com o BD
            }catch(Except $erro){
                echo $erro;
            }
        }//fim do método insert

    }//fim da classe
?>
