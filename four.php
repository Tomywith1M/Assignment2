 <html>
 <?php
 $arr = array("Chama Gaucha" => 40.50, "Aviva by Kameel" => 15.00, "Bone’s Restaurant" => 65.00,"Umi Sushi Buckhead" => 40.50,"Fandangles" => 30.00,"Capital Grille" => 60.50,"Canoe" => 35.50, "One Flew South" => 21.00,"Fox Bros. BBQ" => 15.00, "South City Kitchen Midtown" => 29.00);
  function Tab($x){
    $a = '<table border=".5">';
    $a .= '<tr>';
    $a .= '<th>' . 'Restaurant Name'. '</th>';
    $a .= '<th>' .' Restaurant Average Cost'. '</th>';
    $a .= '</tr>';
      foreach( $x as $key=>$value){
        $a .= '<tr>';
        $a .= '<td>' . $key." " . '</td>';
        $a .= '<td>' . $value . '</td>';
        $a .= '</tr>';
    }
	    $a .= '</table>';
		 echo $a;
  }	
 function Psort($x){
    asort($x); 
    Tab($x); 
 } 	
 function Nsort($x){
	ksort($x);            
    Tab($x);
}
 echo "Table:";
  Tab($arr);

 echo "Price:";
  Psort($arr);

 echo"Name:";
  Nsort($arr);
?>
</html>