<?php
session_start();
error_reporting(0);
include('../admin/includes/config.php');
 ?>
<!DOCTYPE html>

<html class=" js no-touch no-mobile no-phone no-tablet mobilegradea" style=""><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <title>User Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <link href="./User Profile Pages HTML Template - Responsive Multipurpose Admin Templates _ Vendroid_files/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="./User Profile Pages HTML Template - Responsive Multipurpose Admin Templates _ Vendroid_files/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="./User Profile Pages HTML Template - Responsive Multipurpose Admin Templates _ Vendroid_files/font-entypo.css" rel="stylesheet" type="text/css">    
    <link href="./User Profile Pages HTML Template - Responsive Multipurpose Admin Templates _ Vendroid_files/fonts.css" rel="stylesheet" type="text/css">
    <link href="./User Profile Pages HTML Template - Responsive Multipurpose Admin Templates _ Vendroid_files/jquery-ui.custom.min.css" rel="stylesheet" type="text/css">    
    <link href="./User Profile Pages HTML Template - Responsive Multipurpose Admin Templates _ Vendroid_files/prettyPhoto.css" rel="stylesheet" type="text/css">
    <link href="./User Profile Pages HTML Template - Responsive Multipurpose Admin Templates _ Vendroid_files/isotope.css" rel="stylesheet" type="text/css">
    <link href="./User Profile Pages HTML Template - Responsive Multipurpose Admin Templates _ Vendroid_files/jquery.pnotify.css" media="screen" rel="stylesheet" type="text/css">    
	<link href="./User Profile Pages HTML Template - Responsive Multipurpose Admin Templates _ Vendroid_files/prettify.css" rel="stylesheet" type="text/css">  
    <link href="./User Profile Pages HTML Template - Responsive Multipurpose Admin Templates _ Vendroid_files/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css">
    <link href="./User Profile Pages HTML Template - Responsive Multipurpose Admin Templates _ Vendroid_files/jquery.tagsinput.css" rel="stylesheet" type="text/css">
    <link href="./User Profile Pages HTML Template - Responsive Multipurpose Admin Templates _ Vendroid_files/bootstrap-switch.css" rel="stylesheet" type="text/css">    
    <link href="./User Profile Pages HTML Template - Responsive Multipurpose Admin Templates _ Vendroid_files/daterangepicker-bs3.css" rel="stylesheet" type="text/css">    
    <link href="./User Profile Pages HTML Template - Responsive Multipurpose Admin Templates _ Vendroid_files/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css">
    <link href="./User Profile Pages HTML Template - Responsive Multipurpose Admin Templates _ Vendroid_files/colorpicker.css" rel="stylesheet" type="text/css">            
    <link href="./User Profile Pages HTML Template - Responsive Multipurpose Admin Templates _ Vendroid_files/theme.min.css" rel="stylesheet" type="text/css">

    <link href="./User Profile Pages HTML Template - Responsive Multipurpose Admin Templates _ Vendroid_files/chrome.css" rel="stylesheet" type="text/chrome">   
<link href="./User Profile Pages HTML Template - Responsive Multipurpose Admin Templates _ Vendroid_files/theme-responsive.min.css" rel="stylesheet" type="text/css"> 
    <link href="./User Profile Pages HTML Template - Responsive Multipurpose Admin Templates _ Vendroid_files/custom.css" rel="stylesheet" type="text/css">



    <!-- Head SCRIPTS -->
    <script type="text/javascript" async="" src="./User Profile Pages HTML Template - Responsive Multipurpose Admin Templates _ Vendroid_files/ga.js.download"></script><script type="text/javascript" src="./User Profile Pages HTML Template - Responsive Multipurpose Admin Templates _ Vendroid_files/modernizr.js.download"></script> 
    <script type="text/javascript" src="./User Profile Pages HTML Template - Responsive Multipurpose Admin Templates _ Vendroid_files/mobile-detect.min.js.download"></script> 
    <script type="text/javascript" src="./User Profile Pages HTML Template - Responsive Multipurpose Admin Templates _ Vendroid_files/mobile-detect-modernizr.js.download"></script> 
 
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script type="text/javascript" src="js/html5shiv.js"></script>
      <script type="text/javascript" src="js/respond.min.js"></script>     
    <![endif]-->
    
</head>    

<body id="pages" class="full-layout  nav-right-hide nav-right-start-hide  nav-top-fixed      responsive    clearfix breakpoint-975" data-active="pages " data-smooth-scrolling="1" style="">     
<div class="vd_body">
<!-- Header Start -->
  
  <!-- Header Ends --> 
<div class="content">
  <div class="container">
       
    <!-- Middle Content Start -->
    
    <div class="vd_content-wrapper" style="min-height: 1059px;">
      <div class="" style="min-height: 1059px;">
        <div class="">
          <div class="">
            <div class="">
              <ul class="breadcrumb">
                <li><a href="">Home</a> </li>
                
                <li class="active">User Profile Pages</li>
              </ul>
              <div class="vd_panel-menu hidden-sm hidden-xs" data-intro="&lt;strong&gt;Expand Control&lt;/strong&gt;&lt;br/&gt;To expand content page horizontally, vertically, or Both. If you just need one button just simply remove the other button code." data-step="5" data-position="left">
   <div data-action="fullscreen" data-original-title="Remove Navigation Bar and Top Menu Toggle" data-toggle="tooltip" data-placement="bottom" class="fullscreen-button menu"> <i class="glyphicon glyphicon-fullscreen"></i> </div>
      
</div>
 
            </div>
          </div>
          <div class="vd_title-section clearfix">
            <div class="vd_panel-header no-subtitle">
              <h1>User Profile Page</h1>
            </div>
          </div>
		  <?php $sql = "SELECT EmpId,FirstName,LastName,Exte,Department,Status,Dob,RegDate,id,Role,EmailId,Wnumber,Address,Ijd,City,Twe,Track from  tblemployees where id = 18";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{               ?>
          <div class="vd_content-section clearfix">
            <div class="row">
              <div class="col-sm-3">
                <div class="panel widget light-widget panel-bd-top">
                  <div class="panel-heading no-title"> </div>
                  <div class="panel-body">
                    <div class="text-center vd_info-parent"> <img alt="example image" src="./User Profile Pages HTML Template - Responsive Multipurpose Admin Templates _ Vendroid_files/big.jpg"> </div>
                   
                    <h2 class="font-semibold mgbt-xs-5"><?php echo htmlentities($result->FirstName." ".$result->LastName);?></h2>
                    <h4><?php echo htmlentities($result->Role);?></h4>
                    
                    <div class="mgtp-20">
                      <table class="table table-striped table-hover">
                        <tbody>
                          <tr>
                            <td style="width:60%;">Account</td>
                            <td><span class="label label-success"><?php echo htmlentities($result->Department);?></span></td>
                          </tr>
						  <tr>
                            <td style="width:60%;">Track</td>
                            <td><span class="label label-success"><?php echo htmlentities($result->Track);?></span></td>
                          </tr>
						  <tr>
                            <td>Total Work Experience</td>
                            <td><?php echo htmlentities($result->Twe);?></td>
                          </tr>
                          
                          <tr>
                            <td>Infosys Joined</td>
                            <td> <?php echo htmlentities($result->Ijd);?></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <!-- panel widget -->
                
                <!-- panel widget --> 
              </div>
              <div class="col-sm-9">
                <div class="tabs widget">
  <ul class="nav nav-tabs widget">
    <li class="active"> <a data-toggle="tab" href="#profile-tab"> Profile <span class="menu-active"><i class="fa fa-caret-up"></i></span> </a></li>
    <li> <a data-toggle="tab" href="#Icount-tab"> Projects <span class="menu-active"><i class="fa fa-caret-up"></i></span> </a></li>    
    <li> <a data-toggle="tab" href="#Icount-tab"> Icount <span class="menu-active"><i class="fa fa-caret-up"></i></span> </a></li>
    <li> <a data-toggle="tab" href="#Icount-tab"> Extra <span class="menu-active"><i class="fa fa-caret-up"></i></span> </a></li>

  </ul>
  <div class="tab-content">
    <div id="profile-tab" class="tab-pane active">
      <div class="pd-20">
<div class="vd_info tr"> <a class="btn vd_btn btn-xs vd_bg-yellow"> <i class="fa fa-pencil append-icon"></i> Edit </a> </div>      
        <h3 class="mgbt-xs-15 mgtp-10 font-semibold"><i class="icon-user mgr-10 profile-icon"></i> ABOUT</h3>
        <div class="row">
          <div class="col-sm-6">
            <div class="row mgbt-xs-0">
              <label class="col-xs-5 control-label">Employee Name:</label>
              <div class="col-xs-7 controls"><?php echo htmlentities($result->FirstName." ".$result->LastName);?></div>
              <!-- col-sm-10 --> 
            </div>
          </div>
          <div class="col-sm-6">
            <div class="row mgbt-xs-0">
              <label class="col-xs-5 control-label">Phone:</label>
              <div class="col-xs-7 controls"><?php echo htmlentities($result->Wnumber);?></div>
              <!-- col-sm-10 --> 
            </div>
          </div>
          <div class="col-sm-6">
            <div class="row mgbt-xs-0">
              <label class="col-xs-5 control-label">Emp ID:</label>
              <div class="col-xs-7 controls"><?php echo htmlentities($result->EmpId);?></div>
              <!-- col-sm-10 --> 
            </div>
          </div>
          <div class="col-sm-6">
            <div class="row mgbt-xs-0">
              <label class="col-xs-5 control-label">Email:</label>
              <div class="col-xs-7 controls"><?php echo htmlentities($result->EmailId);?></div>
              <!-- col-sm-10 --> 
            </div>
          </div>
          <div class="col-sm-6">
            <div class="row mgbt-xs-0">
              <label class="col-xs-5 control-label">City:</label>
              <div class="col-xs-7 controls"><?php echo htmlentities($result->City);?></div>
              <!-- col-sm-10 --> 
            </div>
          </div>
          <div class="col-sm-6">
            <div class="row mgbt-xs-0">
              <label class="col-xs-5 control-label">Country:</label>
              <div class="col-xs-7 controls">India</div>
              <!-- col-sm-10 --> 
            </div>
          </div>
          <div class="col-sm-6">
            <div class="row mgbt-xs-0">
              <label class="col-xs-5 control-label">Birthday:</label>
              <div class="col-xs-7 controls"><?php echo htmlentities($result->Dob);?></div>
              <!-- col-sm-10 --> 
            </div>
          </div>
          <div class="col-sm-6">
            <div class="row mgbt-xs-0">
              <label class="col-xs-5 control-label">Interests:</label>
              <div class="col-xs-7 controls">Basketball, Web, Design, etc.</div>
              <!-- col-sm-10 --> 
            </div>
          </div>
          <div class="col-sm-6">
            <div class="row mgbt-xs-0">
              <label class="col-xs-5 control-label">Ext:</label>
              <div class="col-xs-7 controls"><?php echo htmlentities($result->Exte);?></div>
              <!-- col-sm-10 --> 
            </div>
          </div>
          <div class="col-sm-6">
            <div class="row mgbt-xs-0">
              <label class="col-xs-5 control-label">Blood Group:</label>
              <div class="col-xs-7 controls">B +</div>
              <!-- col-sm-10 --> 
            </div>
          </div>
        </div>
        <hr class="pd-2">
        
        </div>
        <!-- row -->
        <hr class="pd-10">
        <div class="row">
          
          <!-- col-sm-7 --> 
          <div class="col-sm-5">
            <h3 class="mgbt-xs-15 font-semibold"><i class="fa fa-flask mgr-10 profile-icon"></i> SKILL</h3>
            <div class="skill-list">
              <div class="skill-name"> Automation </div>
              <div class="progress  progress-sm">
                <div style="width: 90%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="90" role="progressbar" class="progress-bar progress-bar-success "> <span class="sr-only">90%</span> </div>
              </div>
            </div>
            <div class="skill-list">
              <div class="skill-name"> Java </div>
              <div class="progress  progress-sm">
                <div style="width: 70%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="20" role="progressbar" class="progress-bar progress-bar-danger "> <span class="sr-only">20%</span> </div>
              </div>
            </div>
            <div class="skill-list">
              <div class="skill-name"> PHP </div>
              <div class="progress  progress-sm">
                <div style="width: 50%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" role="progressbar" class="progress-bar progress-bar-warning "> <span class="sr-only">50% Complete</span> </div>
              </div>
            </div>
            <div class="skill-list">
              <div class="skill-name"> Javascript </div>
              <div class="progress  progress-sm">
                <div style="width: 60%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" role="progressbar" class="progress-bar progress-bar-info "> <span class="sr-only">60% Complete</span> </div>
              </div>
            </div>
            <div class="skill-list">
              <div class="skill-name"> Automation </div>
              <div class="progress  progress-sm">
                <div style="width: 95%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="95" role="progressbar" class="progress-bar progress-bar-success "> <span class="sr-only">95% Complete</span> </div>
              </div>
            </div> 
            <div class="skill-list">
              <div class="skill-name"> Writing </div>
              <div class="progress  progress-sm">
                <div style="width: 45%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="45" role="progressbar" class="progress-bar progress-bar-warning "> <span class="sr-only">45% Complete</span> </div>
              </div>
            </div>                                 
          </div>
          <!-- col-sm-7 -->           
        </div>
        <!-- row --> 
      </div>
      <!-- pd-20 --> 
	  <div id="Icount-tab" class="tab-pane active">
      <div class="pd-20">
<div class="vd_info tr"> <a class="btn vd_btn btn-xs vd_bg-yellow"> <i class="fa fa-pencil append-icon"></i> Edit </a> </div>      
        <h3 class="mgbt-xs-15 mgtp-10 font-semibold"><i class="icon-user mgr-10 profile-icon"></i> ICount</h3>
        <div class="row">
          <div class="col-sm-6">
            <div class="row mgbt-xs-0">
              <label class="col-xs-5 control-label">Previous Manager ID:</label>
              <div class="col-xs-7 controls">156737</div>
              <!-- col-sm-10 --> 
            </div>
          </div>
          <div class="col-sm-6">
            <div class="row mgbt-xs-0">
              <label class="col-xs-5 control-label">Previous Manager Name:</label>
              <div class="col-xs-7 controls">Manikandan_m07</div>
              <!-- col-sm-10 --> 
            </div>
          </div>
          <div class="col-sm-6">
            <div class="row mgbt-xs-0">
              <label class="col-xs-5 control-label">Previous Reviewer ID:</label>
              <div class="col-xs-7 controls">6266</div>
              <!-- col-sm-10 --> 
            </div>
          </div>
          <div class="col-sm-6">
            <div class="row mgbt-xs-0">
              <label class="col-xs-5 control-label">Previous Reviewer ID:</label>
              <div class="col-xs-7 controls">Mayyappan K R</div>
              <!-- col-sm-10 --> 
            </div>
          </div>
          <div class="col-sm-6">
            <div class="row mgbt-xs-0">
              <label class="col-xs-5 control-label">Current Manager ID:</label>
              <div class="col-xs-7 controls">123456</div>
              <!-- col-sm-10 --> 
            </div>
          </div>
          <div class="col-sm-6">
            <div class="row mgbt-xs-0">
              <label class="col-xs-5 control-label">Current Manager Name:</label>
              <div class="col-xs-7 controls">Saranya</div>
              <!-- col-sm-10 --> 
            </div>
          </div>
          <div class="col-sm-6">
            <div class="row mgbt-xs-0">
              <label class="col-xs-5 control-label">ICount Status(Complete)</label>
              <div class="col-xs-7 controls">Yes</div>
              <!-- col-sm-10 --> 
            </div>
          </div>
          <div class="col-sm-6">
            <div class="row mgbt-xs-0">
              <label class="col-xs-5 control-label">Icount Goal Set</label>
              <div class="col-xs-7 controls">Yes</div>
              <!-- col-sm-10 --> 
            </div>
          </div>
          <div class="col-sm-6">
            
          </div>
         
        </div>
        <hr class="pd-2">
        
        </div>
        <!-- row -->
        <hr class="pd-10">
        <div class="row">
          
          <!-- col-sm-7 --> 
          <div class="col-sm-5">
            <h3 class="mgbt-xs-15 font-semibold"><i class="fa fa-flask mgr-10 profile-icon"></i> SKILL</h3>
            <div class="skill-list">
              <div class="skill-name"> Photoshop </div>
              <div class="progress  progress-sm">
                <div style="width: 90%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="90" role="progressbar" class="progress-bar progress-bar-success "> <span class="sr-only">90%</span> </div>
              </div>
            </div>
            <div class="skill-list">
              <div class="skill-name"> Java </div>
              <div class="progress  progress-sm">
                <div style="width: 70%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="20" role="progressbar" class="progress-bar progress-bar-danger "> <span class="sr-only">20%</span> </div>
              </div>
            </div>
            <div class="skill-list">
              <div class="skill-name"> PHP </div>
              <div class="progress  progress-sm">
                <div style="width: 50%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" role="progressbar" class="progress-bar progress-bar-warning "> <span class="sr-only">50% Complete</span> </div>
              </div>
            </div>
            <div class="skill-list">
              <div class="skill-name"> Javascript </div>
              <div class="progress  progress-sm">
                <div style="width: 60%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" role="progressbar" class="progress-bar progress-bar-info "> <span class="sr-only">60% Complete</span> </div>
              </div>
            </div>
            <div class="skill-list">
              <div class="skill-name"> Automation </div>
              <div class="progress  progress-sm">
                <div style="width: 95%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="95" role="progressbar" class="progress-bar progress-bar-success "> <span class="sr-only">95% Complete</span> </div>
              </div>
            </div> 
            <div class="skill-list">
              <div class="skill-name"> Writing </div>
              <div class="progress  progress-sm">
                <div style="width: 45%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="45" role="progressbar" class="progress-bar progress-bar-warning "> <span class="sr-only">45% Complete</span> </div>
              </div>
            </div>                                 
          </div>
          <!-- col-sm-7 -->           
        </div>
        <!-- row --> 
      </div>
    </div>
    <!-- home-tab -->
    
    <?php $cnt++;} }?>
<!-- Footer Start -->
  <footer class="footer-1" id="footer">      
    <div class="vd_bottom ">
        <div class="container">
            <div class="row">
              <div class=" col-xs-12">
                <div class="copyright">
                  	Copyright ©2018 IVS_RTL_RAIL. All Rights Reserved 
                </div>
              </div>
            </div><!-- row -->
        </div><!-- container -->
    </div>
  </footer>
<!-- Footer END -->
  
<!-- Head menu search form ends -->  
        
<!-- .vd_body END  -->
<a id="back-top" href="http://www.venmond.com/demo/vendroid/pages-user-profile.php#" data-action="backtop" class="vd_back-top"> <i class="fa  fa-angle-up"> </i> </a>

<!--
<a class="back-top" href="#" id="back-top"> <i class="icon-chevron-up icon-white"> </i> </a> -->

<!-- Javascript =============================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script type="text/javascript" src="./User Profile Pages HTML Template - Responsive Multipurpose Admin Templates _ Vendroid_files/jquery.js.download"></script> 
<!--[if lt IE 9]>
  <script type="text/javascript" src="js/excanvas.js"></script>      
<![endif]-->
<script type="text/javascript" src="./User Profile Pages HTML Template - Responsive Multipurpose Admin Templates _ Vendroid_files/bootstrap.min.js.download"></script> 
<script type="text/javascript" src="./User Profile Pages HTML Template - Responsive Multipurpose Admin Templates _ Vendroid_files/jquery-ui.custom.min.js.download"></script>
<script type="text/javascript" src="./User Profile Pages HTML Template - Responsive Multipurpose Admin Templates _ Vendroid_files/jquery.ui.touch-punch.min.js.download"></script>

<script type="text/javascript" src="./User Profile Pages HTML Template - Responsive Multipurpose Admin Templates _ Vendroid_files/caroufredsel.js.download"></script> 
<script type="text/javascript" src="./User Profile Pages HTML Template - Responsive Multipurpose Admin Templates _ Vendroid_files/plugins.js.download"></script>

<script type="text/javascript" src="./User Profile Pages HTML Template - Responsive Multipurpose Admin Templates _ Vendroid_files/breakpoints.js.download"></script>
<script type="text/javascript" src="./User Profile Pages HTML Template - Responsive Multipurpose Admin Templates _ Vendroid_files/jquery.dataTables.min.js.download"></script>
<script type="text/javascript" src="./User Profile Pages HTML Template - Responsive Multipurpose Admin Templates _ Vendroid_files/jquery.prettyPhoto.js.download"></script> 

<script type="text/javascript" src="./User Profile Pages HTML Template - Responsive Multipurpose Admin Templates _ Vendroid_files/jquery.mCustomScrollbar.concat.min.js.download"></script>
<script type="text/javascript" src="./User Profile Pages HTML Template - Responsive Multipurpose Admin Templates _ Vendroid_files/jquery.tagsinput.min.js.download"></script>
<script type="text/javascript" src="./User Profile Pages HTML Template - Responsive Multipurpose Admin Templates _ Vendroid_files/bootstrap-switch.min.js.download"></script>
<script type="text/javascript" src="./User Profile Pages HTML Template - Responsive Multipurpose Admin Templates _ Vendroid_files/jquery.blockUI.js.download"></script>
<script type="text/javascript" src="./User Profile Pages HTML Template - Responsive Multipurpose Admin Templates _ Vendroid_files/jquery.pnotify.min.js.download"></script>

<script type="text/javascript" src="./User Profile Pages HTML Template - Responsive Multipurpose Admin Templates _ Vendroid_files/theme.js.download"></script>
<script type="text/javascript" src="./User Profile Pages HTML Template - Responsive Multipurpose Admin Templates _ Vendroid_files/custom.js.download"></script>
 
<!-- Specific Page Scripts Put Here -->
<script type="text/javascript" src="./User Profile Pages HTML Template - Responsive Multipurpose Admin Templates _ Vendroid_files/isotope.pkgd.min.js.download"></script>


<script type="text/javascript">
$(document).ready(function() {
	"use strict";
		
  // init Isotope
  var $container = $('.isotope').isotope({
    itemSelector: '.gallery-item',
    layoutMode: 'fitRows'
  });
  

	$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
	  $container.isotope('layout');
	});

  // bind filter button click
  $('#filters').on( 'click', 'a', function() {
    var filterValue = $( this ).attr('data-filter');
	$('#filters li').removeClass('active');
	$(this).parent().addClass('active');	
    $container.isotope({ filter: filterValue });
  });

	
});
</script>
<!-- Specific Page Scripts END -->




<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information. -->

<script>
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-XXXXX-X']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
</script> 


</body></html>