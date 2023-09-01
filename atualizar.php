<?php
require_once "src/funcoes.php";
require_once "src/utilities/funcoes-utilitarias.php";

$id = filter_input( INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
$aluno = visualizarUmAluno($conexao, $id);

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
        
        <p><label for="primeira">Primeira nota:</label>
	    <input name="primeira" type="number" id="primeira" value="<?=$aluno["nota_1"]?>" step="0.01" min="0.00" max="10.00" required></p>
	    
	    <p><label for="segunda">Segunda nota:</label>
	    <input name="segunda" type="number" id="segunda" value="<?=$aluno["nota_2"]?>" step="0.01" min="0.00" max="10.00" required></p>

        <p>
            <label for="media">Média:</label>
            <input name="media" type="number" id="media" value="<?=mediaAluno($aluno["nota_1"], $aluno["nota_2"])?>"  step="0.01" min="0.00" max="10.00" readonly disabled>
        </p>

        <p>
            <label for="situacao">Situação:</label>
	        <input type="text" name="situacao" id="situacao" value="<?=situacaoAluno(mediaAluno($aluno["nota_1"], $aluno["nota_2"]))?>" readonly disabled>
        </p>
	    
        <button name="atualizar-dados">Atualizar dados do aluno</button>
	</form>    
    
    <hr>
    <p><a href="visualizar.php">Voltar à lista de alunos</a></p>

</div>


</body>
</html>