<?php
echo getMondays(8);
function getMondays($month)
{
    for($i=1; $i<32; $i++){
        $dayName=date('l', mktime(0, 0, 0, $month, $i, 2014));
        if($dayName=='Sunday'){
            echo date('jS F, Y', mktime(0, 0, 0, $month, $i, 2014)).'<br />';
        }
    }
}
?>