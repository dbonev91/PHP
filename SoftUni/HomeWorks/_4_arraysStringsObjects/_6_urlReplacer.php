<form method="post">
    <label for="text">Text: </label><textarea id="text" name="text"></textarea><br />
    <input type="submit" name="submit" value="Submit" />
</form>
<?php
if($_POST):
    $text=htmlspecialchars($_POST['text']);
    $text=preg_replace('/&lt;a href=(.*?)&gt;(.*?)&lt;\/a&gt;/', '<strong>[URL=$1]</strong>$2<strong>[/URL]</strong>', $text);
    echo $text;
endif;
?>
