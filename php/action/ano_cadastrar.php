<?php
  require_once '../conexaobd.php';

  $nome_ano = $_POST["nome_ano"];

  sleep(4);
  if($nome_ano != "")
  {
    try
    {
      $result = $conn->query("SELECT * FROM ano_escolar WHERE nome_ano_escolar = '". $nome_ano ."'");
      if ($result->rowCount() > 0)
      {
        echo "<div class='alert alert-danger alert-dismissible' role='alert'><strong>Atenção!</strong> Esse ano escolar já consta no sistema.</div>";
        echo "<meta HTTP-EQUIV='refresh' CONTENT='5'>";
      }
      else
      {
        try
        {
          $conn->query("INSERT INTO ano_escolar VALUES ('". $nome_ano ."')");

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
