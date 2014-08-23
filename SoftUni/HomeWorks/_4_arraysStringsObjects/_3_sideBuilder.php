<form method="post">
    <label for="categories">Categories: </label>
    <input type="text" required id="categories" name="categories" />
    <label for="tags">Tags: </label>
    <input type="text" required id="tags" name="tags" />
    <label for="months">Months: </label>
    <input type="text" required id="months" name="months" />
    <input type="submit" name="submit" value="Submit" />
</form>
<?php
    if($_POST):
        foreach($_POST as $key => $value){
            if($key!='submit'){
                makeResult($value);
            }
        }
    endif;
function splitCounter($expression){
    $num=explode(', ', $expression);
    return count($num);
}
function partsOfInput($expression, $counter){
    $split=explode(', ', $expression);
    return $split[$counter];
}
function makeResult($post){
    ?>
    <ul>
        <?php
        for($i=0; $i<splitCounter($post); $i++){
            ?>
            <li>
                <?php
                echo partsOfInput($post, $i);
                ?>
            </li>
        <?php
        }
        ?>
    </ul>
    <?php
}
?>
