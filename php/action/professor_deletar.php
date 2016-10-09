<?php
  require_once '../conexaobd.php';

  $cpf_professor = $_POST["cpf_professor"];

  sleep(4);
  if($cpf_professor != "")
  {
    try
    {
      $conn->query("DELETE FROM professor WHERE cpf_professor = '". $cpf_professor ."' ");
      $conn->query("DELETE FROM professor_disciplina WHERE cpf_professor = '". $cpf_professor ."' ");

      echo "<div class='alert alert-success alert-dismissible' role='alert'><strong>Parabens!</strong> Professor deletado com sucesso.</div>";
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
