<form method="post">
    <label for="start">Start: </label><input type="text" id="start" name="start" />
    <label for="end">End: </label><input type="text" id="end" name="end" />
    <input type="submit" name="submit" value="Submit" />
</form>
<?php
    if($_POST):
        $start=$_POST['start'];
        $end=$_POST['end'];
        for($i=$start; $i<=$end; $i++):
            if(checkPrime($i)==true){
                echo '<strong>'.$i.'</strong>';
            }
            else{
                echo $i;
            }
            if($i!=$end):
                echo ', ';
                ?>
                <?php
            endif;
        endfor;
    endif;
function checkPrime($num){
    if($num == 1){
        return false;
    }
    if($num == 2){
        return true;
    }
    if($num % 2 == 0){
        return false;
    }
	for($i = 3; $i <= ceil(sqrt($num)); $i = $i + 2) {
        if($num % $i == 0){
            return false;
        }
    }
    return true;
}
?>