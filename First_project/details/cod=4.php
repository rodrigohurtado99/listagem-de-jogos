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
        
            <img src="../img/donkey-kong.jpg" alt="Assasins_creed" width="401px" height="500px">
            <article>
            <h1>Donkey Kong Tropical Freeze</h1>
            <?php 
            
                $sql_code = "SELECT nota_alta FROM cadastros WHERE id = 4";
                $sql_query = $mysqli->query($sql_code) or die('ERRO na consulta');

                while($row = $sql_query->fetch_assoc()){
                    ?>
                    <p><strong>Nota: <?php echo $row['nota_alta']. " / 10.0"?></strong></p>
                    <?php
                }
            ?>
            <p>
            Em Tropical Freeze , Donkey Kong e sua família devem se aventurar por cinco ilhas para salvar sua casa, a Ilha Donkey Kong, depois que ela foi congelada pelos vilões Snowmads — um grupo de invasores dos mares do norte. Assim como seu antecessor, o jogo recebeu críticas geralmente positivas. Os elogios foram direcionados ao design dos níveis, jogabilidade e trilha sonora, embora seu alto nível de dificuldade tenha recebido opiniões mais divergentes.O jogo continua a partir da jogabilidade de plataforma de rolagem lateral da série Donkey Kong Country e mostra Donkey Kong e seus amigos viajando por sete ilhas diferentes para derrotar os Snowmads. Os controles são semelhantes ao jogo anterior, com a adição de poder arrancar itens do chão e pegar e arremessar inimigos atordoados, e vários controladores podem ser usados ​​com controles personalizáveis. [1] [2] Como no jogo anterior, os jogadores controlam principalmente Donkey Kong, que é auxiliado por um companheiro, que fornece habilidades adicionais a Donkey Kong ou pode ser controlado individualmente por um segundo jogador.
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