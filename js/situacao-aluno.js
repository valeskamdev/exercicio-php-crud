const situacoes = document.querySelectorAll(".situacao");

for (const situacao of situacoes) {
  switch (situacao.textContent) {
    case  "Aprovado" :  situacao.classList.add('badge-success'); break;
    case  "Reprovado" :  situacao.classList.add('badge-danger'); break;
    case  "Recuperação" :  situacao.classList.add('badge-warning'); break;
  }
}