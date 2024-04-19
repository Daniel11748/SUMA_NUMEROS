<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJERCICIO SUMA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-primary bg-opacity-75">



    <div class="container d-flex justify-content-center mt-5">
        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
            REALIZAR SUMA
        </button>
    </div>


    <div class="modal fade bg-danger bg-opacity-25" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content text-center bg-secondary">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">SUMA DE DOS NUMEROS</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <h1 class="mt-5">INGRESE LOS NUMEROS A SUMAR</h1>
                        <form action="#" method="post" class="mt-4">
                            <div class="mb-3">
                                <label for="numero1" class="form-label">Número 1:</label>
                                <input type="number" class="form-control" name="numero1" id="numero1" placeholder="INGRESE EL PRIMER NUMERO" required>
                            </div>
                            <div class="mb-3">
                                <label for="numero2" class="form-label">Número 2:</label>
                                <input type="number" class="form-control" name="numero2" id="numero2" placeholder="INGRESE EL SEGUNDO NUMERO" required>
                            </div>
                            <button type="submit" class="btn btn-success">Calcular suma</button>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">SALIR</button>
                </div>
            </div>
        </div>
    </div>


    <div class="container d-flex justify-content-center mt-5">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numero1 = isset($_POST["numero1"]) ? $_POST["numero1"] : 0;
            $numero2 = isset($_POST["numero2"]) ? $_POST["numero2"] : 0;
            $total = $numero1 + $numero2;
            echo "<div class='mt-4 col-3 alert alert-success'>El total de $numero1 mas $numero2 es: $total</div>";
        }
        ?>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</html>