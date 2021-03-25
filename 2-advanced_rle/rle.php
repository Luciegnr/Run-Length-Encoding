<?php

include ('src/encode_advanced.php');
include ('src/decode_advanced.php');
$lire =0;
$input = '';
$output = '';
$count_input = 0;
$param =0;

//print_r($argv);

if($argc == 4) {
    while ($lire < $argc) {
        if($argv[$lire] != "encode" && $argv[$lire] != "decode" && $lire > 0) {
                if($count_input == 0){
                    $input = $argv[$lire];
                    $count_input = 1;
                    $lire++;
                }
                if($input != '' && $argv[$lire] != "encode" && $argv[$lire] != "decode"){
                    $output = $argv[$lire];
                    break;
                }
                
        }
        $lire ++;
    }
    //verification si output = fichier
    if(is_dir($input) == false && is_dir($output) == false){
        while($param < $argc) {
            if($argv[$param] == "encode") {
                if(encode_advanced_rle($input, $output) == 0){
                    echo "OK";          
                    return "OK";
                }else{
                    echo "KO";
                    return "KO";
                }
            }elseif ($argv[$param]=="decode") {
                //decode_advanced_rle($input,$output);
                if(decode_advanced_rle($input, $output) == 0){
                    echo "OK \n";
                    return "OK";
                }else {
                    echo "KO \n";
                    return "KO";
                }
            }
            $param ++;
        }
    }
}
//print_r(encode_advanced_rle($input, $output));
?>
