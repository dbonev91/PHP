<?php
$n=12;
echo callNums($n);
$n=1243;
echo callNums($n);
$n=170;
echo callNums($n);
function callNums($n){
    $result='';
    if($n<102){
        $result='No';
    }
    else{
        for($i=102; $i<=$n; $i++){
            $result.=$i;
            if($i!=$n){
                $result.=', ';
            }
        }
    }
    return $result.'<br /><br />';
}
?>