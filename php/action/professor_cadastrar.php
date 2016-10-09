<?php
  require_once '../conexaobd.php';

  $cpf_professor = $_POST["cpf_professor"];
  $nome_professor = $_POST["nome_professor"];
  $idade_professor = $_POST["idade_professor"];

  echo $cpf_professor;

  sleep(4);
  if(($cpf_professor != "") && ($nome_professor != "") && ($idade_professor != ""))
  {
    try
    {
      echo $cpf_professor;

      $result = $conn->query("SELECT * FROM professor WHERE cpf_professor = ". $cpf_professor ."");
      if ($result->rowCount() > 0)
      {
        echo $cpf_professor;
        echo "<div class='alert alert-danger alert-dismissible' role='alert'><strong>Atenção!</strong> Esse cpf já consta no sistema.</div>";
        echo "<meta HTTP-EQUIV='refresh' CONTENT='5'>";
      }
      else
      {
        try
        {
          echo $cpf_professor;
          $conn->query("INSERT INTO professor VALUES (". $cpf_professor .",'". $nome_professor ."',". $idade_professor .")");

          echo "<div class='alert alert-success alert-dismissible' role='alert'><strong>Parabens!</strong> O cadastro foi realizado com sucesso.</div>";
          // echo "<meta HTTP-EQUIV='refresh' CONTENT='5'>";
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
