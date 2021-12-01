<?php
$file = fopen("./input.txt","r");
$input = array();
while(!feof($file)){
    $data = fgets($file);
    $input[] = $data;
}
fclose($file);



$prev = $input[0];
$cnt = 0;

for ($i=0; $i < count($input) ; $i++) { 
    if($input[$i] > $prev){
        $cnt++;
    }
    $prev = $input[$i];
}
echo $cnt;
?>