<?php
if (isset($_POST["submit"])) { //se ejecuta cuando el usuario hace clic en el boton calcular del formulario

    function calculadora($operacion, $num1, $num2) //creamos la function calculadora()

    {
        if ($num1 == "" || $num2 == "") {
            echo "<p class='alert-danger'>¡Alert! Por favor verifica que las cajas de texto no esten vacias!</p>";
        } else {
            if (!is_numeric($num1) || !is_numeric($num2)) {
                echo "<p class='alert-danger'>¡Uppss, Lo siento no se permiten letras o carácteres especiales!</p>";
            } else {

                switch ($operacion) { //realizamos las operaciones de acuerdo con lo que seleccione el usuario
                    case 'suma':
                        echo "<h2 class='alert-success'>Resultado de $num1 + $num2 = " . ($num1 + $num2) . "</h2>";
                        break;
                    case 'resta':
                        echo "<h2 class='alert-success'>Resultado de $num1 - $num2 = " . ($num1 - $num2) . "</h2>";
                        break;
                    case 'multiplicacion':
                        echo "<h2 class='alert-success'>Resultado de $num1 x $num2 = " . ($num1 * $num2) . "</h2>";
                        break;
                    case 'division':
                        if ($num1 == "0" && $num2 == "0") {
                            echo "<p class='alert-danger'>No haz ingresado un número valido!</p>";
                        } elseif ($num2 == "0") {
                            echo "<p class='alert-danger'>¡No es posible dividir entre zero!</p>";
                        } else {
                            echo "<h2 class='alert-success'>Resultado de $num1 / $num2 = " . ($num1 / $num2) . "</h2>";
                        }

                        break;
                    case 'divisionmodular':
                        if ($num2 == "0") {
                            echo "<p class='alert-danger'>¡Error, el divisor no puede ser zero!</p>";
                        } else {
                            echo "<h2 class='alert-success'>Resultado de $num1 mod $num2 = " . ($num1 % $num2) . "</h2>";
                        }
                        break;
                    case 'potencia':
                        echo "<h2 class='alert-success'>Resultado de $num1 ^ $num2 = " . ($num1 ** $num2) . "</h2>";
                        break;

                    default:
                        # code...
                        echo "<p class='alert-danger'>¡Uppss! Se presento un error durante la ejecución del programa</p>";
                        break;
                }
            }
            return; //Retorna resultado
        }
    }
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}