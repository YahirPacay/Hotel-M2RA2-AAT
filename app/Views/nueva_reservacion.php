<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nuevo Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<body>
    <div class="container-fluid position-static top-50 start-50">
        <div class="row justify-content-center p-5">
            <h1 class="text-center shadow-lg p-3 mb-5 bg-body-tertiary bg-warning-subtle rounded-5">Nueva Reservacion</h1>

            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8 bg-warning-subtle text-info-emphasis p-5 border border-dark rounded-5 shadow-lg p-3 mb-5 bg-body-tertiary">
                <form action="<?= base_url('agregar_reservacion') ?> " method="post">
                    <div class="mb-3">
                        <label for="txtId" class="form-label">reservacion ID</label>
                        <input type="number" id="txtId" name="txtId" class="form-control ">
                    </div>
                    <div class="mb-3">
                        <label for="txtFecha" class="form-label">Fecha</label>
                        <input type="date" id="txtFecha" name="txtFecha" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="txtClienteId" class="form-label">cliente Id</label>
                        <input type="text" id="txtClienteId" name="txtClienteId" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="txtHotelId" class="form-label">Hotel Id</label>
                        <input type="number" id="txtHotelId" name="txtHotelId" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="txtDescripcion" class="form-label">descripcion</label>
                        <input type="text" id="txtDescripcion" name="txtDescripcion" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="txtUsuarioId" class="form-label">Usuario Id</label>
                        <select class="form-select" id="txtUsuarioId" name="txtUsuarioId" aria-label="Default select example">
                            <option selected>Seleccione un usuario id</option>
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