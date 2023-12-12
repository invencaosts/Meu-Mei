<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório Mensal das Receitas Brutas</title>
    <!-- Linkando Fontes -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet" />
    <!-- linkando CSS -->
    <link rel="stylesheet" href="../style/cabecalho2.css">
    <link rel="stylesheet" href="../style/paginaRelatorioMensal.css">
    <!-- Linkando Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</head>

<body class="body">
    <header class="fixarCabecalho">
        <div class="cabecalho">
            <div class="logo">
                <img src="../src/images/Logo.svg" alt="Logo do Meu Mei" />
            </div>
            <div class="iconsCabecalho">
                <a href="paginaAgradecimento.php">
                    <img class="iconsCabecalho2" id="icon1"
                        src="../src/images/icon/auto_stories_FILL0_wght400_GRAD0_opsz24.svg"
                        alt="Icone que redireciona para a página sobre" />
                </a>
                <a href="logout.php">
                    <img class="iconsCabecalho2" id="icon2"
                        src="../src/images/icon/account_box_FILL0_wght400_GRAD0_opsz24.svg"
                        alt="Icone que abre uma aba de perfil" />
                </a>
            </div>
        </div>
    </header>

    <main>
        <div class="principal">
            <div class="separadores">
                <div class="separadores-individual">
                    <img class="line1" src="../src/images/images home/Line 2.png" alt="">
                    <p class="textoSeparadores" id="rmrb">RELATÓRIO MENSAL DE RECEITAS BRUTAS</p>
                    <img class="line1" src="../src/images/images home/Line 2.png" alt="">
                </div>
                <p>Preencha apenas os campos que condizem com as categorias da empresa.</p>
            </div>
            <div class="campo-inputs">
                <input id="inputNome" class="inputFormulario" type="text" placeholder="NOME DO TITULAR">
                <input id="inputPeriodo" class="inputFormulario" type="text" placeholder="PERÍODO DE APURAÇÃO">
                <input id="inputCNPJ" class="inputFormulario" type="text" placeholder="CNPJ">
            </div>
            <div class="separadores">
                <div class="separadores-individual">
                    <img class="line1" src="../src/images/images home/Line 2.png" alt="">
                    <p class="textoSeparadores" id="comercio">COMÉRCIO</p>
                    <img class="line1" src="../src/images/images home/Line 2.png" alt="">
                </div>
            </div>
            <div class="campo-inputs inputs-receita">
                <input id="inputVendasSNF1" class="inputFormulario" type="text" placeholder="VENDAS SEM NOTA FISCAL">
                <input id="inputVendasCNF1" class="inputFormulario" type="text" placeholder="VENDAS COM NOTA FISCAL">
                <input id="inputVendasTotal1" class="inputFormulario" type="text"
                    placeholder="TOTAL DE RECEITA OBTIDO COM TODAS AS VENDAS">
            </div>
            <div class="separadores">
                <div class="separadores-individual">
                    <img class="line1" src="../src/images/images home/Line 2.png" alt="">
                    <p class="textoSeparadores" id="industria">INDÚSTRIA</p>
                    <img class="line1" src="../src/images/images home/Line 2.png" alt="">
                </div>
            </div>
            <div class="campo-inputs inputs-receita">
                <input id="inputVendasSNF2" class="inputFormulario" type="text" placeholder="VENDAS SEM NOTA FISCAL">
                <input id="inputVendasCNF2" class="inputFormulario" type="text" placeholder="VENDAS COM NOTA FISCAL">
                <input id="inputVendasT2" class="inputFormulario" type="text"
                    placeholder="TOTAL DE RECEITA OBTIDO COM TODAS AS VENDAS">
            </div>
            <div class="separadores-individual">
                <img class="line2" src="../src/images/images home/Line 2.png" alt="">
                <p class="textoSeparadores" id="servico">SERVIÇO</p>
                <img class="line2" src="../src/images/images home/Line 2.png" alt="">
            </div>
            <div class="campo-inputs inputs-receita">
                <input id="inputVendasSNF3" class="inputFormulario" type="text" placeholder="VENDAS SEM NOTA FISCAL">
                <input id="inputVendasCNF3" class="inputFormulario" type="text" placeholder="VENDAS COM NOTA FISCAL">
                <input id="inputVendasT3" class="inputFormulario" type="text"
                    placeholder="TOTAL DE RECEITA OBTIDO COM TODAS AS VENDAS">
            </div>
            <div class="group-button">
                <button type="submit" id="botaoConfirmar">CONFIRMAR</button>
                <button type="submit" id="botaoSalvar">SALVAR NO DRIVE <span
                        class="material-symbols-outlined">add_to_drive</span></button>
                <button type="submit" id="botaoCompartilhar">COMPARTILHAR <span
                        class="material-symbols-outlined">share</span></button>
            </div>
        </div>
    </main>
</body>

</html>