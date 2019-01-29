<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Pooled Admin Panel Category Flat Bootstrap Responsive Web Template | Charts :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pooled Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="js/jquery-2.1.4.min.js"></script>
<!-- //jQuery -->
<!-- chart -->
<script src="js/Chart.js"></script>
<!-- //chart -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
</head> 
<body>
   <div class="page-container">
   <!--/content-inner-->
<div class="left-content">
	   <div class="mother-grid-inner">
             
		<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a><i class="fa fa-angle-right"></i>Charts</li>
            </ol>
		<div class="w3-agile-chat">
				<div class="charts">
					<div class="col-md-4 w3layouts-char">
						<div class="charts-grids widget">
							<h4 class="title">New Writers vs Account Owners</h4>
							<canvas id="bar"> </canvas>
						</div>
					</div>
					<div class="col-md-4 w3-char">
						<div class="charts-grids widget states-mdl">
							<h4 class="title">Writers vs Account Owners Online Activity</h4>
							<canvas id="line"> </canvas>
						</div>
					</div>
					<div class="col-md-4 w3l-char">
						<div class="charts-grids widget">
							<h4 class="title">Job Types</h4>
							<canvas id="pie"> </canvas>
						</div>
					</div>
					<div class="clearfix"> </div>
							 <script>
								var barChartData = {
									labels : ["Jan","Feb","March","April","May","June","July"],
									datasets : [
										{
											fillColor : "rgb(199, 54, 39)",
											strokeColor : "rgba(233, 78, 2, 0.9)",
											highlightFill: "#e74c3c",
											highlightStroke: "#e74c3c",
											data : [65,59,90,81,56,55,40]
										},
										{
											fillColor : "rgb(23, 136, 210)",
											strokeColor : "rgba(79, 82, 186, 0.9)",
											highlightFill: "#1b93e1",
											highlightStroke: "#1b93e1",
											data : [40,70,55,20,45,70,60]
										}
									]
									
								};
								var lineChartData = {
									labels : ["Jan","Feb","March","April","May","June","July"],
									datasets : [
										{
											fillColor : "rgb(199, 54, 39)",
											strokeColor : "#F2B33F",
											pointColor : "rgba(242, 179, 63, 1)",
											pointStrokeColor : "#fff",
											data : [70,60,72,61,75,59,80]

										},
										{
											fillColor : "rgb(23, 136, 210)",
											strokeColor : "#6164C1",
											pointColor : "rgba(97, 100, 193,1)",
											pointStrokeColor : "#9358ac",
											data : [50,65,51,67,52,64,50]

										}
									]
									
								};
								var pieData = [
										{
											value: 90,
											color:"rgb(23, 136, 210)",
											label: "Product 1"
										},
										{
											value : 50,
											color : "rgb(199, 54, 39)",
											label: "Product 2"
										},
										{
											value : 60,
											color : "rgb(155, 197, 13)",
											label: "Product 3"
										},
										{
											value : 40,
											color : "rgb(135, 66, 165)",
											label: "Product 4"
										}
										
									];
								
							new Chart(document.getElementById("line").getContext("2d")).Line(lineChartData);
							new Chart(document.getElementById("bar").getContext("2d")).Bar(barChartData);
							new Chart(document.getElementById("pie").getContext("2d")).Pie(pieData);
							
							</script>
							
				</div>
		
				
<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">

</div>
<!--inner block end here-->

</div>
</div>
  <!--//content-inner-->
			<!--/sidebar-menu-->
				<div class="sidebar-menu">
					<header class="logo1">
						<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> 
					</header>
						<div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
                           <div class="menu">
									<ul id="menu" >

										<li><a href="index.php"><i class="fa fa-tachometer"></i> <span>Dashboard</span><div class="clearfix"></div></a></li>
										
										
										 
									
									<li id="menu-academico" ><a href="charts.php"><i class="fa fa-bar-chart"></i><span>Charts</span><div class="clearfix"></div></a></li>
									 
									
									<li><a href="jobs.php"><i class="fa fa-table"></i>  <span>Jobs</span><div class="clearfix"></div></a></li>
									
							        
										 
									 
									
								  </ul>
								</div>
							  </div>
							  <div class="clearfix"></div>		
							</div>
							<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>
<!--js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
   <!-- /Bootstrap Core JavaScript -->	   
<!-- candlestick -->
		<script type="text/javascript" src="js/jquery.jqcandlestick.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/jqcandlestick.css" />
		<!-- //candlestick -->
</body>
</html>