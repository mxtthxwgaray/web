¿<?php
include 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $conn->query("DELETE FROM carrito WHERE id=$id");
}

header('Location: tienda.php');