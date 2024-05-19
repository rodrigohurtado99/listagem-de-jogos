<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=7">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Página de Acesso</title>
        <link rel="stylesheet" href="../main_code/style/main.css">
    </head>
    <?php
        include("../php_refer/php_refer.php");
    ?>
    <body>
        <main>
        <h2>Entrar</h2>
        <form action="" method="POST" class="acesso">
        <label>Usuário: </label>
        <input type="text" name="nome_usuario" id="idusuario">
        <label> Senha:  </label>
        <input type="password" name="senha_usuario" id="idsenha">
        <input type="submit" value="Entrar">
        </form>
        <a href="../main_code/start.php"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M177.5 414c-8.8 3.8-19 2-26-4.6l-144-136C2.7 268.9 0 262.6 0 256s2.7-12.9 7.5-17.4l144-136c7-6.6 17.2-8.4 26-4.6s14.5 12.5 14.5 22l0 72 288 0c17.7 0 32 14.3 32 32l0 64c0 17.7-14.3 32-32 32l-288 0 0 72c0 9.6-5.7 18.2-14.5 22z"/></svg></a>
        <?php
            // verifica se foi passado o nome e o usuario
            if(isset($_POST['nome_usuario']) and isset($_POST['senha_usuario'])){

                // protege o codigo passado por url
                $nome = $mysqli->real_escape_string($_POST['nome_usuario']);
                $senha = md5($mysqli->real_escape_string($_POST['senha_usuario']));

                // executado o sql do codigo
                $sql_code = "SELECT * FROM usuario WHERE nome = '$nome' and senha = '$senha'";
                $sql_query = $mysqli->query($sql_code) or die("ERRO na consulta". $mysqli->error);

                // quantidade de linhas que a consulta ira retornar
                $quantidade = $sql_query->num_rows;

                // se a quantidade for igual a 1 ele armazena o dado que a consulta retornou
                if($quantidade == 1){
                    $name = $sql_query->fetch_assoc();

                    // se não tiver uma sessão aberta, ele ira abrir a sessão
                    if(!isset($_SESSION)){
                        session_start();
                    }

                $_SESSION['id'] = $name['id'];
                $_SESSION['nome'] = $name['nome'];

                // se login e senha estiverem corretos ele joga para a pagina administativa
                header("location: ../administrator/pagina_admin.php");

                }else{
                    echo "<br>Falha ao logar, tente novamente!";
                }

            }
        ?>
        </main>
    </body>
</html>
 