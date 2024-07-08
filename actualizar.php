<?php
include 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    foreach ($_POST['cantidad'] as $id => $cantidad) {
        $conn->query("UPDATE carrito SET cantidad=$cantidad WHERE id=$id");
    }
}

header('Location: tienda.php');
?>