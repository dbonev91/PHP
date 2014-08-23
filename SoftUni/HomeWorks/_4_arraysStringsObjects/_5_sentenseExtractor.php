<form method="post">
    <label for="text">Text: </label><textarea id="text" name="text"></textarea><br />
    <label for="word">Word: </label><input type="text" name="word" id="word" /><br />
    <input type="submit" name="submit" value="Submit" />
</form>
<?php
if($_POST):
    $text=$_POST['text'];
    $word=$_POST['word'];
    $sentences=preg_split('/[\?|!|.]/', $text);
    for($i=0; $i<count($sentences); $i++){
        if(preg_match('/ '.$word.' /', $sentences[$i])){
            echo substr(strstr($text, $sentences[$i]), 0, strlen($sentences[$i]) + 1);
        }
    }
    ?>
    <?php
endif;
?>
