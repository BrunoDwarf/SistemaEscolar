<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Sistema Escolar</title>

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="../css/design.css"/>
    <link rel="stylesheet" type="text/css" href="../css/normalize/normalize.css"/>
    <link rel="stylesheet" type="text/css" href="../css/formularios/formularios.css"/>
    <link rel="stylesheet" type="text/css" href="../css/provas/provas.css"/>

    <!-- FONTE -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:400,300italic,100,700,700italic"/>

  </head>
  <body>
    <!-- BARRA DE NAVEGAÇÃO -->
    <nav>
      <ul>
        <li id="nav-logo"><h1>Sistema Escolar</h1></li>

        <!-- INICIO -->
        <li><a href="../php/index.php">Inicio</a></li>

        <!-- DISCIPLINA -->
        <li class="nav-dropdown-btn">
          <a href="#">Disciplina</a>
          <ul class="nav-dropdown">
            <li><a href="../disciplina/cadastrar.php">Cadastrar</a></li>
            <li><a href="../disciplina/deletar.php">Deletar</a></li>
            <li><a href="../disciplina/editar.php">Editar</a></li>
          </ul>
        </li>

        <!-- PROFESSORES -->
        <li class="nav-dropdown-btn">
          <a href="#">Professores</a>
          <!-- <ul class="nav-dropdown"> -->
            <!-- <li><a href="../professor/cadastrar.php">Cadastrar</a></li> -->
            <!-- <li><a href="../professor/deletar.php">Deletar</a></li> -->
            <!-- <li><a href="../professor/editar.php">Editar</a></li> -->

            <!-- <li><a href="../professor/professor_disciplina/cadastrar.php">Professor -> Disciplina</a></li> -->
          <!-- </ul> -->
        </li>

        <!-- PROVAS -->
        <li class="nav-dropdown-btn">
          <a href="#">Provas</a>
          <!-- <ul class="nav-dropdown"> -->
            <!-- <li><a href="../prova/cadastrar.php">Cadastrar</a></li> -->
            <!-- <li><a href="../prova/deletar.php">Deletar</a></li> -->
            <!-- <li><a href="../prova/editar.php">Editar</a></li> -->

            <!-- <li><a href="../prova/prova_questao/cadastrar.php">Cadastrar Prova -> Questao</a></li> -->
            <!-- <li><a href="../prova/prova_questao/deletar.php">Deletar Prova -> Questao</a></li> -->

            <!-- <a href="../prova/gerar_prova/gerarprova.php">Gerar Prova</a> -->
          <!-- </ul> -->
        </li>

        <!-- QUESTÃO -->
        <li class="nav-dropdown-btn">
          <a href="#">Questão</a>
          <!-- <ul class="nav-dropdown"> -->
            <!-- <li><a href="../questao/cadastrar.php">Cadastrar</a></li> -->
            <!-- <li><a href="../questao/deletar.php">Deletar</a></li> -->
            <!-- <li><a href="../questao/editar.php">Editar</a></li> -->
          <!-- </ul> -->
        </li>
      </ul>
    </nav>
