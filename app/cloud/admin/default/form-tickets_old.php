<?php
include "session.php";
?>


<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from colorlib.com/polygon/adminty/default/ready-form-booking.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 18 May 2019 05:42:47 GMT -->
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
    <!-- Google font--><link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="../files/bower_components/bootstrap/css/bootstrap.min.css">
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
                                
                                    
                                    <!-- Page body start -->
                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Ticket Form</h5>
                                                        <span>Description here</span>

                                                    </div>
                                                    
                                                            <form name='ac-newtickets' action="ac-newtickets.php" method="post" class="j-pro" id="j-pro">
															    <div class="j-content">
                                                                    <!-- start name -->
                                                                    <div class="j-row">
																	<div class="j-span4 j-unit">
                                                                        <label class="j-label">Customer name</label>
                                                                        <div class="j-input">
                                                                            <label class="j-icon-right" for="custname">
                                                        <i class="icofont icofont-user-alt-1"></i>
                                                    </label>
                                                                            <input type="text" id="custname" name="custname">
                                                                        </div>
                                                                    </div>
																	<div class="j-span4 j-unit">
                                                                        <label class="j-label">Customer address</label>
                                                                        <div class="j-input">
                                                                            <label class="j-icon-right" for="address">
                                                        <i class="icofont icofont-user-alt-1"></i>
                                                    </label>
                                                                            <input type="text" id="address" name="address">
                                                                        </div>
                                                                    </div>
																	</div>
                                                                    <!-- end name -->
                                                                    <!-- start email phone -->
                                                                    <div class="j-row">
                                                                        <div class="j-span4 j-unit">
                                                                            <label class="j-label">Customer email</label>
                                                                            <div class="j-input">
                                                                                <label class="j-icon-right" for="email">
                                                            <i class="icofont icofont-envelope"></i>
                                                        </label>
                                                                                <input type="email" id="custemail" name="custemail">
                                                                            </div>
                                                                        </div>
                                                                        <div class="j-span4 j-unit">
                                                                            <label class="j-label">Customer Phone/Mobile 1</label>
                                                                            <div class="j-input">
                                                                                <label class="j-icon-right" for="phone1">
                                                            <i class="icofont icofont-phone"></i>
                                                        </label>
                                                                                <input type="text" id="custphone1" name="custphone1">
                                                                            </div>
                                                                        </div>
																		<div class="j-span4 j-unit">
                                                                            <label class="j-label">Customer Phone/Mobile 2</label>
                                                                            <div class="j-input">
                                                                                <label class="j-icon-right" for="phone2">
                                                            <i class="icofont icofont-phone"></i>
                                                        </label>
                                                                                <input type="text" id="custphone2" name="custphone2">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- end email phone -->
                                                                    <div class="j-divider j-gap-bottom-25"></div>
                                                                    
																	<!-- start name -->
                                                                    <div class="j-row">
                                                                       <div class="j-span4 j-unit">
																	   <label class="j-label">Type</label>
																	   <div class="j-input">
																	   <label class="j-icon-right" for="type">
                                                            <i class="icofont icofont-tag"></i>
                                                        </label>
                                                      <select id="type" name="type" class="js-example-basic-single col-sm-12" >
                                                        <option value=""></option>
                                                        <?php
																	mysql_connect("localhost", "root", "root");
																	mysql_select_db("cloudconcent");
																	$sql = mysql_query("SELECT type FROM ticketstype");
																	if(mysql_num_rows($sql) != 0){
																		while($row = mysql_fetch_assoc($sql)){
																			echo '<option value="'.$row['type'].'">'.$row['type'].'</option>';
																		}
																	}
																	?>
                                                    </select>
													</div>
													
                                                    <i></i>
                                                                        </div>
                                                                        <div class="j-span4 j-unit">
																		<label class="j-label">Category</label>
																		<div class="j-input">
																	   <label class="j-icon-right" for="category">
                                                            <i class="icofont icofont-tags"></i>
                                                        </label>
                                                      <select id="category" name="category" class="js-example-basic-single col-sm-12" >
                                                        <option value=""></option>
                                                        <?php
																	mysql_connect("localhost", "root", "root");
																	mysql_select_db("cloudconcent");
																	$sql = mysql_query("SELECT type FROM ticketstype");
																	if(mysql_num_rows($sql) != 0){
																		while($row = mysql_fetch_assoc($sql)){
																			echo '<option value="'.$row['type'].'">'.$row['type'].'</option>';
																		}
																	}
																	?>
                                                    </select>
													</div>
													
                                                    <i></i>
                                                                        </div>
																		<div class="j-span4 j-unit">
																	   <label class="j-label">Status</label>
																	   <div class="j-input">
																	   <label class="j-icon-right" for="status">
                                                            <i class="icofont icofont-tack-pin"></i>
                                                        </label>
                                                      <select id="status" name="status" class="js-example-basic-single col-sm-12" >
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
                                                                    <!-- start date -->
                                                                    <div class="j-row">
																	<div class="j-span4 j-unit">
																	   <label class="j-label">Request Source</label>
																	   <div class="j-input">
																	   <label class="j-icon-right" for="reqsource">
                                                            <i class="icofont icofont-live-support"></i>
                                                        </label>
                                                      <select id="reqsource" name="reqsource" class="js-example-basic-single col-sm-12" >
                                                        <option value=""></option>
                                                        <?php
																	mysql_connect("localhost", "root", "root");
																	mysql_select_db("cloudconcent");
																	$sql = mysql_query("SELECT requestSource FROM ticketsreqsource");
																	if(mysql_num_rows($sql) != 0){
																		while($row = mysql_fetch_assoc($sql)){
																			echo '<option value="'.$row['requestSource'].'">'.$row['requestSource'].'</option>';
																		}
																	}
																	?>
                                                    </select>
													</div>
													
                                                    <i></i>
                                                                        </div>
                                                                        <div class="j-span4 j-unit">
																	   <label class="j-label">Assign To</label>
																	   <div class="j-input">
																	   <label class="j-icon-right" for="assignto">
                                                            <i class="icofont icofont-share-alt"></i>
                                                        </label>
                                                      <select id="assignto" name="assignto" class="js-example-basic-single col-sm-12" >
                                                        <option value=""></option>
                                                        <?php
																	mysql_connect("localhost", "root", "root");
																	mysql_select_db("cloudconcent");
																	$sql = mysql_query("SELECT personInCharge FROM ticketspersonincharge");
																	if(mysql_num_rows($sql) != 0){
																		while($row = mysql_fetch_assoc($sql)){
																			echo '<option value="'.$row['personInCharge'].'">'.$row['personInCharge'].'</option>';
																		}
																	}
																	?>
                                                    </select>
													</div>
													
                                                    <i></i>
                                                                        </div>
                                                                        <div class="j-span4 j-unit">
                                                                            <label class="j-label">Time to Resolve</label>
                                                                            <div class="j-input">
                                                                                <label class="j-icon-right" for="date_to">
                                                            <i class="icofont icofont-ui-calendar"></i>
                                                        </label>
                                                                                <input type="datetime-local" id="date_to" name="date_to" >
                                                                            </div>
                                                                        </div>
																		
                                                                    </div>
                                                                    <!-- end date -->

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
                                    </div>
                                    <!-- Page body end -->
                                </div>
                            </div>
                            <!-- Main-body end -->

                            <div id="styleSelector">

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

    <!-- Required Jquery -->
    <script type="e34c03c79198fcd419a23699-text/javascript" src="../files/bower_components/jquery/js/jquery.min.js"></script>
    <script type="e34c03c79198fcd419a23699-text/javascript" src="../files/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
    <script type="e34c03c79198fcd419a23699-text/javascript" src="../files/bower_components/popper.js/js/popper.min.js"></script>
    <script type="e34c03c79198fcd419a23699-text/javascript" src="../files/bower_components/bootstrap/js/bootstrap.min.js"></script>
    <!-- j-pro js -->
    <script type="e34c03c79198fcd419a23699-text/javascript" src="../files/assets/pages/j-pro/js/jquery.ui.min.js"></script>
    <script type="e34c03c79198fcd419a23699-text/javascript" src="../files/assets/pages/j-pro/js/jquery.maskedinput.min.js"></script>
    <script type="e34c03c79198fcd419a23699-text/javascript" src="../files/assets/pages/j-pro/js/jquery.j-pro.js"></script>
    <!-- jquery slimscroll js -->
    <script type="e34c03c79198fcd419a23699-text/javascript" src="../files/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>
    <!-- modernizr js -->
    <script type="e34c03c79198fcd419a23699-text/javascript" src="../files/bower_components/modernizr/js/modernizr.js"></script>
    <script type="e34c03c79198fcd419a23699-text/javascript" src="../files/bower_components/modernizr/js/css-scrollbars.js"></script>

    <!-- i18next.min.js -->
    <script type="e34c03c79198fcd419a23699-text/javascript" src="../files/bower_components/i18next/js/i18next.min.js"></script>
    <script type="e34c03c79198fcd419a23699-text/javascript" src="../files/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js"></script>
    <script type="e34c03c79198fcd419a23699-text/javascript" src="../files/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js"></script>
    <script type="e34c03c79198fcd419a23699-text/javascript" src="../files/bower_components/jquery-i18next/js/jquery-i18next.min.js"></script>
    <!-- Custom js -->
    <script type="e34c03c79198fcd419a23699-text/javascript" src="../files/assets/pages/j-pro/js/custom/booking.js"></script>

    <script src="../files/assets/js/pcoded.min.js" type="e34c03c79198fcd419a23699-text/javascript"></script>
    <script src="../files/assets/js/vartical-layout.min.js" type="e34c03c79198fcd419a23699-text/javascript"></script>
    <script src="../files/assets/js/jquery.mCustomScrollbar.concat.min.js" type="e34c03c79198fcd419a23699-text/javascript"></script>
    <script type="e34c03c79198fcd419a23699-text/javascript" src="../files/assets/js/script.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="e34c03c79198fcd419a23699-text/javascript"></script>
<script type="e34c03c79198fcd419a23699-text/javascript">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script src="../../../../ajax.cloudflare.com/cdn-cgi/scripts/a2bd7673/cloudflare-static/rocket-loader.min.js" data-cf-settings="e34c03c79198fcd419a23699-|49" defer=""></script></body>

</html>
