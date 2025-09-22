<?php

function stringParaBinario ($string){
    $binario = '';
    foreach(str_split($string) as $char){
        $binario .= str_pad(decbin(ord($char)), 8, '0', STR_PAD_LEFT) . ' ';
    }
    return $binario;
}

//exemplo de uso
$frase = "Eduardo Gabriel da Fonseca";
$fraseBinario = stringParaBinario($frase);

//exibe a frase original e a frase em binário
echo "Frase original: " . $frase . "<br>";
echo "Frase em binário: " . $fraseBinario;

?>
