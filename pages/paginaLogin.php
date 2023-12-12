<?php

include('../config/conexao.php');

if (isset($_POST["cnpj"]) || isset($_POST["senha"])) {

  if (strlen($_POST["cnpj"]) == 0) {
    echo "Preencha seu CNPJ";
  } else if (strlen($_POST["senha"]) == 0) {
    echo "Preencha sua senha";
  } else {

    $cnpj = $mysqli->real_escape_string($_POST["cnpj"]);
    $senha = $mysqli->real_escape_string($_POST["senha"]);

    $sql_code = "SELECT * FROM usuario WHERE cnpj = '$cnpj' AND senha = '$senha'";
    $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

    $quantidade = $sql_query->num_rows;
    if ($quantidade == 1) {
      $user = $sql_query->fetch_assoc();

      if (!isset($_SESSION)) {
        session_start();
      }

      $_SESSION['id'] = $user['idusuario'];
      $_SESSION['nome'] = $user['nomeCompleto'];

      header('location: ../pages/home.php');


    } else {
      echo "Falha ao fazer login! CNPJ ou senha incorretos";
    }
  }

}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <link rel="icon" href="../src/images/logoIcon.png" />
  <title>Login - Meu Mei</title>

  <!-- Linkando Fonte -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet" />

  <!-- Linkando CSS -->
  <link rel="stylesheet" href="../style/cabecalho.css" />
  <link rel="stylesheet" href="../style/paginaLogin.css" />

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
        <a href="../index.html">
          <img src="../src/images/Logo.svg" alt="Logo do Meu Mei" />
        </a>
      </div>
      <div class="botoesCabecalho">
        <button onclick="window.location.href='paginaLogin.html';" type="submit" class="botoesCabecalhoDois"
          id="botaoLogin">
          LOGIN
        </button>
        <button onclick="window.location.href='paginaCadastro.html';" type="submit" class="botoesCabecalhoDois"
          id="botaoCadastro">
          CADASTRO
        </button>
      </div>
    </div>
  </header>
  <!-- Cabeçalho - Fim -->

  <!-- Início Formulário -->
  <form action="" method="post">
    <div class="formulario">
      <div class="textoFormulario">
        <p id="textoFormulario">
          Faça login na sua conta Meu Mei
        </p>
      </div>
      <div class="mb-3">
        <input type="text" class="inputFormulario" id="inputCnpj" name="cnpj" placeholder="CNPJ" />
      </div>
      <div class="mb-3">
        <input type="password" class="inputFormulario" id="inputSenha" name="senha" placeholder="Senha" />
      </div>
      <button type="submit" id="botaoFormulario">ENTRAR</button>
      <img id="barraFormulario" src="../src/images/Line 1.svg" alt="" />
      <p id="linkLogin">
        Ainda não tem uma conta? <a href="paginaCadastro.php">Faça o Cadastro!</a>
      </p>
    </div>
  </form>
  <!-- Final Formulário -->
</body>

</html>