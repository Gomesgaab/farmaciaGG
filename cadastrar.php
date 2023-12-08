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
        use POO\FarmaGG\DAO\Inserir;
        error_reporting(0);
    ?>

    

    <div class="container_input">
        
        <h2 class="textHome" >Cadastrar</h2>
        <a href="index.php"><-Voltar</a>
        <a href="login.php" id="facaLog">Faça login aqui -></a><br><br><br>

        <label>Escolha a Farmácia de sua preferência</label><br><br>
       
        <select name="opcao">
            <option value="0"></option>
            <option value="1">Farmácia A</option>
            <option value="2">Farmácia B</option>
            <option value="3">Farmácia C</option>
            <option value="4">Farmácia D</option>
        </select><br><br>
        
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


            <label>Possui Plano de Saúde?</label><br>

            Sim <input type="checkbox" name="plano_saude" value="Sim"><br>
            Nao <input type="checkbox" name="plano_saude" value="Não" checked>
            <br><br>

            <label>Utiliza Farmácia Popular?</label><br>

            Sim <input type="checkbox" name="farmacia_popular" value="Sim"> <br>
            Não <input type="checkbox" name="farmacia_popular" value="Não">
            <br><br>
            

            <label  >Quais produtos da Farmácia Popular você utiliza?</label><br><br><br>
            <input type="text" name="produtos_farmacia_popular" id="produtos_farmacia_popular" checked>


            <br><br>            
            <button type="submit">Enviar
                <?php
                    $conexao = new Conexao();
                    $inserir = new Inserir();
                    $inserir->Insert($conexao, "usuario", $_POST['cpf'], $_POST['nome'], $_POST['telefone'], $_POST['endereco'], $_POST['email'],$_POST['produtos_farmacia_popular']);
                ?>
            </button>
            <br><br>

            <?php
                session_start();
            
                if (isset($_POST['cpf'],$_POST['nome'],$_POST['telefone'], $_POST['endereco'],$_POST['email'],$_POST['produtos_farmacia_popular'])) {
                    //Passe o dado para o construtor
                    $_SESSION['cpf']                                    =   $_POST['cpf'];
                    $_SESSION['nome']                                   =   $_POST['nome'];
                    $_SESSION['telefone']                               =   $_POST['telefone'];
                    $_SESSION['endereco']                               =   $_POST['endereco'];
                    $_SESSION['email']                                  =   $_POST['email'];
                    $_SESSION['produtos_farmacia_popular']              =   $_POST['produtos_farmacia_popular'];
                                
                } else {
                    echo "Todos os campos do formulário devem ser preenchidos.";
                }
            
            ?>
            
          
                
            
        </form>
    </div>

    

</body>
</html>
