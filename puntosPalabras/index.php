<?php

declare(strict_types=1);

    const POINTS_TO_REACH = 100;
    $alphabet= array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','ñ','o','p','q','r','s','t','u','v','w','x','y','z');


    do{
        $word = readline("Ingrese una palabra: ");
        $arrayWord = convertToArray($word);

        $wordPoints = calculatePoints($arrayWord, $alphabet);

        $word = implode($arrayWord);

        if($wordPoints != POINTS_TO_REACH){
            echo "La palabra " .$word. " tiene " . $wordPoints. " puntos. Intente con otra palabra.";
        }else{
            echo "La palabra " .$word. " tiene " . $wordPoints. " puntos.";
        }
    }while($wordPoints !== POINTS_TO_REACH);


    function convertToArray(string $word): array{

    $word = strtolower($word);
    $word = str_split($word);
    return $word;
    }

    function calculatePoints(array $arrayWord, array $alphabet): int{

        $puntosPalabra = 0;

        foreach($arrayWord as $char){

            $puntosLetra = 1;
            foreach($alphabet as $letra2){

                if($char == $letra2){
                    $puntosPalabra += $puntosLetra;
                }
                else{
                $puntosLetra++;
                }
            }
        } return $puntosPalabra;
    }
?>