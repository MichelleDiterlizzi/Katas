<?php

do{

    $number = readline("Introduzca el número a continuación : ");

    if(filter_var($number, FILTER_VALIDATE_INT) !== false && $number > 0){


        if($number%2 == 0 ){

            for($i=$number; $i>=0; $i--){

                if($i%2 == 0){
                    echo $i;
                }
            }
        }
        else{

            for($i=$number; $i>0; $i--){

                if($i%2 != 0 ){
                echo $i;
                }

            }
        }
    }

    else{

        echo "Valor no válido. ";
    }

}while(filter_var($number, FILTER_VALIDATE_INT) === false || $number < 0 );

?>