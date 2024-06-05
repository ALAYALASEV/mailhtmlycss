<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokedex</title>
    <link rel="stylesheet" href="../public/css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;700&display=swap" rel="stylesheet">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Establece la altura del body para que ocupe toda la pantalla */
            margin: 0; /* Elimina los márgenes por defecto */
            background-color: #f0f0f0; /* Color de fondo opcional */
        }
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
            background: white;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            width: 300px;
        }
        input, button {
            margin: 5px;
            width: 250px; /* Ajusta el ancho según sea necesario */
        }  
    </style>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a id="inicio" href="#">Inicio</a><img height=1px width=40px src="../img/spacer.gif" alt=""><a href="#">Mis Equipos</a></li>
                <li>
                    <input class="redondearbordes" type="text" placeholder="Buscar">
                    <button class="redondearbordes" id="searchBtn"><img width=15px height=15px src="../img/filtro.gif"></button>
                </li>
                <li><a href="#">Login</a></li>
            </ul>
        </nav>
    </header>
    <form> 
        <input type="text" placeholder="Email or Username" required>
        <input type="password" placeholder="Password" required>
        <button class="login" type="submit">Login</button>
    </form>
</body>
</html>
