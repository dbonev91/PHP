<form method="post">
    <label for="nums">Input numbers: </label><input type="text" id="nums" name="nums" /><input type="submit" name="submit" value="Submit" />
</form>
<?php
if($_POST):
    ?>
    <table border="1">
    <?php
    $separatedNums=explode(', ', $_POST['nums']);
    for($i=0; $i<count($separatedNums); $i++):
        $counter=0;
        $strNum=$separatedNums[$i].'';
        for($j=0; $j<preg_match_all("/[0-9]/", $strNum); $j++):
            $counter+=ceil($strNum[$j]);
        endfor;
        if(preg_match_all("/[a-zA-Z]/", $strNum)>0){
            $counter='I cannot sum that!';
        }
        ?>
        <tr><td><?php echo $separatedNums[$i]; ?></td><td><?php echo $counter; ?></td></tr>
        <?php
    endfor;
    ?>
    </table>
    <?php
endif;
?>