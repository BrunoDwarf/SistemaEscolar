<?php
  require_once '../conexaobd.php';

  $nome_dificuldade = $_POST["nome_dificuldade"];

  sleep(4);
  if($nome_dificuldade != "")
  {
    try
    {
      $result = $conn->query("SELECT * FROM dificuldade WHERE nome_dificuldade_questao = '". $nome_dificuldade ."'");
      if ($result->rowCount() > 0)
      {
        echo "<div class='alert alert-danger alert-dismissible' role='alert'><strong>Atenção!</strong> Esse nivel já consta no sistema.</div>";
        echo "<meta HTTP-EQUIV='refresh' CONTENT='5'>";
      }
      else
      {
        try
        {
          $conn->query("INSERT INTO dificuldade VALUES ('". $nome_dificuldade ."')");

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
    echo "<meta HTTP-EQUIV='refresh' CONTENT='5'>";
  }
?>
