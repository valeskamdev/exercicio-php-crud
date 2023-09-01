<?php

function mediaAluno(float $nota_1, float $nota_2) : string
{
    $media = ($nota_1 + $nota_2) / 2;
    return number_format($media, 2);
}


function situacaoAluno(float $media) : string
{
    if($media < 5) {
        $mensagem = "Reprovado";
    } elseif ($media >= 7) {
        $mensagem = "Aprovado";
    } else {
        $mensagem = "Recuperação";
    }

    return $mensagem;
}