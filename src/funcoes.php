<?php

require_once "conexao.php";

function inserirAluno(PDO $conexao, string $nome, float $nota_1, float $nota_2) : void
{
    $query = "INSERT INTO alunos (nome, nota_1, nota_2) VALUES (:nome, :nota_1, :nota_2)";

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

function visualizarAlunos(PDO $conexao) : array
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

