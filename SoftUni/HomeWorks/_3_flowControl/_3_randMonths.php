<form method="post">
    <label for="years">Enter cars</label><input type="text" id="years" name="years" /><input type="submit" name="submit" value="Submit" />
</form>
<?php
if($_POST){
    $months=['Year', 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December', 'Total'];
    $rows=$_POST['years'];
    $year=date('Y');
    $rand=range(0, 999);
    ?>
    <table border="1"><tr>
    <?php
    for($i=0; $i<=$rows; $i++):
        $counter=0;
        shuffle($rand);
        for($j=0; $j<count($months); $j++):
            if($i==0):
                ?>
                <th><?php echo $months[$j]; ?></th>
                <?php
            else:
                if($j==0):
                    ?>
                    <td><?php echo $year - ( $i - 1 ); ?></td>
                    <?php
                elseif($j>0 && $j<count($months) - 1):
                    $counter+=$rand[$j];
                    ?>
                    <td><?php echo $rand[$j]; ?></td>
                    <?php
                else:
                    ?>
                    <td><?php echo $counter; ?></td>
                <?php
                endif;
            endif;
        endfor;
        ?>
        </tr><tr>
        <?php
        $counter=0;
    endfor;
}
?>
</tr></table>