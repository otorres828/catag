<?php
//Convierte un string en una cadena formateada para una carpeta
function folderName($nombre)
{

    //1 .Elimino espacios en blanco demas
    //2 .elimino caracteres especiales
    //3. convierto a minusculas
    //4. elimino espacios en blanco por underscores
    return $nombre = str_replace(' ', '_', strtolower(preg_replace('([^A-Za-z0-9 ])', '', trim($nombre))));
}

function eliminarRutaAdmin($nombre)
{
    return $nombre = str_replace('../', '', $nombre);
}
