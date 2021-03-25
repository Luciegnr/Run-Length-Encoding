<?php

function encode_advanced_rle(string $input_path, string $output_path) {
    $i = 0;
    $str = file_get_contents($input_path);
    $var= strlen($str);
    $ligne = 0;
    $rule = 0;
    while ($var > $ligne){
        $ligne ++; 
    }
    $array = str_split($str,1);
    $ligne = count($array);
    //print_r($array);
    $a = 0 ;
    $count = 1;
    $result = '';
    $tmp = '';

    if(filesize($input_path)==0){
        file_put_contents($output_path, "");
        return 0;
    }
    
    if($ligne == 1){
        $result .= chr(0).chr(1);
        $result .= $array[0];
        file_put_contents($output_path, $result);
        return 0;
    }elseif($ligne == 0){
        file_put_contents($output_path, "");
        return 0;
    }
    
    if(filesize($output_path)>0){//effacer le contenu du fichier de sortie
        $fp = fopen($output_path, 'r+');                                                                                                                        
        ftruncate($fp,0);//efface tout tu peux regarder ce que fait cette fonction sur google stv mdr
        fclose($fp);
    }
    
    if (filesize($input_path)<0) {
        return 1;
    }
    
    while ($i+1 < $ligne){
        if ($i+1 < $ligne && $i != $ligne && $array[$i] == $array[$i+1]){
            $count=1;
            // $i++;
            while ($i+1 <= $ligne && isset($array[$i]) && isset($array[$i+1]) && $array[$i] == $array[$i+1] && $count<=254) {
                $i++;
                $count++;
            }
            $result .= chr($count).$array[$i];
            $i=$i+1;
            
        }elseif($i+1 <= $ligne && $i != $ligne){
            $count=0;
            $result .= chr(0);
            
            do{
                $tmp .= $array[$i];
                $count++;
                $i++;
                if ($i== $ligne -1) {
                    $tmp .= $array[$i];
                    $count ++;
                }
            } while($i+2 <= $ligne && ($array[$i] != $array[$i+1] && $count<=254)&& $rule == 0);
            
            if($i >= $ligne){
                $tmp .= $array[$i];
                $count++;
            }
            $result .= chr($count).$tmp;
            $tmp='';
        }           
        //$i++;
    }
    //echo $result;
    $fp=fopen($output_path, "w");
    if(fwrite($fp,$result)){//si on arrive à écrire (si fwrite return true) encode return 0
        fclose($fp);   
        return 0; //ici return 0 si tout va bien
    }else{// sinon on ferme le fichier et on return 1
        fclose($fp);
        return 1;//return 1 s'il arrive pas à écrire dedans, mais ça gère paas toutes les erreurs
        }
}
//echo encode_advanced_rle('a.bmp',"test.txt");
?>
