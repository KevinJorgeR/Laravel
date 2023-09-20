<?php
    function ResaltarRuta($ruta) {
        // retornarmos el estilo, si la ruta es la actual?
        // usamos operador ternario: (condicion ? valorV : valorF)
        return request()->routeIs($ruta) ? 'font-weight:bold;' : 'font-weight:normal;';
    }

?>