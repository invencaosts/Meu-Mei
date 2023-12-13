<?php
// reference the Dompdf namespace 
use Dompdf\Dompdf;

if (
    isset($_POST["nomeEmpresarial"]) || isset($_POST["periodoApuracao"]) || isset($_POST["cnpj"])
    || isset($_POST["csn"]) || isset($_POST["ccn"]) || isset($_POST["isn"]) || isset($_POST["icn"])
    || isset($_POST["ssn"]) || isset($_POST["scn"])
) {

    if (strlen($_POST["nomeEmpresarial"]) == 0) {
        echo "Informe o nome da empresa";

    } elseif (strlen($_POST["periodoApuracao"]) == 0) {
        echo "Informe o priodo de apuração deste documento";

    } elseif (strlen($_POST["cnpj"]) == 0) {
        echo "Informe o CNPJ da empresa";

    } else {

        $nomeEmpresarial = $_POST["nomeEmpresarial"];
        $periodoApuracao = $_POST["periodoApuracao"];
        $cnpj = $_POST["cnpj"];
        $csn = $_POST["csn"];
        $ccn = $_POST["ccn"];
        $isn = $_POST["isn"];
        $icn = $_POST["icn"];
        $ssn = $_POST["ssn"];
        $scn = $_POST["scn"];

        $html = "<table border='1'>";

        $html .= "<thead>";
        $html .= "<tr>";
        $html .= "<th colspan='2' scope'col'>RELATÓRIO MENSAL DE RECEITAS BRUTAS</th>";
        $html .= "</tr>";
        $html .= "</thead>";

        $html .= "<tbody>";
        $html .= "<tr>";
        $html .= "<td colspan='2'>CNPJ:" . $cnpj . "</td>";
        $html .= "</tr>";
        $html .= "<tr>";
        $html .= "<td colspan='2'>Empreendedor individual:" . $nomeEmpresarial . "</td>";
        $html .= "</tr>";
        $html .= "<tr>";
        $html .= "<td colspan='2'>Periodo de apuração:" . $periodoApuracao . "</td>";
        $html .= "</tr>";
        $html .= "</tbody>";

        $html .= "<thead>";
        $html .= "<tr>";
        $html .= "<th colspan='2' scope'col'>RECEITA BRUTA MENSAL - REVENDA DE MERCADORIAS (COMÉRCIO)</th>";
        $html .= "</tr>";
        $html .= "</thead>";

        $html .= "<tbody>";
        $html .= "<tr>";
        $html .= "<td colspan='2'>I - Revenda de mercadorias com dispensa de emissão de documento
        fiscal</td>";
        $html .= "<td>R$" . $csn . "</td>";
        $html .= "</tr>";
        $html .= "<tr>";
        $html .= "<td colspan='2'>II - Revenda de mercadorias com documento fiscal emitido</td>";
        $html .= "<td>R$" . $ccn . "</td>";
        $html .= "</tr>";
        $html .= "<tr>";
        $html .= "<td colspan='2'>III - Total das receitas com revenda de mercadorias (I + II)</td>";
        $html .= "<td>R$" . $csn + $ccn . "</td>";
        $html .= "</tr>";
        $html .= "</tbody>";

        $html .= "<thead>";
        $html .= "<tr>";
        $html .= "<th colspan='2' scope'col'>RECEITA BRUTA MENSAL - VENDA DE PRODUTOS INDUSTRIALIZADOS (INDÚSTRIA)</th>";
        $html .= "</tr>";
        $html .= "</thead>";

        $html .= "<tbody>";
        $html .= "<tr>";
        $html .= "<td colspan='2'>IV - Venda de produtos industrializados com dispensa de emissão de
        documento fiscal</td>";
        $html .= "<td>R$" . $isn . "</td>";
        $html .= "</tr>";
        $html .= "<tr>";
        $html .= "<td colspan='2'>V - Venda de produtos industrializados com documento fiscal emitido</td>";
        $html .= "<td>R$" . $icn . "</td>";
        $html .= "</tr>";
        $html .= "<tr>";
        $html .= "<td colspan='2'> VI - Total das receitas com venda de produtos industrializados (IV +
        V)</td>";
        $html .= "<td>R$" . $isn + $icn . "</td>";
        $html .= "</tr>";
        $html .= "</tbody>";

        $html .= "<thead>";
        $html .= "<tr>";
        $html .= "<th colspan='2' scope'col'>RECEITA BRUTA MENSAL - PRESTAÇÃO DE SERVIÇOS</th>";
        $html .= "</tr>";
        $html .= "</thead>";

        $html .= "<tbody>";
        $html .= "<tr>";
        $html .= "<td colspan='2'>VII - Receita com prestação de serviços com dispensa de emissão de
        documento fiscal</td>";
        $html .= "<td>R$" . $ssn . "</td>";
        $html .= "</tr>";
        $html .= "<tr>";
        $html .= "<td colspan='2'>VIII - Receita com prestação de serviços com documento fiscal
        emitido</td>";
        $html .= "<td>R$" . $scn . "</td>";
        $html .= "</tr>";
        $html .= "<tr>";
        $html .= "<td colspan='2'> IX - Total das receitas com prestação de serviços (VII + VIII) </td>";
        $html .= "<td>R$" . $ssn + $scn . "</td>";
        $html .= "</tr>";
        $html .= "<tr>";
        $html .= "<td colspan='2'> X - Total das receitas com prestação de serviços (VII + VIII) </td>";
        $html .= "<td>R$" . $csn + $icn + $scn . "</td>";
        $html .= "</tr>";
        $html .= "<tr>";
        $html .= "<td colspan='2'>LOCAL E DATA:" . $periodoApuracao . "</td>";
        $html .= "<td>ASSINATURA DO EMPRESÁRIO: <br />" . $nomeEmpresarial . "</td>";
        $html .= "</tr>";
        $html .= "</tbody>";

        $html .= "</table>";


        // include autoloader
        require_once '../dompdf/autoload.inc.php';

        // instantiate and use the dompdf class
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream();
    }
}

?>

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
    <link rel="stylesheet" href="../style/cabecalho.css">
    <link rel="stylesheet" href="../style/paginaRelatorioMensal.css">
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
                <a href="../index.php">
                    <img src="../src/images/Logo.svg" alt="Logo do Meu Mei" />
                </a>
            </div>
            <div class="botoesCabecalho">
                <button onclick="window.location.href='../pages/paginaRelatorioMensal.php';" type="submit"
                    class="botoesCabecalhoDois" id="botaoLogin">
                    MENSAL
                </button>
                <button onclick="window.location.href='../pages/paginaRelatorioAnual.php';" type="submit"
                    class="botoesCabecalhoDois" id="botaoCadastro">
                    DASN
                </button>
            </div>
        </div>
    </header>
    <!-- Cabeçalho - Fim -->

    <main>
        <form action="" method="post">
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
                    <input id="inputNome" class="inputFormulario" type="text" name="nomeEmpresarial"
                        placeholder="NOME DO TITULAR">
                    <input id="inputPeriodo" class="inputFormulario" type="text" name="periodoApuracao"
                        placeholder="PERÍODO DE APURAÇÃO">
                    <input id="inputCNPJ" class="inputFormulario" type="text" name="cnpj" placeholder="CNPJ">
                </div>
                <div class="separadores">
                    <div class="separadores-individual">
                        <img class="line1" src="../src/images/images home/Line 2.png" alt="">
                        <p class="textoSeparadores" id="comercio">COMÉRCIO</p>
                        <img class="line1" src="../src/images/images home/Line 2.png" alt="">
                    </div>
                </div>
                <div class="campo-inputs inputs-receita">
                    <input id="inputVendasSNF1" class="inputFormulario" type="text" name="csn"
                        placeholder="VENDAS SEM NOTA FISCAL">
                    <input id="inputVendasCNF1" class="inputFormulario" type="text" name="ccn"
                        placeholder="VENDAS COM NOTA FISCAL">
                </div>
                <div class="separadores">
                    <div class="separadores-individual">
                        <img class="line1" src="../src/images/images home/Line 2.png" alt="">
                        <p class="textoSeparadores" id="industria">INDÚSTRIA</p>
                        <img class="line1" src="../src/images/images home/Line 2.png" alt="">
                    </div>
                </div>
                <div class="campo-inputs inputs-receita">
                    <input id="inputVendasSNF2" class="inputFormulario" type="text" name="isn"
                        placeholder="VENDAS SEM NOTA FISCAL">
                    <input id="inputVendasCNF2" class="inputFormulario" type="text" name="icn"
                        placeholder="VENDAS COM NOTA FISCAL">
                </div>
                <div class="separadores-individual">
                    <img class="line2" src="../src/images/images home/Line 2.png" alt="">
                    <p class="textoSeparadores" id="servico">SERVIÇO</p>
                    <img class="line2" src="../src/images/images home/Line 2.png" alt="">
                </div>
                <div class="campo-inputs inputs-receita">
                    <input id="inputVendasSNF3" class="inputFormulario" type="text" name="ssn"
                        placeholder="VENDAS SEM NOTA FISCAL">
                    <input id="inputVendasCNF3" class="inputFormulario" type="text" name="scn"
                        placeholder="VENDAS COM NOTA FISCAL">
                </div>
                <div class="group-button">
                    <button type="submit" id="botaoConfirmar">BAIXAR</button>
                </div>
            </div>

        </form>
    </main>
</body>

</html>