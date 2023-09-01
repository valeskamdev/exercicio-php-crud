<?php

require_once "conexao.php";

function inserirAluno(
  PDO $conexao,
  string $nome,
  float $nota_1,
  float $nota_2
): void {
    $query
      = "INSERT INTO alunos (nome, nota_1, nota_2) VALUES (:nome, :nota_1, :nota_2)";

    try {
        $consulta = $conexao->prepare($query);
        $consulta->bindValue(":nome", $nome, PDO::PARAM_STR);
        $consulta->bindValue(":nota_1", $nota_1, PDO::PARAM_STR);
        $consulta->bindValue(":nota_2", $nota_2, PDO::PARAM_STR);
        $consulta->execute();
    } catch (Exception $e) {
        die("Erro ao inserir: " . $e->getMessage());
    }
}

function visualizarAlunos(PDO $conexao): array
{
    $query = "SELECT * FROM alunos ORDER BY nome";

    try {
        $consulta = $conexao->prepare($query);
        $consulta->execute();
        $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
        die("Erro ao visulizar: " . $e->getMessage());
    }

    return $resultado;
}

function visualizarUmAluno(PDO $conexao, int $id): array
{
    $query = "SELECT * FROM alunos WHERE id = :id";

    try {
        $consulta = $conexao->prepare($query);
        $consulta->bindValue(":id", $id, PDO::PARAM_INT);
        $consulta->execute();
        $resultado = $consulta->fetch(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
        die("Erro ao visulizar: " . $e->getMessage());
    }

    return $resultado;
}

function atualizarAluno(
  PDO $conexao,
  int $id,
  string $nome,
  float $nota_1,
  float $nota_2
): void {
    $query
      = "UPDATE alunos SET nome = :nome, nota_1 = :nota_1, nota_2 = :nota_2 WHERE id = :id";

    try {
        $consulta = $conexao->prepare($query);
        $consulta->bindValue(":id", $id, PDO::PARAM_INT);
        $consulta->bindValue(":nome", $nome, PDO::PARAM_STR);
        $consulta->bindValue(":nota_1", $nota_1, PDO::PARAM_STR);
        $consulta->bindValue(":nota_2", $nota_2, PDO::PARAM_STR);
        $consulta->execute();
    } catch (Exception $e) {
        die("Erro ao atualizar: " . $e->getMessage());
    }
}

function excluirAluno(PDO $conexao, int $id) : void
{
    $query = "DELETE FROM alunos WHERE id = :id";

    try {
        $consulta = $conexao->prepare($query);
        $consulta->bindValue(":id", $id, PDO::PARAM_INT);
        $consulta->execute();
    } catch (Exception $e) {
        die("Erro ao deletar: " . $e->getMessage());
    }
}
