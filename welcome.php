<?php 
session_start();
include("inc/header.php");
if(!isset($_SESSION["user"])){
 header("location:index.php");
}
?>
<title>Login System with PHP & MySQL</title>
<?php include('inc/container.php');?>
<div class="container">	
	<div class="col-md-12">   
	<h2>Login System with PHP & MySQL</h2>	
	</div>
	<div class="col-md-6">                    
	<h3>Welcome - <?php echo $_SESSION["user"]; ?></h3>
	<br />
	<p><a href="logout.php">Logout</a></p>	                    
	</div> 	
</div>	
<?php include('inc/footer.php');?>




  