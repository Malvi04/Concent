<?php
include "session.php";
?>



<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from colorlib.com/polygon/adminty/default/dt-advance.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 May 2019 05:43:00 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <title>POJ Contact Center - a Project by Cloudlink </title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="#">
    <meta name="keywords" content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">
    <!-- Favicon icon -->
    <link rel="icon" href="../default/favicon.ico" type="image/x-icon">
    <!-- Google font--><link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="../files/bower_components/bootstrap/css/bootstrap.min.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="../files/assets/icon/themify-icons/themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="../files/assets/icon/icofont/css/icofont.css">
    <!-- feather Awesome -->
    <link rel="stylesheet" type="text/css" href="../files/assets/icon/feather/css/feather.css">
    <!-- Data Table Css -->
    <link rel="stylesheet" type="text/css" href="../files/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="../files/assets/pages/data-table/css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="../files/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="../files/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="../files/assets/css/jquery.mCustomScrollbar.css">
	 <!-- radial chart.css -->
    <link rel="stylesheet" href="../files/assets/pages/chart/radial/css/radial.css" type="text/css" media="all">
</head>

<body>
<!-- Pre-loader start -->
<div class="theme-loader">
    <div class="ball-scale">
        <div class='contain'>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
        </div>
    </div>
</div>
<!-- Pre-loader end -->
<div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">

        <!-- top menu start-->
			<?php include "topbar.php";?>
			<!-- top menu end-->
			
        <div class="pcoded-main-container">
            <div class="pcoded-wrapper">
                <!-- sidebar menu start-->
			<?php include "sidebar-menu.php";?>
			<!-- sidebar menu end-->
                <div class="pcoded-content">
                    <div class="pcoded-inner-content">
                        <!-- Main-body start -->
                        <div class="main-body">
                            <div class="page-wrapper">
                                <!-- Page-header start -->
                                
                                <!-- Page-header end -->

                                    <!-- Page-body start -->
                                    <div class="page-body">
									
									 <!-- statustic-card start -->
                                                <div class="card">
                                                    <div class="card-block">

	  <form  method="post" action="export-report-summary.php">
	  <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Date From</label>
                                                            <div class="col-sm-4">
                                                                <input type="date" class="form-control" name="datefrom" id="datefrom" required>
                                                            </div>
                                                        </div>
	  <div class="form-group row">
                                                            <label class="col-sm-2 col-form-label">Date To</label>
                                                            <div class="col-sm-4">
                                                                <input type="date" class="form-control" name="todate" id="todate" required>
                                                            </div>
                                                        </div>													
	    <input type='submit' class="btn btn-warning" value='Search' name='Search' formaction='report-summary.php'>
		<a href="report_parameterized.php" class="btn btn-info"> Reset </a>			  
		<input type="submit" class="btn btn-success" value="Download"></td>
		      	
			  </form>
											</div>
											</div>
                                            <!-- statustic-card start -->

									
                                        <!-- DOM/Jquery table start -->
                                        <div class="card">
                                            <div class="card-header">
                                                <h5>Summary Report </h5>
                                                <span><?php
			error_reporting(E_ERROR | E_PARSE);
			echo ' range tickets ' . htmlspecialchars($_POST["datefrom"]) . '';
			echo ' to date ' . htmlspecialchars($_POST["todate"]) . '';
			?></span>
                                            </div>
                                            <div class="card-block">
                                                <div class="table-responsive dt-responsive">
                                                   <table class="table table-bordered table-striped">
              <thead>
                <tr bgcolor="#b4fac8">
					<th align="center">Agent</th>&nbsp;
					<th>Processing (Asigned)</th>&nbsp;
					<th>Processing (Planned)</th>&nbsp;
					<th>Pending</th>&nbsp;      
					<th>Solved</th>&nbsp;
					<th>Closed</th>&nbsp;
					<th>Total History</th>&nbsp;
					<th>Total Tickets</th>&nbsp;
					</tr>
					</thead>
					<tbody>
                
              
<?php
//	var_dump($_POST);

	
	$A= $_POST["datefrom"];
	
	$datefrom= "$A 00:00:00";
	$B= $_POST["todate"];
	$todate= "$B 23:59:59";
	// echo $datefrom;
	// echo $todate;
	$Open = mysqli_connect("127.0.0.1","root","root");
		if (!$Open){
		die ("Koneksi ke Engine MySQL Gagal !<br>");
		}
	$Koneksi = mysqli_select_db($Open, "cloudconcent");
		if (!$Koneksi){
		die ("Koneksi ke Database Gagal !");
		}
	
	
		$Cari="SELECT 
				IFNULL( p.agent,'TOTAL' ) AS agent,
				COUNT(IF(p.status = 'Processing (Asigned)', 1, NULL)) AS Asigned,
				COUNT(IF(p.status = 'Processing (Planned)', 1, NULL)) AS Planned,
				COUNT(IF(p.status = 'Pending', 1, NULL)) AS Pending,
				COUNT(IF(p.status = 'Solved', 1, NULL)) AS Solved,
				COUNT(IF(p.status = 'Closed', 1, NULL)) AS Closed,
				COUNT(DISTINCT p.id_tickets) AS Total_Tickets,
				COUNT(p.agent) AS Total
				FROM tickets_history p
				WHERE p.datecreate BETWEEN '$datefrom' AND '$todate'
				Group BY p.agent
				WITH ROLLUP";
			
	$Tampil = mysqli_query($Open, $Cari);
			while (	$hasil = mysqli_fetch_array ($Tampil)) {
			$agent = stripslashes ($hasil['agent']);
			$Processing_Asigned = stripslashes ($hasil['Asigned']);
			$Processing_Planned = stripslashes ($hasil['Planned']);
			$Pending = stripslashes ($hasil['Pending']);
			$Solved = stripslashes ($hasil['Solved']);
			$Closed = stripslashes ($hasil['Closed']);
			$Total_tickets = stripslashes ($hasil['Total_Tickets']);
			$Total_history = stripslashes ($hasil['Total']);
		{
	?>
	
	<tr class="gradeX">
		<td align="center"><?=$agent?></td>
		<td align="center"><?=$Processing_Asigned?></td>
		<td align="center"><?=$Processing_Planned?></td>
		<td align="center"><?=$Pending?></td>
		<td align="center"><?=$Solved?></td>
		<td align="center"><?=$Closed?></td>		
		<td align="center"><?=$Total_history?></td>
		<td align="center" bgcolor="#fcfcfc"><b><?=$Total_tickets?></b></td>		
	</tr>
	
	
<?php  
		}
	}
//Tutup koneksi engine MySQL
	mysqli_close($Open);
?>
              </tbody>
            </table>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- DOM/Jquery table end -->


                                    </div>
                                    <!-- Page-body start -->
                                </div>
                            </div>
                            <!-- Main-body end -->
							<!-- Side Selector-->
                            <div 
							id="styleSelector">
							</div>
							<!-- End Side Selector-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- Required Jquery -->
    <script type="2a3a02d26cc4f27f822ffa3c-text/javascript" src="../files/bower_components/jquery/js/jquery.min.js"></script>
    <script type="2a3a02d26cc4f27f822ffa3c-text/javascript" src="../files/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
    <script type="2a3a02d26cc4f27f822ffa3c-text/javascript" src="../files/bower_components/popper.js/js/popper.min.js"></script>
    <script type="2a3a02d26cc4f27f822ffa3c-text/javascript" src="../files/bower_components/bootstrap/js/bootstrap.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="2a3a02d26cc4f27f822ffa3c-text/javascript" src="../files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>
    <!-- modernizr js -->
    <script type="2a3a02d26cc4f27f822ffa3c-text/javascript" src="../files/bower_components/modernizr/js/modernizr.js"></script>
    <script type="2a3a02d26cc4f27f822ffa3c-text/javascript" src="../files/bower_components/modernizr/js/css-scrollbars.js"></script>

    <!-- data-table js -->
    <script src="../files/bower_components/datatables.net/js/jquery.dataTables.min.js" type="2a3a02d26cc4f27f822ffa3c-text/javascript"></script>
    <script src="../files/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js" type="2a3a02d26cc4f27f822ffa3c-text/javascript"></script>
    <script src="../files/assets/pages/data-table/js/jszip.min.js" type="2a3a02d26cc4f27f822ffa3c-text/javascript"></script>
    <script src="../files/assets/pages/data-table/js/pdfmake.min.js" type="2a3a02d26cc4f27f822ffa3c-text/javascript"></script>
    <script src="../files/assets/pages/data-table/js/vfs_fonts.js" type="2a3a02d26cc4f27f822ffa3c-text/javascript"></script>
    <script src="../files/bower_components/datatables.net-buttons/js/buttons.print.min.js" type="2a3a02d26cc4f27f822ffa3c-text/javascript"></script>
    <script src="../files/bower_components/datatables.net-buttons/js/buttons.html5.min.js" type="2a3a02d26cc4f27f822ffa3c-text/javascript"></script>
    <script src="../files/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js" type="2a3a02d26cc4f27f822ffa3c-text/javascript"></script>
    <script src="../files/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js" type="2a3a02d26cc4f27f822ffa3c-text/javascript"></script>
    <script src="../files/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js" type="2a3a02d26cc4f27f822ffa3c-text/javascript"></script>
    <!-- i18next.min.js -->
    <script type="2a3a02d26cc4f27f822ffa3c-text/javascript" src="../files/bower_components/i18next/js/i18next.min.js"></script>
    <script type="2a3a02d26cc4f27f822ffa3c-text/javascript" src="../files/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js"></script>
    <script type="2a3a02d26cc4f27f822ffa3c-text/javascript" src="../files/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js"></script>
    <script type="2a3a02d26cc4f27f822ffa3c-text/javascript" src="../files/bower_components/jquery-i18next/js/jquery-i18next.min.js"></script>
    <!-- Custom js -->
    <script src="../files/assets/pages/data-table/js/data-table-custom.js" type="2a3a02d26cc4f27f822ffa3c-text/javascript"></script>
    <script src="../files/assets/js/pcoded.min.js" type="2a3a02d26cc4f27f822ffa3c-text/javascript"></script>
    <script src="../files/assets/js/vartical-layout.min.js" type="2a3a02d26cc4f27f822ffa3c-text/javascript"></script>
    <script src="../files/assets/js/jquery.mCustomScrollbar.concat.min.js" type="2a3a02d26cc4f27f822ffa3c-text/javascript"></script>
    <script type="2a3a02d26cc4f27f822ffa3c-text/javascript" src="../files/assets/js/script.js"></script>
	<!-- Chart js -->
    <script type="d9a9d6919b08d866498f87b0-text/javascript" src="../files/bower_components/chart.js/js/Chart.js"></script>
    <!-- gauge js -->
    <script src="../files/assets/pages/widget/gauge/gauge.min.js" type="d9a9d6919b08d866498f87b0-text/javascript"></script>
    <script src="../files/assets/pages/widget/amchart/amcharts.js" type="d9a9d6919b08d866498f87b0-text/javascript"></script>
    <script src="../files/assets/pages/widget/amchart/serial.js" type="d9a9d6919b08d866498f87b0-text/javascript"></script>
    <script src="../files/assets/pages/widget/amchart/gauge.js" type="d9a9d6919b08d866498f87b0-text/javascript"></script>
    <script src="../files/assets/pages/widget/amchart/pie.js" type="d9a9d6919b08d866498f87b0-text/javascript"></script>
    <script src="../files/assets/pages/widget/amchart/light.js" type="d9a9d6919b08d866498f87b0-text/javascript"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="2a3a02d26cc4f27f822ffa3c-text/javascript"></script>
<script type="2a3a02d26cc4f27f822ffa3c-text/javascript">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script src="../../../../ajax.cloudflare.com/cdn-cgi/scripts/a2bd7673/cloudflare-static/rocket-loader.min.js" data-cf-settings="2a3a02d26cc4f27f822ffa3c-|49" defer=""></script></body>

</html>
