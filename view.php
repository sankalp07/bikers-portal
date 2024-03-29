<?php
include_once 'login/dbconnect.php';
$res=mysqli_query($con,"SELECT * FROM vehicle");
?>
<!DOCTYPE html>
<html>

<head>
<title>Vehicle Management System</title>
<link href="css/custom.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet"  type="text/css" href="css/bootstrap.min.css"/>
<script rel="stylesheet" src="js/main.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js"></script>
</head>

<body>

<div class="header">
	<div class="logo"><a href="#"><img src="images/logo1.png" alt="" height="90px"/></a></div>
			<div class="navigation">
				<nav class="navbar navbar-inverse navbar-fixed">
				  <div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
						  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						  </button>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						  <ul class="nav navbar-nav">
						  <li class="active"><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
						  <li><a href="#">About us</a></li>
							<li><a href="#">Contacts</a></li>
						  </ul>
						  
						</div>
					</div><!-- /.navbar-collapse -->
				</nav>
			</div>
</div>
	<div class="container-fluid">
		<div class="page-header text-center">
			<h3 class="text-uppercase">All Vehicle Information<h3>
		</div>
		<?php
		while ($Row = mysqli_fetch_assoc($res)) { ?>
		<div class="row">
			<div class="col-md-4">
				<div class="img-thumbnail">
				<img src="login/uploads/<?php $path=explode("*",$Row['image']); echo $path[0]; ?>" width="400" height="260">
				</div>
				<p><h3><bold><i><?php echo $Row['model_name']; ?></i></bold></h3><p><br>
			</div>
			<div class="col-md-4">
				<p><h4><i>Make:<?php echo $Row['manufacturer_name']; ?><i></h4></p>
				<p><h4><i>Model:<?php echo $Row['model_name']; ?><i></h4></p>
				<p> Category:  <?php echo $Row['category']; ?> </p>
				<p> Price: $  <?php echo $Row['s_price']; ?></p>
				<p> Color:  <?php echo $Row['v_color']; ?> </p>
				<p> Status:   <?php echo $Row['status']; ?> </P>
				<p> Mileage/hr(km):   <?php echo $Row['mileage']; ?></p>
				<p> Registration-year:  <?php echo $Row['registration_year']; ?> </p>
				<p>Gear Type:   <?php echo $Row['gear']; ?></p>
				<p> Doors:  <?php echo $Row['doors']; ?> </p>
				<p>Seats:   <?php echo $Row['seats']; ?><p>
				<p> Tanks Capacity :  <?php echo $Row['tank']; ?> Litters</p>
				
			</div>
	
		</div>
		<div class="progress progress-striped active">
  <div class="bar" style="width: 60%;"></div>
</div>
	<?php } ?>
	</div>				

</body>
</html>