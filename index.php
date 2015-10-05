<?php /* esto inicia un bloque de código en php */
  $user = $_GET["usuario"];
  $pass = $_GET["contraseña"];  /* pass nos permite guardar la contraseña en la variable $pass */
  /*  echo $_GET["contraseña"];  echo nos permite imprimir los resultados
                      como en el document.write*/

/*Si el usuario y clave no coinciden entonces terminamos o enviamos un mensa de error*/

if($user != "zuave" || $pass !="123456"){
    echo "Lo siento hermano, no estás autorizado";
  } else  { /*Inicia bloque autorizado*/

    /*Si llegamnos hasta aquí, es porque el usuario es valedor y
    continuamos*/
/*Esto termina un bloque de código en php */
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
     <link rel="stylesheet" href="css/main.css">
   <title>INICIO</title>
</head>

<body>
    <header> <!-- encabezado -->
                <aside> <span class="naranja">Mi primer login</span> </aside>
                <nav>
                    <a class="activo" href="index.html">Inicio</a>
                    <a href=" ">Ingresar</a>

                    <a href=" ">Nuevo usuario</a>
                </nav>
    </header>

        <div id="CONTENIDO">
            <p>FELICIDADES. BIENVENIDO A MI MUNDO </p>

         <div>

        <footer>
             <p>COPYLEFT: TDW2.0</p>

        </footer>

</body>
</html>

<?php
  } /*Termina blque autorizado*/
?>
