<?php
    error_reporting(0);
    $host= "localhost";
    $dbuser= "root";
    $password= "";
    $dbname= "techSolutions";

    try {
        $conn = new mysqli($host, $dbuser, $password, $dbname);
        if ($conn->connect_error) {
            die("Problemas con la conexión: " . $conn->connect_error);
        }
    } catch(Exception $exe) {
        echo $conn->connect_error;
    }

    if ($_POST['flag'] == 1) {
        $insertSql = "INSERT INTO contacto (nombre, email, asunto, mensaje) VALUES ('" . $_POST['nombre'] .
        "','" . $_POST['email'] . "','" . $_POST['asunto'] . "','" . $_POST['mensaje'] . "');";
        mysqli_query($conn, $insertSql);
    }
?>


<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulario de Contacto</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <style>
            body {
                background-color: #f8f9fa;
            }
            .container {
                margin-top: 50px;
            }
            .form-title {
                margin-bottom: 30px;
                font-size: 24px;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card shadow-lg p-4">
                        <div class="form-title">Formulario de Contacto</div>
                        <form action="" method="post">
                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingresa tu nombre" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Ingresa tu email" required>
                            </div>
                            <div class="mb-3">
                                <label for="asunto" class="form-label">Asunto</label>
                                <input type="text" class="form-control" id="asunto" name="asunto" placeholder="Ingresa el asunto" required>
                            </div>
                            <div class="mb-3">
                                <label for="mensaje" class="form-label">Mensaje</label>
                                <textarea class="form-control" id="mensaje" name="mensaje" rows="4" placeholder="Escribe tu mensaje" required></textarea>
                            </div>
                            <input type="hidden" name="flag" value="1">
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
