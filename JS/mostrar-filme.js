const fecharFormulario = document.getElementById('fecharFormulario');

const exibirElementos = () => {
const elementsToShow = document.querySelectorAll("body > *:not(#container-buscar--filme, header)");
for (let i = 0; i < elementsToShow.length; i++) {
    elementsToShow[i].classList.remove('oculto');
}
container.style.display = "none";
};

fecharFormulario.addEventListener('click', exibirElementos);