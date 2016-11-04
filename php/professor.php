<?php require_once "templates/header/header.php" ?>
    <!-- AREA DE CONTEUDO -->
    <div class="section">
      <div class="center-block">
        <!-- CADASTRAR -->
        <div class="panel panel-success">
          <div class="panel-heading">Cadastrar</div>
          <div class="panel-body">
            <div class="form-group">
              <label for="cpf_professor_cadastrar">CPF</label>
              <input type="text" class="form-control" id="cpf_professor_cadastrar" placeholder="Ex:17572778704">
            </div>
            <div class="form-group">
              <label for="nome_professor_cadastrar">Nome</label>
              <input type="text" class="form-control" id="nome_professor_cadastrar" placeholder="Ex:Bruno R Souza">
            </div>
            <div class="form-group">
              <label for="idade_professor_cadastrar">Idade</label>
              <input type="number" class="form-control" id="idade_professor_cadastrar" placeholder="Ex:21">
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
                  <th>Nome</th>
                  <th>Idade</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  require_once 'conexaobd.php';
                  try
                  {
                    $result = $conn->query("SELECT * FROM professor");
                    if ($result->rowCount() > 0)
                    {
                      foreach ($result as $row)
                      {
                        echo "<tr><td>". $row[1] ."</td><td>". $row[2] ."</td></tr>";
                      }
                    }
                    else
                    {
                      echo "<tr><td> VAZIO </td><td> VAZIO </td></tr>";
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
        <div class="panel panel-warning" id="status-editar-tudo">
          <div class="panel-heading">Editar</div>
          <div class="panel-body">
            <div class="form-group">
              <label for="cpf_professor_editar">CPF</label>
              <input type="text" class="form-control" id="cpf_professor_editar" placeholder="Ex:17572778704">
            </div>
          </div>
          <div class="panel-footer">
            <button type="button" class="btn btn-warning" onclick="editar1();">Editar</button>
          </div>
        </div>

        <!-- DELETAR -->
        <div class="panel panel-danger">
          <div class="panel-heading">Deletar</div>
          <div class="panel-body">
            <div class="form-group">
              <label for="cpf_professor_deletar">CPF</label>
              <input type="text" class="form-control" id="cpf_professor_deletar" placeholder="Ex:17572778704">
            </div>
          </div>
          <div class="panel-footer" id="status-deletar">
            <button type="button" class="btn btn-danger" onclick="deletar();">Deletar</button>
          </div>
        </div>

      </div>
    </div>

    <!-- JAVASCRIPT-->
    <script type="text/javascript" src="../javascript/ajax/professor/cadastrar.js"></script>
    <script type="text/javascript" src="../javascript/ajax/professor/editar1.js"></script>
    <script type="text/javascript" src="../javascript/ajax/professor/editar2.js"></script>
    <script type="text/javascript" src="../javascript/ajax/professor/deletar.js"></script>
<?php require_once "templates/footer/footer.php" ?>
