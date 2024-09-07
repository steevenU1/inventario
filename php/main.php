<?php
    #conexión a la base de datos#
    function(){
        $pdo = new PDO('mysql:host=localhost;dbname=inventario','root','');
        return $pdo;
    }
    

    