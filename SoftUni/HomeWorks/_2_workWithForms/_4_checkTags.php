<?php
session_start();
if($_POST){
    if(!$_SESSION['result']){
        $_SESSION['result']=0;
    }
    $check='';
    $_SESSION['userInput']=$_POST['html'];
    if($_POST['html']=='body'){
        $_SESSION['result']+=1;
        $check='Valid HTML tag!';
        $_SESSION['color']='white';
    }
    else{
        $check='Invalid HTML tag!';
        $_SESSION['color']='yellow';
    }
}
function showResult($check){
    ?>
    <p>
    <?php
    echo $check;
    ?>
    <br />
    <?php
    ?>
    Score:
    <?php
    echo $_SESSION['result'];
    ?>
    <?php
}
function changeFieldColor(){
    if($_POST){
        return $_SESSION['color'];
    }
}
function regenerateUserInput(){
    if($_POST){
        return $_SESSION['userInput'];
    }
}
?>
<form action="_4_checkTags.php" method="post">
    <label for="htmlField">Enter HTML tags: </label><br />
    <input type="text" value="<?php echo regenerateUserInput(); ?>" style="background: <?php echo changeFieldColor(); ?>;" name="html" id="htmlField" />
    <input type="submit" name="submit" value="Submit" /><br />
</form>
<?php
if($_POST){
    showResult($check);
}
?>