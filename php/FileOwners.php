<?php 
$files = array
(
    "Input.txt" => "Jose",
    "Code.py" => "Joao",
    "Output.txt" => "Jose",
    "Click.js" => "Maria",
    "Out.php" => "Maria",
    "Branch.git" => "Antony",
    "IA.jar" => "Maria",

);

$arrayComplementar = array();
$arrayFinal = array();

class FileOwners
{
    public static function groupByOwners($files){
        foreach($files as $key => $value){

            if(isset($arrayFinal[$value]) == false){

                $arrayFinal[$value] = array($key);

            } else if (($arrayFinal[$value])){

                array_push($arrayFinal[$value] , $key);
                
            } 
        }
        return $arrayFinal;
    }
}

var_dump(FileOwners::groupByOwners($files));

?>