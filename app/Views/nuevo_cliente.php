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
            <h1 class="text-center shadow-lg p-3 mb-5 bg-body-tertiary bg-danger-subtle rounded-5">Nuevo Cliente</h1>

            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8 bg-danger-subtle text-info-emphasis p-5 border border-dark rounded-5 shadow-lg p-3 mb-5 bg-body-tertiary">
                <form action="<?= base_url('agregar_cliente') ?> " method="post">
                    <div class="mb-3">
                        <label for="txtId" class="form-label">cliente ID</label>
                        <input type="number" id="txtId" name="txtId" class="form-control ">
                    </div>
                    <div class="mb-3">
                        <label for="txtNombre" class="form-label">Nombre</label>
                        <input type="text" id="txtNombre" name="txtNombre" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="txtApellido" class="form-label">Apellido</label>
                        <input type="text" id="txtApellido" name="txtApellido" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="txtNit" class="form-label">Nit</label>
                        <input type="text" id="txtNit" name="txtNit" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="txtTelefono" class="form-label">Telefono</label>
                        <input type="number" id="txtTelefono" name="txtTelefono" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="txtEmail" class="form-label">Email</label>
                        <input type="email" id="txtEmail" name="txtEmail" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="txtDireccion" class="form-label">Direccion</label>
                        <input type="text" id="txtDireccion" name="txtDireccion" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="txtContraseña" class="form-label">Contraseña</label>
                        <input type="password" id="txtContraseña" name="txtContraseña" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="btnGuardar" class="form-label"></label>
                        <input type="submit" id="btnGuardar" name="btnGuardar" class="form-control btn btn-dark" value="">
                    </div>
                </form>
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>