<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../main_code/style/main.css">
    <title>Admin</title>
</head>
<?php
    include("../php_refer/php_refer.php");
    include("../administrator/protect.php");
?>
<body>
    <!-- Cabeçalho da página -->
    <main class="main-all">
    <header class="nav-top">
    <h2>Página Administrativa</h2>
        <nav class="usuario">
        <ul>
            <li><a href="../administrator/logout.php">Sair</a></li>
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
        if($url == '/dashboard/First_project/administrator/pagina_admin.php'){//verifica se a url e a mesma a ser passada

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
        <div class="admin-buttons">
        <a href="" class="add"><xml version="1.0" encoding="utf-8"?><!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M13.5 3H12H8C6.34315 3 5 4.34315 5 6V18C5 19.6569 6.34315 21 8 21H11M13.5 3L19 8.625M13.5 3V7.625C13.5 8.17728 13.9477 8.625 14.5 8.625H19M19 8.625V11.8125" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        <path d="M17 15V18M17 21V18M17 18H14M17 18H20" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
            <a href=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z" class="trash"/></svg></a>
            <a href=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z" class="edit"/></svg></a>
        </div>
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
            <div class="admin-buttons">
            <a href="" class="add"><xml version="1.0" encoding="utf-8"?><!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M13.5 3H12H8C6.34315 3 5 4.34315 5 6V18C5 19.6569 6.34315 21 8 21H11M13.5 3L19 8.625M13.5 3V7.625C13.5 8.17728 13.9477 8.625 14.5 8.625H19M19 8.625V11.8125" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M17 15V18M17 21V18M17 18H14M17 18H20" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
            <a href=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z" class="trash"/></svg></a>
            <a href=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z" class="edit"/></svg></a>
            </div>
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
            <div class="admin-buttons">
            <a href="" class="add"><xml version="1.0" encoding="utf-8"?><!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M13.5 3H12H8C6.34315 3 5 4.34315 5 6V18C5 19.6569 6.34315 21 8 21H11M13.5 3L19 8.625M13.5 3V7.625C13.5 8.17728 13.9477 8.625 14.5 8.625H19M19 8.625V11.8125" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M17 15V18M17 21V18M17 18H14M17 18H20" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
            <a href=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z" class="trash"/></svg></a>
            <a href=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z" class="edit"/></svg></a>
            </div>
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
                <div class="admin-buttons">
                <a href="" class="add"><xml version="1.0" encoding="utf-8"?><!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M13.5 3H12H8C6.34315 3 5 4.34315 5 6V18C5 19.6569 6.34315 21 8 21H11M13.5 3L19 8.625M13.5 3V7.625C13.5 8.17728 13.9477 8.625 14.5 8.625H19M19 8.625V11.8125" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M17 15V18M17 21V18M17 18H14M17 18H20" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                <a href=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z" class="trash"/></svg></a>
                <a href=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z" class="edit"/></svg></a>
                </div>
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
                <div class="admin-buttons">
                <a href="" class="add"><xml version="1.0" encoding="utf-8"?><!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M13.5 3H12H8C6.34315 3 5 4.34315 5 6V18C5 19.6569 6.34315 21 8 21H11M13.5 3L19 8.625M13.5 3V7.625C13.5 8.17728 13.9477 8.625 14.5 8.625H19M19 8.625V11.8125" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M17 15V18M17 21V18M17 18H14M17 18H20" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                <a href=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z" class="trash"/></svg></a>
                <a href=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z" class="edit"/></svg></a>
                </div>
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
                <div class="admin-buttons">
                <a href="" class="add"><xml version="1.0" encoding="utf-8"?><!-- Uploaded to: SVG Repo, www.svgrepo.com, Generator: SVG Repo Mixer Tools -->
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M13.5 3H12H8C6.34315 3 5 4.34315 5 6V18C5 19.6569 6.34315 21 8 21H11M13.5 3L19 8.625M13.5 3V7.625C13.5 8.17728 13.9477 8.625 14.5 8.625H19M19 8.625V11.8125" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M17 15V18M17 21V18M17 18H14M17 18H20" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
                <a href=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z" class="trash"/></svg></a>
                <a href=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z" class="edit"/></svg></a>
                </div>
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