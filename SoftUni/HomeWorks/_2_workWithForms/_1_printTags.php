<form action="_1_printTags.php" method="post">
    <label for="tags">Enter tags: </label><br />
    <input id="tags" type="text" name="tags" /><input type="submit" name="submit" value="Submit" />
</form>
<?php
if($_POST){
    $separatedTags=explode(', ', $_POST['tags']);
    for($i=0; $i<count($separatedTags); $i++):
        ?>
        <p><?php echo $i.' : '.$separatedTags[$i]; ?></p>
<?php
endfor;
}
?>