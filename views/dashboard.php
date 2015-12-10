<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>MAHADEWI MUSIC SCHOOL - Dashboard Admin</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">    
    
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <script src="assets/js/chart-master/Chart.js"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="index.html" class="logo"><b>PEMBAYARAN SPP MAHADEWI MUSIC SCHOOL</b></a>
            <!--logo end-->
			            
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="index.php">Logout</a></li>
            	</ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="profile.php"><img src="assets/img/mahadewi.jpg" class="img-circle" width="60"></a></p>
              	  <h5 class="centered">Admin</h5>
              	  
				  <li class="mt">
					  <a href="home.php">
                          <i class="fa fa-home"></i>
                          <span>Home</span>
                      </a>
                  <li class="mt">
                      <a href="dashboard.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Admin</span>
                      </a>
					  	  <ul>
						  <li><a href="dashboard.php">
						   <i class="fa fa-users"></i>
						   Admin</a>
						  </li>
						  </ul>
                  </li>
				  <li class="mt">
                      <a href="siswa.php">
                          <i class="fa fa-users"></i>
                          <span>Siswa</span>
                      </a>
					  <ul>
						  <li><a href="siswa.php">
						   <i class="fa fa-users"></i>
						  Daftar Siswa</a>
						  </li>
						  </ul>
                  </li>
				  <li class="mt">
                      <a href="orangtua.php">
                          <i class="fa fa-users"></i>
                          <span>Orang Tua</span>
						  </a>
						  <ul>
						  <li><a href="orangtua.php">
						   <i class="fa fa-users"></i>
						  Daftar Orang Tua</a>
						  </li>
						  </ul>
						   <li class="mt">
					<li class="mt">
                      <a href="divisi.php">
                          <i class="fa fa-music"></i>
                          <span>Divisi</span>
						  </a> 
						   <ul>
						  <li><a href="divisi.php">
						   <i class="fa fa-music"></i>
						  Daftar Divisi</a>
						  </li>
						  </ul>
                  </li>
				  <li class="mt">
                      <a href="payment.php">
					      <i class="fa fa-money"></i>
                          <span>Pembayaran Spp</span>
                      </a>
					  <ul>
						  <li><a href="payment.php">
						   <i class="fa fa-money"></i>
						  Daftar Bayar</a>
						  </li>
						  </ul>
                           
                  </li>                
				 </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
        <section class="wrapper">

          <div class="row">
            <div class="col-lg-12 main-chart">
				  
				      <h1><?php echo $data['title']?></h1>
              <?php require_once($data['page']) ?>    
                  	
            </div><!-- /col-lg-3 -->
          </div><! --/row -->
        </section>
      </section>

      <!--main content end-->
      <!--footer start-->
      
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery-1.8.3.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="assets/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="assets/js/sparkline-chart.js"></script>    
	<script src="assets/js/zabuto_calendar.js"></script>	
		
	<script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });
        
            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });
        
        
        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>
  

  </body>
</html>
