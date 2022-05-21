<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="Assets/css/estilo.css">
    <link rel="stylesheet" href="Assets/css/exercicio.css">
    <title>Curso PHP</title>
</head>
<body>
    <header class="cabecalho">
        <h1>Treinamento PHP</h1>
        <h2>Índice dos Exercícios</h2>
    </header>
    <main class="principal">
        <div class="conteudo">
            <nav class="modulos">
                <div class="modulo verde">
                    <h3>Módulo 01</h3>
                    <ul>
                        <li>
                            <a href="exercicio.php?dir=basico&file=ola">
                            Olá PHP.
                        </a>
                    </li>
                    <li>
                            <a href="exercicio.php?dir=basico&file=html">
                            integração html.
                        </a>
                    </li>
                    <li>
                            <a href="exercicio.php?dir=basico&file=css">
                            integração CSS
                        </a>
                    </li>
                    </ul>
                </div>
            </nav>
        </div>
    </main>
    <footer class="rodape">
        Ubiratan <?= date('Y'); ?>©
    </footer>
</body>
</html>
