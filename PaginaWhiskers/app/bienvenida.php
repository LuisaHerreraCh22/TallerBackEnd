<?php

session_start();
    include '../db/conexion.php';
    
    $nombre = $_SESSION['nombre'];
    $apellido = $_SESSION['apellido'];
    $nacimiento = $_SESSION['nacimiento'];
    $usuario = $_SESSION['usuario'];
    $email = $_SESSION['email'];

    $nombre_completo = $nombre.' '.$apellido; 




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenid@</title>
    <link rel="stylesheet" href="../assets/css/style_app.css">

    <script src="https://kit.fontawesome.com/27010df775.js" crossorigin="anonymous"></script>
    <script src="https://cdn.lordicon.com/lordicon-1.1.0.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
<p class="bienvenida"><?php echo "Bienvenid@"." ". $nombre_completo?></p>
    <section id="general_section">
        <div class="left_menu">
            <menu-main></menu-main>
        </div>
        <div class="central">
            <h1>Registra tus mascotas</h1>
            <hr class="sepa">
            <div class="add_category">
                <h2>Agregar mascota: </h2>
                <form class="form-group row form2" action="../back/back_app/modulo1/add_pet.php" method="POST">
                    <!--espacio del input con icono-->
                    <label for="type_pet">Mi mascota es:</label>
                    <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <lord-icon class="icons_form" src="https://cdn.lordicon.com/odgzzleh.json"
                                    trigger="loop" delay="500">
                                </lord-icon>
                            </div>
                        </div>
                        <select class="form-control" name="type_pet" id="type_pet" required>
                            <option value="">seleccione un opción</option>
                            <option value="0">Perro</option>
                            <option value="1">Gato</option>
                            <option value="2">Otro</option>
                        </select>
                    </div>

                    <!--espacio del input con icono-->
                    <label for="name_pet">Nombre de la mascota</label>
                    <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <lord-icon class="icons_form" src="https://cdn.lordicon.com/kqvvdrij.json"
                                    trigger="loop" delay="500">
                                </lord-icon>
                            </div>
                        </div>
                        <input type="text" name="name_pet" class="form-control" id="name_pet"
                            placeholder="Nombre de la mascota" required>
                    </div>
                    <!--espacio del input con icono-->
                    <label for="age_pet">Edad</label>
                    <div class="input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <lord-icon class="icons_form" src="https://cdn.lordicon.com/gthsqqtr.json"
                                    trigger="loop" delay="500">
                                </lord-icon>
                            </div>
                        </div>
                        <input type="number" name="age_pet" class="form-control" id="age_pet"
                            placeholder="Nombre de la mascota" required>
                    </div>

                    <button type="submit" class="btn btn-info mb-2" name="add_pet">Guardar</button>
                </form>

            </div>


           
            </div>
        </div>


    </section>
    <script src="../js/component_menu.js"></script>
</body>

</html>