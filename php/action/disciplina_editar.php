<?php
  require_once '../conexaobd.php';

  $nome_disciplina = $_POST["nome_disciplina"];
  $nome_disciplina_nova = $_POST["nome_disciplina_nova"];

  sleep(4);
  if(($nome_disciplina != "") && ($nome_disciplina_nova != ""))
  {
    try
    {
      $result = $conn->query("UPDATE disciplina SET nome_disciplina = '".$nome_disciplina_nova."' WHERE nome_disciplina = '".$nome_disciplina."' ");
      if ($result == TRUE)
      {
        echo "<div class='alert alert-success alert-dismissible' role='alert'><strong>Parabens!</strong> A atualização foi realizado com sucesso.</div>";
        echo "<meta HTTP-EQUIV='refresh' CONTENT='5'>";
      }
      else
      {
        echo "<div class='alert alert-danger alert-dismissible' role='alert'><strong>Atenção!</strong> A atualização apresentou erro para ser efetuada.</div>";
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
