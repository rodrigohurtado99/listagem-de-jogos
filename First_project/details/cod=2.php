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
        
            <img src="../img/cod2.webp" alt="Assasins_creed" width="401px" height="500px">
            <article>
            <h1>Call of Duty: Black Ops</h1>
            <?php 
            
                $sql_code = "SELECT nota_alta FROM cadastros WHERE id = 2";
                $sql_query = $mysqli->query($sql_code) or die('ERRO na consulta');

                while($row = $sql_query->fetch_assoc()){
                    ?>
                    <p><strong>Nota: <?php echo $row['nota_alta']. " / 10.0"?></strong></p>
                    <?php
                }
            ?>
            <p>
            Black Ops é um jogo de tiro em primeira pessoa. O jogador assume o papel de um veterano de guerra que pode manejar diversas armas diferentes (sendo capaz de carregar consigo apenas duas de cada vez), lançar granadas de mão e utilizar vários tipos de equipamento.O jogador assume o papel de diversos personagens durante a campanha single-player, mudando de perspectiva com o avançar da história. Os personagens jogáveis são agentes de forças especiais conduzindo missões clandestinas por trás das linhas inimigas. Sendo assim, cada personagem tem suas próprias características, como vozes e sombras.[3] As missões trazem uma série de objetivos mostrados no heads-up display, que marca a direção e distância a ser alcançada para cumprir cada objetivo. O jogador é acompanhado por tropas aliadas durante todo seu percurso Embora primeiramente um jogo de tiro em primeira pessoa, o jogador pode também pilotar um helicóptero Mil Mi-24 e guiar tropas a partir de uma aeronave de reconhecimento SR-71 Blackbird.[7][8][9] A campanha apresenta diversos momentos roteirizados em estilo cinematográfico.
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