<?php  

function getAddressByCep($cep){  
    $resultado = @file_get_contents('https://api.postmon.com.br/v1/cep/'.urlencode($cep));     
    return $resultado;  
}  
 
echo "<pre> Array Retornada: 
 ".print_r(getAddressByCep(13566400), true)."</pre>";  
  
?>  