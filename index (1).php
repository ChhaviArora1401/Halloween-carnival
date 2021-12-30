<?php 
session_start();
include("inc/header.php");
if(!isset($_SESSION["user"])){
}
?>
<title></title>
<?php include('inc/container.php');?>

<div class="main-text"></div>
	<div class="container" style="color: #d69e7d;">	
	<div class="col-md-12">   
	<div>
		<h1><b> Halloween's </b> Official Forum</h1>	
		<span id="sh">Halloween's forum is back!</span>
	</div>
	<br>
	<p id="quote"> Welcome, stranger! This is a place to exchange your Halloween stories and wishes. </p>

<div class="col-md-12 one">
	<div class="col-md-6">
		<h4> Latest Comments </h4>
		<p> <span class="blue"> Kid 1 </span> I am so excited for Halloween this year!</p>
		<br>
		<p> <span class="blue"> Kid 2 </span> I love candy!</p>
		<br>
		<p> <span class="blue"> Kid 1 </span> I will be the president of Mars.</p>
	</div>
	<div class="col-md-6">
		<h4> Popular Topics </h4>
		<p style="margin-bottom: 7%;"> <h3 class="gray"> Gifts <br> </h3>  Video games,</p>
		<p> <h3 class="gray"> Questions <br> </h3> I will be the president of Mars. </p>
	</div> 
</div>
<div class="col-md-12 one">
		<div class="col-md-6 box"> 
			<span class="per"> 50% </span> 
		<div style="padding-top: 5%;">		
		<span class="kids">of kids</span> <br>
	are strugling to choose a gift for themselves. 
		</div>
	</div>

	<div class="col-md-6 box "> 
		<span class="per"> 0% </span> 
		<div style="padding-top: 5%;">
			<span class="kids">of kids</span> <br>
		 will not get gifts. 
		</div>
	</div>
</div>
	</div>
	<div class="col-md-6 text-left">	
	 By ACE Security Team with &lt;3
	</div> 	
	<div class="col-md-5 text-right">	
	  
	   <div class="hhhhh">Login
 		<span class="hhtext">login.php</span>
	</div>   
	</div> 	
</div>	
<?php include('inc/footer.php');?>  