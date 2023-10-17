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

        function delete($tabla = [], $id) {
            foreach ($tabla as $clave => $elemento) {
                if ($elemento['id'] == $id) {
                    unset($tabla[$clave]);
                }
            }
            return array_values($tabla);
        }


?>