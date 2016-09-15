<?php require_once "../templates/header/header.php" ?>
    <!-- AREA DE CONTEUDO -->
    <div id="section">
      <div id="form">
        <h1>Deletar</h1>
        <a href="#">Nome da Disciplina:
        <select name="nome_disciplina" id="nome_disciplina">
          <?php
            require_once '../conexaobd.php';
            $vazio = "vazio";
            $result = $conn->query("SELECT * FROM disciplina");
            if(empty($result) == FALSE)
            {
              foreach ($result as $row)
              {
                echo "<option value=".$row[0].">".$row[0]."</option>";
              }
            }
            else
            {
              echo "<option>".$vazio."</option>";
            }
          ?>
        </select></a><br>
        <input type="button" value="Enviar" onclick="checaDados();">
        <hr/>
          <div id="Resultado">
          </div>
        <hr/>
      </div>
    </div>

    <!-- JAVASCRIPT-->
    <script type="text/javascript" src="../../javascript/ajax/disciplina/deletar.js"></script>
<?php require_once "../templates/footer/footer.php" ?>
