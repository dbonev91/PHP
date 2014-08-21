<form action="_2_frequentTags.php" method="post">
    <label for="tags">Enter tags: </label><br />
    <input id="tags" type="text" name="tags" /><input type="submit" name="submit" value="Submit" />
</form>
<?php
if($_POST){
    $frequentArr=[];
    $counter=0;
    $dynamicCounter=0;
    $word='';
    $separatedTags=explode(', ', $_POST['tags']);
    for($i=0; $i<count($separatedTags); $i++){
        if(array_key_exists($separatedTags[$i], $frequentArr)){
            $frequentArr[$separatedTags[$i]]+=1;
            $dynamicCounter=$frequentArr[$separatedTags[$i]];
        }
        else{
            $frequentArr[$separatedTags[$i]]=1;
            $dynamicCounter=$frequentArr[$separatedTags[$i]];
        }
        if($dynamicCounter>$counter){
            $counter=$dynamicCounter;
            $word=$separatedTags[$i];
        }
        $dynamicCounter=0;
    }
    foreach($frequentArr as $key => $value):
        ?>
        <p><?php echo $key.' : '.$value; ?></p>
        <?php
    endforeach;
    ?>
    <p>Most frequent tag is: <?php echo $word; ?></p>
    <?php
}
?>