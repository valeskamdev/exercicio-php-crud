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
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css" rel="stylesheet"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="css/style.css">
</head>
<title>Lista de alunos - Exercício CRUD com PHP e MySQL</title>
<body>
<div class="container">
    <h1>Lista de alunos</h1>
    <hr>
    <p><a  class="btn btn-secondary" href="inserir.php">Inserir novo aluno</a></p>

      <div class="table-responsive">
        <table class="table table-striped table-hover table-bordered">
          <thead class="bg-primary">
          <tr class="text-light">
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Nota 1</th>
            <th scope="col">Nota 2</th>
            <th scope="col">Média</th>
            <th scope="col">Situação</th>
            <th scope="col">Operações</th>
          </tr>
          </thead>
          <tbody>
          <?php
          $i = 1;

          foreach ($alunos as $aluno) {
          $nota1 = formatacaoDeNotas($aluno["nota_1"]);
          $nota2 = formatacaoDeNotas($aluno["nota_2"]);
          ?>
          <tr>
            <td scope="row" class="column1"><?=$i?></td>
            <td><?=$aluno["nome"]?></td>
            <td><?=$nota1?></td>
            <td><?=$nota2?></td>
            <td><?=mediaAluno($nota1, $nota2)?></td>
            <td><span class="situacao badge rounded-pill"><?=situacaoAluno(mediaAluno($nota1, $nota2))?></span></td>
            <td class="column7 operacoes"><a href="atualizar.php?id=<?=$aluno["id"]?>"><i class="fa-solid fa-pen-to-square"></i></a><a class="excluir" href="excluir.php?id=<?=$aluno["id"]?>"><i class="fa-solid fa-trash"></i></a></td>
          </tr>
          <?php
          $i++;
          }
          ?>
          </tbody>
          <tfoot class="bg-primary">
          <tr class="text-light">
            <td>Aprovado: <span id="aprovado"></span></td>
            <td>Recuperação: <span id="recuperacao"></span></td>
            <td>Reprovado: <span id="reprovado"></span></td>
            <td colspan="5">Total: <?=count($alunos)?></td>
          </tr>
          </tfoot>
        </table>
      </div>
    <p class="mt-4"><a href="index.php">Voltar ao início</a></p>
</div>
</div>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js"></script>
<script src="js/confirma-exclusao.js"></script>
<script src="js/situacao-aluno.js"></script>
<script src="js/quantidade-situacao.js"></script>

</body>
</html>