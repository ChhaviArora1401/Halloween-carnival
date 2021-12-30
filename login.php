<?php 
session_start();
include("inc/header.php");
include_once("inc/db_connect.php");

$errorMessage = '';
if(!empty($_POST["login"]) && $_POST["email"]!=''&& $_POST["loginPass"]!='') {	
	
	$email = $_POST['email'];
	
	$password = $_POST['loginPass'];
	
	$password = $password;
	
	$sqlQuery = "
		SELECT username 
		FROM members 
		WHERE email='".$email."' AND password='".$password."'";
	$resultSet = $connect->query($sqlQuery);		

	if($resultSet->num_rows){
		
		$userDetails = $resultSet->fetch_assoc();
		
		$_SESSION["user"] = $userDetails['username'];
		
		header("Location:welcome.php");
		
	} else {	
	
		$errorMessage = "Invalid login!";	
		
	}
} else if(!empty($_POST["email"])){
	
	$errorMessage = "Enter Both user and password!";
	
}	
?>
<title>login</title>
<?php include('inc/container.php');?>
<div class="container">	
	<div class="col-md-12">   
	<h2 class="text-center"> Greetings Stranger...</h2>	
	<br>	
	<p class="text-center"> <b>Do not attempt to login if you are not from halloween's corporation.</b></p>
	</div>
	<div class="col-md-6 text-center middle" style="padding-top: 5%;">                    
		<div class="panel panel-info">
			<div style="padding-top:30px" class="panel-body">
				<?php if ($errorMessage != '') { ?>
					<div id="login-alert" class="alert alert-danger col-sm-12"><?php echo $errorMessage; ?></div>                            
				<?php } ?>
				<form id="loginform" class="form-horizontal" role="form" method="POST" action="">                                    
					<div style="margin-bottom: 25px" class="input-group">
						 <span class="input-group-addon lab">E-mail</span><input type="text" class="form-control" id="email" name="email" placeholder="email">                         
					</div>                                
					<div style="margin-bottom: 25px" class="input-group">
						<span class="input-group-addon lab">Password</span>
						<input type="password" class="form-control" id="loginPass" name="loginPass" placeholder="password">
					</div>            
					<div style="margin-top:10px" class="form-group">                               
						<div class="col-sm-12 controls">
						  <input type="submit" name="login" value="Login" class="btn btn-success boxl">						  
						</div>
					</div>                                
				</form>   
			</div>                     
		</div>  
	</div>
</div>	
<?php include('inc/footer.php');?>  