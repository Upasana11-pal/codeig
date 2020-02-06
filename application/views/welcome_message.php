<?php
?>
<html>
<tittle>LOGIN FORM</tittle>
<head>

</head>
	<body>
	
		<div id="row" style="height:300px; width:1350px; background-color:;">
		<div class="col-sm-6" style="background-color:; height:300px; width:675;  float:left;">
		<form action="<?php echo base_url();?>/index.php/welcome/auth" method="post" >
		<input type="text" placeholder="UserName" name="email">      USERNAME
		</br>
		</br>
			<input type="password" placeholder="Password" name="password">       PASSWORD
			</br>
			</br>
			<input type="submit" value="Submit">
			</form>
		</div>
		
		<div class="col-sm-6" style="background-image:url(<?php echo base_url();?>assets/img/v1.jpg);  background-color:; height:300px; width:675; float:left;">

		</div>
		</div>
		<div ><?php if($this->uri->segment("3")=="fail"){ echo "wrong userid password"; }?></div>
	</body>

</html>