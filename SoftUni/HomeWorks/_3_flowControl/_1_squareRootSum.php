<table border="1">
    <tr><td><strong>Number:</strong></td><td><strong>Sqrt:</strong></td></tr>
<?php
$counter=0;
for($i=0; $i<101; $i++):?>
    <?php
    $sqrt=sqrt($i);
    $counter+=$sqrt;
    ?><tr><td><?php echo $i; ?></td><td><?php echo number_format($sqrt, 2); ?></td></tr>
<?php
    endfor;
?>
<tr><td><strong>Total:</strong></td><td><?php echo number_format($counter, 2); ?></td></tr></table>