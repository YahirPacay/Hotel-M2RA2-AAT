<?php echo $this->extend('plantillas/layout'); ?>

<?php echo $this->Section('contenido'); ?>


<div class="container">

    <div class="container p-5 m-5">
        <h1>Hoteles</h1>
        <a href="<?= base_url('nuevo_hotel'); ?>" class="btn btn-info m-2 bi-person-plus">Agregar Hotel</a>

        <div style="margin: 4px, 4px;
            padding: 4px;
            width: 100%;
            height: 600px;
            overflow: auto;
            white-space: wrap;
            ">


            <table class="table table-dark table-hover m-auto">
                <thead>
                    <th>hotel Id</th>
                    <th>nombre</th>
                    <th>correoelectronico</th>
                    <th>telefono</th>
                    <th>direccion</th>
                    <th>ciudad id</th>
                    <th>categoria_id</th>
                    <th>usuario_id</th>
                    <th></th>
                    <th></th>
                </thead>
                <tbody>
                    <?php foreach ($datos as $hotel) : ?>
                        <tr>

                            <td><?php echo $hotel['hotel_id']; ?></td>
                            <td><?php echo $hotel['nombre']; ?></td>
                            <td><?php echo $hotel['correoelectronico']; ?></td>
                            <td><?php echo $hotel['telefono']; ?></td>
                            <td><?php echo $hotel['direccion']; ?></td>
                            <td><?php echo $hotel['ciudad_id']; ?></td>
                            <td><?php echo $hotel['categoria_id']; ?></td>
                            <td><?php echo $hotel['usuario_id']; ?></td>
                            <td>
                                <a href="<?= base_url('buscar_hotel/') . $hotel['hotel_id']; ?>" class="btn btn-info bi-wrench m-2"></a>

                            </td>
                            <td>
                                <a href="<?= base_url('eliminar_hotel/') . $hotel['hotel_id']; ?>" class="btn btn-danger m-2 bi-trash"></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>

</div>

<?php echo $this->endSection(); ?>