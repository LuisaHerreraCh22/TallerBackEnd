<?php
    include '../../../db/conexion.php'; 

    session_start();
    $usuario = $_SESSION['usuario'];
    
    if (isset($_POST['add_pet'])) {
        $type_pet = $_POST['type_pet'];
        $name_pet = $_POST['name_pet'];
        $age_pet = $_POST['age_pet'];


        $a_c = mysqli_query($conexion, "INSERT INTO pet_user 
        (type_pet, name_pet,age_pet, id_person) VALUES
        ('$type_pet', '$name_pet','$age_pet', '$usuario')");

        header('location:../../../app/bienvenida.php');

    }

?>