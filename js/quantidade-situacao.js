function contarSituacao(situacaoDesejada) {
  const situacoes = document.querySelectorAll('.situacao');
  let quantidade = 0;

  for (const situacao of situacoes) {
    if (situacao.textContent === situacaoDesejada) {
      quantidade += 1;
    }
  }
  return quantidade;
}

function atualizarQuantidades() {
  document.getElementById("aprovado").textContent = contarSituacao("Aprovado").toString();
  document.getElementById("recuperacao").textContent = contarSituacao("Recuperação").toString();
  document.getElementById("reprovado").textContent = contarSituacao("Reprovado").toString();
}

atualizarQuantidades();