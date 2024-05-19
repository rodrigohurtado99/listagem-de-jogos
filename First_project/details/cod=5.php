<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Jogo</title>
    <link rel="stylesheet" href="../main_code/style/detalhes.css">
</head>
<?php
    include("../php_refer/php_refer.php");
?>
<body>
    <main class="menu-detalhe">
        
            <img src="../img/Gow3.jpg" alt="Assasins_creed" width="401px" height="500px">
            <article>
            <h1>God of War III</h1>
            <?php 
            
                $sql_code = "SELECT nota_alta FROM cadastros WHERE id = 5";
                $sql_query = $mysqli->query($sql_code) or die('ERRO na consulta');

                while($row = $sql_query->fetch_assoc()){
                    ?>
                    <p><strong>Nota: <?php echo $row['nota_alta']. " / 10.0"?></strong></p>
                    <?php
                }
            ?>
            <p>
            God of War III é um jogo eletrônico de ação-aventura e hack and slash desenvolvido pela Santa Monica Studio e publicado pela Sony Computer Entertainment (SCE). Foi lançado em 16 de março de 2010 para PlayStation 3. O jogo é o quinto da série God of War e o sétimo em ordem cronológica, sendo a continuação direta de God of War II (2007). Vagamente baseado na mitologia grega, o jogo é ambientado na Grécia Antiga com a vingança sendo o tema central. O jogador controla o protagonista e ex-God of War Kratos, depois da traição nas mãos de seu pai Zeus, rei dos deuses do Olimpo. Reignificando a Grande Guerra, Kratos sobe ao Monte Olimpo até ser abandonado pela titã Gaia. Guiado pelo espírito de Atena, Kratos luta contra monstros, deuses e Titãs em uma busca por Pandora, sem a qual ele não pode abrir a Caixa de Pandora, derrotar Zeus e acabar com o reinado dos deuses do Olimpo.A jogabilidade é semelhante aos títulos anteriores, concentrando-se no combate baseado em combos com a arma principal do jogador — as Lâminas do Exílio — e armas secundárias adquiridas durante o jogo. 
            </p>
            </article>
            <aside>
                <a href="#" onclick="history.back()">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M177.5 414c-8.8 3.8-19 2-26-4.6l-144-136C2.7 268.9 0 262.6 0 256s2.7-12.9 7.5-17.4l144-136c7-6.6 17.2-8.4 26-4.6s14.5 12.5 14.5 22l0 72 288 0c17.7 0 32 14.3 32 32l0 64c0 17.7-14.3 32-32 32l-288 0 0 72c0 9.6-5.7 18.2-14.5 22z"/></svg>
                </a>
            </aside>
    </main>
</body>
</html>