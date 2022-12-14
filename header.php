<?php
session_start();
error_reporting(E_ALL & ~E_NOTICE  &  ~E_STRICT  &  ~E_WARNING);
date_default_timezone_set("Asia/Calcutta");
$dt =date("Y-m-d");
include("dbconnection.php");
/* if(isset($_GET['locationid']))
{
	$_SESSION['locationid'] = $_GET['locationid'];
} */
?>
<!DOCTYPE html>
<html>
<head>
<title>Sri Lakshmi Grocery</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Super Market Web App" />
<!-- <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); -->
	<!-- 	function hideURLbar(){ window.scrollTo(0,1); } </script> -->
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript" src="js/search.js"></script>
<script type="text/javascript">

</script>
<link href="css/jquery.dataTables.min.css" rel="stylesheet">
<script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
<!-- start-smoth-scrolling -->
<?php
if(isset($_SESSION['staffid']))
{
?>
<style>
.w3l_offers
{
	width: 25%;
}
.agile-login
{
	width: 75%;
}
</style>
<?php
}
?>
<style>
 .err_msg
   {
	color: red;  
	animation: blink-animation 3s steps(5, start) infinite;
  -webkit-animation: blink-animation 3s steps(5, start) infinite;
	}
	</style>
</head>
<body>
	<div class="agileits_header">
		<div class="container">
			<div class="w3l_offers">
				<p>		
					<a href="index.php">HOME</a>
					| 
					<a href="about.php">ABOUT</a>
					| 
					<a href="contact.php">CONTACT</a>
				</p>
			</div>
			<div class="agile-login" style="padding: 0px 0;float: right;">

							<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
<ul class="nav navbar-nav" style="float: right;">
<?php
if(isset($_SESSION['staffid']))
{
?>
	<li class="active" style="padding: 0em 0em;"><a href="dashboard.php" class="act"  style="padding-bottom: 0px;">Dashboard</a></li>	
	<!-- Mega Menu -->

	<li class="dropdown" style="padding: 0em 0em;">
		<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="padding-bottom: 0px;" >Entry<b class="caret"></b></a>
		<ul class="dropdown-menu multi-column columns-3">
			<div class="row">
				<div class="multi-gd-img">
					<ul class="multi-column-dropdown">
						<h6>Product Entry</h6>
						<li><a href="product.php">Add Product</a></li>
						<li><a href="viewproduct.php">View Product</a></li>
						<li><a href="category.php">Add Category</a></li>
						<li><a href="viewcategory.php">View Category</a></li>
					
					</ul>
				</div>
			</div>
		</ul>
	</li>
	

	
	<li class="dropdown" style="padding: 0em 0em;">
		<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="padding-bottom: 0px;" >Report<b class="caret"></b></a>
		<ul class="dropdown-menu multi-column columns-3">
			<div class="row">
				<div class="multi-gd-img">
	<ul class="multi-column-dropdown">
		<h6>Report Menu</h6>
	
		<li><a href="viewcustomer.php">Customer A/c Report</a></li>
	</ul>
				</div>

			</div>
		</ul>
	</li>
	
	<li class="dropdown" style="padding: 0em 0em;">
		<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="padding-bottom: 0px;" >My A/c<b class="caret"></b></a>
		<ul class="dropdown-menu multi-column columns-3">
			<div class="row">
				<div class="multi-gd-img">
	<ul class="multi-column-dropdown">
		<h6>Admin Account</h6>
		<li><a href="staffprofile.php">My Profile</a></li>
		<li><a href="staffchangepassword.php">Change Password</a></li>
		<li><a href="staff.php">Add Staff</a></li>
		<li><a href="viewstaff.php">View Staff</a></li>
		<li><a href="logout.php">Logout</a></li>
	</ul>
				</div>
			</div>
		</ul>
	</li>
	
	<li style="padding: 0em 0em;"><a href="logout.php" style="padding-bottom: 0px;">Logout</a></li>
	
<?php
}
else if(isset($_SESSION['custid']))
{
?>
	<li class="active" style="padding: 0em 0em;"><a href="index.php" class="act"  style="padding-bottom: 0px;">Home</a></li>	
	<!-- Mega Menu -->

	<li class="dropdown" style="padding: 0em 0em;">
		<a href="#" class="dropdown-toggle" data-toggle="dropdown" style="padding-bottom: 0px;" >My Account<b class="caret"></b></a>
		<ul class="dropdown-menu multi-column columns-3">
			<div class="row">
				<div class="multi-gd-img">
					<ul class="multi-column-dropdown">
						<li><a href="customerprofile.php">My Profile</a></li>
						<li><a href="customerchangepassword.php">Change Password</a></li>
					
					</ul>
				</div>

			</div>
		</ul>
	</li>
	
	<li style="padding: 0em 0em;"><a href="logout.php" style="padding-bottom: 0px;">Logout</a></li>
<?php
	if(isset($_SESSION['custid']))
	{
?>
	<li style="padding: 1em 0em;"  data-toggle="modal" data-target="#modmycart" onclick="load_cart()">
		<div class="product_list_header">  
			<button class="w3view-cart" type="button" name="submit" value="" style="height: 0px;"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
		</div>
	</li>
<?php
	}
?>

<?php
}
else
{
?>
	<li class="active" style="padding: 0em 0em;"><a href="index.php" class="act"  style="padding-bottom: 0px;">Home</a></li>	
	<!-- Mega Menu -->

	<li style="padding: 0em 0em;"><a href="register.php" style="padding-bottom: 0px;">Register</a></li>
	
	<li style="padding: 0em 0em;"><a href="login.php" style="padding-bottom: 0px;">Login</a></li>

<?php
}
?>

	
</ul>
							</div>

			</div>
			<div class="clearfix"> </div>
		</div>
	</div>


<div style="display: flex; justify-content: space-around; align-items: center; margin: 0.5rem;" class="head-bar">
	
	<div style="display: flex; align-items: inherit;"><a href="index.php"></a><img src="images/7.jpeg" style="width:5rem;height:5rem; margin-right: 0.5rem;"><h1><a href="index.php">Sri Lakshmi Market</a></h1></div>

<div class="w3l_search">
	<form action="./search.php" method="get">
		<input oninput="search(this.value)" type="search" name="q" placeholder="Search for a Product..." required="">
		<button type="submit" class="btn btn-default search" aria-label="Left Align">
			<i class="fa fa-search" aria-hidden="true"> </i>
		</button>
		<!-- <div class="clearfix"></div> -->
	</form>
</div>
	
	<!-- <div class="clearfix"> </div> -->
</div>
</div>
<!-- //header -->
<!-- navigation -->
	<div class="navigation-agileits">
		<div class="container">
			<nav class="navbar navbar-default">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header nav_2">
								<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div> 
							<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
								<ul class="nav navbar-nav">

<?php
$sqlmaincategory = "SELECT * FROM category where status='Active' AND sub_catid='0'";
$qsqlmaincategory = mysqli_query($con,$sqlmaincategory);
while($rsmaincategory = mysqli_fetch_array($qsqlmaincategory))
{
	$sqlsubcategory = "SELECT * FROM category  where status='Active' AND sub_catid='$rsmaincategory[catid]'";
	$qsqlsubcategory = mysqli_query($con,$sqlsubcategory);
?>
<li class="dropdown">
	<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $rsmaincategory['catgory_title']; ?><b class="caret"></b></a>
	<ul class="dropdown-menu multi-column columns-3">
		<div class="row">
			<div class="multi-gd-img">
<ul class="multi-column-dropdown">
	<h6 style="font-size: 15px;"><a href="groceries.php?catid=<?php echo $rsmaincategory['catid']; ?>">All <?php echo $rsmaincategory['catgory_title']; ?></a></h6>
	<?php
		while($rssubcategory = mysqli_fetch_array($qsqlsubcategory))
		{
		?>
		<li><a href="groceries.php?catid=<?php echo $rssubcategory['sub_catid']; ?>&subcatid=<?php echo $rssubcategory['catid']; ?>"><?php echo $rssubcategory['catgory_title']; ?></a></li>
		<?php
		}
	?>
</ul>
			</div>
		</div>
	</ul>
</li>
<?php
}
?>
									
								</ul>
							</div>
							</nav>
			</div>
		</div>
		
<!-- //navigation -->