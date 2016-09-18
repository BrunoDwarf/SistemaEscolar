<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Sistema Escolar</title>

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- NORMALIZE -->
    <link rel="stylesheet" type="text/css" href="../css/normalize/normalize.css"/>

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="../css/design.css"/>

    <link rel="stylesheet" type="text/css" href="../css/formularios/formularios.css"/>
    <link rel="stylesheet" type="text/css" href="../css/provas/provas.css"/>

    <!-- FONTE -->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css"  integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:400,300italic,100,700,700italic"/>

  </head>
  <body>
    <div class="jumbotron text-center">
      <h1>Sistema Escolar</h1>
      <p>Faça sua prova com o direito de exporta-la em PDF</p>
    </div>
    <!-- BARRA DE NAVEGAÇÃO -->
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">Sistema Escolar</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <!-- INICIO -->
            <li class="active"><a href="index.php">Inicio</a></li>

            <!-- DISCIPLINA -->
            <li><a href="disciplina.php">Disciplina</a></li>

            <!-- PROFESSORES -->
            <li><a href="professor.php">Professor</a></li>

            <!-- QUESTÃO -->
            <li><a href="questao.php">Questão</a></li>

            <!-- PROVAS -->
            <li><a href="prova.php">Prova</a></li>

            <!-- EXTRA -->
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Extras<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="assunto.php">Assunto de Questão</a></li>
                <li><a href="dificuldade.php">Dificuldade de Questão</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="ano_escolar.php">Ano Escolar</a></li>
              </ul>
            </li>

          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
