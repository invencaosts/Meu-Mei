<?php
// reference the Dompdf namespace
use Dompdf\Dompdf;

if (
  isset($_POST["cnpj"]) || isset($_POST["anoCalendario"]) || isset($_POST["quantidadeFuncionarios"])
  || isset($_POST["janeiro"]) || isset($_POST["fevereiro"]) || isset($_POST["marco"]) || isset($_POST["abril"])
  || isset($_POST["maio"]) || isset($_POST["junho"]) || isset($_POST["julho"]) || isset($_POST["agosto"])
  || isset($_POST["setembro"]) || isset($_POST["outubro"]) || isset($_POST["novembro"]) || isset($_POST["dezembro"])
) {
  if (strlen($_POST["cnpj"]) == 0) {
    echo "Informe o CNPJ da empresa";

  } elseif (strlen($_POST["anoCalendario"]) == 0) {
    echo "Informe o ano referido a este documento";

  } elseif (strlen($_POST["quantidadeFuncionarios"]) == 0) {
    echo "Informe a quantidade de funcionários da sua empresa";

  } elseif (strlen($_POST["janeiro"]) == 0) {
    echo "Informe o valor total de janeiro";

  } elseif (strlen($_POST["fevereiro"]) == 0) {
    echo "Informe o valor total de fevereiro";

  } elseif (strlen($_POST["marco"]) == 0) {
    echo "Informe o valor total de marco";

  } elseif (strlen($_POST["abril"]) == 0) {
    echo "Informe o valor total de abril";

  } elseif (strlen($_POST["maio"]) == 0) {
    echo "Informe o valor total de ";

  } elseif (strlen($_POST["junho"]) == 0) {
    echo "Informe o valor total de maio";

  } elseif (strlen($_POST["julho"]) == 0) {
    echo "Informe o valor total de julho";

  } elseif (strlen($_POST["agosto"]) == 0) {
    echo "Informe o valor total de agosto";

  } elseif (strlen($_POST["setembro"]) == 0) {
    echo "Informe o valor total de setembro";

  } elseif (strlen($_POST["outubro"]) == 0) {
    echo "Informe o valor total de outubro";

  } elseif (strlen($_POST["novembro"]) == 0) {
    echo "Informe o valor total de novembro";

  } elseif (strlen($_POST["dezembro"]) == 0) {
    echo "Informe o valor total de dezembro";

  } else {
    // include autoloader
    require_once '../dompdf/autoload.inc.php';

    // instantiate and use the dompdf class
    $dompdf = new Dompdf();
    $dompdf->loadHtml('hello world');

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
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>DASN-SIMEI</title>
  <!-- Linkando Fontes -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet" />
  <!-- linkando CSS -->
  <link rel="stylesheet" href="../style/cabecalho.css" />
  <link rel="stylesheet" href="../style/paginaRelatorioAnual.css" />
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
            <img class="line1" src="../src/images/images home/Line 2.png" alt="" />
            <p class="textoSeparadores" id="rmrb">DASN - SIMEI</p>
            <img class="line1" src="../src/images/images home/Line 2.png" alt="" />
          </div>
        </div>
        <div class="campo-inputs">
          <input class="inputFormulario" type="text" name="cnpj" placeholder="CNPJ" />
          <input class="inputFormulario" type="text" name="anoCalendario" placeholder="ANO CALENDÁRIO" />
          <input class="inputFormulario" type="text" name="quantidadeFuncionarios"
            placeholder="QUANTIDADE DE FUNCIONÁRIOS QUE A EMPRESA TEVE" />
        </div>
        <div class="separadores-individual">
          <img class="line2" src="../src/images/images home/Line 2.png" alt="" />
          <p class="textoSeparadores" id="rmrb">VALORES APURADOS</p>
          <img class="line2" src="../src/images/images home/Line 2.png" alt="" />
        </div>
        <div class="container text-center">
          <div class="row">
            <div class="col">
              <p class="textoFormulario">JANEIRO</p>
              <input class="inputFormulario" name="janeiro" type="text" />
            </div>
            <div class="col">
              <p class="textoFormulario">FEVEREIRO</p>
              <input class="inputFormulario" name="fevereiro" type="text" />
            </div>
            <div class="col">
              <p class="textoFormulario">MARÇO</p>
              <input class="inputFormulario" name="marco" type="text" />
            </div>
          </div>
        </div>
        <div class="container text-center">
          <div class="row">
            <div class="col">
              <p class="textoFormulario">ABRIL</p>
              <input class="inputFormulario" name="abril" type="text" />
            </div>
            <div class="col">
              <p class="textoFormulario">MAIO</p>
              <input class="inputFormulario" name="maio" type="text" />
            </div>
            <div class="col">
              <p class="textoFormulario">JUNHO</p>
              <input class="inputFormulario" name="junho" type="text" />
            </div>
          </div>
        </div>
        <div class="container text-center">
          <div class="row">
            <div class="col">
              <p class="textoFormulario">JULHO</p>
              <input class="inputFormulario" name="julho" type="text" />
            </div>
            <div class="col">
              <p class="textoFormulario">AGOSTO</p>
              <input class="inputFormulario" name="agosto" type="text" />
            </div>
            <div class="col">
              <p class="textoFormulario">SETEMBRO</p>
              <input class="inputFormulario" name="setembro" type="text" />
            </div>
          </div>
        </div>
        <div class="container text-center">
          <div class="row">
            <div class="col">
              <p class="textoFormulario">OUTUBRO</p>
              <input class="inputFormulario" name="outubro" type="text" />
            </div>
            <div class="col">
              <p class="textoFormulario">NOVEMBRO</p>
              <input class="inputFormulario" name="novembro" type="text" />
            </div>
            <div class="col">
              <p class="textoFormulario">DEZEMBRO</p>
              <input class="inputFormulario" name="dezembro" type="text" />
            </div>
          </div>
        </div>
        <div class="group-button">
          <button type="submit" id="botaoConfirmar">BAIXAR</button>
        </div>
      </div>

    </form>
  </main>
</body>

</html>