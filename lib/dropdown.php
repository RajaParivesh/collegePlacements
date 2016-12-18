<?php function dropdown($data,$attribute) {
		echo '<select name='.$attribute['name'].' value="" required >';
		echo'<option value="">---</option><br><br>';
	while ($row = mysqli_fetch_object($data)) {
			
			if ($attribute['default']==$row->id){
				echo '<option value='.$row->id.' selected>';	    
			}else{
				
				echo '<option value='.$row->id.'>' ;	    
			}

		  	echo $row->name;
		    
		    echo '</option>';
		}
	echo '</select>';
}
 ?>
		

