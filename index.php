<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="../src/images/logoIcon.png" />
    <title>Meu Mei</title>

    <!-- Linkando Fonte -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet" />

    <!-- Linkando CSS -->
    <link rel="stylesheet" href="../style/cabecalho.css" />
    <link rel="stylesheet" href="../style/index.css" />
    <link rel="stylesheet" href="../style/carrossel.css">

    <!-- Linkando Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</head>

<body class="body">
    <!-- Cabeçalho - Início -->
    <header class="fixarCabecalho">
        <div class="cabecalho">
            <div class="logo">
                <img src="../src/images/Logo.svg" alt="Logo do Meu Mei" />
            </div>
            <div class="botoesCabecalho">
                <button onclick="window.location.href='../Meu-Mei/pages/paginaLogin.php';" type="submit"
                    class="botoesCabecalhoDois" id="botaoLogin">
                    LOGIN
                </button>
                <button onclick="window.location.href='../Meu-Mei/pages/paginaCadastro.php';" type="submit"
                    class="botoesCabecalhoDois" id="botaoCadastro">
                    CADASTRO
                </button>
            </div>
        </div>
    </header>
    <!-- Cabeçalho - Fim -->

    <main>
        <!-- Texto Index Começo -->
        <div class="engloba">
            <div class="texto">
                <h2 id="h4Texto">Meu Mei é um site voltado para você!</h2 id="h4Texto">

                <p class="chamadaTexto">
                    📌 Você MEI que deseja evitar aquele trabalho de usar planilhas
                    online, ou até mesmo a caneta e o papel!
                </p>
                <p class="chamadaTexto">
                    📌 Você Microempreendedor Individual que deseja evitar complicações
                    com a declaração do DASN - SIMEI.
                </p>
                <p class="chamadaTexto">
                    📌 Para você que não quer ter mais trabalho na declaração do Relatório
                    Mensal de Receitas Brutas.
                </p>
                <p class="chamadaTexto">
                    Enfim, para você que já trabalha no toque da sua empresa todo dia e
                    deseja não perder tanto tempo nessas atividades chatas!
            </div>
            </p>

            <div>

            </div>
            <img class="logoGrande" src="../src/images/Logo.svg" alt="Logo grande do Meu Mei">
        </div>
        <!-- Texto Index Final  -->

        <!-- Carrossel Início -->
        <div class="carrossel">
            <div class="slides">
                <input class="inputCarrossel" type="radio" name="slide" id="slide1" checked>
                <input class="inputCarrossel" type="radio" name="slide" id="slide2">

                <div class="slide s1">
                    <img class="img" src="../src/images/images carrossel/Images Rolls.svg" alt="Imagem Carrosel">
                </div>
                <div class="slide">
                    <img class="img" src="../src/images/Line 1.svg" alt="Imagem Carrosel">
                </div>
            </div>

            <div class="navigation">
                <label class="bar" for="slide1"></label class="bar">
                <label class="bar" for="slide2"></label>
            </div>
        </div>
        <!-- Carrossel Final -->
    </main>
</body>

</html>