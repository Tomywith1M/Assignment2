<html>
<?php
$bite = (rand(1,100));
function isBitten($bite){
		if($bite >= 50){
	return true;
		}else{
	return false;
	}
}
	if(isBitten($bite)){
		echo"Charlie ate my lunch!";
	}else{
		echo "Charlie did not eat my lunch!";
}
?>
</html>