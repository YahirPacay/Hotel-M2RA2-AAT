<?php echo $this->extend('plantillas/layout'); ?>

<?php echo $this->section('contenido'); ?>

<div class="container">

    <div class="container p-5 m-5">
        <h1>Clientes</h1>
        <a href="<?= base_url('nuevo_cliente') ?>" class="btn btn-info m-2 bi-person-plus">Agregar</a>
        <div >

            <div 
            style="margin: 4px, 4px;
            padding: 4px;
            width: 100%;
            height: 600px;
            overflow: auto;
            white-space: wrap;
            ">

                <table class="table table-dark table-hover m-auto">
                    <thead>
                        <th>Id</th>
                        <th>nombre</th>
                        <th>apellido</th>
                        <th>nit</th>
                        <th>telefono</th>
                        <th>Email</th>
                        <th>direccion</th>
                        <th>contraseña</th>
                        <th></th>
                        <th></th>
                    </thead>
                    <tbody>
                        <?php foreach ($datos as $clientes) : ?>
                            <tr>
                                <td><?php echo $clientes['cliente_id']; ?></td>
                                <td><?php echo $clientes['nombre']; ?></td>
                                <td><?php echo $clientes['apellido']; ?></td>
                                <td><?php echo $clientes['nit']; ?></td>
                                <td><?php echo $clientes['telefono']; ?></td>
                                <td><?php echo $clientes['correo_electronico']; ?></td>
                                <td><?php echo $clientes['direccion']; ?></td>
                                <td><?php echo $clientes['contrasenia']; ?></td>
                                <td>
                                    <a href="<?= base_url('buscar_cliente/').$clientes['cliente_id']; ?>" class="btn btn-info bi-wrench m-2"></a>
                                </td>
                                <td>
                                    <a href="<?= base_url('eliminar_cliente/').$clientes['cliente_id']; ?>" class="btn btn-danger m-2 bi-trash"></a>
                                </div>
                                </td>

                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

        </div>

    </div>
</div>



<?php echo $this->endSection(); ?>