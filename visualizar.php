<?php

require_once "src/funcoes.php";
require_once "src/utilities/funcoes-utilitarias.php";

$alunos = visualizarAlunos($conexao);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/style.css" rel="stylesheet">
<title>Lista de alunos - Exercício CRUD com PHP e MySQL</title>
  <style>
    .aprovado {
      color: #6bb733;
      background-color: #ceffac;
    }

    .recuperacao {
       color: #b77e33;
       background-color: #ffd1ac;
     }

    .reprovado {
        color: #b73333;
        background-color: #ffacac;
      }
  </style>
</head>
<body>
<div class="container">
    <h1>Lista de alunos</h1>
    <hr>
    <p><a href="inserir.php">Inserir novo aluno</a></p>

    <table border="1">
      <thead>
        <tr>
          <th>Nome</th>
          <th>Primeira nota</th>
          <th>Segunda nota</th>
          <th>Média</th>
          <th>Situação</th>
          <th colspan="2">Operações</th>
        </tr>
      </thead>
      <tbody>
      <?php
      foreach ($alunos as $aluno) {
        $nota1 = formatacaoDeNotas($aluno["nota_1"]);
        $nota2 = formatacaoDeNotas($aluno["nota_2"]);
        ?>
        <tr>
          <td><?=$aluno["nome"]?></td>
          <td><?=$nota1?></td>
          <td><?=$nota2?></td>
          <td><?=mediaAluno($nota1, $nota2)?></td>
          <td class="situacao"><?=situacaoAluno(mediaAluno($nota1, $nota2))?></td>
          <td><a href="atualizar.php?id=<?=$aluno["id"]?>">Atualizar</a></td>
          <td><a class="excluir" href="excluir.php?id=<?=$aluno["id"]?>">Excluir</a></td>
        </tr>
      <?php } ?>
      </tbody>
    </table>

    <p><a href="index.php">Voltar ao início</a></p>
</div>

<script src="js/confirma-exclusao.js"></script>
<script src="js/situacao-aluno.js"></script>

</body>
</html>