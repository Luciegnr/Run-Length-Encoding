<?php

include ('src/encode.php');
include ('src/decode.php');

if($argc == 2){
    echo "";
} else if ($argc == 3) {
    if ($argv[1] == "encode") {
        echo encode_rle($argv[2]);
        echo "\n";

    } else if ($argv[1] == "decode") {
         echo decode_rle($argv[2]);
         echo "\n";
    } else {
        echo "$$$\n";
         }
} else {
    echo "$$$\n";
}
?>
