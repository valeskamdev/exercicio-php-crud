const links = document.querySelectorAll(".excluir");

for (const link of links) {
  link.addEventListener("click", function(event) {
    event.preventDefault();
    if (confirm("Deseja realmente excluir este registro?")) {
      window.location.href = this.getAttribute("href");
    }
  });
}