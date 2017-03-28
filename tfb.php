<?php
/**
 * Logique simple de "force brute" a 6 caratere Alphabetique
 *
 */
function tfb(){
    $lettre = array('a','z','e','r','t','y','u','i','o','p','q','s','d','f','g','h','j','k','l','m','w','x','c','v','b','n');
    $code = "";
    $ArrayCode=[];
    echo "caractere a force ";
    $Vcode = readline();
    $n = strlen($Vcode);
    while ($code != $Vcode) {

        $code = "";
        for ($i=0; $i < $n; $i++) {
            $Rforce = array_rand($lettre);
            $code .= $lettre[$Rforce];
        }
        if(!in_array($code , $ArrayCode)){
            array_unshift($ArrayCode, $code );
            usleep(1000);
            echo $code . "\n";
        }
    }
    echo 'mdp :'.$code."\n";
}
tfb();
