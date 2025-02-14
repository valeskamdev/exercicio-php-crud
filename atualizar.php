<?php
require_once "src/funcoes.php";
require_once "src/utilities/funcoes-utilitarias.php";

$id = filter_input( INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
$aluno = visualizarUmAluno($conexao, $id);

if (isset($_POST["atualizar-dados"])) {
  $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
  $nota_1 = filter_input(
    INPUT_POST,
    "nota_1", FILTER_SANITIZE_NUMBER_FLOAT,
    FILTER_FLAG_ALLOW_FRACTION
  );
  $nota_2 = filter_input(
    INPUT_POST, "nota_2",
    FILTER_SANITIZE_SPECIAL_CHARS,
    FILTER_FLAG_ALLOW_FRACTION
  );

  atualizarAluno($conexao, $id, $nome, $nota_1, $nota_2);
  header("location:visualizar.php");
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Atualizar dados - Exercício CRUD com PHP e MySQL</title>
<link href="css/style.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h1>Atualizar dados do aluno </h1>
    <hr>

    <p>Utilize o formulário abaixo para atualizar os dados do aluno.</p>

    <form action="#" method="post">

	    <p><label for="nome">Nome:</label>
	    <input type="text" name="nome" id="nome" value="<?=$aluno["nome"]?>" required></p>

        <p><label for="primeiraNota">Primeira nota:</label>
	    <input type="number" id="primeiraNota" name="nota_1" value="<?=$aluno["nota_1"]?>" step="0.01" min="0.00" max="10.00" required></p>

	    <p><label for="segundaNota">Segunda nota:</label>
	    <input type="number" id="segundaNota" name="nota_2" value="<?=$aluno["nota_2"]?>" step="0.01" min="0.00" max="10.00" required></p>

        <p>
            <label for="media">Média:</label>
            <input name="media" type="number" id="media" value="<?=mediaAluno($aluno["nota_1"], $aluno["nota_2"])?>"  step="0.01" min="0.00" max="10.00" readonly disabled>
        </p>
        <span id="mensagemErro"></span>

        <p>
            <label for="situacao">Situação:</label>
	        <input type="text" name="situacao" id="situacao" value="<?=situacaoAluno(mediaAluno($aluno["nota_1"], $aluno["nota_2"]))?>" readonly disabled>
        </p>

        <button type="submit" name="atualizar-dados">Atualizar dados do aluno</button>
	</form>

    <hr>
    <p><a href="visualizar.php">Voltar à lista de alunos</a></p>

</div>

<script src="js/atualizacao-tempo-real.js"></script>

</body>
</html>