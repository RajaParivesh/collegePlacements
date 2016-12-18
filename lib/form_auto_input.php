<!-- This function will auto input form data which are previously filled -->

 <?php 
	function form_auto_input($data){
		if(isset($data)){
			return $data;
		}else{
			return NULL;
		}	
	}
 ?> 