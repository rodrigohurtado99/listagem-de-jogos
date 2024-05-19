<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Jogos</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="../main_code/style/main.css">
    
</head>
<?php
    include("../php_refer/php_refer.php");
?>
<body>
    <!-- Cabeçalho da página -->
    <main class="main-all">
    <header class="nav-top">
    <h1>Escolha seu jogo</h1>
        <nav class="usuario">
        <ul>
            <li><a href="../administrator/acesso.php">Entrar</a></li>
        </ul>
        </nav>
        <aside class="nav-bar">
        <ul>
            <li><p>Ordenar: </p></li>
            <li><a href="?List_nome">Nome | </a></li>
            <li><a href="?list_distribuidora">Distribuidora | </a></li>
            <li><a href="?list_nota_alta">Nota Alta | </a></li>
            <li><a href="?list_nota_baixa">Nota Baixa | </a></li>
        
            <li>
            <form action="" method="GET">
            <label>Buscar: </label>
            <input type="text" name="busca" id="idbusca">
            <input type="submit" value="OK">
            </form>
            </li>
        </ul>
        </aside>
    </header>
    <?php 
        
        $url = $_SERVER['REQUEST_URI'];//pega a url atual do site
        if($url == '/dashboard/First_project/main_code/start.php'){//verifica se a url e a mesma a ser passada

            $sql_code = "SELECT * FROM cadastros";// codigo sql que será executado

            $sql_query = $mysqli->query($sql_code) or die("ERRO na consulta".$mysqli_error);//se der erro
        while($row = $sql_query->fetch_assoc()){//enquanto estiver linhas que retornam resultado
            ?>
        <article class="card-01">
            <aside>
                <img src="<?php echo $row['img']?>" alt="#" width="43px" height="60px">
                <div class="alinha">
                <a href="../details/<?php echo $row['link']?>.php"><?php echo $row['nome']?></a>
                <legend><?php print("$row[genero] $row[distribuidora]")?></legend>
                </div>
            </aside>
        </article>
        <?php
        }
    }
    ?>
    <?php
        // listagem pelo nome
        if(isset($_GET['List_nome'])){
            $sql_code = "SELECT * FROM cadastros ORDER BY nome";

            $sql_query = $mysqli->query($sql_code) or die("ERRO na consulta".$mysqli_error);

            while($row = $sql_query->fetch_assoc()){
                ?>
        <article class="card-01">
            <aside>
                <img src="<?php echo $row['img']?>" alt="#" width="43px" height="60px">
                <div class="alinha">
                <a href="../details/<?php echo $row['link']?>.php"><?php echo $row['nome']?></a>
                <legend><?php print("$row[genero] $row[distribuidora]")?></legend>
                </div>
            </aside>
        </article>
        <?php
            }
        }
    ?>
    <?php
        //listagem pela distribuidora
        if(isset($_GET['list_distribuidora'])){
            
            $sql_code = "SELECT * FROM cadastros ORDER BY distribuidora";

            $sql_query = $mysqli->query($sql_code) or die("ERRO na consulta".$mysqli_error);

            while($row = $sql_query->fetch_assoc()){
                ?>
            <article class="card-01">
            <aside>
                <img src="<?php echo $row['img']?>" alt="#" width="43px" height="60px">
                <div class="alinha">
                <a href="../details/<?php echo $row['link']?>.php"><?php echo $row['nome']?></a>
                <legend><?php print("$row[genero] $row[distribuidora]")?></legend>
                </div>
            </aside>
            </article>
                <?php
            }
        }    
    ?>

<?php
        // listagem pela nota mais alta
        if(isset($_GET['list_nota_alta'])){
            
            $sql_code = "SELECT * FROM cadastros ORDER BY cadastros . nota_alta DESC";
            
            $sql_query = $mysqli->query($sql_code) or die("ERRO na consulta".$mysqli_error);
            
            while($row = $sql_query->fetch_assoc()){
                ?>
            <article class="card-01">
                <aside>
                    <img src="<?php echo $row['img']?>" alt="#" width="43px" height="60px">
                    <div class="alinha">
                        <a href="../details/<?php echo $row['link']?>.php"><?php echo $row['nome']?></a>
                        <legend><?php print("$row[genero] $row[distribuidora]")?></legend>
                    </div>
                </aside>
            </article>
            <?php
            }
        }
        
        ?>
        <?php
        if(isset($_GET['list_nota_baixa'])){
            $sql_code = "SELECT * FROM cadastros ORDER BY cadastros . nota_baixa DESC";

            $sql_query = $mysqli->query($sql_code) or die('ERRO na consulta'.$mysqli_error);

            while($row = $sql_query->fetch_assoc()){
                ?>
             <article class="card-01">
                <aside>
                    <img src="<?php echo $row['img']?>" alt="#" width="43px" height="60px">
                    <div class="alinha">
                        <a href="../details/<?php echo $row['link']?>.php"><?php echo $row['nome']?></a>
                        <legend><?php print("$row[genero] $row[distribuidora]")?></legend>
                    </div>
                </aside>
            </article>
                <?php
            }
        }
    ?>
    <?php
        // busca pelo banco de dados
        if(isset($_GET['busca'])){
        $valor = $_GET['busca'];
        $valida = $_GET['busca'];

        if($valida == ''){  
            echo "<p>OPS...algo deu errado!</p>
                    <p>Tente digitar novamente o que procura...</p>";
        }

        else{
        if(isset($_GET['busca'])){
            
            $sql_code = "SELECT * FROM cadastros WHERE nome LIKE '$valor%' or distribuidora LIKE '$valor%'";
            $sql_query = $mysqli->query($sql_code) or die("ERRO na consulta".$mysqli_error);
            
            if($sql_query->num_rows == 0){
                echo '<p>Não foi encontrado nenhum resultado!</p>';
            }

            while($row = $sql_query->fetch_assoc()){
                ?>
                
                <article class="card-01">
                <aside>
                    <img src="<?php echo $row['img']?>" alt="#" width="43px" height="60px">
                    <div class="alinha">
                        <a href="../details/<?php echo $row['link']?>.php"><?php echo $row['nome']?></a>
                        <legend><?php print("$row[genero] $row[distribuidora]")?></legend>
                    </div>
                </aside>
            </article>
            <?php
                }
            }
        }
    }
    ?>
    </main>
    <script>
         var div = document.querySelectorAll('article');
         for(i=0; i<= div.length; i++){
            if(i % 2 == 1){
                console.log(div[i])
                div[i].className = 'card-01 grey';
            }
         }        
    </script>
</body>
</html>