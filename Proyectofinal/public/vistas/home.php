
<?php
/*
testeo de parámetros de sesión
esta será la lista con todos los Pokémon
cuando se clickee a uno en concreto y abra su página con url /ficha
debe tener el id del Pokémon como parámetro GET
ejemplo: /ficha?id_pokemon=25
*/
?>

<div class="pokemon-container" style="opacity: 0;" id="pokemonContainer">
    <?php foreach ($pokedex as $pokemon) :?>
        <div class="pokemon-item">
            <a href="/card?id_pokemon=<?= $pokemon['id'] ?>">
                <img id="<?= $pokemon['id'] ?>" 
                     src="<?= $pokemon['art'] ?>"
                     class="pokemon-image w-48 h-48 mx-auto"><!-- end of img tag -->
            </a>
            <div class="types-container">
                <?php foreach ($pokemon['tipos'] as $tipo) : ?>
                    <p class="type-text"> <?= $tipo ?> </p>
                <?php endforeach; ?>
            </div>
            <br>
        </div>
    <?php endforeach; ?>
</div>

<style>
    
    .pokemon-container {
        display: flex;
        flex-wrap: nowrap; /* Mantener nowrap para desplazamiento horizontal */
        overflow-x: auto; /* Desplazamiento horizontal */
        padding: 20px;
        gap: 10px; /* Espacio entre elementos */
        height: 80vh; /* Altura fija para permitir el desplazamiento */
        max-width: 100vw; /* Ancho máximo para evitar desbordamiento */
        align-items: center; /* Centra los items verticalmente en el contenedor */
    }

    .pokemon-item {
    flex: 0 0 auto;
    width: 230px; /* Ancho de cada elemento */
    height: 350px; /* Altura aumentada para todas las tarjetas */
    background-color: transparent; /* Fondo transparente */
    border: 1px solid #ccc;
    border-radius: 10px;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    overflow: hidden; /* Para manejar el desbordamiento del contenido */
    text-align: center;
    margin: 10px 0; /* Espacio superior e inferior para no tocar los bordes del contenedor */
}

    .pokemon-image {
        width: 100%; /* Ancho de la imagen ajustado al contenedor */
        height: auto; /* Altura automática para mantener la proporción */
    }

    .types-container {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    .type-text {
        text-align: center;
        border: 1px solid #000;
        padding: 10px;
        margin: 5px 0;
        border-radius: 5px;
        background-color: #f0f0f0;
    }

    @media (max-width: 768px) {
        .pokemon-container {
            flex-direction: column; /* Cambia la dirección del flex a vertical */
            overflow-x: hidden; /* Desactiva el desplazamiento horizontal */
            overflow-y: auto; /* Activa el desplazamiento vertical si es necesario */
            align-items: center; /* Asegura que los elementos estén centrados horizontalmente */
            height: auto; /* Ajusta la altura automáticamente según el contenido */
        }

        .pokemon-item {
            width: %; /* Hace las tarjetas más anchas en el espacio disponible */
            height: auto; /* Altura automática para adaptarse al contenido */
            margin: 10px; /* Añade margen alrededor de cada tarjeta para espacio */
        }

        .pokemon-image {
            margin-top: 10px; /* Espacio superior para la imagen */
            height: 200px; /* Altura fija para la imagen */
            object-fit: cover; /* Asegura que la imagen cubra el área designada sin perder proporción */
        }
    }
</style>

<script>
document.getElementById('pokemonContainer').addEventListener('wheel', function(event) {
    if (event.deltaY > 0) {
        this.scrollLeft += 100;
    } else {
        this.scrollLeft -= 100;
    }
    event.preventDefault();
});
</script>
