<?php
$name='Gosho';
$phone='0884 556 778';
$age=17;
$address='Zadruga 18';
info($name, $phone, $age, $address);
function info($name, $phone, $age, $address){
    echo '<table>';
    echo '<tr><th>Name: </th><td>'.$name.'</td></tr>';
    echo '<tr><th>Phone: </th><td>'.$phone.'</td></tr>';
    echo '<tr><th>Age: </th><td>'.$age.'</td></tr>';
    echo '<tr><th>Address: </th><td>'.$address.'</td></tr>';
    echo '</table>';
}
?>