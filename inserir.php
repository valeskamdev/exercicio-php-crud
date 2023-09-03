<?php
require_once  "src/funcoes.php";

if (isset($_POST["inserir"])) {
  $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $nota_1 = filter_input(INPUT_POST, "nota_1", FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
  $nota_2 = filter_input(INPUT_POST, "nota_2", FILTER_SANITIZE_FULL_SPECIAL_CHARS);

  inserirAluno($conexao, $nome, $nota_1, $nota_2);
  header("location:visualizar.php");
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css" rel="stylesheet"/>
<title>Cadastrar um novo aluno - Exercício CRUD com PHP e MySQL</title>
</head>
<body>
<div class="container">
	<h1>Cadastrar um novo aluno </h1>
    <hr>
    		
    <p>Utilize o formulário abaixo para cadastrar um novo aluno.</p>

	<form action="#" method="post">

	    <p class="form-outline mb-4 border">
	      <input class="form-control" type="text" id="nome" name="nome" required>
        <label class="form-label" for="nome">Nome:</label>
      </p>
        
      <p class="form-outline mb-4 border">
	      <input class="form-control"  type="number" id="primeira" name="nota_1" step="0.01" min="0.00" max="10.00" required>
        <label  class="form-label" for="primeira">Primeira nota:</label>
      </p>
	    
	    <p class="form-outline mb-4 border">
	      <input class="form-control"  type="number" id="segunda" name="nota_2" step="0.01" min="0.00" max="10.00" required>
        <label class="form-label" for="segunda">Segunda nota:</label>
      </p>

      <button class="btn btn-primary type="submit" name="inserir">Cadastrar aluno</button>
	</form>

    <hr>
    <p><a href="index.php">Voltar ao início</a></p>
</div>

</body>
</html>