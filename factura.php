<?php
include 'conexion.php';

$result = $conn->query("SELECT * FROM carrito");
$items = [];
$total = 0;

while ($row = $result->fetch_assoc()) {
    $subtotal = $row['precio'] * $row['cantidad'];
    $total += $subtotal;
    $items[] = $row;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factura</title>
    <link rel="stylesheet" href="styles.css">
<style>
    body{
        font-family: courier, arial, helvética;
  margin: 0 auto;
  background: #ffffff;

    }
    p{
        margin-top: 5px;
    }

</style>

</head>
<body>

<header>
    <nav>
      <a href="index.html"><img src="logo.png" alt="logo" class="imagen" width="100px" height="59px"></a>
      <a href="Sala1.html">Piso 1|Gallery 1</a>
      <a href="Sala2.html">Piso 2|Gallery 2</a>
      <a href="Sala3.html">Piso 3|Gallery 3</a>
      <a href="Sala4.html">Piso 4|Gallery 4</a>
      <a href="Sala5.html">Piso 5|Gallery 5</a>
      <a href="Desarolladores.html">Desarolladores</a>
    </nav>
  </header>
	  
	  <div class="parallax"></div>
  <p>

  </p>

 

<h3>Museo Soumaya: Fundacion Carlos Slim</h3>
<p>Blvd. Miguel de Cervantes Saavedra, Granada, Miguel Hidalgo, 11529 Ciudad de México, CDMX</p>
<p>Fecha y hora: <span id="fecha-hora"></span></p>

<script>
    // Obtener la fecha y la hora actual
    const fecha = new Date();
    const opcionesFecha = { year: 'numeric', month: 'long', day: 'numeric' };
    const opcionesHora = { hour: '2-digit', minute: '2-digit', second: '2-digit' };
    
    const fechaFormateada = fecha.toLocaleDateString('es-ES', opcionesFecha);
    const horaFormateada = fecha.toLocaleTimeString('es-ES', opcionesHora);

    // Mostrar la fecha y hora en el elemento con id 'fecha-hora'
    document.getElementById('fecha-hora').textContent = `${fechaFormateada}, ${horaFormateada}`;
</script>

<p>Horario: todos los días de 10:30 a 18:30 h</p>
<p>Teléfono: (52) 55-6880-0778</p>
<p>Administrador: Grupo Carso</p>

    <main>
    <div class="cart" >
    <table>
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Subtotal</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($items as $item) {
                    $subtotal = $item['precio'] * $item['cantidad'];
                    echo "
                    <tr>
                        <td>{$item['nombre']}</td>
                        <td>\${$item['precio']}</td>
                        <td>{$item['cantidad']}</td>
                        <td>\${$subtotal}</td>
                    </tr>
                    ";
                }
                ?>
            </tbody>
        </table>
        <p>Total: $<?php echo number_format($total, 2); ?></p>
    </main>
    </div>

    <div class='product'>
                

</body>
</html>

<?php
// Vaciar el carrito después de generar la factura
$conn->query("DELETE FROM carrito");
?>