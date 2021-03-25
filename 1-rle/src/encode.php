<?php

function encode_rle(string $str){
    $i=0;
    $count=1;
    $result = '';
    $err = '$$$';

    while ($i < strlen($str)) {
        //Sa recupere le code ASCII  du char
        $char = ord($str[$i]);
        //Vérifier le code ASCII du char courant pour vérifier que c'est bien un char alphabetique
        if (($char >= 65 && $char <= 90) || ($char >= 97 && $char <= 122)) {
            //Vérifier si la chaine est terminée et si le char suivant est le même que actuel
            if ($i+1 < strlen($str) && $i != strlen($str) && $str[$i] == $str[$i+1]){
                //Incremntation
                $count++;
            }else{
                //Ajout du code RLE au résulat final
                $result .= ($count).$str[$i];
                //reinitialisation du compteur
                $count=1;
            }
             }else {
            //Gestion erreur
            return $err;
            echo "\n";
        }
        //Incrementation
        $i++;
    }
    //return $result;
    return $result;
    echo "\n";
}
//echo encode_rle("ze33kfmnazem");
?>
