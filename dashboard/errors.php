<?php  if (count($errors) > 0) : ?>
  <div class="error">
  	<?php
	function getError($var)
	{	
		if($var=="required"){
			printf("<p>The fields are required, please fill in the form! </p>");
		}
		else if($var=="match"){
			printf("<p>The two passwords do not match!</p>");
		}else if($var=="exists"){
			printf("<p>Username/email already exists!</p>");
		}else if(preg_match("/combination/", $var)){
			printf("<p>Wrong username/password combination!</p>");
		}else if(preg_match("/requirements/", $var)){
			printf("<p>Password requires at least one uppercase, one number and more than 8 characters!</p>");
		}else{
			printf("<p>Invalid email format.</p>");
		}
	}
	foreach($errors as $error)
		$first=true;
		if(stripos($error, 'required') !== false){
			getError("required");
			$first=false;
		}else if(stripos($error, 'match') !== false){
			getError("match");
			$first=false;
		}else if(stripos($error, 'exists') !== false){
			getError("exists");
			$first=false;
		}else{
			getError($error);
			$first=false;
		}
  	?>
  </div>
  	
<?php  endif ?>
<style>
.error{
	color:red;
	background-color: white;
	width: max-content;
	margin:0 auto 0 auto;
	border-radius:5px;
	padding:0px 20px;
	border:solid 1px red;
}
</style>