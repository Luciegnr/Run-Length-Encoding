<?php

function decode_rle(string $str)
{
        $tab= array();
        $i = 0;
        while ($i<strlen($str)) {// tu fous la chaine de char dans un tab
            $tab[$i]=$str[$i];
            $i++;
        }

        if ($tab === '') {//si tab vide, return rien parce que tu dois r return
           return '';
        }

        if(is_numeric($tab[strlen($str)-1])){//si le dernier char est un chiffre, tu next
            return "$$$";
        }

        foreach($tab as $char){//tu vérifie que dans le tab y'a que des chiffres et des lettres
            if(!ctype_alnum($char)){
                return "$$$";
            }
        }

        
        $n = $decoded = '';//initialisation des var
        $i = 0;

        while ($i < strlen($str)) {// tant que t'es plus petit que la size de ta chaine de char
            if ($tab[$i++] != null) {//c'est le code d'internet ptdrr mais je crois que tu regarde char par char au lieu de faire un foreach ( oe ça remplace le foreach)
                 $i--;
                 $char = $tab[$i];
                 }
              $k=1;
              if (is_numeric($char)) {//si le char actuel est un chiffre tu le fous dans n
                    $n .= $char;
              } else if ($char != null){//sinon si le char est pas null
                  while($k<=$n){//tant que k plus petit que n
                      $decoded .= $char;// tu écris dans ta str initialisé au départ (tu la remplis au fur et à mesure, selon n du coup
                      $k++;
                  }
                  $n = '';
                  // } else {
                  //break;
              }else {// si c'est ni un chiffre ni une lettre, tu next
                  echo $err;
                  echo "\n";
              }
              $i++;//pour parcourir ton while
        }
        return $decoded;
}

?>
