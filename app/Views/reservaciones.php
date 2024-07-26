<?php echo $this->extend('plantillas/layout'); ?>

<?php echo $this->Section('contenido'); ?>


<div class="container">

    <div class="container p-5 m-5">
        <h1>Reservaciones</h1>
        <a href="<?= base_url('nueva_reservacion'); ?>" class="btn btn-info m-2 bi-person-plus">Agregar Reservacion</a>

        <div style="margin: 4px, 4px;
            padding: 4px;
            width: 100%;
            height: 600px;
            overflow: auto;
            white-space: wrap;
            ">


            <table class="table table-dark table-hover m-auto">
                <thead>
                    <th>reservacion Id</th>
                    <th>fecha</th>
                    <th>cliente_id</th>
                    <th>hotel_id</th>
                    <th>descripcion</th>
                    <th>usuario_id</th>
                    <th></th>
                    <th></th>
                </thead>
                <tbody>
                    <?php foreach ($datos as $reservacion) : ?>
                        <tr>

                            <td><?php echo $reservacion['reservacion_id']; ?></td>
                            <td><?php echo $reservacion['fecha']; ?></td>
                            <td><?php echo $reservacion['cliente_id']; ?></td>
                            <td><?php echo $reservacion['hotel_id']; ?></td>
                            <td><?php echo $reservacion['descripcion']; ?></td>
                            <td><?php echo $reservacion['usuario_id']; ?></td>
                            <td>
                                <a href="<?= base_url('buscar_reservacion/') . $reservacion['reservacion_id']; ?>" class="btn btn-info bi-wrench m-2"></a>

                            </td>
                            <td>
                                <a href="<?= base_url('eliminar_reservacion/') . $reservacion['reservacion_id']; ?>" class="btn btn-danger m-2 bi-trash"></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>

</div>

<?php echo $this->endSection(); ?>