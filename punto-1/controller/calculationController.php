<?php

$result=0;
$message="";

if(isset($_POST["first_number"])&& isset($_POST["second_number"])&& isset($_POST["operation_type"])){



    $firstNumber= floatval($_POST["first_number"]);
    $secondNumber=floatval($_POST["second_number"]);
    $operationType=$_POST["operation_type"];

    if($firstNumber!=null && $secondNumber!=null){

    switch($operationType){
        case"sumar":
            $result=  $firstNumber+$secondNumber;
            $message= "El resultado de la suma  de los numeros " .$firstNumber." + ".$secondNumber." es: " .$result;
            break;
        case"restar":
            $result= $firstNumber-$secondNumber;
            $message= "El resultado de la resta de los numeros " .$firstNumber." - ".$secondNumber." es: " .$result;
            break;    
        case"multiplicar":
            $result=  $firstNumber*$secondNumber;
            $message= "El resultado de la multiplicación de los numeros " .$firstNumber." x ".$secondNumber." es: " .$result;
            break;
        case"dividir":
            $result= $firstNumber/$secondNumber;
            $message= "El resultado de la división de los numeros " .$firstNumber." / ".$secondNumber." es: " .$result;
            break;   
        default:
            $message="Selecione una operacion valida";        

    }
    
}else{
    $message="Los dos números son obligatorios";
}

}

?>