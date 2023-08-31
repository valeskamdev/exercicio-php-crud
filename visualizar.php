<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lista de alunos - Exercício CRUD com PHP e MySQL</title>
<link href="css/style.css" rel="stylesheet">
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
          <th>Operações</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Bernado</td>
          <td>5.00</td>
          <td>5.70</td>
          <td>6.50</td>
          <td>recuperação</td>
          <td><a href="atualizar.php">Atualizar</a> <a href="excluir.php">Excluir</a></td>
        </tr>
      </tbody>
    </table>

   <!-- Aqui você deverá criar o HTML que quiser e o PHP necessários
para exibir a relação de alunos existentes no banco de dados.

Obs.: não se esqueça de criar também os links dinâmicos para
as páginas de atualização e exclusão. -->


    <p><a href="index.php">Voltar ao início</a></p>
</div>

</body>
</html>