<?php include"./controller/calculationController.php";?>

<form method="post">
    <h2>Calculadora de mayoria de edad</h2>
    <div class="form_row">
        <div>
            <label for="name">Nombre</label>
            <input id="name"type="text" name="name" placeholder="jhon">

        </div>
        <br>
        <div>
            <label for="age-person">Edad</label>
            <input id="age-person"type="number" name="age_person" placeholder="12" min="0" max = "100" required > 
        </div>

    </div>
        <button>Calcular</button>
       
        <div class="volver">
        <a href="../index.php">Volver</a>
        </div>

</form>


