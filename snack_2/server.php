<?php 
    $name = $_GET["name"];
    $mail = $_GET["mail"];
    $age = $_GET["age"];

    if(
        strlen($name) > 3
     && (in_array($_GET["mail"], ".")) 
     && (in_array($_GET["mail"], "@")) 
     && (gettype($age) === integer)
     ){
        echo "Accesso riuscito";
    }
    else{
        echo "Accesso negato";
    }

?>
