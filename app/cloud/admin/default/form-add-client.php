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
                                                <!-- Job application card start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Add New Customer</h5>

                                                    </div>
                                                    <div class="card-block">
                                                        <div class="j-wrapper j-wrapper">
                                                             <form enctype="multipart/form-data" name='ac-newtickets' action="ac-add-client.php" method="post" class="j-pro" id="j-pro">
															    <div class="j-content">
                                                                    <!-- start name -->
                                                                    <div class="j-row">
																	<div class="j-span4 j-unit">
                                                                        <label class="j-label">Customer name</label>
                                                                        <div class="j-input">
                                                                            <label class="j-icon-right" for="custname">
                                                        <i class="icofont icofont-user-alt-1"></i>
                                                    </label>
                                                                            <input type="text" id="custname" name="custname" required>
                                                                        </div>
                                                                    </div>
																	<div class="j-span4 j-unit">
                                                                        <label class="j-label">Customer address</label>
                                                                        <div class="j-input">
                                                                            <label class="j-icon-right" for="address">
                                                        <i class="icofont icofont-street-view"></i>
                                                    </label>
                                                                            <input type="text" id="address" name="address" required>
                                                                        </div>
                                                                    </div>
																	<div class="j-span4 j-unit">
                                                                        <label class="j-label">Company Name</label>
                                                                        <div class="j-input">
                                                                            <label class="j-icon-right" for="address">
                                                        <i class="icofont icofont-company"></i>
                                                    </label>
                                                                            <input type="text" id="company" name="company" required>
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
                                                                                <input type="email" id="custemail" name="custemail" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="j-span4 j-unit">
                                                                            <label class="j-label">Customer Phone/Mobile 1</label>
                                                                            <div class="j-input">
                                                                                <label class="j-icon-right" for="phone1">
                                                            <i class="icofont icofont-phone"></i>
                                                        </label>
                                                                                <input type="text" id="custphone1" name="custphone1" required>
                                                                            </div>
                                                                        </div>
																		<div class="j-span4 j-unit">
                                                                            <label class="j-label">Customer Phone/Mobile 2</label>
                                                                            <div class="j-input">
                                                                                <label class="j-icon-right" for="phone2">
                                                            <i class="icofont icofont-phone"></i>
                                                        </label>
                                                                                <input type="text" id="custphone2" name="custphone2" >
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- end email phone -->
                                                                    <div class="j-divider j-gap-bottom-25"></div>
                                                                    
																	
                                                                    
																	
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
											<!-- Job application card end -->
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
	<script type="00f8f671b1b4bb02120817ac-text/javascript" src="../files/bower_components/jquery/js/jquery.min.js"></script>
	<script type="00f8f671b1b4bb02120817ac-text/javascript" src="../files/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
	<script type="00f8f671b1b4bb02120817ac-text/javascript" src="../files/bower_components/popper.js/js/popper.min.js"></script>
	<script type="00f8f671b1b4bb02120817ac-text/javascript" src="../files/bower_components/bootstrap/js/bootstrap.min.js"></script>
	<!-- j-pro js -->
    <script type="e34c03c79198fcd419a23699-text/javascript" src="../files/assets/pages/j-pro/js/jquery.ui.min.js"></script>
    <script type="e34c03c79198fcd419a23699-text/javascript" src="../files/assets/pages/j-pro/js/jquery.maskedinput.min.js"></script>
    <script type="e34c03c79198fcd419a23699-text/javascript" src="../files/assets/pages/j-pro/js/jquery.j-pro.js"></script>
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



</html>
