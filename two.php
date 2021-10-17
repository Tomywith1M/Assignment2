<html>
<?php
$num=0;
echo '<table style="width:300px" border="1" cellspacing="1" cellpadding="1" align="center">'; 
	for($i=0;$i<9;$i++){
		echo "<tr>";
		for($j=0;$j<9;$j++){
$num=$num+1;
	if($num%2 == 0){
		echo '<td height="35" width="35" style="background-color:red;"></td>'; 
   }
	else{
		echo '<td height="35" width="35" style="background-color:black;>"</td>';
  }
 }
echo "</tr>";
}
echo "</table></html>";
?>
</html>