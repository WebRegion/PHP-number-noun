<?php 
if (isset($_POST['val'])&&$_POST['val']<>'') {
  $flag=true;
	
function obrabotka($val, array $znach) {
    $slova = array(2, 0, 1, 1, 1, 2);
    return sprintf($znach[ ($val%100>4 && $val%100<20)? 2 : $slova[min($val%10, 5)] ], $val);
}
}
?>
<html>
<head><title>Тест</title></head>
<body>
<?php
echo (($flag)?obrabotka($_POST['val'], array("%d заявка", "%d заявки", "%d заявок")).'<br/><br/>':'');
?>
<form method="post" action="#">
<input type="number" value="" name="val" pattern="\d+" placeholder="12345">
<input type="submit" value="Отправить">
</form>
</body>
</html>