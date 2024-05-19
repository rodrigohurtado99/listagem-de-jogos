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
        
            <img src="../img/resident.jpg" alt="Assasins_creed" width="401px" height="500px">
            <article>
            <h1>Resident Evil VI</h1>
            <?php 
            
                $sql_code = "SELECT nota_baixa FROM cadastros WHERE id = 10";
                $sql_query = $mysqli->query($sql_code) or die('ERRO na consulta');

                while($row = $sql_query->fetch_assoc()){
                    ?>
                    <p><strong>Nota: <?php echo $row['nota_baixa']. " / 10.0"?></strong></p>
                    <?php
                }
            ?>
            <p>
            Resident Evil 6, chamado no Japão de Biohazard 6, é um videojogo do gênero ação jogado em terceira pessoa desenvolvido e publicado pela Capcom. Apesar do nome é o nono jogo da série principal Resident Evil e foi lançado em 2 de outubro de 2012 para PlayStation 3 e Xbox 360. A versão para Microsoft Windows foi lançada no dia 22 de março de 2013. O game também ganhou uma versão completa com todas as DLC para PlayStation 4 e Xbox One em 29 de março de 2016.A história é contada a partir das perspectivas de Chris Redfield, membro e fundador da BSAA traumatizado por ter falhado em uma missão; Leon S. Kennedy, um sobrevivente de Raccoon City e agente especial do governo; Jake Muller, filho ilegítimo de Albert Wesker e associado de Sherry Birkin; e Ada Wong, uma agente solitária com ligações aos ataques bio-terroristas pela Neo-Umbrella.O conceito do jogo começou em 2009, mas começou a ser produzido no ano seguinte sobre a supervisão de Hiroyuki Kobayashi, que já tinha produzido Resident Evil 4. A equipe de produção acabou por crescer e tornou-se na maior de sempre a trabalhar num jogo da série Resident Evil. Resident Evil 6 foi apresentado durante uma campanha de divulgação viral na página NoHopeLeft.com.
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