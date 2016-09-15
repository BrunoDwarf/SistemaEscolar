<?php require_once "../templates/header/header.php" ?>
    <!-- AREA DE CONTEUDO -->
    <div id="section">
      <div id="form">
        <h1>Consultar por Pesquisa</h1>
        <a href="#">Nome da Disciplina: <input type="text" id="nome_disciplina"></a><br>
        <input type="button" value="Consultar" onclick="checaDados();">
        <hr/>
          <div id="Resultado">
          </div>
        <hr/>
      </div>
    </div>

    <!-- JAVASCRIPT-->
    <script type="text/javascript" src="../../javascript/ajax/disciplina/consultar.js"></script>
<?php require_once "../templates/footer/footer.php" ?>
