<form action="_3_Calculate%20Interest.php" method="post">
    <label for="amount">Enter amount: </label><input type="text" name="amount" id="amount" /><br />
    <input type="radio" name="currency" value="USD" id="USD" /><label for="USD">USD</label>
    <input type="radio" name="currency" value="EUR" id="EUR" /><label for="EUR">EUR</label>
    <input type="radio" name="currency" value="BGN" id="BGN" /><label for="BGN">BGN</label><br />
    <label for="interest">Compound interest amount: </label><input type="text" id="interest" name="interest" /><br />
    <select name="duration">
        <option id="1">6 Months</option>
        <option id="1">1 Year</option>
        <option id="1">2 Years</option>
        <option id="1">5 Years</option>
    </select>
    <input type="submit" name="submit" value="Submit" />
</form>
<?php
if($_POST){
    $amount=$_POST['amount'];
    $interests=$_POST['interest'];
    $duration=$_POST['duration'];
    $currency=$_POST['currency'];
    $result = round($amount * pow(1 + (($interests / 100) / 12), $duration / 12 * 12), 2);
    echo $result.' '.$currency;
}
?>