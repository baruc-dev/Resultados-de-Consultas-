<?php

$statement = $conexion->prepare('SELECT * FROM usuarios WHERE Nombre = ?');
        $statement->bind_param('s',$id);
        $statement->execute();
        $resultado = $statement->get_result();
        if($resultado->num_rows > 0)
        {
            $fila = $resultado->fetch_assoc();
            return $fila['Imagen'];
        }

        ?>