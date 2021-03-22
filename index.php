<!--Header-->
<?php include_once "./include/header.html";?>

<!--Header-->
<?php include_once "./include/navbar.html";?>

<body>
    <div class="container">
        <h1 class="text-center">CALCULADORA DESARROLADA EN PHP</h1>
        <p class="text-left">Esta aplicación de calculadora permite realizar las operaciones aritméticas básicas (suma,
            resta, multiplicación, división, división modular y potencia) entre dos números!</p>

        <form class="form-control" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]);?>" role="form" method="POST">
            <div class="mb-3">
                <label for="num1" class="form-label">Primer Número:</label>
                <input type="text" class="form-control" id="num1" placeholder="Ingrese el primer número" name="num1">
            </div>
            <div class="mb-3">
                <label for="num2" class="form-label">Segundo Número:</label>
                <input type="text" class="form-control" id="num2" placeholder="Ingrese el segundo número" name="num2">
            </div>
            <div class="mb-3">
                <label for="operaciones" class="form-label">Operaciones:</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="operacion" id="suma" value="suma">
                    <label class="form-check-label" for="suma">
                        Suma:
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="operacion" id="resta" value="resta">
                    <label class="form-check-label" for="resta">
                        Resta:
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="operacion" id="multiplicacion"
                        value="multiplicacion">
                    <label class="form-check-label" for="multiplicacion">
                        Multiplicación:
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="operacion" id="division" value="division">
                    <label class="form-check-label" for="division">
                        División:
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="operacion" id="divisionmodular"
                        value="divisionmodular">
                    <label class="form-check-label" for="divisionmodular">
                        División Modular:
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="operacion" id="potencia" value="potencia">
                    <label class="form-check-label" for="potencia">
                        Potencia:
                    </label>
                </div>
            </div>
            <br>
            <button type="submit" name="submit" class="btn btn-success">Calcular</button>
        </form>
        <br>
        <?php
if (isset($_POST["submit"])) {
    require_once "calculadora.php";
    if (isset($_POST["operacion"])) {
        $operacion = test_input($_POST["operacion"]);
        $num1 = test_input($_POST["num1"]);
        $num2 = test_input($_POST["num2"]);
        calculadora($operacion, $num1, $num2);
    } else {
        echo "<p class='alert-danger'>¡Uppss! Seleccione una operación valida.</p>";

    }
}
?>
    </div>
    <script>
    $(document).ready(function() {
        $("#num1").focus();
    });
    </script>

    <!--Footer-->

    <?php include_once "./include/footer.html";?>