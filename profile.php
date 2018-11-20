<?php
include_once( 'connection.php' );

$db = new Database();
$error = "";
//var_dump($_POST);
session_start();

//echo "123";
//print_r($_POST);
/*if( isset( $_POST['submit'] ) ) {
    $email = $_POST['email'];
	$password = $_POST['password'];
    //print_r($_POST);*/
   
  $stmnt='select * from t_register where uid = :uid';
 
  $params=array( 
   ':uid'  =>   $_SESSION['uid']
 );

$data = $db->display($stmnt,$params);

    $_SESSION['testid']=  $db->display($stmnt,$params)[0]['testid'];
     

if(isset($data[0])){
    $data = $data[0];
}
//header('Location: step1.php');

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <title>Online Hearing Solution</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="css/swiper.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="style.css">
</head>
<body class="single-page">
    <header class="site-header">
        <div class="nav-bar">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex flex-wrap justify-content-between align-items-center">
                        <div class="site-branding d-flex align-items-center">
                            <a class="d-block" href="index.html" rel="home"><!--img class="d-block" src="images/logo.png" alt="logo"--></a>
                        </div><!-- .site-branding -->

                        <nav class="site-navigation d-flex justify-content-end align-items-center">
                            <ul class="d-flex flex-column flex-lg-row justify-content-lg-end align-items-center">
                                <li class="current-menu-item"><a href="index.html">Home</a></li>
                                
                                <li><a href="index.html">Logout</a></li>
                                <!--li><a href="news.html">News</a></li-->
                                <li><a href="about.html">About us</a></li>
                                <!--li class="call-btn button gradient-bg mt-3 mt-md-0">
                                    <a class="d-flex justify-content-center align-items-center" href="#"><img src="images/emergency-call.png"> +34 586 778 8892</a>
                                </li-->
                            </ul>
                        </nav><!-- .site-navigation -->

                        <div class="hamburger-menu d-lg-none">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div><!-- .hamburger-menu -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .nav-bar -->

        <div class="container">
            <div class="row">
                <div class="col-12"><h1> Audiometry</h1>
                <h5><i> Enjoy Listening Everyday</i></h5>
                   

                     <div class="breadcrumbs">
                        <ul class="d-flex flex-wrap align-items-center p-0 m-0">
                        <a class="button gradient-bg" href="about_hearing.html">About Hearing</a>
                        <a class="button gradient-bg" href="hearing loss.html">Hearing Loss</a>
                        <a class="button gradient-bg" href="hearing_focus.html">Hearing Focus</a>
                           
                        </ul>
                    </div><!-- .breadcrumbs -->

                </div>
            </div>
        </div>

        <!--img class="header-img" src="images/about-bg.png" alt=""-->
    </header><!-- .site-header -->


<div class="container">
    
    <div class="row">
        <div class="col-12">
            
        <h1>Personal Details</h1>





                        <div class="page_content">
                        <div class="col-5 col-lg-3">
                                    <div class="my_left">
                                    <center>      
                                        
                                    <ul>
                                        <li><a href="editprofile.php">EDIT PROFILE</a></li>
                                        <li><a href="edit_password.php">CHANGE PASSWORD</a></li>
                                       
                                        <li><a href="step1.php">TAKE TEST</a></li>
                       
                                        
                                    
                
                                    </ul>
</center>
                                </div>
                                </div>
                        </div>
                               
                                
                                    <div class="my_right">
                                    <div class="col-15 col-md-8 col-lg-20 mt-10 mt-md-15">
                                    <form name="form1" method="post" action="" >
                                 
                                    <table width="610" height="536" style="text-align:left;" cellpadding="0" cellspacing="0">
                                         <tr>
                                            <td width="135">Name:<?php echo $data['name'];?></td>
                                            <td width=  "253"></td>
                                           </tr>
                                            <tr>
                                            <td>Dob:<?php echo $data['dob'];?></td>
                                            <td width="10"></td>
                                            </tr>
                                             <tr>
                                            <td>Gender:<?php echo $data['gender'];?></td>
                                            <td></td>
                                             </tr>
                                             <tr>
                                            <td>Address:<?php echo $data['address'];?></td>
                                            <td></td>
                                        </tr>
                
                                        <tr>
                                            <td>City:<?php echo $data['city'];?></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>State:<?php echo $data['state'];?></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>Email:<?php echo $data['email'];?></td>
                                            <td></td>
                                        </tr>
                                        
                                         </table>
                                         </form>
                                     </div>
                          
                         </div>



        
        </div>
    </div>
</div>

    <!--div class="med-history">
        
            <div class="row align-items-end"-->
            
            <link href="style.css" rel="stylesheet" type="text/css" />

                    <!--h2>MedArt History</h2>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. Curabitur ut augue finibus, luctus tortor at, ornare erat. Nulla facilisi. Sed est risus, laoreet et quam non, viverra accumsan leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. Curabitur ut augue finibus, luctus tortor at, ornare erat. </p>

                    <a class="d-inline-block button gradient-bg" href="#">Read More</a>
                </div>

                <div class="col-12 col-lg-6 mt-5 mt-lg-0">
                    <img class="responsive" src="images/about.jpg" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="faq-stuff">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Faq & Stuff</h2>
                </div>

                <div class="col-12 col-lg-6 mb-5 mb-lg-0">
                    <div class="accordion-wrap type-accordion">
                        <h3 class="entry-title d-flex justify-content-between align-items-center active">Elit mir congue ligula et efficitur pellentesqu<span class="arrow-r"></span></h3>

                        <div class="entry-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris.</p>
                        </div>

                        <h3 class="entry-title d-flex justify-content-between align-items-center">Pulvinar elit mi. Integer congue ligula et efficitur <span class="arrow-r"></span></h3>

                        <div class="entry-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris.</p>
                        </div>

                        <h3 class="entry-title d-flex justify-content-between align-items-center">Pellentesque pulvinar elit mi. Integer congue<span class="arrow-r"></span></h3>

                        <div class="entry-content">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris.</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6 mt-5 mt-lg-0">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="professional-box">
                                <h2 class="d-flex align-items-center">Professional</h2>

                                <img src="images/cardiogram-2.png" alt="">

                                <p>Lorem ipsum dolor sit amet, cons ectetur adipiscing elit. Donec males uada lorem.</p>
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="quality-box">
                                <h2 class="d-flex align-items-center">Quality</h2>

                                <img src="images/hospital.png" alt="">

                                <p>Lorem ipsum dolor sit amet, cons ectetur adipiscing elit. Donec males uada lorem.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="medical-team">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>The Medical Team</h2>
                </div>

                <div class="col-12 col-md-6 col-lg-3">
                    <div class="medical-team-wrap">
                        <img src="images/team-1.jpg" alt="">

                        <h4>Christinne Smith</h4>
                        <h5>PHD Surgeon</h5>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3 mt-5 mt-md-0">
                    <div class="medical-team-wrap">
                        <img src="images/team-2.jpg" alt="">

                        <h4>Anna Gustav</h4>
                        <h5>PHD Surgeon</h5>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3 mt-5 mt-lg-0">
                    <div class="medical-team-wrap">
                        <img src="images/team-3.jpg" alt="">

                        <h4>Phillip Williams</h4>
                        <h5>PHD Surgeon</h5>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-3 mt-5 mt-lg-0">
                    <div class="medical-team-wrap">
                        <img src="images/team-4.jpg" alt="">

                        <h4>Gina James</h4>
                        <h5>PHD Surgeon</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="subscribe-banner">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 offset-lg-2">
                    <h2>Subscribe to our newsletter</h2>

                    <form>
                        <input type="email" placeholder="E-mail address">
                        <input class="button gradient-bg" type="submit" value="Subscribe">
                    </form>
                </div>
            </div>
        </div>
    </div-->

    <footer class="site-footer">
        <div class="footer-widgets">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="foot-about">
                            <h2><a href="#"><img src="images/logo.png" alt=""></a></h2>

                            <!--p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien.</p>

                            <p class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved| Privacy policy  <!--i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a-->
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div><!-- .foot-about -->
                    </div><!-- .col -->

                    <div class="col-12 col-md-6 col-lg-4 mt-5 mt-md-0">
                        <div class="foot-contact">
                            <!--h2>Contact</h2>

                            <ul class="p-0 m-0">
                                <li><span>Addtress:</span>Mitlton Str. 26-27 London UK</li>
                                <li><span>Phone:</span>+53 345 7953 32453</li>
                                <li><span>Email:</span>yourmail@gmail.com</li>
                            </ul-->
                        </div>
                    </div><!-- .col -->

                     <div class="col-12 col-md-6 col-lg-4 mt-5 mt-md-0">
                        <div class="foot-links">
                            <h2>Usefull Links</h2>

                            <ul class="p-0 m-0">
                                <li><a href="index.html">HOME</a></li>
                                <li><a href="about_hearing.html">ABOUT HEARING</a></li>
                                <li><a href="about.html">ABOUT US</a></li>
                                <li><a href="hearing_loss.php">HEARING LOSS</a></li>
                               
                               
                                
                                
                            </ul>
                        </div><!-- .foot-links -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .footer-widgets -->
    </footer><!-- .site-footer -->

    <script type='text/javascript' src='js/jquery.js'></script>
    <script type='text/javascript' src='js/jquery.collapsible.min.js'></script>
    <script type='text/javascript' src='js/swiper.min.js'></script>
    <script type='text/javascript' src='js/jquery.countdown.min.js'></script>
    <script type='text/javascript' src='js/circle-progress.min.js'></script>
    <script type='text/javascript' src='js/jquery.countTo.min.js'></script>
    <script type='text/javascript' src='js/jquery.barfiller.js'></script>
    <script type='text/javascript' src='js/custom.js'></script>
</body>
</html>