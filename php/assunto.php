<?php require_once "templates/header/header.php" ?>
    <!-- AREA DE CONTEUDO -->
    <div class="section">
      <div class="center-block">
        <!-- CADASTRAR -->
        <div class="panel panel-success">
          <div class="panel-heading">Cadastrar</div>
          <div class="panel-body">
            <div class="form-group">
              <label for="nome_disciplina_cadastrar">Disciplinas</label>
              <select class="form-control" id="nome_disciplina_cadastrar">
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
              <label for="nome_assunto_cadastrar">Assunto</label>
              <input type="text" class="form-control" id="nome_assunto_cadastrar" placeholder="Ex:Primeira Guerra Mundial">
            </div>
          </div>
          <div class="panel-footer">
            <button type="button" class="btn btn-success" onclick="cadastrar();">Cadastrar</button>
          </div>
        </div>

        <!-- CONSULTAR -->
        <div class="panel panel-info">
          <div class="panel-heading">Consultar</div>
          <div class="panel-body">
            <div class="form-group">
              <label for="nome_disciplina_consultar">Disciplinas</label>
              <select class="form-control" id="nome_disciplina_consultar">
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
            <table class="table table-condensed">
              <thead>
                <tr>
                  <th>Assuntos</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  require_once 'conexaobd.php';
                  try
                  {
                    $result = $conn->query("SELECT * FROM assunto WHERE nome_disciplina = '". $nome_disciplina ."'");
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
              <div class="form-group">
                <label for="nome_disciplina_editar">Disciplinas</label>
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
                <label for="nome_assunto_editar">Assuntos</label>
                <select class="form-control" id="nome_assunto_editar">
                  <?php
                    require_once 'conexaobd.php';
                    try
                    {
                      $result = $conn->query("SELECT * FROM assunto WHERE nome_disciplina = '". $nome_disciplina ."' ");
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
            <div class="form-group">
              <label for="nome_assunto_editar_nova">Novo Nome do Nivel</label>
              <input type="text" class="form-control" id="nome_assunto_editar_nova" placeholder="Ex:Segunda Guerra Mundial">
            </div>
          </div>
          <div class="panel-footer">
            <button type="button" class="btn btn-warning" onclick="editar();">Editar</button>
          </div>
        </div>

        <!-- DELETAR -->
        <div class="panel panel-danger">
          <div class="panel-heading">Deletar</div>
          <div class="panel-body">
            <div class="form-group">
              <label for="nome_disciplina_editar">Disciplinas</label>
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
              <label for="nome_assunto_deletar">Assuntos</label>
              <select class="form-control" id="nome_assunto_deletar">
                <?php
                  require_once 'conexaobd.php';
                  try
                  {
                    $result = $conn->query("SELECT * FROM assunto WHERE nome_disciplina = '". $nome_disciplina ."' ");
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
          <div class="panel-footer">
            <button type="button" class="btn btn-danger" onclick="deletar();">Deletar</button>
          </div>
        </div>

      </div>
    </div>

    <!-- JAVASCRIPT-->
<?php require_once "templates/footer/footer.php" ?>
