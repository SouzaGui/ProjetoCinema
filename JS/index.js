let movieNameRef = document.getElementById("movie-name");
let pesquisarBtn = document.getElementById("pesquisar-btn");
let container = document.getElementById("container-buscar--filme");
let resultado = document.getElementById("resultado");

let getMovie = () =>{
    let movieName = movieNameRef.value;
    let url =`https://www.omdbapi.com/?t=${movieName}&apikey=${key}`;

    if(movieName.length <= 0){
        resultado.innerHTML = `<h3 class="msg">Por favor insira o nome de um filme </h3>`;
    }
    else {
        fetch(url).then((resp) => resp.json()).then((data) =>{
            if(data.Response == "True"){
                resultado.innerHTML = `
                <div class="info">
                    <img src=${data.Poster} class="poster">
                    <div>
                        <h2 class="titulo-filme">${data.Title}</h2>
                        <div class="rating">
                            <img src="../images/estrela.png">
                            <h4>${data.imdbRating}</h4>
                    </div>
                    <div class="details">
                        <span>${data.Rated}</span>
                        <span>${data.Year}</span>
                        <span>${data.Runtime}</span>
                    </div>
                    <div class="genre">
                        <div>${data.Genre.split(",").join("</div><div>")}</div>
                    </div>
                </div>
            </div>
             <h3>Plot:</h3>
            <p>${data.Plot}</p>
            <h3>Cast:</h3>
            <p>${data.Actors}</p>

                `;
            }

            else{
                resultado.innerHTML = `
                    <h3 class="msg">${data.Error}</h3>
                `;
                
            }
        })

        .catch(() =>{
            resultado.innerHTML= `<h3 class="msg">Ocorreu um erro</h3>`;
        });
    }

};

pesquisarBtn.addEventListener("click", () => {
    let elementsToHide = document.querySelectorAll("body > *:not(#container-buscar--filme, header)");
    for (let i = 0; i < elementsToHide.length; i++) {
      elementsToHide[i].classList.add('oculto');
    }
    container.style.display = "block";
    getMovie();
  });
window.addEventListener("load", getMovie);


