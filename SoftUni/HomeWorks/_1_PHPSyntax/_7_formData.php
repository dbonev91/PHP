<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<form action="_7_formData.php" method="post">
    <input type="text" name="name" placeholder="Name" /><br />
    <input type="text" name="age" placeholder="Age" /><br />
    <input type="radio" name="sex" value="male" /> Male<br />
    <input type="radio" name="sex" value="female" /> Female<br />
    <input type="submit" name="submit" />
</form>
<?php
if(isset($_POST['submit'])){
    echo $_POST['name'].'<br />';
    echo $_POST['age'].'<br />';
    echo $_POST['sex'].'<br />';
}
?>
</body>
</html>