<?php
include 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $result = $conn->query("SELECT * FROM productos WHERE id=$id");
    $producto = $result->fetch_assoc();

    $nombre = $producto['nombre'];
    $precio = $producto['precio'];

    // Comprobar si el producto ya está en el carrito
    $check_cart = $conn->query("SELECT * FROM carrito WHERE producto_id=$id");
    if ($check_cart->num_rows > 0) {
        // Si el producto ya está en el carrito, aumentar la cantidad
        $conn->query("UPDATE carrito SET cantidad = cantidad + 1 WHERE producto_id=$id");
    } else {
        // Si el producto no está en el carrito, agregarlo
        $conn->query("INSERT INTO carrito (producto_id, nombre, precio) VALUES ($id, '$nombre', $precio)");
    }
}

header('Location: tienda.php');