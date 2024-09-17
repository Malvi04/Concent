<?php
include "session.php";
?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from colorlib.com/polygon/adminty/default/dashboard-crm.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 May 2019 05:40:34 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <title>Adminty - Premium Admin Template by Colorlib </title>
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
    <link rel="icon" href="https://colorlib.com/polygon/adminty/files/assets/images/favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="../files/bower_components/bootstrap/css/bootstrap.min.css">
    <!-- radial chart.css -->
    <link rel="stylesheet" href="../files/assets/pages/chart/radial/css/radial.css" type="text/css" media="all">
    <!-- feather Awesome -->
    <link rel="stylesheet" type="text/css" href="../files/assets/icon/feather/css/feather.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="../files/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="../files/assets/css/jquery.mCustomScrollbar.css">
</head>
<!-- Menu sidebar static layout -->

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
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <div class="page-body">
                                        <div class="row">
										
										

                                            

                                            <!-- ticket and update start -->
                                            <div class="col-xl-12 col-md-12">
                                                <div class="card table-card">
                                                    <div class="card-header">
                                                        <h5>Recent Task</h5>
														<p class="text-inverse text-left m-b-0"><i> <?PHP
											error_reporting(E_ERROR | E_PARSE);
											$m = $_GET['m'];
											echo "$m";
											?></i></p>
                                                        <div class="card-header-right">
                                                            <ul class="list-unstyled card-option">
                                                                <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                                                <li><i class="fa fa-window-maximize full-card"></i></li>
                                                                <li><i class="fa fa-minus minimize-card"></i></li>
                                                                <li><i class="fa fa-refresh reload-card"></i></li>
                                                                <li><i class="fa fa-trash close-card"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="table-responsive">
                                                            <table class="table table-hover table-borderless">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Status</th>
																		<th>Id</th>
                                                                        <th>Item</th>
																		<th>Qty</th>
                                                                        <th>Destination</th>
                                                                        <th>Pickup Time</th>
																		<th>Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
	<?php
	$Open = mysqli_connect("127.0.0.1","root","root");
		if (!$Open){
		die ("Koneksi ke Engine MySQL Gagal !<br>");
		}
	$Koneksi = mysqli_select_db($Open, "cardig");
		if (!$Koneksi){
		die ("Koneksi ke Database Gagal !");
		}

	$user = $_SESSION['nama'];
	$Cari="select * from activity_log where driver = '$user' and id_status = 'Progress' order by input_date DESC";
	$Tampil = mysqli_query($Open, $Cari);
	    while (	$hasil = mysqli_fetch_array ($Tampil)) {
			$id= stripslashes ($hasil['id_activity_log']);
			$status= stripslashes ($hasil['id_status']);
			$item_name = stripslashes ($hasil['item_name']);
			$qty = stripslashes ($hasil['qty']);
			$dest = stripslashes ($hasil['dest']);
			$input_date = stripslashes ($hasil['input_date']);
			$label_color = stripslashes ($hasil['label_color']);
		{
	?>
                                                                    <tr>
                                                                        <td><label class="label label-<?=$label_color?>"><?=$status?></label></td>
																		<td><?=$id?></td>
                                                                        <td><?=$item_name?></td>
																		<td><?=$qty?></td>
                                                                        <td><?=$dest?></td>
                                                                        <td><?=$input_date?></td>
																		<td><?PHP 
																		$link_address = "form-drop-off-ws.php?id=$id&item=$item_name";
																		$link_address2 = "form-drop-off-rs.php?id=$id&item=$item_name";
																		if($dest == "Workshop Narogong"){
							echo "<div align='center'><a type='button' class='btn btn-success' href='$link_address'>Drop Off</a></div>";
							} 
							else{
							echo "<div align='center'><a type='button' class='btn btn-primary' href='$link_address2'>Drop Off</a></div>";	
						}?>
</td>
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
                                            </div>
                                            
                                            <!-- ticket and update end -->
											<!-- Side Selector-->
                            <div id="styleSelector">
							</div>
							<!-- End Side Selector-->

   
                                        </div>
                                    </div>
                                </div>

                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
    <!--[if lt IE 10]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="../files/assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="../files/assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="../files/assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="../files/assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="../files/assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
    <!-- Warning Section Ends -->
    <!-- Required Jquery -->
    <script type="d9a9d6919b08d866498f87b0-text/javascript" src="../files/bower_components/jquery/js/jquery.min.js"></script>
    <script type="d9a9d6919b08d866498f87b0-text/javascript" src="../files/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
    <script type="d9a9d6919b08d866498f87b0-text/javascript" src="../files/bower_components/popper.js/js/popper.min.js"></script>
    <script type="d9a9d6919b08d866498f87b0-text/javascript" src="../files/bower_components/bootstrap/js/bootstrap.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="d9a9d6919b08d866498f87b0-text/javascript" src="../files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>
    <!-- modernizr js -->
    <script type="d9a9d6919b08d866498f87b0-text/javascript" src="../files/bower_components/modernizr/js/modernizr.js"></script>
    <script type="d9a9d6919b08d866498f87b0-text/javascript" src="../files/bower_components/modernizr/js/css-scrollbars.js"></script>
    <!-- Chart js -->
    <script type="d9a9d6919b08d866498f87b0-text/javascript" src="../files/bower_components/chart.js/js/Chart.js"></script>
    <!-- Google map js -->
    <script src="../../../../developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js" type="d9a9d6919b08d866498f87b0-text/javascript"></script>
    <script type="d9a9d6919b08d866498f87b0-text/javascript" src="https://maps.google.com/maps/api/js?sensor=true"></script>
    <script type="d9a9d6919b08d866498f87b0-text/javascript" src="../files/assets/pages/google-maps/gmaps.js"></script>
    <!-- gauge js -->
    <script src="../files/assets/pages/widget/gauge/gauge.min.js" type="d9a9d6919b08d866498f87b0-text/javascript"></script>
    <script src="../files/assets/pages/widget/amchart/amcharts.js" type="d9a9d6919b08d866498f87b0-text/javascript"></script>
    <script src="../files/assets/pages/widget/amchart/serial.js" type="d9a9d6919b08d866498f87b0-text/javascript"></script>
    <script src="../files/assets/pages/widget/amchart/gauge.js" type="d9a9d6919b08d866498f87b0-text/javascript"></script>
    <script src="../files/assets/pages/widget/amchart/pie.js" type="d9a9d6919b08d866498f87b0-text/javascript"></script>
    <script src="../files/assets/pages/widget/amchart/light.js" type="d9a9d6919b08d866498f87b0-text/javascript"></script>
    <!-- Custom js -->
    <script src="../files/assets/js/pcoded.min.js" type="d9a9d6919b08d866498f87b0-text/javascript"></script>
    <script src="../files/assets/js/vartical-layout.min.js" type="d9a9d6919b08d866498f87b0-text/javascript"></script>
    <script src="../files/assets/js/jquery.mCustomScrollbar.concat.min.js" type="d9a9d6919b08d866498f87b0-text/javascript"></script>
    <script type="d9a9d6919b08d866498f87b0-text/javascript" src="../files/assets/pages/dashboard/crm-dashboard.min.js"></script>
    <script type="d9a9d6919b08d866498f87b0-text/javascript" src="../files/assets/js/script.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="d9a9d6919b08d866498f87b0-text/javascript"></script>
<script type="d9a9d6919b08d866498f87b0-text/javascript">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script src="../../../../ajax.cloudflare.com/cdn-cgi/scripts/a2bd7673/cloudflare-static/rocket-loader.min.js" data-cf-settings="d9a9d6919b08d866498f87b0-|49" defer=""></script></body>


<!-- Mirrored from colorlib.com/polygon/adminty/default/dashboard-crm.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 May 2019 05:40:39 GMT -->
</html>
