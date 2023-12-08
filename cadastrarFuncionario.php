<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300&display=swap" rel="stylesheet">
    <title>Cadastro - Farmácia</title>
</head>

<body>
    
    <?php 
   
        require_once('DAO/Conexao.php');
        require_once('DAO/Inserir.php');
  
        use POO\FarmaGG\DAO\Conexao;
        use POO\FarmaGG\DAO\InserirFun;
        error_reporting(0);
    ?>
    
    <div class="container_input">
        <h2 class="textHome" >Cadastrar Funcionario</h2>
        <a href="index.php"><-Voltar</a>
        <a href="login.php" id="facaLog">Faça login aqui -></a><br><br><br>
        <form method="POST">
            
            <label>CPF:</label>
            <input type="num" name="cpf" id="cpf" required>

            <label>Nome completo:</label>
            <input type="text" name="nome" id="nome" required>
            
            <label>Telefone:</label>
            <input type="text" name="telefone" id="telefone" required>
            
            <label>Endereço:</label>
            <input type="text" name="endereco" id="endereco" required>

            <label>email:</label>
            <input type="text" name="email" id="email" required><br><br>
            
            <label>Senha:</label>
            <input type="text" name="senha_adm" id="senha_adm" required><br><br>


            <br><br>            
            <button type="submit">Enviar
                <?php
                    $conexao = new Conexao();
                    $inserir = new InserirFun();
                    $inserir->InsertF($conexao, "administrator", $_POST['cpf'], $_POST['nome'], $_POST['telefone'], $_POST['endereco'], $_POST['email'],$_POST['senha_adm']);
                ?>
            </button>

            <?php
                session_start();
            
                if (isset($_POST['cpf'],$_POST['nome'],$_POST['telefone'], $_POST['endereco'],$_POST['email'],$_POST['senha_adm'])) {
                    //Passe o dado para o construtor
                    $_SESSION['cpf']                                    =   $_POST['cpf'];
                    $_SESSION['nome']                                   =   $_POST['nome'];
                    $_SESSION['telefone']                               =   $_POST['telefone'];
                    $_SESSION['endereco']                               =   $_POST['endereco'];
                    $_SESSION['email']                                  =   $_POST['email'];
                    $_SESSION['senha_adm']                              =   $_POST['senha_adm'];
                                
                } else {
                    echo "Todos os campos do formulário devem ser preenchidos.";
                }
            
            ?>
            
          
                
            
        </form>
    </div>

    

</body>
</html>
