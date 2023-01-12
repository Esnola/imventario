<?php
    require_once "./php/main.php";
    $user ="Juan Jose";
    $userCheck =  conexion();
    $userCheck= $userCheck->query("SELECT usuario_nombre FROM usuario WHERE usuario_nombre='$user'");
    $cantidad = $userCheck->rowCount();
    $results = $userCheck->fetchAll(PDO::FETCH_OBJ);
            if($cantidad >0){
                 foreach ($results as $result) {
                    echo "<br> Nombre " . $result-> usuario_nombre;
                }
            }else{
                echo "No se ha enccontrado un usuario con ese nombre";
            }