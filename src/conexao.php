<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "crud_escola_valeska";

$conexao = new PDO(
  "mysql:host=$servidor;dbname=$banco;charset=utf8",
  $usuario,
  $senha
);

try {
    $conexao->setAttribute(
      PDO::ATTR_ERRMODE,
      PDO::ERRMODE_EXCEPTION
    );
} catch (Exception $e) {
    die("Deu ruimmm!: " . $e->getMessage());
}