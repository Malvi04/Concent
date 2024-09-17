<?php
include "session.php";
?>

<!DOCTYPE html>
<html lang="en">


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
	<!-- Data Table Css -->
    <link rel="stylesheet" type="text/css" href="../files/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="../files/assets/pages/data-table/css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="../files/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css">
    
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
			<?php
$Open = mysqli_connect("127.0.0.1","root","root");
		if (!$Open){
		die ("Koneksi ke Engine MySQL Gagal !<br>");
		}
	$Koneksi = mysqli_select_db($Open, "cloudconcent");
		if (!$Koneksi){
		die ("Koneksi ke Database Gagal !");
		}

	$user                 = $_SESSION['nama'];
	$id                   =$_GET["id"];
	if($_SESSION['level']!="spv") {
	$Cari                 ="select * from tickets where id = '$id'";
	} 
	else{
	$Cari                 ="select * from tickets where id = '$id'";       
	}
	
	$Tampil               = mysqli_query($Open, $Cari);
	    while (	$hasil = mysqli_fetch_array ($Tampil)) {
			$id			= stripslashes ($hasil['id']);
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
			$dateclosed = stripslashes ($hasil['dateclosed']);
			$description= stripslashes ($hasil['description']);
			$labelstatus= stripslashes ($hasil['labelstatus']);
			$labelcategory= stripslashes ($hasil['labelcategory']);
		{
	?>
                                    <!-- Page body start -->
                                    <div class="page-body">
                                        <div class="row">
										<div class="col-xl-12">
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
												</div>
										<div class="col-xl-5">
                                                <!-- Overall Progress card start -->
                                                <div class="card">
                                                    <div class="card-block">
                                                        <!-- <p>.col-sm-4</p> -->
                                                        <div class="issue-list-progress">
                                                            <h6>Overall Progress</h6>
                                                            <!-- end of issue progress -->
                                                        </div><br>
                                                        <!-- end of issue list progress -->

                                                        <!-- end of matric progress -->
                                                        <table class="table matrics-table">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <strong>Customer Name</strong>
                                                                    </td>
                                                                    <td class="txt-primary"><?=$custname?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <strong>Company</strong>
                                                                    </td>
                                                                    <td class="txt-danger"><?=$company?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <strong>Address</strong>
                                                                    </td>
                                                                    <td class="txt-primary"><?=$address?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <strong>Email</strong>
                                                                    </td>
                                                                    <td class="txt-primary"><?=$custemail?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <strong>Phone 1</strong>
                                                                    </td>
                                                                    <td class="txt-success"><?=$custphone1?> &nbsp &nbsp 
																	<a href="http://10.10.12.3/call.php?exten=&number=1118<?=$custphone2?>" target="transFrame"><button type="button" class="btn btn-sm btn-success btn-new-tickets waves-effect waves-light m-r-15 m-b-5 m-t-5"><i class="icofont icofont-ui-call"></i><span class="m-l-10">Call</span></button></a>
																	</td>
                                                                </tr>
																<iframe name="transFrame" id="transFrame" style="display:none;"></iframe>
                                                                <tr>
                                                                    <td>
                                                                        <strong>Phone 2</strong>
                                                                    </td>
                                                                    <td class="txt-primary"><?=$custphone2?> &nbsp &nbsp 
																	<a href="http://10.10.12.3/call.php?exten=<?=$_SESSION['ext']?>&number=1118<?=$custphone2?>" target="transFrame"><button type="button" class="btn btn-sm btn-success btn-new-tickets waves-effect waves-light m-r-15 m-b-5 m-t-5"><i class="icofont icofont-ui-call"></i><span class="m-l-10">Call</span></button></a>
                                                                    </td>
																</tr>
                                                                <tr>
                                                                    <td>
                                                                        <strong>Date Open</strong>
                                                                    </td>
                                                                    <td class="txt-danger"><?=$datecreate?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <strong>Assign Date</strong>
                                                                    </td>
                                                                    <td class="txt-info"><?=$datecreate?></td>
                                                                </tr>
																<tr>
                                                                    <td>
                                                                        <strong>Assign To</strong>
                                                                    </td>
                                                                    <td class="txt-info"><?=$assignto?></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <strong>Last closed on</strong>
                                                                    </td>
                                                                    <td class="txt-info"><?=$dateclosed?></td>
                                                                </tr>
                                                            </tbody>
                                                            <!-- end of tbody -->
                                                        </table>
                                                        <!-- end of table -->
                                                    </div>
                                                </div>
                                                <!-- Overall Progress card stendart -->
                                            </div>
                                            <div class="col-xl-7">
                                                <!-- Overall Progress card start -->
                                                <div class="card">
                                                    <div class="card-block">
                                                     
                                                        <div class="issue-list-progress">
                                                            <h6>Form Update</h6>
                                                       
                                                        </div><br>
                                                    
                                                             <form name='ac-newtickets' action="ac-newtickets.php" method="post" class="j-pro" id="j-pro">
															    <div class="j-content">
                                                                    
                                                                    
																	<!-- start name -->
                                                                    <div class="j-row">
                                                                       
																		<div class="j-span6 j-unit">
																	   <label class="j-label">Update Status</label>
																	   <div class="j-input">
																	   
                                                      <select id="status" name="status" class="js-example-basic-single col-sm-12" >
													  <option value="<?=$status?>" selected><?=$status?></option>
                                                        <option value=""></option>
                                                        <?php
																	mysql_connect("localhost", "root", "root");
																	mysql_select_db("cloudconcent");
																	$sql = mysql_query("SELECT status FROM ticketsstatus");
																	if(mysql_num_rows($sql) != 0){
																		while($row = mysql_fetch_assoc($sql)){
																			echo '<option value="'.$row['status'].'">'.$row['status'].'</option>';
																		}
																	}
																	?>
                                                    </select>
													</div>
													
                                                    <i></i>
                                                                        </div>
                                                                    </div>
                                                                    <!-- end name -->
                                                               
																	<div class="j-divider j-gap-bottom-25"></div>
																	 
                                                                    <!-- start message -->
                                                                    <div class="j-unit">
                                                                        <label class="j-label">Description/Message</label>
                                                                        <div class="j-input">
                                                                            <textarea name="description"></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <!-- end message -->
																	
                                                                    <!-- start response from server -->
                                                                    <div class="j-response"></div>
                                                                    <!-- end response from server -->
                                                                </div>
                                                                <!-- end /.content -->
                                                                <div class="j-footer">
                                                                    <button type="submit" name="save_mul" class="btn btn-mat btn-success">Submit</button>
                                                                </div>
                                                                <!-- end /.footer -->
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
												
												<?php  
		}
	}
	
	
//Tutup koneksi engine MySQL
	mysqli_close($Open);
?>	
											<!-- Job application card end -->
											<div class="col-xl-12">
											<div class="card">
                                                    <div class="card-header">
                                                        <h5>Zero Configuration</h5>
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
																		<th>Subject</th>
																		<th>Name</th>
																		<th>Company</th>
                                                                        <th>Last Commit</th>
																		<th>Opening Date</th>
																		<th>Priority</th>
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
	if($_SESSION['level']!="spv") {
	$Cari="select * from tickets where agent = '$user' order by datecreate DESC";
	} 
	else{
	$Cari="select * from tickets order by datecreate DESC";							
	}
	
	$Tampil = mysqli_query($Open, $Cari);
	    while (	$hasil = mysqli_fetch_array ($Tampil)) {
			$id			= stripslashes ($hasil['id']);
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
                                                                    <tr onclick="window.location='form-update-tickets.php?id=<?=$id?>';">
                                                                        <td><?=$id?></td>
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
<script type="00f8f671b1b4bb02120817ac-text/javascript" src="../files/bower_components/jquery/js/jquery.min.js"></script>
<script type="00f8f671b1b4bb02120817ac-text/javascript" src="../files/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
<script type="00f8f671b1b4bb02120817ac-text/javascript" src="../files/bower_components/popper.js/js/popper.min.js"></script>
<script type="00f8f671b1b4bb02120817ac-text/javascript" src="../files/bower_components/bootstrap/js/bootstrap.min.js"></script>

<!-- jquery slimscroll js -->
<script type="00f8f671b1b4bb02120817ac-text/javascript" src="../files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>
<!-- modernizr js -->
<script type="00f8f671b1b4bb02120817ac-text/javascript" src="../files/bower_components/modernizr/js/modernizr.js"></script>
<script type="00f8f671b1b4bb02120817ac-text/javascript" src="../files/bower_components/modernizr/js/css-scrollbars.js"></script>


<!-- i18next.min.js -->
<script type="00f8f671b1b4bb02120817ac-text/javascript" src="../files/bower_components/i18next/js/i18next.min.js"></script>
<script type="00f8f671b1b4bb02120817ac-text/javascript" src="../files/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js"></script>
<script type="00f8f671b1b4bb02120817ac-text/javascript" src="../files/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js"></script>
<script type="00f8f671b1b4bb02120817ac-text/javascript" src="../files/bower_components/jquery-i18next/js/jquery-i18next.min.js"></script>
<!-- Select 2 js -->
<script type="00f8f671b1b4bb02120817ac-text/javascript" src="../files/bower_components/select2/js/select2.full.min.js"></script>
<!-- Multiselect js -->
<script type="00f8f671b1b4bb02120817ac-text/javascript" src="../files/bower_components/bootstrap-multiselect/js/bootstrap-multiselect.js">
</script>
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
    
    
<script type="00f8f671b1b4bb02120817ac-text/javascript" src="../files/bower_components/multiselect/js/jquery.multi-select.js"></script>
<script type="00f8f671b1b4bb02120817ac-text/javascript" src="../files/assets/js/jquery.quicksearch.js"></script>
<!-- Custom js -->
<script type="00f8f671b1b4bb02120817ac-text/javascript" src="../files/assets/pages/advance-elements/select2-custom.js"></script>
<script src="../files/assets/js/pcoded.min.js" type="00f8f671b1b4bb02120817ac-text/javascript"></script>
<script src="../files/assets/js/vartical-layout.min.js" type="00f8f671b1b4bb02120817ac-text/javascript"></script>
<script src="../files/assets/js/jquery.mCustomScrollbar.concat.min.js" type="00f8f671b1b4bb02120817ac-text/javascript"></script>
<script type="00f8f671b1b4bb02120817ac-text/javascript" src="../files/assets/js/script.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="00f8f671b1b4bb02120817ac-text/javascript"></script>
<script type="00f8f671b1b4bb02120817ac-text/javascript">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script src="../../../../ajax.cloudflare.com/cdn-cgi/scripts/a2bd7673/cloudflare-static/rocket-loader.min.js" data-cf-settings="00f8f671b1b4bb02120817ac-|49" defer=""></script></body>



<!-- Mirrored from colorlib.com/polygon/adminty/default/form-select.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 May 2019 05:42:39 GMT -->
</html>
