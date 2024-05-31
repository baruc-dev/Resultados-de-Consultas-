<?php

$statement = $conexion ->prepare('SELECT * FROM fotos LIMIT ?, ?');
        $statement->bind_param('ii',$inicio, $fotosxpagina);
        $statement->execute();

        $imagenes = array(); #creamos un array
        $statement->bind_result($id, $titulo, $imagen, $texto);

       
        while ($statement->fetch()) 
        {
            #aqui le metemos al array creado otro array que contiene la info de cada consulta, esto se repetira y se ira haciendo una array mas grande(el principal) con toda la info
            #de la consulta
            $imagenes[] = array('id' => $id, 'titulo' => $titulo, 'imagen' => $imagen, 'texto' => $texto);
            
        }

?>