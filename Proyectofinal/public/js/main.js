<<<<<<< HEAD
const pokemonContainer = document.querySelector(".pokemon-container");
const spinner = document.querySelector("#spinner");

function fetchAllPokemons() {
  spinner.style.display = "block";
  const promises = [];
  for (let id = 1; id <= 1025; id++) {
    promises.push(fetchPokemon(id));
  }
  Promise.all(promises)
    .then(pokemons => {
      spinner.style.display = "none";
      const sortedPokemons = pokemons.sort((a, b) => a.id - b.id);
      sortedPokemons.forEach(createPokemon);
    })
    .catch(error => {
      console.error("Error fetching Pokémon:", error);
      spinner.style.display = "none";
    });
}

function fetchPokemon(id) {
  return fetch(`https://pokeapi.co/api/v2/pokemon/${id}/`)
    .then(res => {
      if (!res.ok) {
        throw new Error(`HTTP error! status: ${res.status}`);
      }
      return res.json();
    })
    .then(data => {
      return data; // Devuelve los datos del Pokémon sin procesar
    })
    .catch(error => {
      console.error(`Error fetching Pokémon with id ${id}:`, error);
      throw error; // Propaga el error para que Promise.all lo maneje
    });
}

function createPokemon(pokemon) {
  const flipCard = document.createElement("div");
  flipCard.classList.add("flip-card");

  const cardContainer = document.createElement("div");
  cardContainer.classList.add("card-container");

  flipCard.appendChild(cardContainer);

  const card = document.createElement("div");
  card.classList.add("pokemon-block");

  const spriteContainer = document.createElement("div");
  spriteContainer.classList.add("img-container");

  const sprite = document.createElement("img");
  sprite.src = `https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/other/official-artwork/${pokemon.id}.png`;

  spriteContainer.appendChild(sprite);

  const number = document.createElement("p");
  number.textContent = `#${pokemon.id.toString().padStart(3, 0)}`;

  const name = document.createElement("p");
  name.classList.add("name");
  name.textContent = pokemon.name;

  card.appendChild(spriteContainer);
  card.appendChild(number);
  card.appendChild(name);

  const cardBack = document.createElement("div");
  cardBack.classList.add("pokemon-block-back");

  cardBack.appendChild(progressBars(pokemon.stats));

  cardContainer.appendChild(card);
  cardContainer.appendChild(cardBack);
  pokemonContainer.appendChild(flipCard);
}

function progressBars(stats) {
  const statsContainer = document.createElement("div");
  statsContainer.classList.add("stats-container");

  for (let i = 0; i < 3; i++) {
    const stat = stats[i];

    const statPercent = stat.base_stat / 2 + "%";
    const statContainer = document.createElement("div");
    statContainer.classList.add("stat-container");

    const statName = document.createElement("p");
    statName.textContent = stat.stat.name;

    const progress = document.createElement("div");
    progress.classList.add("progress");

    const progressBar = document.createElement("div");
    progressBar.classList.add("progress-bar");
    progressBar.setAttribute("aria-valuenow", stat.base_stat);
    progressBar.setAttribute("aria-valuemin", 0);
    progressBar.setAttribute("aria-valuemax", 200);
    progressBar.style.width = statPercent;

    progressBar.textContent = stat.base_stat;

    progress.appendChild(progressBar);
    statContainer.appendChild(statName);
    statContainer.appendChild(progress);

    statsContainer.appendChild(statContainer);
  }

  return statsContainer;
}

function removeChildNodes(parent) {
  while (parent.firstChild) {
    parent.removeChild(parent.firstChild);
  }
}

fetchAllPokemons();
=======
//JS PARA EL FONDO POKEBALLS - NO BORRAR  
window.onload = function() {
  resizeBody();
};

window.onresize = function() {
  resizeBody();
};

function resizeBody() {
  var windowHeight = window.innerHeight;
  document.body.style.height = windowHeight + "px";
}







//JS QUE ESTABA EN LA PAG DE LISTA DE POKEMON QUE HIZO ALEJANDRO
document.addEventListener("DOMContentLoaded", function () {
  const searchButton = document.getElementById("searchBtn");
  searchButton.addEventListener("click", filterPokemons);
});

function filterPokemons() {
  const searchString = document.querySelector("nav ul li input[type='text']").value.toLowerCase();
  const pokemonCards = document.querySelectorAll(".pokemon-block");
  
  const originalOrder = [];
  pokemonCards.forEach(card => {
      originalOrder.push(card.parentElement);
  });
  
  pokemonCards.forEach(card => {
      const pokemonName = card.querySelector(".name").textContent.toLowerCase();
      if (pokemonName.includes(searchString)) {
          card.parentElement.style.display = "block";
      } else {
          card.parentElement.style.display = "none";
      }
  });

  const pokemonContainer = document.querySelector(".pokemon-container");
  pokemonContainer.innerHTML = "";
  originalOrder.forEach(card => {
      pokemonContainer.appendChild(card);
  });
}

//PARA PAG MIS EQUIPOS, SIN TESTEAR SI VA
function mostrarBoton(img) {
    img.style.cursor = "pointer";
    img.src = "menos.png";
  }

  function ocultarBoton(img) {
    img.src = "pokemonX.png"; // Cambiar a la imagen original del Pokémon
  }

  function borrarPokemon(id) {
    // Llamar a la función de tu controlador para borrar el Pokémon con el ID especificado
    // Por ejemplo, podrías hacer una petición AJAX a tu controlador PHP
    console.log("Borrar Pokémon con ID:", id);
  }

  function editarNombre(id) {
    // Llamar a la función de tu controlador para editar el nombre del equipo con el ID especificado
    // Por ejemplo, podrías mostrar un cuadro de diálogo para que el usuario introduzca el nuevo nombre
    console.log("Editar nombre del equipo con ID:", id);
  }
>>>>>>> 598fd3c992e9be34b654ccc0ce5d5bff889a93fb
