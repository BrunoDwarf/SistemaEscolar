<?php
  require_once '../conexaobd.php';

  $cpf_professor = $_POST["cpf_professor"];

  sleep(4);
  if($cpf_professor != "")
  {
    try
    {
      $result = $conn->query("SELECT * FROM professor WHERE cpf_professor = '".$cpf_professor."' ");
      if ($result->rowCount() > 0)
      {
        foreach ($result as $row)
        {
          $nome_professor = $row[1];
          $idade_professor = $row[2];
        }
          echo "<div class='panel-heading'>Editar</div>";
          echo "<div class='panel-body'>";
            echo "<div class='form-group'>";
              echo "<label for='cpf_professor_editar'>CPF</label>";
              echo "<input type='text' class='form-control' id='cpf_professor_editar' value='".$cpf_professor."' readonly>";
            echo "</div>";
            echo "<div class='form-group'>";
              echo "<label for='nome_professor_editar'>Nome</label>";
              echo "<input type='text' class='form-control' id='nome_professor_editar' value='".$nome_professor."'>";
            echo "</div>";
            echo "<div class='form-group'>";
              echo "<label for='idade_professor_editar'>Idade</label>";
              echo "<input type='number' class='form-control' id='idade_professor_editar' value='".$idade_professor."'>";
            echo "</div>";
          echo "</div>";
          echo "<div class='panel-footer' id='status-editar'>";
            echo "<button type='button' class='btn btn-warning' onclick='editar2();'>Editar</button>";
          echo "</div>";
        echo "</div>";
      }
      else
      {
        echo "<div class='alert alert-danger alert-dismissible' role='alert'><strong>Atenção!</strong> Esse cpf não consta no sistema.</div>";
        echo "<meta HTTP-EQUIV='refresh' CONTENT='5'>";
      }
    }
    catch(PDOException $e)
    {
      echo "Error: " . $e . "<br>" . $conn->error;
    }
  }
  else
  {
    echo "<div class='alert alert-warning alert-dismissible' role='alert'><strong>Atenção!</strong> Preencha todos os campos.</div>";
    echo "<meta HTTP-EQUIV='refresh' CONTENT='5'>";
  }
?>
