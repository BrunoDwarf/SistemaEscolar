<?php require_once "templates/header/header.php" ?>
    <!-- AREA DE CONTEUDO -->
    <div class="section">
      <div class="center-block">
        <!-- CADASTRAR -->
        <div class="panel panel-success">
          <div class="panel-heading">Cadastrar</div>
          <div class="panel-body">
            <div class="form-group">
              <label for="nome_disciplina_cadastrar">Nome</label>
              <input type="text" class="form-control" id="nome_disciplina_cadastrar" placeholder="Ex:História">
            </div>
          </div>
          <div class="panel-footer" id="status-cadastrar">
            <button type="button" class="btn btn-success" onclick="cadastrar();">Cadastrar</button>
          </div>
        </div>

        <!-- CONSULTAR -->
        <div class="panel panel-info">
          <div class="panel-heading">Consultar</div>
          <div class="panel-body">
            <table class="table table-condensed">
              <thead>
                <tr>
                  <th>Disciplinas</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  require_once 'conexaobd.php';
                  try
                  {
                    $result = $conn->query("SELECT * FROM disciplina");
                    if ($result->rowCount() > 0)
                    {
                      foreach ($result as $row)
                      {
                        echo "<tr><td>". $row[0] ."</td></tr>";
                      }
                    }
                    else
                    {
                      echo "<tr><td> VAZIO </td></tr>";
                    }
                  }
                  catch(PDOException $e)
                  {
                    echo "Error: " . $e . "<br>" . $conn->error;
                  }
                 ?>
              </tbody>
            </table>
          </div>
        </div>

        <!-- EDITAR -->
        <div class="panel panel-warning">
          <div class="panel-heading">Editar</div>
          <div class="panel-body">
            <div class="form-group">
              <label for="nome_disciplina_editar">Nomes</label>
              <select class="form-control" id="nome_disciplina_editar">
                <?php
                  require_once 'conexaobd.php';
                  try
                  {
                    $result = $conn->query("SELECT * FROM disciplina");
                    if ($result->rowCount() > 0)
                    {
                      foreach ($result as $row)
                      {
                        echo "<option>". $row[0] ."</option>";
                      }
                    }
                  }
                  catch(PDOException $e)
                  {
                    echo "Error: " . $e . "<br>" . $conn->error;
                  }
                 ?>
              </select>
            </div>
            <div class="form-group">
              <label for="nome_disciplina_editar_nova">Novo Nome</label>
              <input type="text" class="form-control" id="nome_disciplina_editar_nova" placeholder="Ex:Geografia">
            </div>
          </div>
          <div class="panel-footer" id="status-editar">
            <button type="button" class="btn btn-warning" onclick="editar();">Editar</button>
          </div>
        </div>

        <!-- DELETAR -->
        <div class="panel panel-danger">
          <div class="panel-heading">Deletar</div>
          <div class="panel-body">
            <div class="form-group">
              <label for="nome_disciplina_deletar">Nomes</label>
              <select class="form-control" id="nome_disciplina_deletar">
                <?php
                  require_once 'conexaobd.php';
                  try
                  {
                    $result = $conn->query("SELECT * FROM disciplina");
                    if ($result->rowCount() > 0)
                    {
                      foreach ($result as $row)
                      {
                        echo "<option>". $row[0] ."</option>";
                      }
                    }
                  }
                  catch(PDOException $e)
                  {
                    echo "Error: " . $e . "<br>" . $conn->error;
                  }
                 ?>
              </select>
            </div>
          </div>
          <div class="panel-footer" id="status-deletar">
            <button type="button" class="btn btn-danger" onclick="deletar();">Deletar</button>
          </div>
        </div>

      </div>
    </div>

    <!-- JAVASCRIPT-->
    <script type="text/javascript" src="../javascript/ajax/disciplina/cadastrar.js"></script>
    <script type="text/javascript" src="../javascript/ajax/disciplina/deletar.js"></script>
<?php require_once "templates/footer/footer.php" ?>
