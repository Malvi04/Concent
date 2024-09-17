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
                        <div class="main-body">
                            <div class="page-wrapper">
                                

                                    <!-- Page body start -->
                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <!-- Register your self card start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Edit FAQ Here</h5>
														<?PHP
											error_reporting(E_ERROR | E_PARSE);
											$m = $_GET['m'];
											echo "$m";
											?>
                                                        <span></span>

                                                    </div>
													
													                                                            <?php
	$Open = mysqli_connect("127.0.0.1","root","root");
		if (!$Open){
		die ("Koneksi ke Engine MySQL Gagal !<br>");
		}
	$Koneksi = mysqli_select_db($Open, "cloudconcent");
		if (!$Koneksi){
		die ("Koneksi ke Database Gagal !");
		}

	$id=$_GET["id"];	
	$Cari="select * from faq where id = '$id'";
	$Tampil = mysqli_query($Open, $Cari);
	    while (	$hasil = mysqli_fetch_array ($Tampil)) {
			$subject= stripslashes ($hasil['subject']);
			$category = stripslashes ($hasil['category']);
			$solution = stripslashes ($hasil['solution']);
			$pic = stripslashes ($hasil['pic']);
			$dateCreate = stripslashes ($hasil['dateCreate']);
			
		{
	?>
													
													
                                                    <div class="card-block">
                                                        <div class="j-wrapper j-wrapper-640">
                                                            <form action="ac-edit-faq.php" method="post" class="j-pro" id="j-pro">
                                                                <div class="j-content">
																	<!-- start id -->
                                                                    <div>
                                                                        <label class="j-label">ID</label>
                                                                        <div class="j-unit">
                                                                            <div class="j-input">
                                                                                <label class="j-icon-right" for="id">
                                                            <i class="icofont icofont-ui-user"></i>
                                                        </label>
                                                                                <input value="<?=$id?>" type="text" id="id" name="id" readonly>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- end id -->
                                                                    <!-- start subject -->
                                                                    <div>
                                                                        <label class="j-label">Subject</label>
                                                                        <div class="j-unit">
                                                                            <div class="j-input">
                                                                                <label class="j-icon-right" for="subject">
                                                            <i class="icofont icofont-ui-user"></i>
                                                        </label>
                                                                                <input value="<?=$subject?>" type="text" id="subject" name="subject" required>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- end subject -->
																	
																	<!-- start category -->
                                                                    <div>
                                                                        <label class="j-label">Category</label>
                                                                        <div class="j-unit">
                                                                            <div class="j-input">
                                                                                <label class="j-icon-right" for="category">
                                                            <i class="icofont icofont-ui-user"></i>
                                                        </label>
                                                                                <input value="<?=$category?>" type="text" id="category" name="category" required>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- end category -->
                                                                    <!-- start solution -->
                                                                    <div>
                                                                        <label class="j-label">Solution</label>
                                                                        <div class="j-unit">
                                                                            <div class="j-input">
                                                                                <textarea name="solution" required><?=$solution?></textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- end solution -->
																	<!-- start pic -->
                                                                    <div>
                                                                        <label class="j-label">PIC</label>
                                                                        <div class="j-unit">
                                                                            <div class="j-input">
                                                                                <label class="j-icon-right" for="pic">
                                                            <i class="icofont icofont-ui-user"></i>
                                                        </label>
                                                                                <input value="<?=$pic?>" type="text" id="pic" name="pic" required>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- end pic -->
                                                                    
                                                                    <!-- start response from server -->
                                                                    <div class="j-response"></div>
                                                                    <!-- end response from server -->
                                                                </div>
                                                                <!-- end /.content -->
                                                                <div class="j-footer">
																	<button type="submit" class="btn btn-mat btn-success">Update</button>
                                                                    <button type="reset" class="btn btn-mat btn-info m-r-20">Reset</button>
																	<button type="cancel" class="btn btn-mat btn-warning m-r-20" onclick="javascript:window.location='list-faq.php';">Cancel</button>
                                                                </div>
                                                                <!-- end /.footer -->
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Register your self card end -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Page body end -->
							<?php  
		}
	}
	
	
//Tutup koneksi engine MySQL
	mysqli_close($Open);
?>		
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
