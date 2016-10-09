<?php
  require_once '../conexaobd.php';

  $nome_disciplina = $_POST["nome_disciplina"];

  sleep(4);
  if($nome_disciplina != "")
  {
    try
    {
      $conn->query("DELETE FROM disciplina WHERE nome_disciplina = '". $nome_disciplina ."' ");
      $conn->query("DELETE FROM professor_disciplina WHERE nome_disciplina = '". $nome_disciplina ."' ");

      echo "<div class='alert alert-success alert-dismissible' role='alert'><strong>Parabens!</strong> Disciplina deletada com sucesso.</div>";
      echo "<meta HTTP-EQUIV='refresh' CONTENT='5'>";
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
