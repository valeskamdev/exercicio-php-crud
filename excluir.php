<?php

require_once "src/funcoes.php";

$id = filter_input( INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);
excluirAluno($conexao, $id);

header("location:visualizar.php");