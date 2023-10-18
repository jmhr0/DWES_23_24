<?php

        /*

        funcion: delete()
        descripcion: elimina un elemento de la tabla
        parametros:
                    - tabla
                    - id del elemento que desea eliminar
        salida:
                    -tabla actualizada
        */

        function eliminar($tabla = [], $id) {
            foreach ($tabla as $clave => $campo) {
                if ($campo['id'] == $id) {
                    unset($tabla[$clave]);
                }
            }
            return array_values($tabla);
        }


?>