<?php
// input.php
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <title>Tabla de Multiplicación</title>
</head>
<body>
    <!-- Título principal de la página que indica al usuario la funcionalidad del formulario -->
    <h1>Generar Tabla de Multiplicación</h1>
    
    <!-- Inicio del formulario HTML -->
    <!-- El atributo 'action' define a dónde se enviarán los datos del formulario, en este caso a 'resultado.php'. -->
    <!-- El atributo 'method="POST"' especifica que los datos se enviarán usando el método POST, que es más seguro y no visible en la URL. -->
    <form action="resultado.php" method="POST">
        
        <!-- Etiqueta que muestra una descripción del input para el número a multiplicar -->
        <label for="numero">Número a multiplicar:</label>
        
        <!-- Campo de entrada donde el usuario introduce el número que quiere multiplicar -->
        <!-- El atributo 'name="numero"' asigna el nombre 'numero' al campo, que se usará para acceder al valor en 'resultado.php'. -->
        <!-- El atributo 'type="number"' asegura que solo se acepten números en este campo. -->
        <!-- El atributo 'required' obliga al usuario a rellenar este campo antes de enviar el formulario. -->
        <input type="number" name="numero" id="numero" required><br><br>

        <!-- Etiqueta que muestra una descripción del input para el límite de la multiplicación -->
        <label for="limite">Multiplicar hasta el número:</label>
        
        <!-- Campo de entrada donde el usuario introduce hasta qué número quiere multiplicar -->
        <!-- Similar al input anterior, 'name="limite"' asigna el nombre 'limite' al campo para acceder al valor en 'resultado.php'. -->
        <!-- El tipo 'number' garantiza que solo se acepten números como entrada. -->
        <!-- El atributo 'required' también asegura que este campo no puede estar vacío al enviar el formulario. -->
        <input type="number" name="limite" id="limite" required><br><br>

        <!-- Botón para enviar el formulario -->
        <!-- Al hacer clic, se enviarán los datos del formulario a 'resultado.php' para ser procesados. -->
        <input type="submit" value="Generar">
    </form>
</body>
</html>

</html>
