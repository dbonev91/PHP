<form method="post">
    <label for="cars">Enter cars</label><input type="text" id="cars" name="cars" /><input type="submit" name="submit" value="Submit" />
</form>
<?php
    if($_POST){
        ?>
        <table border="1"><tr>
            <th>Car: </th><th>Color: </th><th>Count: </th></tr>
        <?php
        $colors=['red', 'yellow', 'orange', 'green', 'blue', 'gray', 'black'];
        $nums=range(1, 5);
        shuffle($colors);
        shuffle($nums);
        $separatedCars=explode(', ', $_POST['cars']);
        for($i=0; $i<count($separatedCars); $i++):
        ?>
            <tr>
                <td><?php echo $separatedCars[$i]; ?></td>
                <td><?php echo $colors[$i]; ?></td>
                <td><?php echo $nums[$i]; ?></td>
            </tr>
        <?php
        endfor;
        ?>
        </table>
        <?php
    }
?>