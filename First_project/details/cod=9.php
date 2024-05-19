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
        
            <img src="../img/medal of honor.webp" alt="Assasins_creed" width="401px" height="500px">
            <article>
            <h1>Medal of Honor</h1>
            <?php 
            
                $sql_code = "SELECT nota_alta FROM cadastros WHERE id = 9";
                $sql_query = $mysqli->query($sql_code) or die('ERRO na consulta');

                while($row = $sql_query->fetch_assoc()){
                    ?>
                    <p><strong>Nota: <?php echo $row['nota_alta']. " / 10.0"?></strong></p>
                    <?php
                }
            ?>
            <p>
            Medal of Honor é uma série de jogos eletrônicos de tiro em primeira pessoa publicada pela Electronic Arts.O primeiro jogo da série foi idealizado pelo diretor e produtor de cinema americano Steven Spielberg e desenvolvido pela DreamWorks Interactive, sendo lançado em 1999 para PlayStation. Posteriormente, Medal of Honor gerou uma série de jogos subsequentes, incluindo expansões, abrangendo várias plataformas de consoles, portáteis e computadores.Os primeiros doze títulos da série são ambientados durante o período histórico da Segunda Guerra Mundial, enquanto dois deles se concentram em guerras modernas, no combate ao terrorismo. A trilha sonora da franquia foi composta por Michael Giacchino, Christopher Lennertz e Ramin Djawadi.A série começou em 1999 com o lançamento de Medal of Honor. O jogo foi desenvolvido pela DreamWorks Interactive com a história do cineasta Steven Spielberg. O jogo foi lançado para o console PlayStation em 31 de outubro de 1999.[2] A inspiração de Spielberg para a série surgiu durante a direção e produção do filme Saving Private Ryan. Muito dos efeitos sonoros do filme (como tiros, gritos e explosões) foram usados no jogo e reaproveitados nos títulos subsequentes.
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