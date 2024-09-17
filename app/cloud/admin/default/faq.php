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
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="../files/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="../files/assets/css/jquery.mCustomScrollbar.css">
		<!-- Data Table Css -->
    <link rel="stylesheet" type="text/css" href="../files/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="../files/assets/pages/data-table/css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="../files/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css">
    
</head>

<!--<body class="fix-menu dark-layout">-->

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
                                
                                    
                                    <!-- Page body start -->
                                    <div class="page-body">
                                        
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <!-- Material tab card start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>FAQ | <i>Frequently Asked Questions</i></h5><br>
													<form action="faq.php" method="post"">				
                                                                            <input type="search" id="keywords" name="keywords" placeholder="Search Here...">
																			<button type="submit">Search</button>
																			<label class="j-label">input space and click serch, if you want to search all FAQ...</label>
													</div>
													
													
                                                    <div class="card-block">
                                                       <!-- Row start -->
                                                        <div class="row">
                                                            <div class="col-lg-12 col-xl-12">
															FAQ | <i>Most Popular Ask</i> 
															<hr>
															
															
																	
                                                               <div class="row card-block">
															   	<div class="col-md-6">
																		<ul class="list-view">
																			<li>
                                            
															<?php
															$Open = mysqli_connect("127.0.0.1","root","root");
																if (!$Open){
																die ("Koneksi ke Engine MySQL Gagal !<br>");
																}
															$Koneksi = mysqli_select_db($Open, "cloudconcent");
																if (!$Koneksi){
																die ("Koneksi ke Database Gagal !");
																}

															$Cari="select * from faq where pic = 'TI' ORDER BY id DESC LIMIT 1";
															$Tampil = mysqli_query($Open, $Cari);
																while (	$hasil = mysqli_fetch_array ($Tampil)) {
																	$id= stripslashes ($hasil['id']);
																	$subject= stripslashes ($hasil['subject']);
																	$category= stripslashes ($hasil['category']);
																	$solution = stripslashes ($hasil['solution']);
																	$pic = stripslashes ($hasil['pic']);
																	$label = stripslashes ($hasil['label']);
																{
															?>
                                                            
                                                
                                                                <div class="card list-view-media">
                                                                    <div class="card-block">
                                                                        <div class="media">
                                                                            
                                                                            <div class="media-body">
                                                                                <div class="col-xs-12">
                                                                                    <h6 class="d-inline-block">
                                                                                        <?=$subject?></h6>
                                                                                    <label class="label <?=$label?>"><?=$pic?></label>
                                                                                </div>
                                                                                <div class="f-13 text-muted m-b-15">
                                                                                    <?=$category?>
                                                                                </div>
                                                                                <p><?=$solution?></p>
                                                                                
																				<div class="m-t-15">
                                                                                    <button type="button" data-toggle="tooltip" title="Facebook"
                                                                                            class="btn btn-facebook btn-mini waves-effect waves-light">
                                                                                        <span class="icofont icofont-social-facebook"></span>
                                                                                    </button>
                                                                                    <button type="button" data-toggle="tooltip" title="Twitter"
                                                                                            class="btn btn-twitter btn-mini waves-effect waves-light">
                                                                                        <span class="icofont icofont-social-twitter"></span>
                                                                                    </button>
                                                                                    <button type="button" data-toggle="tooltip" title="Linkedin"
                                                                                            class="btn btn-linkedin btn-mini waves-effect waves-light">
                                                                                        <span class="icofont icofont-brand-linkedin"></span>
                                                                                    </button>
                                                                                    <button type="button"  data-toggle="tooltip" title="Drible"
                                                                                            class="btn btn-dribbble btn-mini waves-effect waves-light">
                                                                                        <span class="icofont icofont-social-dribble"></span>
                                                                                    </button>
                                                                                </div>
																				
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
																
																<?php  
																}
																}
																mysqli_close($Open);
															?>
                                                            </li>
															
                                                        </ul>
                                                    </div>
													
													<div class="col-md-6">
																		<ul class="list-view">
																			<li>
                                            
															<?php
															$Open = mysqli_connect("127.0.0.1","root","root");
																if (!$Open){
																die ("Koneksi ke Engine MySQL Gagal !<br>");
																}
															$Koneksi = mysqli_select_db($Open, "cloudconcent");
																if (!$Koneksi){
																die ("Koneksi ke Database Gagal !");
																}
															$Cari="select * from faq where pic = 'TI' ORDER BY id ASC LIMIT 1";
															$Tampil = mysqli_query($Open, $Cari);
																while (	$hasil = mysqli_fetch_array ($Tampil)) {
																	$id= stripslashes ($hasil['id']);
																	$subject= stripslashes ($hasil['subject']);
																	$category= stripslashes ($hasil['category']);
																	$solution = stripslashes ($hasil['solution']);
																	$pic = stripslashes ($hasil['pic']);
																	$label = stripslashes ($hasil['label']);
																{
															?>
                                                            
                                                
                                                                <div class="card list-view-media">
                                                                    <div class="card-block">
                                                                        <div class="media">
                                                                            
                                                                            <div class="media-body">
                                                                                <div class="col-xs-12">
                                                                                    <h6 class="d-inline-block">
                                                                                        <?=$subject?></h6>
                                                                                    <label class="label <?=$label?>"><?=$pic?></label>
                                                                                </div>
                                                                                <div class="f-13 text-muted m-b-15">
                                                                                    <?=$category?>
                                                                                </div>
                                                                                <p><?=$solution?></p>
                                                                                
																				<div class="m-t-15">
                                                                                    <button type="button" data-toggle="tooltip" title="Facebook"
                                                                                            class="btn btn-facebook btn-mini waves-effect waves-light">
                                                                                        <span class="icofont icofont-social-facebook"></span>
                                                                                    </button>
                                                                                    <button type="button" data-toggle="tooltip" title="Twitter"
                                                                                            class="btn btn-twitter btn-mini waves-effect waves-light">
                                                                                        <span class="icofont icofont-social-twitter"></span>
                                                                                    </button>
                                                                                    <button type="button" data-toggle="tooltip" title="Linkedin"
                                                                                            class="btn btn-linkedin btn-mini waves-effect waves-light">
                                                                                        <span class="icofont icofont-brand-linkedin"></span>
                                                                                    </button>
                                                                                    <button type="button"  data-toggle="tooltip" title="Drible"
                                                                                            class="btn btn-dribbble btn-mini waves-effect waves-light">
                                                                                        <span class="icofont icofont-social-dribble"></span>
                                                                                    </button>
                                                                                </div>
																				
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
																
																<?php  
																}
																}
																mysqli_close($Open);
															?>
                                                            </li>
															
                                                        </ul>
                                                    </div>
													
													
													
													
													
                                                </div>
                                            </div>
                                        </div>
										
										<div class="row">
                                                            <div class="col-lg-12 col-xl-12">
															FAQ | <i>By your parameter: </i> 
															<?PHP 
															error_reporting(E_ERROR | E_PARSE);
															$keywords=$_POST['keywords']; ?> <u><?=$keywords;?></u>
                                                               
															<hr>
															   <div class="row card-block">
															   	<div class="col-md-12">
																		<ul class="list-view">
																			<li>
                                            
															<?php
															$Open = mysqli_connect("127.0.0.1","root","root");
																if (!$Open){
																die ("Koneksi ke Engine MySQL Gagal !<br>");
																}
															$Koneksi = mysqli_select_db($Open, "cloudconcent");
																if (!$Koneksi){
																die ("Koneksi ke Database Gagal !");
																}
																
															$keywords=$_POST['keywords'];
															if($keywords ){
															$Cari2="select * from faq where subject like '%$keywords%' ORDER BY id";
															$Tampil2 = mysqli_query($Open, $Cari2);
																while (	$hasil2 = mysqli_fetch_array ($Tampil2)) {
																	$id2= stripslashes ($hasil2['id']);
																	$subject2= stripslashes ($hasil2['subject']);
																	$category2= stripslashes ($hasil2['category']);
																	$solution2 = stripslashes ($hasil2['solution']);
																	$pic2 = stripslashes ($hasil2['pic']);
																	$label2 = stripslashes ($hasil2['label']);
																{
															?>
                                                            
                                                
                                                                <div class="card list-view-media">
                                                                    <div class="card-block">
                                                                        <div class="media">
                                                                            
                                                                            <div class="media-body">
                                                                                <div class="col-xs-12">
                                                                                    <h6 class="d-inline-block">
                                                                                        <?=$subject2?></h6>
                                                                                    <label class="label <?=$label2?>"><?=$pic2?></label>
                                                                                </div>
                                                                                <div class="f-13 text-muted m-b-15">
                                                                                    <?=$category2?>
                                                                                </div>
                                                                                <p><?=$solution2?></p>
                                                                                
																				<div class="m-t-15">
                                                                                    <button type="button" data-toggle="tooltip" title="Facebook"
                                                                                            class="btn btn-facebook btn-mini waves-effect waves-light">
                                                                                        <span class="icofont icofont-social-facebook"></span>
                                                                                    </button>
                                                                                    <button type="button" data-toggle="tooltip" title="Twitter"
                                                                                            class="btn btn-twitter btn-mini waves-effect waves-light">
                                                                                        <span class="icofont icofont-social-twitter"></span>
                                                                                    </button>
                                                                                    <button type="button" data-toggle="tooltip" title="Linkedin"
                                                                                            class="btn btn-linkedin btn-mini waves-effect waves-light">
                                                                                        <span class="icofont icofont-brand-linkedin"></span>
                                                                                    </button>
                                                                                    <button type="button"  data-toggle="tooltip" title="Drible"
                                                                                            class="btn btn-dribbble btn-mini waves-effect waves-light">
                                                                                        <span class="icofont icofont-social-dribble"></span>
                                                                                    </button>
                                                                                </div>
																				
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
																
																<?php  
																}
																}
																}
																mysqli_close($Open);
															?>
                                                            </li>
															
                                                        </ul>
                                                    </div>
													
                                                </div>
                                            </div>
                                        </div>
										<!-- Row FAQ Search end -->
										
										
										
                                    </div>
															
                                                        
                                                            
															
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Material tab card end -->
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
