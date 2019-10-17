<?php   

    //crear una funcion para reutilizar en la activacion de cada seccion
    function setActive($routeName){

        return request()->routeIs($routeName) ? 'active' : '';
    }

?>