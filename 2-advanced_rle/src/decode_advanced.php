<?php
function decode_advanced_rle(string $input_path, string $output_path)
{
    $str = file_get_contents($input_path);
    $array = str_split($str, 1);
    $line = count($array);
    $result = '';
   
    if (filesize($input_path)<0) {
        return 1;
    }else if(filesize($input_path)==0){
        file_put_contents($output_path, "");
        return 0;
    }

    $n = $result = '';//initialisation des var
    $i = 0;

    while($i < $line){// tant que t'es plus petit que la size de ta chaine de char
        if($i < $line && $array[$i] == chr(0)){//motif pas répété
            $i++;
            $n = ord($array[$i]);
            $i++;
            $k=1;
            if ($i+1 > $line){
                return 1;
            }
            while($k<=$n){
                $result.= $array[$i];
                $k++;
                $i++;
                if ($i > $line){
                    return 1;
                }
            }                                                                                                  
        }elseif($i<$line && $array[$i] != chr(0)){//motif répété

            $n = ord($array[$i]);
            $i++;

            $k=1;
            if ($i+1 > $line){
                return 1;
            }
            while($k<=$n){
                $result.= $array[$i];
                $k++;
            }

            $i++;
            
        }else{
            return 1;
        }
    }

    echo $result;
    if(file_put_contents($output_path, $result)){
        return 0;
    }else{
        return 1;
    }
}
?>
