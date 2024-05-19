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
        
            <img src="../img/counter.webp" alt="Assasins_creed" width="401px" height="500px">
            <article>
            <h1>Counter-Strike</h1>
            <?php 
            
                $sql_code = "SELECT nota_baixa FROM cadastros WHERE id = 3";
                $sql_query = $mysqli->query($sql_code) or die('ERRO na consulta');

                while($row = $sql_query->fetch_assoc()){
                    ?>
                    <p><strong>Nota: <?php echo $row['nota_baixa']. " / 10.0"?></strong></p>
                    <?php
                }
            ?>
            <p>
            Counter-Strike foi um dos responsáveis pela massificação dos jogos por rede no início do século, sendo considerado o grande responsável pela popularização das LAN houses no mundo. O jogo é considerado o originador do esporte eletrônico, onde muitos jogadores levam-no a sério e recebem salários fixos, existindo até times profissionais, e que são patrocinados por grandes empresas como a Intel e a NVIDIA. Pelo mundo existem as ligas profissionais onde o Counter-Strike está presente, como o caso da CPL (que encerrou suas atividades em 2008), ESWC,[5] ESL,[6] WCG[7] e WEG.[8] No caso da ESWC funciona da seguinte forma: cada país tem as suas qualificações no qual qualquer clã pode ir a uma qualificação em uma lan house em qualquer parte do mesmo país, passando depois às melhores equipes, as melhores equipes de cada país encontram-se depois no complexo da ESWC, localizado em Paris, para disputar o lugar da melhor equipe do mundo de Counter-Strike. Considerado um dos maiores e mais influentes jogos de todos os tempos, Counter-Strike foi aclamado pela mídia especializada desde a época do seu lançamento, recebendo notas 88/100 no site Metacritic e 89/100 no site GameRankings, além de receber 98% de análises positivas no Steam.
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