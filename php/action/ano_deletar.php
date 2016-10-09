<?php
  require_once '../conexaobd.php';

  $nome_ano = $_POST["nome_ano"];

  sleep(4);
  if($nome_ano != "")
  {
    try
    {
      $conn->query("DELETE FROM ano_escolar WHERE nome_ano_escolar_questao = '". $nome_ano ."' ");
      $conn->query("DELETE FROM questao WHERE nome_ano_escolar = '". $nome_ano ."' ");

      echo "<div class='alert alert-success alert-dismissible' role='alert'><strong>Parabens!</strong> Ano escolar deletado com sucesso.</div>";
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
