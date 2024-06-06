<?php
/*
testeo de parámetros de sesión
esta será la lista con todos los Pokémon
cuando se clickee a uno en concreto y abra su página con url /ficha
debe tener el id del Pokémon como parámetro GET
ejemplo: /ficha?id_pokemon=25
*/
?>

<div class="pokemon-container">
    <?php foreach ($pokedex as $pokemon) { ?>
        <div class="pokemon-item">
            <a href="/card?id_pokemon=<?= $pokemon['id'] ?>">
                <img id="<?= $pokemon['id'] ?>" 
                     src="<?= $pokemon['art'] ?>"
                     class="w-48 h-48 mx-auto"><!-- end of img tag -->
            </a>
            <div class="types-container">
                <?php foreach ($pokemon['tipos'] as $tipo) { ?>
                    <p class="type-text"> <?= $tipo ?> </p>
                <?php } ?>
            </div>
            <br>
        </div>
    <?php } ?>
</div>

<style>
    .pokemon-container {
        display: flex;
        flex-wrap: nowrap;
        overflow-x: auto;
        padding: 20px;
        gap: 10px; /* Espacio entre elementos */
    }

    .pokemon-item {
        flex: 0 0 auto;
        width: 200px; /* Ancho de cada elemento */
        height: auto;
        background: #fff;
        border: 1px solid #ccc;
        border-radius: 10px;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        overflow: hidden;
        text-align: center;
    }

    .types-container {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    .type-text {
        text-align: center;
        border: 1px solid #000; /* Borde del recuadro */
        padding: 10px; /* Espacio interno del recuadro */
        margin: 5px 0; /* Espacio entre recuadros */
        border-radius: 5px; /* Bordes redondeados */
        background-color: #f0f0f0; /* Color de fondo del recuadro */
    }
</style>



