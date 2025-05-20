<?php include("conexion.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Catálogo Rentacar</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container my-5">
    <h2 class="text-center mb-4">Autos disponibles</h2>
    <div class="row">
        <?php
        $autos = $conexion->query("SELECT * FROM autos");
        while ($auto = $autos->fetch_assoc()):
        ?>
        <div class="col-md-4 mb-4">
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title"><?= $auto['modelo'] ?></h5>
                    <p>Precio por día: $<?= $auto['precio_por_dia'] ?></p>
                    <p>Unidades disponibles: <?= $auto['unidades_disponibles'] ?></p>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
    </div>

    <h2 class="text-center my-4">Camionetas disponibles</h2>
    <div class="row">
        <?php
        $camionetas = $conexion->query("SELECT * FROM camionetas");
        while ($c = $camionetas->fetch_assoc()):
        ?>
        <div class="col-md-4 mb-4">
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title"><?= $c['modelo'] ?></h5>
                    <p>Precio por día: $<?= $c['precio_por_dia'] ?></p>
                    <p>Unidades disponibles: <?= $c['unidades_disponibles'] ?></p>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
    </div>

    <h2 class="text-center my-4">Choferes disponibles</h2>
    <div class="row">
        <?php
        $choferes = $conexion->query("SELECT * FROM choferes");
        while ($ch = $choferes->fetch_assoc()):
        ?>
        <div class="col-md-4 mb-4">
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title">Chofer <?= $ch['tipo'] ?></h5>
                    <p>Precio por día: $<?= $ch['precio_por_dia'] ?></p>
                    <p>Cantidad disponible: <?= $ch['cantidad_disponible'] ?></p>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
    </div>
</div>
</body>
</html>
