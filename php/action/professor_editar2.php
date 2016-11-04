<?php
  require_once '../conexaobd.php';

  $cpf_professor = $_POST["cpf_professor"];
  $nome_professor = $_POST["nome_professor"];
  $idade_professor = $_POST["idade_professor"];

  sleep(4);
  if(($cpf_professor != "") && ($nome_professor != "") && ($idade_professor != ""))
  {
    try
    {
      $result = $conn->query("UPDATE professor SET nome_professor = '".$nome_professor."', idade_professor = '".$idade_professor."' WHERE cpf_professor = '".$cpf_professor."' ");
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
