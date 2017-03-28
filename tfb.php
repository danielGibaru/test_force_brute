<?php
/**
 * Logique simple de "force brute" a 6 caratere Alphabet
 *
 */


function tfb(){
    $lettre = array('a','z','e','r','t','y','u','i','o','p','q','s','d','f','g','h','j','k','l','m','w','x','c','v','b','n');
    $code = "";
    echo "6 caractere a force ";
    $Vcode = substr(readline(),0,6);

    while ($code != $Vcode) {
        $code = "";
        for ($i=0; $i < 6; $i++) {
            $Rforce = array_rand($lettre);
            $code .= $lettre[$Rforce];
        }
        echo $code . "\n";
        usleep(1000);
    }
}
tfb();
