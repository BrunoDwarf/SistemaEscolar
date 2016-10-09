<?php
  require_once '../conexaobd.php';

  $nome_dificuldade = $_POST["nome_dificuldade"];

  sleep(4);
  if($nome_dificuldade != "")
  {
    try
    {
      $conn->query("DELETE FROM dificuldade WHERE nome_dificuldade_questao = '". $nome_dificuldade ."' ");
      $conn->query("DELETE FROM questao WHERE nome_dificuldade_questao = '". $nome_dificuldade ."' ");

      echo "<div class='alert alert-success alert-dismissible' role='alert'><strong>Parabens!</strong> Nivel deletada com sucesso.</div>";
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
    echo "<meta HTTP-EQUIV='refresh' CONTENT='5'>";
  }
?>
