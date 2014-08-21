<form method="post">
    <input type="text" name="content" />
    <input type="radio" name="whatToDo" id="palindrome" value="palindrome" /><label for="palindrome"> Palindrome</label>
    <input type="radio" name="whatToDo" id="reverse" value="reverse" /><label for="reverse"> Reverse</label>
    <input type="radio" name="whatToDo" id="split" value="split" /><label for="split"> Split</label>
    <input type="radio" name="whatToDo" id="hash" value="hash" /><label for="hash"> Hash</label>
    <input type="radio" name="whatToDo" id="shuffle" value="shuffle" /><label for="shuffle"> Shuffle</label>
    <input type="submit" name="submit" value="Submit" />
</form>
<?php
if($_POST):
    $result=$_POST['content'];
    switch($_POST['whatToDo']){
        case 'palindrome':{
            if(is_palindrome($result)==true){
                echo $result.' is a palindrome';
            }
            else{
                echo $result.' is not a palindrome';
            }
        }
        break;
        case 'reverse':{
            $split=str_split($result);
            for($i=count($split) - 1; $i >= 0; $i--){
                echo $split[$i];
            }
        }
        break;
        case 'split':{
            $split=str_split($result);
            for($i=0; $i<count($split); $i++){
                echo $split[$i].' ';
            }
        }
        break;
        case 'hash':{
            echo md5($result);
        }
        break;
        case 'shuffle':{
            $split=str_split($result);
            shuffle($split);
            for($i=0; $i<count($split)-1; $i++){
                echo $split[$i];
            }
        }
        break;
    }
    ?>
    <?php
endif;
function is_palindrome($string)
{
    $a = strtolower(preg_replace("/[^A-Za-z0-9]/","",$string));
    return $a==strrev($a);
}
?>