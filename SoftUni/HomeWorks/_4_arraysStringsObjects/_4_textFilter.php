<form method="post">
    <label for="text">Text: </label><textarea id="text" name="text"></textarea><br />
    <label for="banList">Ban list: </label><input type="text" name="banList" id="banList" /><br />
    <input type="submit" name="submit" value="Submit" />
</form>
<?php
    if($_POST):
        $banList=explode(', ', $_POST['banList']);
        $text=$_POST['text'];
        for($i=0; $i<count($banList); $i++){
            $text=preg_replace('/'.$banList[$i].'/i', stringBuilder($banList[$i]), $text);
        }
        echo $text;
        ?>
        <?php
    endif;
function stringBuilder($string){
    $builder='';
    for($i=0; $i<strlen($string); $i++){
        $builder.='*';
    }
    return $builder;
}
?>
