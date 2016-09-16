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
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- FONTE -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:400,300italic,100,700,700italic"/>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
  </head>
  <body>
    <!-- BARRA DE NAVEGAÇÃO -->
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">Sistema Escolar</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Separated link</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Link</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Separated link</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

        <!-- INICIO -->
        <li><a href="../php/index.php">Inicio</a></li>

        <!-- DISCIPLINA -->
        <li class="nav-dropdown-btn">
          <i class="fa fa-book" aria-hidden="true"></i>
          <a href="#">Disciplina</a>
        </li>

        <!-- PROFESSORES -->
        <li class="nav-dropdown-btn">
          <a href="#">Professores</a>
        </li>

        <!-- PROVAS -->
        <li class="nav-dropdown-btn">
          <a href="#">Provas</a>
        </li>

        <!-- QUESTÃO -->
        <li class="nav-dropdown-btn">
          <a href="#">Questão</a>
        </li>

        <!-- EXTRA -->
        <li class="nav-dropdown-btn">
          <a href="#">Extra</a>
          <ul class="nav-dropdown">
            <li><a href="#">Assunto</a></li>
            <li><a href="#">Dificuldade</a></li>
            <li><a href="#">Ano Escolar</a></li>
          </ul>
        </div>
      </div>
    </nav>
