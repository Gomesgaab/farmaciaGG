<?php 
    require_once('DAO/Conexao.php');
    require_once('DAO/Consultar.php');
    use POO\FarmaGG\DAO\Conexao;
    use POO\FarmaGG\DAO\ConsultarTudo;    
   
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300&display=swap" rel="stylesheet">

    <title>Login</title>
</head>
<body>

    
    <div class="container_input">
        <h2 class="textHome" >Login</h2>
        <a href="index.php"><-Voltar</a>
            
        <br>
        <form method="POST">
            <label>email:</label>
            <input type="text" name="email" id="email" required><br><br>
            <label>Senha:</label>
            <input type="password" name="senha_adm" id="senha_adm" required><br><br>
            
            <button type="submit">Entrar
                <?php
                    $conexao   = new Conexao();
                    $consultar = new Consultar();

                    header("Location: page1.php");
                    
                ?>
            </button><br><br>

            
        </form>
        



    </div> 


</body>
</html>