<?php
// Inicialización de la sesión (necesario para mantener el estado del carrito)
session_start();

// Array de productos simulados (puedes reemplazarlo con una base de datos en un entorno real)
$productos = array(
    array("id" => 1, "nombre" => "Entradas", "precio" => 10),
    array("id" => 2, "nombre" => "Promociones", "precio" => 12),
    array("id" => 3, "nombre" => "Pizzas", "precio" => 15),
    array("id" => 4, "nombre" => "Banquetes", "precio" => 13),
    array("id" => 1, "nombre" => "Combos Personales", "precio" => 10),
    array("id" => 2, "nombre" => "Postres y Bebidas", "precio" => 12),
    array("id" => 3, "nombre" => "Pizza Hawaiana", "precio" => 15),
    array("id" => 4, "nombre" => "Pizza Vegetariana", "precio" => 13),
);

// Función para añadir un producto al carrito
function agregarAlCarrito($id) {
    global $productos;
    foreach ($productos as $producto) {
        if ($producto['id'] == $id) {
            $_SESSION['carrito'][] = $producto;
            break;
        }
    }
}

// Acción para agregar un producto al carrito
if (isset($_GET['accion']) && $_GET['accion'] == 'agregar' && isset($_GET['id'])) {
    agregarAlCarrito($_GET['id']);
    header("Location: carrito.php"); // Redirigir al carrito después de agregar un producto
    exit;
}

// Página del carrito
if (isset($_GET['accion']) && $_GET['accion'] == 'ver_carrito') {
    echo "<h1>Carrito de Compras</h1>";
    if (isset($_SESSION['carrito']) && count($_SESSION['carrito']) > 0) {
        echo "<ul>";
        foreach ($_SESSION['carrito'] as $item) {
            echo "<li>{$item['nombre']} - {$item['precio']} USD</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>El carrito está vacío.</p>";
    }
    echo "<p><a href='?'>Seguir comprando</a></p>";
}
?>