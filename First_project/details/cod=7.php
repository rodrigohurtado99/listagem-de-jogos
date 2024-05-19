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
        
            <img src="../img/bof3.webp" alt="Assasins_creed" width="401px" height="500px">
            <article>
            <h1>Breath of Fire III</h1>
            <?php 
            
                $sql_code = "SELECT nota_alta FROM cadastros WHERE id = 7";
                $sql_query = $mysqli->query($sql_code) or die('ERRO na consulta');

                while($row = $sql_query->fetch_assoc()){
                    ?>
                    <p><strong>Nota: <?php echo $row['nota_alta']. " / 10.0"?></strong></p>
                    <?php
                }
            ?>
            <p>
            Breath of Fire III  é um jogo de RPG desenvolvido e publicado pela Capcom para PlayStation. Originalmente lançado no Japão em 1997, o jogo fora lançado na América do Norte e na Europa em 1998.[carece de fontes] Este é o terceiro episódio da série Breath of Fire, e o primeiro a apresentar os ambientes e os recursos em três dimensões, além de vários novos elementos de jogabilidade, como um sistema de combate mais completo, a capacidade de aprender habilidades inimigas, e a interação com o meio ambiente. Em 2005, Breath of Fire III foi relançado para o PlayStation Portable no Japão e na Europa em 2006 (somente em inglês).O jogo se passa em um mundo imaginário, na companhia de Ryu, um rapaz com a incrível habilidade de transformar-se em um dragão, que precisa descobrir suas verdadeiras origens e encontrar seus amigos desaparecidos, Rei e Teepo. O cenário é apresentado em duas partes: uma com Ryu criança e outra com ele adolescente. Ryu é acompanhado por muitos aliados que o ajudarão durante a jornada que levará o mundo a uma batalha contra uma deusa maquiavélica.
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