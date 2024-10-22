<?php // Inicial el bloque de codigo php
/**
 * Clase Multiplicador
 * Esta clase se encarga de realizar la multiplicacion de un número por un listado de numeros hasta completar el límite.
 */
class Multiplicador
{
    // Atributo privado para almacenar el número a multiplicar.
    private $numero;

    // Atributo privado para almacenar el límite hasta el cual se va a multiplicar.
    private $limite;

    
     // Método setValores
     // Establece los valores del número a multiplicar y el límite para las multiplicaciones.
     // int $numero El número que queremos multiplicar.
     // int $limite Hasta qué número se quiere realizar la multiplicación.

    public function setValores($numero, $limite)
    {
        // Asignamos el número pasado como parámetro al atributo $numero de la clase.
        $this->numero = $numero;

        // Asignamos el límite pasado como parámetro al atributo $limite de la clase.
        $this->limite = $limite;
    }

   
     // Metodo generarTabla
     // Genera y devuelve una lista de multiplicaciones del número hasta el límite.
     // @return array Un array que contiene las multiplicaciones en formato de texto.
     
    public function generarTabla()
    {
        // Inicializamos un array vacio para almacenar los resultados de las multiplicaciones.
        $resultados = [];

        // Bucle for que recorre desde 1 hasta el valor de $limite.
        for ($i = 1; $i <= $this->limite; $i++) {
            // Para cada iteración, multiplicamos $numero por $i y guardamos el resultado en el array $resultados.
            // Formato: "numero x i = producto"
            $resultados[] = $this->numero . " x " . $i . " = " . ($this->numero * $i);
        }

        // Devolvemos el array con los resultados de las multiplicaciones.
        return $resultados;
    }
}

// Verificamos si los valores 'numero' y 'limite' han sido enviados desde el formulario (usamos método POST).
if (isset($_POST['numero']) && isset($_POST['limite'])) {
    
    // Convertimos los valores enviados a enteros y los guardamos en variables.
    $numero = intval($_POST['numero']);
    $limite = intval($_POST['limite']);

    // Creamos una instancia de la clase Multiplicador.
    $multiplicador = new Multiplicador();

    // Usamos el método setValores() para establecer el número y el límite en la instancia creada.
    $multiplicador->setValores($numero, $limite);

    // Llamamos al método generarTabla() para obtener los resultados de la multiplicación.
    $resultados = $multiplicador->generarTabla();
} else {
    // Si no se proporcionan los valores correctos, mostramos un mensaje de error.
    echo "Error: no se han proporcionado los datos.";
    exit; // Terminamos la ejecución del script si hay un error.
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados de Multiplicación</title>
</head>
<body>
    <h1>Resultados de la Multiplicación</h1>
    <ul>
        <?php
        // Mostramos en pantalla los resultados
        foreach ($resultados as $resultado) {
            echo "<li>" . $resultado . "</li>";
        }
        ?>
    </ul>
</body>
</html>
