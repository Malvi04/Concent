<?php
include "session.php";
?>



<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from colorlib.com/polygon/adminty/default/dt-advance.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 May 2019 05:43:00 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <title>POJ Contact Center - a Project by Cloudlink</title>
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
	<!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="../files/assets/icon/themify-icons/themify-icons.css">
    <!-- Syntax highlighter Prism css -->
    <link rel="stylesheet" type="text/css" href="../files/assets/pages/prism/prism.css">
    

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
<?php
error_reporting(E_ERROR | E_PARSE);
	
$Open = mysqli_connect("localhost","root","");
		if (!$Open){
		die ("Koneksi ke Engine MySQL Gagal !<br>");
		}
	$Koneksi = mysqli_select_db($Open, "concent");
		if (!$Koneksi){
		die ("Koneksi ke Database Gagal !");
		}


$agent= $_SESSION['user'];

$last_login= mysqli_query($Open, "SELECT date_login FROM login where user = 'agent01'");
$query1= mysqli_query($Open, "SELECT * FROM tickets where status IN ('Closed','Solved')");
$query2= mysqli_query($Open, "SELECT * from tickets where status not in ('Closed','Solved','Open')");
$query3= mysqli_query($Open, "SELECT * from tickets where status not in ('Closed','Solved') AND agent_dedicated = '$user'");
$query4= mysqli_query($Open, "SELECT * FROM tickets where status = 'Open'");
$jlh_data_finish= mysqli_num_rows($query1);
$jlh_data_progress= mysqli_num_rows($query2);
$jlh_data_dedicated= mysqli_num_rows($query3);
$jlh_data_open= mysqli_num_rows($query4);

//Tutup koneksi engine MySQL
	mysqli_close($Open);

?>

									 
									 <div class="row">
											<div class="col-xl-3 col-md-6">
                                                <div class="card bg-c-yellow text-white" onclick="location.href='ticket-list.php';" style="cursor: pointer;">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col">
                                                                <p class="m-b-5">Open</p>
                                                                <h4 class="m-b-0"><?=$jlh_data_open?></h4>
                                                            </div>
                                                            <div class="col col-auto text-right">
                                                                <i class="feather icon-user f-50 text-c-yellow"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card bg-c-green text-white" onclick="location.href='ticket-list-progress.php';" style="cursor: pointer;">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col">
                                                                <p class="m-b-5">In Progress</p>
                                                                <h4 class="m-b-0"><?=$jlh_data_progress?></h4>
                                                            </div>
                                                            <div class="col col-auto text-right">
                                                                <i class="feather icon-credit-card f-50 text-c-green"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card bg-c-pink text-white" onclick="location.href='ticket-list-closed.php';" style="cursor: pointer;">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col">
                                                                <p class="m-b-5">Finished</p>
                                                                <h4 class="m-b-0"><?=$jlh_data_finish?></h4>
                                                            </div>
                                                            <div class="col col-auto text-right">
                                                                <i class="feather icon-book f-50 text-c-pink"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card bg-c-blue text-white" onclick="location.href='ticket-list-my.php';" style="cursor: pointer;">
                                                    <div class="card-block">
                                                        <div class="row align-items-center">
                                                            <div class="col">
                                                                <p class="m-b-5">Dedicated</p>
                                                                <h4 class="m-b-0"><?=$jlh_data_dedicated?></h4>
                                                            </div>
                                                            <div class="col col-auto text-right">
                                                                <i class="feather icon-credit-card f-50 text-c-green"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
											</div>
                                            <!-- statustic-card start -->

									
                                     <!-- History Tickets start -->
											<div class="card">
                                                    <div class="card-header">
                                                        <h5>Ticket History (Last 10)</h5><br>
                                                        <div class="card-header-right">
                                                            <i class="icofont icofont-spinner-alt-5"></i>
                                                        </div>
                                                    </div>
													
													
													
                                                    <div class="card-block">
                                                        <div class="table-responsive">
														
                                                            <table id="dom-jqry" class="table dt-responsive width-100">
                                                                <thead class="text-left">
                                                                    <tr>
                                                                        <th>ID</th>
																		<th>ID Ticket</th>
																		<th>Subject</th>
																		<th>Name</th>
																		<th>Company</th>
                                                                        <th>Last Commit</th>
																		<th>Opening Date</th>
																		<th>Category</th>
																		<th>Status</th>
																		<th>Assign To</th>
                                                                        <th>Assigned User</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
	<?php
    $Open = mysqli_connect("localhost","root","");
		if (!$Open){
		die ("Koneksi ke Engine MySQL Gagal !<br>");
		}
	$Koneksi = mysqli_select_db($Open, "concent");
		if (!$Koneksi){
		die ("Koneksi ke Database Gagal !");
		}

	$user = $_SESSION['nama'];
	if($_SESSION['level']!="spv") {
	$Cari="SELECT * FROM tickets_history order by id desc limit 10";
	} 
	else{
	$Cari="SELECT * FROM tickets_history order by id desc limit 10";							
	}
	
	$Tampil = mysqli_query($Open, $Cari);
	    while (	$hasil = mysqli_fetch_array ($Tampil)) {
			$id			= stripslashes ($hasil['id']);
			$idticket = stripcslashes ($hasil['id_tickets']);
			$agent		= stripslashes ($hasil['agent']);
			$subject	= stripslashes ($hasil['subject']);
			$custname   = stripslashes ($hasil['name']);
			$address    = stripslashes ($hasil['address']);
			$company    = stripslashes ($hasil['company']);
			$custemail  = stripslashes ($hasil['email']);
			$custphone1 = stripslashes ($hasil['phone1']);
			$custphone2 = stripslashes ($hasil['phone2']);
			$category   = stripslashes ($hasil['category']);
			$status     = stripslashes ($hasil['status']);
			$reqsource  = stripslashes ($hasil['reqsource']);
			$assignto   = stripslashes ($hasil['assignto']);
			$date_to    = stripslashes ($hasil['timetoresolved']);
			$datecreate = stripslashes ($hasil['datecreate']);
			$dateupdate = stripslashes ($hasil['dateupdate']);
			$description= stripslashes ($hasil['description']);
			$labelstatus= stripslashes ($hasil['labelstatus']);
			$labelcategory= stripslashes ($hasil['labelcategory']);
		{
	?>
                                                                    <tr onclick="window.location='form-update-tickets.php?id=<?=$idticket?>';" style="cursor: pointer;">
                                                                        <td><?=$id?></td>
																		<td><?=$idticket?></td>
																		<td><?=$subject?></td>
                                                                        <td><?=$custname?></td>
																		<td><?=$company?></td>
																		<td><?=$dateupdate?></td>
                                                                        <td><?=$datecreate?></td>
                                                                        <td><label class="label label-<?=$labelcategory?>"><?=$category?></td>
																		<td><label class="label label-<?=$labelstatus?>"><?=$status?></td>
                                                                        <td><?=$assignto?></td>
                                                                        <td><?=$agent?></td>
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
                                                        <!-- end of table -->
                                                    </div>
                                                </div>
												<!-- History Tickets End -->
										
										 <div class="row">

                                            

                                            </div>
                                            <!-- latest activity end -->

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


<!-- Mirrored from colorlib.com/polygon/adminty/default/dt-advance.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 May 2019 05:43:00 GMT -->
</html>
