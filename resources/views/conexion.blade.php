@extends('template')

@section('content')
<?php


?>


<div class="container">
    <?php
    $sql = "SELECT * FROM Locales";

    $query = sqlsrv_query($conn, $sql);

    $i = 0;

    while ($fila = sqlsrv_fetch_array($query)) {
        $idLocal = $fila['idLocal'];
        $nombreLocal = $fila['nombreLocal'];
        $direccion = $fila['direccion'];
        $descripcion = $fila['descripcion'];
        $aforoMax = $fila['aforoMax'];
        $horarioEntrada = $fila['horarioEntrada'];
        $horarioSalida = $fila['horarioSalida'];
        $i++;
    }
    ?>

    <table>
        <th><?php echo $idLocal ?></th>
        <th><?php echo $nombreLocal ?></th>
        <th><?php echo $direccion ?></th>
        <th><?php echo $descripcion ?></th>
        <th><?php echo $aforoMax ?></th>
        <th><?php echo $horarioEntrada ?></th>
        <th><?php echo $horarioSalida ?></th>

    </table>
</div>

@stop