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
        
            <img src="../img/sonic.png" alt="Assasins_creed" width="401px" height="500px">
            <article>
            <h1>Sonic The Hedgehog</h1>
            <?php 
            
                $sql_code = "SELECT nota_baixa FROM cadastros WHERE id = 8";
                $sql_query = $mysqli->query($sql_code) or die('ERRO na consulta');

                while($row = $sql_query->fetch_assoc()){
                    ?>
                    <p><strong>Nota: <?php echo $row['nota_baixa']. " / 10.0"?></strong></p>
                    <?php
                }
            ?>
            <p>
            Sonic the Hedgehog é uma franquia de jogos eletrônicos de plataforma criada e administrada por Yuji Naka e Naoto Oshima da equipe Sonic Team, da Sega. O primeiro jogo da série Sonic, lançado em 1991, foi concebido pela divisão da Sega, Sonic Team após um pedido para um novo mascote. O título foi um sucesso, e foi renovado para várias sequelas, que levaram a Sega a liderança no rumo dos consoles de video-game da era 16-bit do começo até a metade dos anos 90.[1]Atualmente, é uma das franquias mais famosas e mais lucrativas da indústria dos videogames.[2] A franquia é protagonizada por Sonic, o Ouriço, que normalmente junto com seus amigos como a raposa Tails e o equidna Knuckles, tem que parar os planos de dominação mundial do vilão Dr. Eggman.Enquanto os primeiros jogos da série eram jogos de plataforma em side-scrolling, posteriormente os jogos da série foram expandidos em vários outros gêneros e sub-séries, como o jogo de esporte Mario & Sonic at the Olympic Games (desenvolvido em parceria com a Nintendo), a série Sonic Boom e o jogo de corrida Sonic & Sega All-Stars Racing. Até 2016, a série vendeu mais de 80 milhões de cópias físicas de jogos.
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