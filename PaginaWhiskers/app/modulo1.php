<?php

session_start();
    include '../db/conexion.php';
    
    $nombre = $_SESSION['nombre'];
    $apellido = $_SESSION['apellido'];
    $nacimiento = $_SESSION['nacimiento'];
    $usuario = $_SESSION['usuario'];
    $email = $_SESSION['email'];

    $nombre_completo = $nombre.' '.$apellido; 


    $query_pet = mysqli_query($conexion, "SELECT * FROM pet_user
    WHERE id_person = $usuario");


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenid@</title>
    <link rel="stylesheet" href="../assets/css/style_app.css">

    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <script src="https://cdn.lordicon.com/lordicon-1.1.0.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
    <section id="general_section">
        <div class="left_menu">
            <menu-main></menu-main>
        </div>
        <div class="central">
            <h1>Edita tus mascotas</h1>
            <hr class="sepa">

            <div class="update_pet">
                <h2>Mis mascotas</h2>
                <div class="cont_table table2">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Nombre </th>
                                <th scope="col">Tipo</th>
                                <th scope="col">Edad</th>
                                <th scope="col">Editar</th>
                                <th scope="col">Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                
                while ($datos = mysqli_fetch_array($query_pet)){
                    $id_pet = $datos['id_pet'];
                    $type_pet = $datos['type_pet'];
                    $name_pet = $datos['name_pet'];
                    $age_pet = $datos['age_pet'];

                    if ($type_pet == 0) {
                        $type_pet_s = 'Perro';
                    }elseif($type_pet == 1){
                        $type_pet_s = 'Gato';
                    }else {
                        $type_pet_s = 'Otro';
                    }


                echo '<tr>
                            <td>'.$name_pet.'</td>
                            <td>'.$type_pet_s.'</td>
                            <td>'.$age_pet .'</td>

                            <td> <i class="bi bi-pencil-square"></i>
                            </td>

                            <td> <i class="bi bi-trash3"></i>
                            </td>
                        </tr>';
                }
                
                ?>
                        </tbody>
                    </table>
                </div>
  
        </div>


    </section>
    <script src="../js/component_menu.js"></script>
</body>

</html>