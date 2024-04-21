<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza Hut</title>
    <link rel="stylesheet" href="styles.css">
<?php include 'tienda.php'; ?>    
</head>
<body>
    <header>
        <div class="logo">
            <img src="img/logotipo.png" alt="Pizza Hut Logo">
        </div>
        <nav>
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Carrito de Compras</a></li>
                <li><a href="sesion.php">Iniciar Sesión</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="container">
            <div class="product-card">
                <img src="img/pizzas.jpg" alt="Pizza Pepperoni">
                <h3>Pizzas.</h3>
                <p>Deliciosa pizzas, elige entre las opciones de peperoni, jamon, vegetariana, etc.</p>
                <a href="menupizzas.php">Ver más</a>
            </div>
            <div class="product-card">
                <img src="img/combos.jpg" alt="Pizza Hawaiana">
                <h3>Combos Personales.</h3>
                <p>Exquisitos combos personales de pizzas.</p>
                <a href="producto2.php">Ver más</a>
            </div>
            <div class="product-card">
                <img src="img/cajas.jpg" alt="Pizza Vegetariana">
                <h3>Cajas.</h3>
                <p>Deliciosa cajas de pizzas para compartir en familia y amigos.</p>
                <a href="producto3.php">Ver más</a>
            </div>
            <div class="product-card">
                <img src="img/promociones.jpg" alt="Pizza Pepperoni">
                <h3>Promociones</h3>
                <p>Elige entre todas las opciiones que tenemos para compartir.</p>
                <a href="pizzas.php">Ver más</a>
            </div>
            <div class="product-card">
                <img src="img/entradas.jpg" alt="Pizza Hawaiana">
                <h3>Entradas.</h3>
                <p>Disfruta de nuestras esquisitas entras, entre ellas podras encontrar: palitroques, nuditos, pan con ajos, etc.</p>
                <a href="producto2.php">Ver más</a>
            </div>
            <div class="product-card">
                <img src="img/postres.jpg" alt="Pizza Vegetariana">
                <h3>Bebidas y postres.</h3>
                <p>Disfruta de nuestra variedad de bebidas y postres para compartir con tu familia y amigos.</p>
                <a href="producto3.php">Ver más</a>
            </div>
        </div>
    </main>


    <footer>
        <!-- Pie de página -->
    </footer>
</body>
</html>
