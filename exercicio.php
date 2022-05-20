<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="Assets/css/estilo.css">
    <link rel="stylesheet" href="Assets/css/exercicio.css">
    <title>Exercício</title>
</head>
<body class="exercicio">
    <header class="cabecalho">
        <h1>Treinamento PHP</h1>
        <h2>Visualização do Exercício</h2>
    </header>
    <nav class="navegacao">      

    <a href="#" class="verde">Sem formatação</a>
        <a href="index.php" class="vermelho">Voltar</a>

    </nav>
    <main class="principal">
        <div class="conteudo">
            
        <?php
        
    /*  include($_GET['dir'] . "/" . $_GET['file'] . ".php");

        include("{$_GET['dir']}/{$_GET['file']}.php");
        
        include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php");
     */

        ?>   
         
        </div>
    </main>
    <footer class="rodape">
        Ubiratan <?= date('Y'); ?>
    </footer>
</body>
</html>
