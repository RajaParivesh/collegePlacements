<?php function dropdown($data,$attribute_name) {
	echo'<select name='.$attribute_name.' value="" required>';
		echo'<option value="">---</option><br><br>';
	while ($row = mysqli_fetch_object($data)) {
			
			echo '<option value='.$row->id.'>';	    
		    echo $row->name;
		    
		    echo '</option>';
		}
	echo'</select>';
}
 ?>