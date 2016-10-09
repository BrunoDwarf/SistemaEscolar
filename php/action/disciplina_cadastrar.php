<?php
  require_once '../conexaobd.php';

  $nome_disciplina = $_POST["nome_disciplina"];

  sleep(4);
  if($nome_disciplina != "")
  {
    try
    {
      $result = $conn->query("SELECT * FROM disciplina WHERE nome_disciplina = '" . $nome_disciplina ."' ");
      if ($result->rowCount() > 0)
      {
        echo "<div class='alert alert-danger alert-dismissible' role='alert'><strong>Atenção!</strong> Essa disciplina já consta no sistema.</div>";
      }
      else
      {
        try
        {
          $conn->query("INSERT INTO disciplina VALUES ('".$nome_disciplina."')");

          echo "<div class='alert alert-success alert-dismissible' role='alert'><strong>Parabens!</strong> O cadastro foi realizado com sucesso.</div>";
          echo "<meta HTTP-EQUIV='refresh' CONTENT='5'>";
        }
        catch(PDOException $e)
        {
          echo "Error: " . $e . "<br>" . $conn->error;
        }
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
  }
?>
