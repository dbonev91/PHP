<form method="post">
    <label for="words">word: </label>
    <input type="text" id="words" name="words" />
    <input type="submit" name="submit" value="Submit" />
</form>
<?php
    if($_POST){
        $arrFromInput=str_split($_POST['words']);
        for($i=0; $i<count($arrFromInput); $i++){
            if(ord($arrFromInput[$i]) % 2 == 0):
                ?>
                <span style="color: red"><?php echo $arrFromInput[$i]; ?></span>
                <?php
            else:
                ?>
                <span style="color: blue"><?php echo $arrFromInput[$i]; ?></span>
                <?php
            endif;
        }
    }
?>
