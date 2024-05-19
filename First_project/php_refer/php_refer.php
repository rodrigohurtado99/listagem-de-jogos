<p><?php
        //aqui ele monta um objeto com os dados da conexão(host,usuario,senha,banco de dados)

        $hostname = "localhost";
        $bancodeDados = "jogos";
        $usuario = "root";
        $senha = "";

        // iniciando a conexão

        $mysqli = new mysqli($hostname, $usuario,$senha, $bancodeDados);
        
        mysqli_set_charset($mysqli, "utf8");//faz com que o php interprete todos tipos de caracteres

        if ($mysqli -> connect_errno){//mensagem se der erro
            echo "Falha ao conectar: ", (" . $mysqli_connect_errno . ") . $mysqli->connect_error;
        }
