<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="images/favicon.ico">
    <title>PHP - Folmulário POST</title>
</head>

<body>
    
     <h2>Cadastrar usuário</h2>   

     <!-- não é recomendável utilizar o método GET em formulários -->
     <form method="POST" action="processa.php">
         <label>Nome: </label>
         <input type="text" name="nome_cliente" placeholder="Digite o nome" required><br><br>

         <label>E-mail: </label>
         <input type="email" name="email_cliente" placeholder="Digite o e-mail" required><br><br>

         <label>Senha: </label>
         <input type="password" name="password_cliente" placeholder="Digite o password" required><br><br>

         <input type="submit" value="Cadastrar">

     </form>

    <?php


    ?>
</body>

</html>