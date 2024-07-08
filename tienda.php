<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Tienda</title>
	<link rel="stylesheet" href="styles.css" />
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

    

    <div class="container-items">
		<div class="item">
			<figure>
				<img src="1.png" alt="producto" />
			</figure>
			<div class="info-product">
				<h2>Cuadro Pop-Up Nuevo Ciudad de México</h2>
				<p class="info">Pop-Up desplegable de la zona de Nuevo Polanco en la Ciudad de México. Original pop up que muestra diferentes escenas en miniatura desplegables. Un hermoso detalle decorativo, un excelente regalo y recuerdo de México.</p>
				<p class="price">$120</p>
                <?php
                include 'conexion.php';
                $result1 = $conn->query("SELECT * FROM productos WHERE id=1");
            if ($row = $result1->fetch_assoc()) {
                echo "
                <div class='product'>
                    <form action='agregar.php' method='POST'>
                        <input type='hidden' name='id' value='{$row['id']}'>
                <button type='submit'>Añadir al carrito</button>
                </form>
                </div>
                ";
            }
            ?>
			</div>
		</div>
    
		<div class="item">
			<figure>
				<img src="2.png" alt="producto" />
			</figure>
			<div class="info-product">
				<h2>Ángel de la Independencia Cuadro Premium </h2>
                <p class="info">El Ángel de la independencia o Columna de la Independencia es el monumento que conmemora el centenario de la Independecncia de México, inugurado en 1910. Este original Pop-Up despliega un cuadro decorativo único con varios planos. Un excelente regalo y recuerdo de México.</p>
				<p class="price">$120</p>
                <?php
                include 'conexion.php';
                $result1 = $conn->query("SELECT * FROM productos WHERE id=2");
            if ($row = $result1->fetch_assoc()) {
                echo "
                <div class='product'>
                    <form action='agregar.php' method='POST'>
                        <input type='hidden' name='id' value='{$row['id']}'>
                <button type='submit'>Añadir al carrito</button>
                </form>
                </div>
                ";
            }
            ?>
			</div>
		</div>


		<div class="item">
			<figure>
				<img src="3.png" alt="producto" />
			</figure>
			<div class="info-product">
				<h2>Hoddie Frida Kahlo</h2>
				<p class="info">De algodón, decoradas con Vinil Textil. Ideal para esta temporada de otoño. Producto bajo pedido.</p>
				<p class="price">$325</p>
				<?php
                include 'conexion.php';
                $result1 = $conn->query("SELECT * FROM productos WHERE id=3");
            if ($row = $result1->fetch_assoc()) {
                echo "
                <div class='product'>
                    <form action='agregar.php' method='POST'>
                        <input type='hidden' name='id' value='{$row['id']}'>
                <button type='submit'>Añadir al carrito</button>
                </form>
                </div>
                ";
            }
            ?>
			</div>
		</div>

		<div class="item">
			<figure>
				<img src="4.png" alt="producto" />
			</figure>
			<div class="info-product">
				<h2>Iman "El Boracho"</h2>
				<p class="info">Imanes con respaldo de placa metálica. Un hermoso recuerdo de México de nuestra loteria mexicana.</p>
				<p class="price">$80</p>
				<?php
                include 'conexion.php';
                $result1 = $conn->query("SELECT * FROM productos WHERE id=4");
            if ($row = $result1->fetch_assoc()) {
                echo "
                <div class='product'>
                    <form action='agregar.php' method='POST'>
                        <input type='hidden' name='id' value='{$row['id']}'>
                <button type='submit'>Añadir al carrito</button>
                </form>
                </div>
                ";
            }
            ?>
			</div>
		</div>

		<div class="item">
			<figure>
				<img src="5.png" alt="producto" />
			</figure>
			<div class="info-product">
			<h2>Iman "El Diablito"</h2>
				<p class="info">Imanes con respaldo de placa metálica. Un hermoso recuerdo de México de nuestra loteria mexicana.</p>
				<p class="price">$80</p>
				<?php
                include 'conexion.php';
                $result1 = $conn->query("SELECT * FROM productos WHERE id=5");
            if ($row = $result1->fetch_assoc()) {
                echo "
                <div class='product'>
                    <form action='agregar.php' method='POST'>
                        <input type='hidden' name='id' value='{$row['id']}'>
                <button type='submit'>Añadir al carrito</button>
                </form>
                </div>
                ";
            }
            ?>
			</div>
		</div>

		<div class="item">
			<figure>
				<img src="6.png" alt="producto" />
			</figure>
			<div class="info-product">
			<h2>Iman "El Negrito"</h2>
				<p class="info">Imanes con respaldo de placa metálica. Un hermoso recuerdo de México de nuestra loteria mexicana.</p>
				<p class="price">$80</p>
				<?php
                include 'conexion.php';
                $result1 = $conn->query("SELECT * FROM productos WHERE id=6");
            if ($row = $result1->fetch_assoc()) {
                echo "
                <div class='product'>
                    <form action='agregar.php' method='POST'>
                        <input type='hidden' name='id' value='{$row['id']}'>
                <button type='submit'>Añadir al carrito</button>
                </form>
                </div>
                ";
            }
            ?>
			</div>
		</div>

		<div class="item">
			<figure>
				<img src="7.png" alt="producto" />
			</figure>
			<div class="info-product">
				<h2>Cuadro Pop-Up Nuevo Polanco</h2>
				<p class="info">Pop-Up desplegable de la zona de Nuevo Polanco en la Ciudad de México. Original pop up que muestra diferentes escenas en miniatura desplegables. Un hermoso detalle decorativo, un excelente regalo y recuerdo de México.</p>
				<p class="price">$120</p>
				<?php
                include 'conexion.php';
                $result1 = $conn->query("SELECT * FROM productos WHERE id=7");
            if ($row = $result1->fetch_assoc()) {
                echo "
                <div class='product'>
                    <form action='agregar.php' method='POST'>
                        <input type='hidden' name='id' value='{$row['id']}'>
                <button type='submit'>Añadir al carrito</button>
                </form>
                </div>
                ";
            }
            ?>
			</div>
		</div>

		<div class="item">
			<figure>
				<img src="8.png" alt="producto" />
			</figure>
			<div class="info-product">
				<h2>Cuadro Pop-Up Museo Soumaya</h2>
				<p class="info">Pop-Up desplegable del Museo Soumaya en la Ciudad de México. Original pop up que muestra diferentes escenas en miniatura desplegables. Un hermoso detalle decorativo, un excelente regalo y recuerdo de México.</p>
				<p class="price">$120</p>
				<?php
                include 'conexion.php';
                $result1 = $conn->query("SELECT * FROM productos WHERE id=8");
            if ($row = $result1->fetch_assoc()) {
                echo "
                <div class='product'>
                    <form action='agregar.php' method='POST'>
                        <input type='hidden' name='id' value='{$row['id']}'>
                <button type='submit'>Añadir al carrito</button>
                </form>
                </div>
                ";
            }
            ?>
			</div>
		</div>

		<div class="item">
			<figure>
				<img src="9.png" alt="producto" />
			</figure>
			<div class="info-product">
				<h2>Zig-Zag México Ciudad</h2>
				<p class="info">Tarjeta que puedes abrir, cerrar o desplegar para admirar este maravilloso Sky-line de la Ciudad de México y apreciar algunos de sus edificios más icónicos. Un hermoso regalo y recuerdo de la Ciudad.</p>
				<p class="price">$130</p>
				<?php
                include 'conexion.php';
                $result1 = $conn->query("SELECT * FROM productos WHERE id=9");
            if ($row = $result1->fetch_assoc()) {
                echo "
                <div class='product'>
                    <form action='agregar.php' method='POST'>
                        <input type='hidden' name='id' value='{$row['id']}'>
                <button type='submit'>Añadir al carrito</button>
                </form>
                </div>
                ";
            }
            ?>
			</div>
		</div>

		<div class="item">
			<figure>
				<img src="10.png" alt="producto" />
			</figure>
			<div class="info-product">
				<h2>Zig-Zag Frida Kahlo</h2>
				<p class="info">Tarjeta que puedes abrir, cerrar o desplegar para admirar esta escena de Frida en su jardín. Un hermoso regalo y recuerdo de México</p>
				<p class="price">$130</p>
				<?php
                include 'conexion.php';
                $result1 = $conn->query("SELECT * FROM productos WHERE id=10");
            if ($row = $result1->fetch_assoc()) {
                echo "
                <div class='product'>
                    <form action='agregar.php' method='POST'>
                        <input type='hidden' name='id' value='{$row['id']}'>
                <button type='submit'>Añadir al carrito</button>
                </form>
                </div>
                ";
            }
            ?>
			</div>
		</div>

		<div class="item">
			<figure>
				<img src="11.png" alt="producto" />
			</figure>
			<div class="info-product">
				<h2>Zig-Zag Pirámides</h2>
				<p class="info">Tarjeta que puedes abrir, cerrar o desplegar para admirar diferentes pirámides de México.Un hermoso regalo y recuerdo de México.</p>
				<p class="price">$130</p>
				<?php
                include 'conexion.php';
                $result1 = $conn->query("SELECT * FROM productos WHERE id=11");
            if ($row = $result1->fetch_assoc()) {
                echo "
                <div class='product'>
                    <form action='agregar.php' method='POST'>
                        <input type='hidden' name='id' value='{$row['id']}'>
                <button type='submit'>Añadir al carrito</button>
                </form>
                </div>
                ";
            }
            ?>
			</div>
            </div>
        </div>
<p> </p>

		<div class="cart" >
            <h2>Carrito</h2>
            <p>   </p>
            <form action="actualizar.php" method="POST">
                <table>
                    <thead>
                        <tr>
                            <th>Eliminar</th>
                            <th>Producto</th>
                            <th>Precio</th>
                            <th>Cantidad</th>
                            <th>Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $result = $conn->query("SELECT * FROM carrito");
                        $total = 0;
                        while ($row = $result->fetch_assoc()) {
                            $subtotal = $row['precio'] * $row['cantidad'];
                            $total += $subtotal;
                            echo "
                            <tr>
                                <td>
                                    <form action='eliminar.php' method='POST'>
                                        <input type='hidden' name='id' value='{$row['id']}'>
                                        <button type='submit'>X</button>
                                    </form>
                                </td>
                                <td>{$row['nombre']}</td>
                                <td>\${$row['precio']}</td>
                                <td><input type='number' name='cantidad[{$row['id']}]' value='{$row['cantidad']}' min='1' ></td>
                                <td>\${$subtotal}</td>
                            </tr>
                            ";
                        }
                        ?>
                    </tbody>
                </table>
                <p>Total: $<span id="total"><?php echo number_format($total, 2); ?></span></p>
                <input type="submit" value="Actualizar Carrito" style="color: blue;" >
            </form>
            <form action="factura.php" method="POST">
                <button type="submit" style="color: green;">Realizar Compra</button>
            </form>
        </div> 
        

        <footer>
		<div>
		  <p><span>Copyright&copy; 2024 - Todos los derechos reservados
			</span> </p>
		  <ul class='enlaces_footer'>
			<li><a href="https://www.tecnologicodecoacalco.edu.mx/TESCO/INICIO/INICIO.php"> <img src="tesco.png"alt="Tesco" width="118px" height="40px"></a></li>
			<li><a href="http://www.museosoumaya.org"> <img src="sou.png" alt="Museo" width="71px" height="64px" > </a></li>
			<li><a href="https://www.facebook.com/elmuseosoumaya/"> <img src="face.png" alt="Facebook"> </a></li>
			<li><a href="https://www.instagram.com/elmuseosoumaya/"> <img src="insta.png" alt="Instagram"> </a></li>
			<li><a href="https://twitter.com/ElMuseoSoumaya"> <img src="x.png" alt="X" > </a></li>
			<li><a href="https://www.tiktok.com/@elmuseosoumaya?_t=8cOshiArL1y&_r=1"> <img src="tk.png" alt="Tik Tok" width="35px" height="35px" > </a></li>
			<li><a href="https://www.youtube.com/channel/UC3z9vbkQNv2WmVD2pxsBFuA?view_as=subscriber"> <img src="you.png" alt="Tik Tok" width="128px" height="28.5px" > </a></li>
		  </ul>
			<p>Tecnológico de Estudios Superiores Coacalco | Programacion WEB | 3521</p>
		</div>
	  </footer>
  
</body>
</html>