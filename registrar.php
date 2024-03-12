<?php

include("conexion.php");

if(isset($_POST['register'])){
    if(
        strlen($_POST['id']) >= 1 &&
        strlen($_POST['name']) >= 1 &&
        strlen($_POST['sexo']) >= 1 &&
        strlen($_POST['age']) >= 1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['address']) >= 1 
    ){
        $id = trim($_POST['id']);
        $name = trim($_POST['name']);
        $secondname = trim($_POST['secondname']);
        $sexo = trim($_POST['sexo']);
        $age = trim($_POST['age']);
        $email = trim($_POST['email']);
        $address = trim($_POST['address']);
        $consulta = "INSERT INTO datos(cedula, nombre, segundo_nombre, sexo, edad, correo, direccion)
            VALUES('$id', '$name', '$secondname', '$sexo', '$age', '$email', '$address')";
        $resultado = mysqli_query($conex, $consulta);
        if($resultado){
            ?>
            <h3 class = "success"> Tu registro se ha completado </h3>
            <?php
        }else{
            ?>
            <h3 class ="error">Ocurrio un Error</h3>
            <?php
        }
    }else{
        ?>
        <h3 class = "error"> Llena todos los campos </h3
        <?php
    }
}
?>