<?php
include "session.php";
?>

<!DOCTYPE html>
<html lang="en">


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
	<!-- Date-time picker css -->
    <link rel="stylesheet" type="text/css" href="../files/assets/pages/advance-elements/css/bootstrap-datetimepicker.css">
    <!-- Date-range picker css  -->
    <link rel="stylesheet" type="text/css" href="../files/bower_components/bootstrap-daterangepicker/css/daterangepicker.css" />
    <!-- Date-Dropper css -->
    <link rel="stylesheet" type="text/css" href="../files/bower_components/datedropper/css/datedropper.min.css" />
    
    <!-- Google font--><link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="../files/bower_components/bootstrap/css/bootstrap.min.css">
    <!-- radial chart.css -->
    <link rel="stylesheet" href="../files/assets/pages/chart/radial/css/radial.css" type="text/css" media="all">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="../files/assets/icon/themify-icons/themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="../files/assets/icon/icofont/css/icofont.css">
    <!-- feather Awesome -->
    <link rel="stylesheet" type="text/css" href="../files/assets/icon/feather/css/feather.css">
    <!-- jpro forms css -->
    <link rel="stylesheet" type="text/css" href="../files/assets/pages/j-pro/css/demo.css">
    <link rel="stylesheet" type="text/css" href="../files/assets/pages/j-pro/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../files/assets/pages/j-pro/css/j-pro-modern.css">
	<!-- animation nifty modal window effects css -->
    <link rel="stylesheet" type="text/css" href="../files/assets/css/component.css">
	<!-- Select 2 css -->
    <link rel="stylesheet" href="../files/bower_components/select2/css/select2.min.css"/>
    <!--forms-wizard css
    <link rel="stylesheet" type="text/css" href="../files/bower_components/jquery.steps/css/jquery.steps.css">
	-->
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="../files/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="../files/assets/css/jquery.mCustomScrollbar.css">
	
	<!-- Data Table Css -->
    <link rel="stylesheet" type="text/css" href="../files/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="../files/assets/pages/data-table/css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="../files/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css">
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
                <nav class="pcoded-navbar">
            <!-- sidebar menu start-->
			<?php include "sidebar-menu.php";?>
			<!-- sidebar menu end-->
				</nav>
                <div class="pcoded-content">
                    <div class="pcoded-inner-content">
                        <!-- Main-body start -->
                        <div class="main-body">
                            <div class="page-wrapper">
							
                                <!-- Page-header start -->
                                <!-- isi disini untuk page header -->
                                <!-- Page-header end -->
			
                                    <!-- Page body start -->
                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="col-xl-12">
												<p class="text-inverse text-left m-b-0"><i><font color="green"><?PHP
											error_reporting(E_ERROR | E_PARSE);
											$m = $_GET['m'];
											echo "$m";
											?></font></i></p>
                                                <!-- New ticket button card start -->
                                                <div class="card">
                                                    <div class="card-block">
                                                        <div class=" waves-effect waves-light m-r-10 v-middle issue-btn-group">
                                                            <button type="button" onclick="window.location.href='form-tickets.php'" class="btn btn-sm btn-success btn-new-tickets waves-effect waves-light m-r-15 m-b-5 m-t-5"><i class="icofont icofont-paper-plane"></i><span class="m-l-10">New Tickets</span></button>
                                                            <div class="btn-group m-b-5 m-t-5">
                                                                <button type="button" class="btn btn-primary btn-sm waves-effect waves-light"><i class="icofont icofont-ui-user"></i></button>
                                                                <button type="button" class="btn btn-primary btn-sm waves-effect waves-light"><i class="icofont icofont-edit-alt"></i></button>
                                                                <button type="button" class="btn btn-primary btn-sm waves-effect waves-light"><i class="icofont icofont-reply"></i></button>
                                                                <button type="button" class="btn btn-primary btn-sm waves-effect waves-light"><i class="icofont icofont-printer"></i></button>
                                                            </div>
                                                            <div class="f-right bug-issue-link m-t-5">
                                                                <ol class="breadcrumb bg-white m-0 p-t-5 p-b-0">
                                                                    <li class="breadcrumb-item"><a href="#">16 Tickets</a></li>
                                                                    <li class="breadcrumb-item"><a href="#">11 Closed</a></li>
                                                                </ol>
                                                            </div>
                                                        </div>
                                                    </div>
													
                                                </div>
                                                <!-- New ticket button card end -->
												
												<div class="page-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <!-- Job application card start -->
                                                <div class="card">
                                                
                                                    <div class="card-block">
                                                        <div class="j-wrapper j-wrapper">
                                                             <form enctype="multipart/form-data" name='ac-edit-client' method="post" class="j-pro" id="j-pro">
															    <div class="j-content">
																	
                                                                    <!-- start name -->
                                                                    <div class="j-row">
																	<div class="j-span4 j-unit">
                                                                        <label class="j-label">CS ID</label>
                                                                        <div class="j-input">
                                                                            <label class="j-icon-right" for="csid">
                                                        <i class="icofont icofont-id-card"></i>
                                                    </label>
                                                                            <input type="text" id="csid" name="csid" >
                                                                        </div>
                                                                    </div>
																	<div class="j-span4 j-unit">
                                                                        <label class="j-label">Customer name</label>
                                                                        <div class="j-input">
                                                                            <label class="j-icon-right" for="custname">
                                                        <i class="icofont icofont-user-alt-1"></i>
                                                    </label>
                                                                            <input type="text" id="custname" name="custname" >
                                                                        </div>
                                                                    </div>
																	
																	<div class="j-span4 j-unit">
                                                                        <label class="j-label">Company Name</label>
                                                                        <div class="j-input">
                                                                            <label class="j-icon-right" for="address">
                                                        <i class="icofont icofont-company"></i>
                                                    </label>
                                                                            <input type="text" id="company" name="company" >
                                                                        </div>
                                                                    </div>
																	</div>
                                                                    <!-- end name -->
                                                                    
																	
                                                                    <!-- start date -->
																	<div class="j-row">
																																	
																	<div class="j-span4 j-unit">
                                                                            <label class="j-label">Date From</label>
                                                                            <div class="j-input">
                                                                                
                                                        </label>
                                                                                <input type="date" class="form-control" id="date_from" name="date_from" required>
                                                                            </div>
                                                                        </div>
																	<div class="j-span4 j-unit">
                                                                            <label class="j-label">Date To</label>
                                                                            <div class="j-input">
                                                                                
                                                        </label>
                                                                                <input type="date" class="form-control" id="date_to" name="date_to" required>
                                                                            </div>
                                                                        </div>	
																		
																	</div>
																	<!-- end date -->
																	
                                                                    
																	
                                                                    <!-- start response from server -->
                                                                    <div class="j-response"></div>
                                                                    <!-- end response from server -->
                                                                </div>
                                                                <!-- end /.content -->
                                                                <div class="j-footer">
																	<button type="cancel" class="btn btn-mat btn-warning m-r-15 m-b-5 m-t-5" onclick="window.location='list-client.php';return false;">Cancel</button>	
                                                                    <button type="submit" name="save_mul" class="btn btn-mat btn-success m-r-15 m-b-5 m-t-5" formaction='report-history-tickets.php'>Search</button>
																	<button type="submit" name="download" class="btn btn-mat btn-success m-r-15 m-b-5 m-t-5" formaction="export-report-history-tickets.php" >Download</button>
                                                                </div>
                                                                <!-- end /.footer -->
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
											<!-- Job application card end -->
                                            </div>
                                        </div>
                                    </div>
												
                                                <!-- bug list card start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Tickets List Status In Progress</h5>
                                                        <div class="card-header-right">
                                                            <i class="icofont icofont-spinner-alt-5"></i>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="table-responsive">
														
                                                            <table id="dom-jqry" class="table table-striped table-bordered nowrap">
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
$Open = mysqli_connect("127.0.0.1","root","root");
		if (!$Open){
		die ("Koneksi ke Engine MySQL Gagal !<br>");
		}
	$Koneksi = mysqli_select_db($Open, "cloudconcent");
		if (!$Koneksi){
		die ("Koneksi ke Database Gagal !");
		}

	$user = $_SESSION['nama'];
	$csid=$_POST['csid'];
	$cust_name=$_POST['cust_name'];
	$company=$_POST['company'];
	$A= $_POST["date_from"];
	$datefrom= "$A 00:00:00";
	$B= $_POST["date_to"];
	$todate= "$B 23:59:59";
	
	// echo $todate;
	// echo $datefrom;
	
	if($_SESSION['level']!="spv") {
	$Cari="select * from tickets_history 
	where datecreate between  '$datefrom' AND '$todate' 
	AND agent LIKE '%$csid%'
	AND name LIKE '%$cust_name%' 
	AND company LIKE '%$company%'
	order by datecreate DESC";
	} 
	else{
	$Cari="select * from tickets_history 
	where datecreate between  '$datefrom' AND '$todate' 
	AND agent LIKE '%$csid%'
	AND name LIKE '%$cust_name%' 
	AND company LIKE '%$company%'
	order by datecreate DESC";							
	}
	
	$Tampil = mysqli_query($Open, $Cari);
	    while (	$hasil = mysqli_fetch_array ($Tampil)) {
			$id			= stripslashes ($hasil['id']);
			$id_tickets		= stripslashes ($hasil['id_tickets']);
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
                                                                    <tr onclick="window.location='form-update-tickets.php?id=<?=$id?>';" style="cursor: pointer;">
                                                                        <td><?=$id?></td>
																		<td><?=$id_tickets?></td>
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
                                                <!-- bug list card end -->
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Page body end -->
                                </div>
                            </div>
                            <!-- Main-body end -->

                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Required Jquery -->
    <script type="9f2f9cb3f50e59ddb821a861-text/javascript" src="../files/bower_components/jquery/js/jquery.min.js"></script>
    <script type="9f2f9cb3f50e59ddb821a861-text/javascript" src="../files/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
    <script type="9f2f9cb3f50e59ddb821a861-text/javascript" src="../files/bower_components/popper.js/js/popper.min.js"></script>
    <script type="9f2f9cb3f50e59ddb821a861-text/javascript" src="../files/bower_components/bootstrap/js/bootstrap.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="9f2f9cb3f50e59ddb821a861-text/javascript" src="../files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>
    <!-- modernizr js -->
    <script type="9f2f9cb3f50e59ddb821a861-text/javascript" src="../files/bower_components/modernizr/js/modernizr.js"></script>
    <script type="9f2f9cb3f50e59ddb821a861-text/javascript" src="../files/bower_components/modernizr/js/css-scrollbars.js"></script>

    <!-- data-table js -->
    <script src="../files/bower_components/datatables.net/js/jquery.dataTables.min.js" type="9f2f9cb3f50e59ddb821a861-text/javascript"></script>
    <script src="../files/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js" type="9f2f9cb3f50e59ddb821a861-text/javascript"></script>
    <script src="../files/assets/pages/data-table/js/jszip.min.js" type="9f2f9cb3f50e59ddb821a861-text/javascript"></script>
    <script src="../files/assets/pages/data-table/js/pdfmake.min.js" type="9f2f9cb3f50e59ddb821a861-text/javascript"></script>
    <script src="../files/assets/pages/data-table/js/vfs_fonts.js" type="9f2f9cb3f50e59ddb821a861-text/javascript"></script>
    <script src="../files/bower_components/datatables.net-buttons/js/buttons.print.min.js" type="9f2f9cb3f50e59ddb821a861-text/javascript"></script>
    <script src="../files/bower_components/datatables.net-buttons/js/buttons.html5.min.js" type="9f2f9cb3f50e59ddb821a861-text/javascript"></script>
    <script src="../files/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js" type="9f2f9cb3f50e59ddb821a861-text/javascript"></script>
    <script src="../files/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js" type="9f2f9cb3f50e59ddb821a861-text/javascript"></script>
    <script src="../files/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js" type="9f2f9cb3f50e59ddb821a861-text/javascript"></script>
    <script type="9f2f9cb3f50e59ddb821a861-text/javascript" src="../files/assets/pages/sparkline/jquery.sparkline.js"></script>
    <!-- i18next.min.js -->
    <script type="9f2f9cb3f50e59ddb821a861-text/javascript" src="../files/bower_components/i18next/js/i18next.min.js"></script>
    <script type="9f2f9cb3f50e59ddb821a861-text/javascript" src="../files/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js"></script>
    <script type="9f2f9cb3f50e59ddb821a861-text/javascript" src="../files/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js"></script>
    <script type="9f2f9cb3f50e59ddb821a861-text/javascript" src="../files/bower_components/jquery-i18next/js/jquery-i18next.min.js"></script>
    <!-- Custom js -->
    <script src="../files/assets/pages/data-table/js/data-table-custom.js" type="9f2f9cb3f50e59ddb821a861-text/javascript"></script>

    <script type="9f2f9cb3f50e59ddb821a861-text/javascript" src="../files/assets/pages/issue-list/issue-list.js"></script>
    <script src="../files/assets/js/pcoded.min.js" type="9f2f9cb3f50e59ddb821a861-text/javascript"></script>
    <script src="../files/assets/js/vartical-layout.min.js" type="9f2f9cb3f50e59ddb821a861-text/javascript"></script>
    <script src="../files/assets/js/jquery.mCustomScrollbar.concat.min.js" type="9f2f9cb3f50e59ddb821a861-text/javascript"></script>
    <script type="9f2f9cb3f50e59ddb821a861-text/javascript" src="../files/assets/js/script.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="9f2f9cb3f50e59ddb821a861-text/javascript"></script>
<script type="9f2f9cb3f50e59ddb821a861-text/javascript">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script src="../../../../ajax.cloudflare.com/cdn-cgi/scripts/a2bd7673/cloudflare-static/rocket-loader.min.js" data-cf-settings="9f2f9cb3f50e59ddb821a861-|49" defer=""></script></body>


</html>
