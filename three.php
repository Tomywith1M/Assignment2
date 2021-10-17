<html>
<?php
$arr = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August','September', 'October', 'November', 'December');
	for ($i = 0; $i <= 11; $i++){
		echo "$arr[$i], ";
}
		echo "<br>";
?>

<?php
$arr = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August','September', 'October', 'November', 'December');
sort($arr);
	for ($i = 0; $i <= 11; $i++) {
		echo "$arr[$i], ";
}
		echo "<br>";
?>

<?php
$arr = array ('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August','September', 'October', 'November', 'December');
	foreach ($arr as &$val) {
		echo "$val, ";
}
		echo "<br>";
?>

<?php
$arr = array ('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August','September', 'October', 'November', 'December');
sort($arr);
	foreach ($arr as &$val) {
		echo "$val, ";
}
?>
</html>