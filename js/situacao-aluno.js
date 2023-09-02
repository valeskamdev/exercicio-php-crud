const situacoes = document.querySelectorAll(".situacao");

for (const situacao of situacoes) {
  switch (situacao.textContent) {
    case  "Aprovado" :  situacao.classList.add('aprovado'); break;
    case  "Reprovado" :  situacao.classList.add('reprovado'); break;
    case  "Recuperação" :  situacao.classList.add('recuperacao'); break;
  }
}