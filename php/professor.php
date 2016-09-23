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
              <label for="nome_disciplina_cadastrar">Nome</label>
              <input type="text" class="form-control" id="nome_professor_cadastrar" placeholder="Ex:Bruno R Souza">
            </div>
            <div class="form-group">
              <label for="nome_disciplina_cadastrar">Idade</label>
              <input type="number" class="form-control" id="idade_professor_cadastrar" placeholder="Ex:21">
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
          </div>
        </div>

        <!-- EDITAR -->
        <div class="panel panel-warning">
          <div class="panel-heading">Editar</div>
          <div class="panel-body">
            <div class="form-group">
              <label for="cpf_professor_editar">CPF</label>
              <input type="text" class="form-control" id="cpf_professor_editar" placeholder="Ex:17572778704">
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
              <label for="cpf_professor_deletar">CPF</label>
              <input type="text" class="form-control" id="cpf_professor_deletar" placeholder="Ex:17572778704">
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
