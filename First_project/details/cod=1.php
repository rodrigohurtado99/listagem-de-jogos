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
        
            <img src="../img/Assasins.png" alt="Assasins_creed" class='img-detalhes'>
            <article>
            <h1>Assassin's Creed III</h1>
            <?php 
            
                $sql_code = "SELECT nota_alta FROM cadastros WHERE id = 1";
                $sql_query = $mysqli->query($sql_code) or die('ERRO na consulta');

                while($row = $sql_query->fetch_assoc()){
                    ?>
                    <p><strong>Nota: <?php echo $row['nota_alta']. " / 10.0"?></strong></p>
                    <?php
                }
            ?>
            <p>
            Assassin's Creed III é um jogo de ação-aventura produzido pela Ubisoft e publicado pela Ubisoft durante os meses de Outubro e Novembro de 2012 para Wii U, Xbox 360, PlayStation 3 e Microsoft Windows . É o quinto jogo principal da série Assassin's Creed e o seu terceiro título numerado. Assassin's Creed III é a continuação direta de Assassin's Creed: Revelations de 2011.
            O enredo decorre de uma história fictícia dentro de eventos reais e segue a batalha ancestral entre os Assassinos, que lutam pela liberdade, e os Templários, que desejam controlar a humanidade. A trama se desenrola no século XXI onde Desmond Miles, o protagonista da série, com a ajuda de uma máquina conhecida como Animus, revive as memórias dos seus ancestrais para o ajudar a descobrir uma maneira de prevenir o Apocalipse de 2012.
            A história principal se desenrola antes, durante e depois da Revolução Americana entre 1765 e 1783 e segue o ancestral de Desmond, de ascendência mohawk e inglesa, Ratonhnhaké:ton,também conhecido como Connor, enquanto ele luta contra as tentativas dos Templários de controlar a nova nação.O jogo se foca principalmente no uso das técnicas de combate e de infiltração para eliminar alvos e explorar o ambiente Como Connor.
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