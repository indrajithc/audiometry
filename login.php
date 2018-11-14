
<?php
include_once( 'connection.php' );

$db = new Database();
$error = "";
//var_dump($_POST);
session_start();


//print_r($_POST);
if( isset( $_POST['submit'] ) ) {


    
    $email = $_POST['email'];
	$password = $_POST['password'];
    //print_r($_POST);
   
  $stmnt='select * from t_login where email = :email and password = :password';
 
  $params=array( 
   ':email'  =>  $email,
   ':password'  =>  md5($password)
 ); 

  if($db->display($stmnt,$params)){
    //echo "123";
   $_SESSION['uid']=  $db->display($stmnt,$params)[0]['uid'];
  // $_SESSION['type']='admin';
   header('Location: profile.php');
   exit();
 }else{
   $error= 'Incorrect username or password';
 }
}

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
                            <a class="d-block" href="index.php" rel="home"><img class="d-block" src="images/logo.png" alt="logo"></a>
                        </div><!-- .site-branding -->

                        <nav class="site-navigation d-flex justify-content-end align-items-center">
                            <ul class="d-flex flex-column flex-lg-row justify-content-lg-end align-items-center">
                                <li class="current-menu-item"><a href="index.php">Home</a></li>
                                <li><a href="login.php">Login</a></li>
                                <!--li><a href="services.html">Registration</a></li-->
                                <li><a href="about.html">About</a></li>
                                <!--li><a href="contact.html">Contact</a></li-->

                               
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
        <h1> Audiometry</h1>
                <h5><i> Enjoy Listening Everyday</i></h5>
            <div class="row">
                
                <div class="col-12">
                   

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

        <!--img class="header-img" src="images/service-bg.png" alt=""-->
    </header><!-- .site-header -->

    <div class="container " >
            <div class="row-50" >
                <div class="col-100 col-lg-20 " >
                <center><h1>Login</h1>
                    <form name="form1" method="post" action="" >
                         <table height="186"  >
       	                     <tr>
                        	<td>EMAIL ID</td>
                            <td><input type="email" name="email" value="" required /></td>
                              </tr>
                              <tr>
                        	<td>PASSWORD</td>
                            <td><input type="password" name="password" value="" required /></td>
                                 </tr>
											
                      <tr>
                         
                      <td><input type="submit" name="submit" value="submit" class="button gradient-bg" />

                                            
                                            </tr>
                                                    
				              </table>
                    </form>
                </center>
                </div>
            </div>
    </div>
                    <!--h2>Only Top Quality Services</h2>

                    <div class="row">
                        <div class="col-12 col-md-6">
                            </div>

                        <div class="col-12 col-md-6">
                            <p>Amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. Curabitur ut augue finibus, luctus tortor at, ornare erat. Nulla facilisi. Sed est risus, laoreet et quam non, viverra accumsan leo.</p>
                        </div>
                    </div>

                    <div class="w-100 text-center mt-5">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-22">
                <div class="our-departments-wrap">
                    <h2>Our Departments</h2>
                        <div class="row">
                            <div class="col-5 col-md-3">
                                </div>
    
                            <div class="col-5 col-md-6">
               <div class="page_content" id="login">
              <form name="form1" method="post" action="#">
                <table height="186">
       	  <tr>
                        	<td>EMAIL ID</td>
                            <td><input type="email" name="email" value="" required /></td>
                  </tr>
                        <tr>
                        	<td>PASSWORD</td>
                            <td><input type="password" name="password" value="" required /></td>
                        </tr>
												
                      <tr>
                      <td><input type="submit" name="submit" value="submit" class="button gradient-bg" />
                      <script type="text/javascript">
    document.getElementById("submit").onclick = function () {
        location.href = "personal.php";
    };
</script>

													</tr>
                              </table>
                              </form>
                            </div>
                            </div>
                                    <!----div class="row">
                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="our-departments-cont">
                                <header class="entry-header d-flex flex-wrap align-items-center">
                                    <img src="images/cardiogram.png" alt="">

                                    <h3>Cardioology</h3>
                                </header>

                                <div class="entry-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris.</p>
                                </div>

                                <footer class="entry-footer">
                                    <a href="#">read more</a>
                                </footer>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="our-departments-cont">
                                <header class="entry-header d-flex flex-wrap align-items-center">
                                    <img src="images/stomach-2.png" alt="">

                                    <h3>Gastroenterology</h3>
                                </header>

                                <div class="entry-content">
                                    <p>Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien.</p>
                                </div>

                                <footer class="entry-footer">
                                    <a href="#">read more</a>
                                </footer>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="our-departments-cont">
                                <header class="entry-header d-flex flex-wrap align-items-center">
                                    <img src="images/blood-sample-2.png" alt="">

                                    <h3>Medical Lab</h3>
                                </header>

                                <div class="entry-content">
                                    <p>Lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus.</p>
                                </div>

                                <footer class="entry-footer">
                                    <a href="#">read more</a>
                                </footer>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="our-departments-cont">
                                <header class="entry-header d-flex flex-wrap align-items-center">
                                    <img src="images/teeth.png" alt="">

                                    <h3>Dental Care</h3>
                                </header>

                                <div class="entry-content">
                                    <p>Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien.</p>
                                </div>

                                <footer class="entry-footer">
                                    <a href="#">read more</a>
                                </footer>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="our-departments-cont">
                                <header class="entry-header d-flex flex-wrap align-items-center">
                                    <img src="images/stretcher.png" alt="">

                                    <h3>Surgery</h3>
                                </header>

                                <div class="entry-content">
                                    <p>Lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus.</p>
                                </div>

                                <footer class="entry-footer">
                                    <a href="#">read more</a>
                                </footer>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4">
                            <div class="our-departments-cont">
                                <header class="entry-header d-flex flex-wrap align-items-center">
                                    <img src="images/scanner.png" alt="">

                                    <h3>Neurology</h3>
                                </header>

                                <div class="entry-content">
                                    <p>Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien.</p>
                                </div>

                                <footer class="entry-footer">
                                    <a href="#">read more</a>
                                </footer>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4 mb-md-0">
                            <div class="our-departments-cont">
                                <header class="entry-header d-flex flex-wrap align-items-center">
                                    <img src="images/bones.png" alt="">

                                    <h3>Orthopaedy</h3>
                                </header>

                                <div class="entry-content">
                                    <p>Lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus.</p>
                                </div>

                                <footer class="entry-footer">
                                    <a href="#">read more</a>
                                </footer>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4 mb-lg-0">
                            <div class="our-departments-cont">
                                <header class="entry-header d-flex flex-wrap align-items-center">
                                    <img src="images/blood-donation-2.png" alt="">

                                    <h3>Pediatry</h3>
                                </header>

                                <div class="entry-content">
                                    <p>Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien.</p>
                                </div>

                                <footer class="entry-footer">
                                    <a href="#">read more</a>
                                </footer>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-4 mb-0">
                            <div class="our-departments-cont">
                                <header class="entry-header d-flex flex-wrap align-items-center">
                                    <img src="images/glasses.png" alt="">

                                    <h3>Ophthalmology</h3>
                                </header>

                                <div class="entry-content">
                                    <p>Lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus.</p>
                                </div>

                                <footer class="entry-footer">
                                    <a href="#">read more</a>
                                </footer>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div-->

    <!--div class="container">
        <div class="row">
            <div class="col-12">
                <div class="services-tabs">
                    <div class="tabs">
                        <ul class="tabs-nav d-flex flex-wrap">
                            <li class="tab-nav d-flex justify-content-center align-items-center" data-target="#tab_1">Pellentesque pulvinar</li>
                            <li class="tab-nav d-flex justify-content-center align-items-center" data-target="#tab_2">  Pellentesque lacinia </li>
                            <li class="tab-nav d-flex justify-content-center align-items-center" data-target="#tab_3">Consectetur diam</li>
                            <li class="tab-nav d-flex justify-content-center align-items-center" data-target="#tab_4">CMauris tortor</li>
                            <li class="tab-nav d-flex justify-content-center align-items-center" data-target="#tab_5">Phasellus sit amet</li>
                        </ul>

                        <div class="tabs-container">
                            <div id="tab_1" class="tab-content">
                                <img src="images/service-tab-img.png" alt="">

                                <h4>Scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. </h4>

                                <p>Amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. Curabitur ut augue finibus, luctus tortor at, ornare erat. Nulla facilisi. Sed est risus, laoreet et quam non, viverra accumsan leo. Amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus</p>
                            </div>

                            <div id="tab_2" class="tab-content">
                                <img src="images/service-tab-img.png" alt="">

                                <h4>Scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. </h4>

                                <p>Amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. Curabitur ut augue finibus, luctus tortor at, ornare erat. Nulla facilisi. Sed est risus, laoreet et quam non, viverra accumsan leo. Amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus</p>
                            </div>

                            <div id="tab_3" class="tab-content">
                                <img src="images/service-tab-img.png" alt="">

                                <h4>Scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. </h4>

                                <p>Amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. Curabitur ut augue finibus, luctus tortor at, ornare erat. Nulla facilisi. Sed est risus, laoreet et quam non, viverra accumsan leo. Amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus</p>
                            </div>

                            <div id="tab_4" class="tab-content">
                                <img src="images/service-tab-img.png" alt="">

                                <h4>Scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. </h4>

                                <p>Amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. Curabitur ut augue finibus, luctus tortor at, ornare erat. Nulla facilisi. Sed est risus, laoreet et quam non, viverra accumsan leo. Amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus</p>
                            </div>

                            <div id="tab_5" class="tab-content">
                                <img src="images/service-tab-img.png" alt="">

                                <h4>Scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. </h4>

                                <p>Amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. Curabitur ut augue finibus, luctus tortor at, ornare erat. Nulla facilisi. Sed est risus, laoreet et quam non, viverra accumsan leo. Amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus</p>
                            </div>

                        </div>
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

                            <!--p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien.</p-->

                            <p class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Privacy policy <!--i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
 Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div><!-- .foot-about -->
                    </div><!-- .col -->

                    <div class="col-12 col-md-8 col-lg-5 mt-5 mt-md-0">
                        <!--div class="foot-contact">
                            <h2>Contact</h2>

                            <ul class="p-0 m-0">
                                <li><span>Addtress:</span>Mitlton Str. 26-27 London UK</li>
                                <li><span>Phone:</span>+53 345 7953 32453</li>
                                <li><span>Email:</span>yourmail@gmail.com</li>
                            </ul>
                        </div>
                    </div> .col -->

                    <div class="col-15 col-md-8 col-lg-20 mt-8 mt-md-5">
                        <div class="foot-links">
                            <h2>Usefull Links</h2>

                            <ul class="p-0 m-0">
                                <li><a href="index.php">HOME</a></li>
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