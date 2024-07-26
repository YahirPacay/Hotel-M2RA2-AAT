<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Agregar Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<body>
    <div class="container-fluid position-static top-50 start-50">
        <div class="row justify-content-center p-5">
            <h1 class="text-center shadow-lg p-3 mb-5 bg-body-tertiary bg-success-subtle rounded-5">Modificar Hotel</h1>

            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8 bg-success-subtle text-info-emphasis p-5 border border-dark rounded-5 shadow-lg p-3 mb-5 bg-body-tertiary">
                <form action="<?= base_url('modificar_hotel') ?> " method="post">
                    <div class="mb-3">
                        <label for="txtHotelId" class="form-label">Hotel ID</label>
                        <input type="number" id="txtHotelId" name="txtHotelId" class="form-control " value="<?= $datos['hotel_id']; ?>"
                        readonly>
                    </div>
                    <div class="mb-3">
                        <label for="txtNombre" class="form-label">Nombre</label>
                        <input type="text" id="txtNombre" name="txtNombre" class="form-control" value="<?= $datos['nombre']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="txtEmail" class="form-label">Email</label>
                        <input type="email" id="txtEmail" name="txtEmail" class="form-control" value="<?= $datos['correoelectronico']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="txtTelefono" class="form-label">Telefono</label>
                        <input type="number" id="txtTelefono" name="txtTelefono" class="form-control" value="<?= $datos['telefono']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="txtDireccion" class="form-label">Direccion</label>
                        <input type="text" id="txtDireccion" name="txtDireccion" class="form-control" value="<?= $datos['direccion']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="txtCiudadId" class="form-label">Ciudad ID</label>
                        <select class="form-select" id="txtCiudadId" name="txtCiudadId" aria-label="Default select example">
                            <option selected><?= $datos['ciudad_id']; ?></option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="11">11</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="txtCategoriaId" class="form-label">Categoria Id</label>
                        <select class="form-select" id="txtCategoriaId" name="txtCategoriaId" aria-label="Default select example">
                            <option selected><?= $datos['categoria_id']; ?></option>
                            <option value="102">102</option>
                            <option value="103">103</option>
                            <option value="104">104</option>
                            <option value="104">105</option>
                        </select>
                    </div>
                    <div class="mb-3">

                        <label for="txtUsuarioId" class="form-label">Usuario Id</label>
                        <select class="form-select" id="txtUsuarioId" name="txtUsuarioId" aria-label="Default select example">
                            <option selected><?= $datos['usuario_id']; ?></option>
                            <option value="100">100</option>
                            <option value="200">200</option>
                            <option value="300">300</option>
                            <option value="301">301</option>
                            <option value="777">777</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="btnGuardar" class="form-label"></label>
                        <input type="submit" id="btnGuardar" name="btnGuardar" class="form-control btn btn-dark" value="Guardar">
                    </div>
                </form>
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>