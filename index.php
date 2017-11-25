<!DOCTYPE html>
<html>
<head>
    <title>Jivan Group</title>
    <meta charset="utf-8">
    <link rel="icon" href="images/Favicon.png" type="image/x-icon"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css?<?php echo date('l jS \of F Y h:i:s A'); ?>">
    <link rel="stylesheet" type="text/css" href="css/style.css?<?php echo date('l jS \of F Y h:i:s A'); ?>">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css?<?php echo date('l jS \of F Y h:i:s A'); ?>">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.default.css?<?php echo date('l jS \of F Y h:i:s A'); ?>">
    <link rel="stylesheet" type="text/css" href="css/animate.css?<?php echo date('l jS \of F Y h:i:s A'); ?>">
    <script src="https://code.jquery.com/jquery-2.2.4.min.js?<?php echo date('l jS \of F Y h:i:s A'); ?>"></script>
    <script src="js/bootstrap.min.js?<?php echo date('l jS \of F Y h:i:s A'); ?>"></script>
    <script src="js/owl.carousel.js?<?php echo date('l jS \of F Y h:i:s A'); ?>"></script>
    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.8/jquery.validate.min.js?<?php echo date('l jS \of F Y h:i:s A'); ?>""></script>
    <script src="js/wow.min.js?<?php echo date('l jS \of F Y h:i:s A'); ?>"></script> 
    <script>new WOW().init();</script>
</head>
<body>
<section id="header_menu_area" class="header-menu">
    <div class="container-fluid">
        <div class="col-lg-offset-1 col-md-6 col-xs-6 logo_left">
            <a href="index.php"><img src="images/logo.png" class="img-responsive"></a>
        </div>
         <div class="col-lg-4 col-md-5 col-xs-6 toggleright">
           <!-- <nav class="navbar navbar-defaul">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
              </div>
              <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                  <li class="active"><a href="index.php">Home</a></li>
                  <li><a href="#about">About</a></li>
                  <li><a href="project-list.php">Projects</a></li>
                  <li><a href="#contact">Contact</a></li>
                </ul>
              </div>
            </nav> -->
            <div id="wrapper">
                <div class="overlay"></div>
                <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
                    <ul class="nav sidebar-nav">                
                        <li><a class="active" href="index.php">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="project-list.php">Project</a></li>
                        <li><a href="carrers.php">Carrers</a></li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Guidelines <span class="caret"></span></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="buying-tip.php">Buying-Tips</a></li>
                            <li><a href="nri.php">N.R.I</a></li>
                          </ul>
                        </li>                        
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                </nav>
                <div id="page-content-wrapper">
                    <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
                    <div class="fd">
                        <span class="hamb-top"></span>
                        <span class="hamb-middle"></span>
                        <span class="hamb-bottom"></span>
                    </div>
                    </button>
                </div>
            </div>
        </div>
    </div>  
</section>
<section class="home-page-cat">
    <div id="owl-demo" class="owl-carousel owl-theme" style="display: block;">
        <div class="item" style="background: rgba(0, 0, 0, 0) url(images/home/banner/2.png) repeat scroll bottom center / cover;">
        </div>
        <div class="item" style="background: rgba(0, 0, 0, 0) url(images/home/banner/1.png) repeat scroll bottom center / cover;">
        </div>
        <div class="item" style="background: rgba(0, 0, 0, 0) url(images/home/banner/0.png) repeat scroll bottom center / cover;">
        </div>
        <div class="item" style="background: rgba(0, 0, 0, 0) url(images/home/banner/3.png) repeat scroll bottom center / cover;">
        </div>
        <div class="item" style="background: rgba(0, 0, 0, 0) url(images/home/banner/4.png) repeat scroll bottom center / cover;">
        </div>
        <div class="item" style="background: rgba(0, 0, 0, 0) url(images/home/banner/5.png) repeat scroll bottom center / cover;">
        </div>      
    </div>
</section>
<section class="project-area-home bg-gray">
    <div class="container-fluid">
        <div class="row">
            <div class="title-text">
                <h2 class="fs30 ptb50 text-c">CURRENT<span> PROJECTS</span></h2>
            </div>
            <div class="project-home clearfix">
                <div class="col-md-8 col-sm-12 project-image" style="background-image: url(./images/home/banner/7.png);">  
                </div>
                <div class="col-md-4 col-sm-12 project-content text-c ptb76 bg-white">
                    <img src="images/home/jivan-verra-logo.png" class="img-responsive">
                    <span class="pt20 pb30 colorbl clearfix">3 BHK  Elegant Apartments & Shops</span>
                    <div class="location mb30 clearfix">
                        <p><img src="images/home/location-icon.png"> Jivan Veera, Near Hyundai Showroom,<br>Beside Canara Bank,S.P.Ring Road,<br>Vastral, Ahmedabad - 382418</p>
                    </div>
                    <a href="project-detail.php" class="read-more">read-more</a>
                </div>
            </div>
            <div class="project-home mtb15 clearfix">
                <div class="col-md-8 col-sm-12 project-image ipad" style="background-image: url(./images/home/banner/9.png);"> 
                </div>
                <div class="col-md-4 col-sm-12 project-content text-c ptb76 bg-white">
                    <img src="images/home/shubh-jivan-logo.png" class="img-responsive">
                    <span class="pt20 pb30 colorbl clearfix">2 & 3 BHK Exceptional Flats and Shops</span>
                    <div class="location mb30 clearfix">
                        <p><img src="images/home/location-icon.png"> Shubh Jivan, Opp. Canara Bank Sarovar-4,<br>NR.Jivan Arya Residency,<br>Vastral, Ahmedabad - 382418</p>
                    </div>
                    <a href="project-detail.php" class="read-more">read-more</a>
                </div>
                <div class="col-md-8 col-sm-12 project-image desktop" style="background-image: url(./images/home/shubh-jivan-project-image.png);">  
                </div>
            </div>
            <div class="project-home clearfix">
                <div class="col-md-8 col-sm-12 project-image" style="background-image: url(./images/home/banner/2.png);">   
                </div>
                <div class="col-md-4 col-sm-12 project-content text-c ptb76 bg-white">
                    <img src="images/home/jivan-arya-logo.png" class="img-responsive">
                    <span class="pt20 pb30 colorbl clearfix">Elegant Living with 2 BHK Luxurious Flats & Shops</span>
                    <div class="location mb30 clearfix">
                        <p><img src="images/home/location-icon.png"> Jivan Arya Residency, Opp. R.A.F. Camp,<br>200 ft. S.P. Ring Road,Opp. Canara Bank,<br>Vastral, Ahmedabad - 382418</p>
                    </div>
                    <a href="project-detail.php" class="read-more">read-more</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="we-build text-c">
    <div class="container">
        <div class="col-md-10 we-build-content">
            <h2>WE BUILD DREAMS NOTJUST A HOME</h2>
            <ul class="commercial clearfix">
                <li class="wow fadeInLeft" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft;">Commercial</li>
                <li class="wow fadeInLeft" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft;">Land Acquisition</li>
                <li class="wow fadeInLeft" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft;">Residencial</li>
            </ul>
            <p class="clearfix">Jivan Group has applied its uncompromising commitment to quality in building the residential and commercial properties and we have consistently exceeded expectations and delivered distinctive projects on time and on budget.</p>
            <span class="colorbl fs20 clearfix">CORPORATE SOCIAL RESPONSIBILITY</span>
            <p class="clearfix">Since our inception in 1983 Jivan Group has believed in, and has constantly striven to repay its moral debt to society. We believe in working towards making a difference to society by providing services that will uplift the standard of living and cover basic human needs.</p>
            <!-- <a href="#" class="read-more">read-more</a> -->
        </div>
    </div>
</section>
<section class="home-contact">
    <div class="container-fluid plr">
        <div class="col-sm-6 col-xs-12 google-map-home plr">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58757.17613762638!2d72.55424100837973!3d23.011891051353267!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3734f6d6cc2ed135!2sJEEVAN+PRAN+RESIDENCY!5e0!3m2!1sen!2sin!4v1510659163686" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <div class="col-sm-6 col-xs-12 formv-home pb75">
            <div class="col-xs-12 title-text title-text">
                <h2 class="fs30 ptb50 text-l">CONTACT<span class="colorwh"> US</span></h2>
            </div>
                <form id="home-contact-form">
                    <div class="form-left col-md-5 col-sm-12">
                        <div class="form-group">
                            <input type="text" name="name" id="name" placeholder="Your Name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" id="email" placeholder="E-mail" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="Phone" id="phone" placeholder="Phone" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-left col-md-7 col-sm-12">
                        <textarea name="Message" id="message" class="form-control input-lg" placeholder="Message" tabindex="4"></textarea>
                    </div>
                    <div class="col-xs-12 col-md-12 sub-btn-main">
                        <input type="submit" id="submit-btn" value="Submit" class="btn send-btn" tabindex="7">
                    </div>
                    <div class="col-xs-12">
                        <p id="mailresponsec"></p>
                    </div>
                </form>
        </div>
    </div>
</section>
<section class="footer bg-gray ptb50">
    <div class="container">
        <footer>
            <div class="main-footer-content">
                <div class="col-sm-3 foot4">
                    <h4 class="mb30 fs20">NEWSLETTER</h4>
                    <p>Subscribe to our newsletter and we will inform your about newset projects.</p>
                    <form class="subscribe" id="subForm">
                        <div class="form-row">
                            <input type="email" name="email" placeholder="Enter your e-mail" class="form-control required">
                        </div>
                        <div class="form-row">
                            <input type="submit" value="Subscribe" class="submit-btn" id="subscriber">
                        </div>
                    </form>
                </div>
                <div class="col-sm-3 foot1">
                    <h4 class="mb30 fs20">QUICK LINKS</h4>
                    <ul>
                        <li><a class="active" href="index.php">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="project-list.php">Project</a></li>
                        <li><a href="#" class="">Guidelines</a></li>
                        <li><a href="#" class="">F.A.Q's</a></li>
                        <li><a href="carrers.php">Carrer</a></li>
                    </ul>                  
                </div>
                <div class="col-sm-3 foot2">
                    <h4 class="mb30 fs20">PROJECTS</h4>
                    <ul>
                        <li><a href="#" class="">Jivan Veera</a></li>
                        <li><a href="#" class="">Shubh Jivan</a></li>
                        <li><a href="#" class="">Jivan Arya</a></li>
                    </ul>
                </div>
                <div class="col-sm-3 foot3 pr">
                    <h4 class="mb30 fs20">GET IN TOUCH</h4>
                    <h6>OFFICE ADDRESS</h6>
                    <p>Jivan Arya Residency, 200 ft Sardar Patel Ring Road, Opp. R.A.F. Camp, Opp. Canara Bank, Vastral, Ahmedabad
                    - 382418</p>
                    <h6>CALL US 24/7</h6>
                    <p><a href="tel:+001 201 895 3491">+001 201 895 3491</a>, <a href="tel:+91 982 503 5749">+91 982 503 5749</a></p>
                    <h6>EMAIL ADDRESS</h6>
                    <p><a href="mailto:ripal@jivangroup.in">ripal@jivangroup.in</a></p>
                </div>
                
            </div>
        </footer>
    </div>
</section>
<section class="copy-right">
    <div class="container-fluid">
        <p>© 2010 Jivan Group. All rights reserved. Design & Developed by <b>Eternal Software Solutions</b></p>
    </div>
</section>
<script  type="text/javascript">
    var handleValidation = function() {
        // for more info visit the official plugin documentation: 
        // http://docs.jquery.com/Plugins/Validation

        var form = $('#home-contact-form');
        var error = $('.alert-danger', form);
        var success = $('.alert-success', form);

        form.validate({
            errorElement: 'span', //default input error message container
            errorClass: 'help-block', // default input error message class
            focusInvalid: false, // do not focus the last invalid input
            ignore: "",

            rules: {                        
                name: {
                    required: true
                },
                Phone: {
                    required: true,
                    maxlength: 10,
                    number: true
                },
                email: {
                    required: true,
                    email: true
                },
                Message: {
                    required: true
                    
                }
            }, 
            messages: { 
                name: {
                    required: "Please enter your Name"
                },
                Phone: {
                    required: "Please enter your Phone",
                    Phone: "Please enter the your Phone"
                },
                email: {
                    required: "Please enter your Email Address",
                    email: "Please enter valid Email"
                },
                Message: {
                    required: "Please enter your Message"
                    
                },
            },               

            highlight: function (element) { // hightlight error inputs
                $(element).closest('.form-group').addClass('has-error'); // set error class to the control group
            },

            unhighlight: function (element) { // revert the change done by hightlight
                $(element).closest('.form-group').removeClass('has-error'); // set error class to the control group
            },

            success: function (label) {
                //label.closest('.form-group').removeClass('has-error'); // set success class to the control group
            },

            submitHandler: function (form) {
                success.show();
                error.hide();
               // form.submit();
            
            }
        });
    }

    jQuery(document).ready(function() {    
         // initiate layout and plugins<br>RICS REGISTERED VALUERS
       
        handleValidation(); 
      
        $(document).on('click','#submit-btn',function(e){

            e.preventDefault();
            if($("#home-contact-form").valid()){
                $.ajax({
                    url : 'contact_us_form.php',
                    data : $('#home-contact-form').serialize(),
                    type : 'post',
                    dataType: 'json',
                    beforeSend: function() {
                        $('#mailresponsec').removeClass('valid').text('');
                        $('#mailresponsec').removeClass('error').text('');
                    },
                    success : function(response){ 
                     
                        console.log(response);
                        //$('#home-contact-form input[type= "text"]').val('');
                        //$('#home-contact-form .textare').val('');
                        $("input[type=text], textarea").val("");

                        if(response.status == 'success'){
                            //alert(response.text);
                            $('#mailresponsec').addClass('valid').text(response.text);
                             document.getElementById("home-contact-form").reset();
                        }else{
                            //alert(response.text);
                            $('#mailresponsec').addClass('error').text(response.text);
                        }
                    }
                });
            }
        });
    });
</script>
<script  type="text/javascript">
    var handleValidation = function() {
        // for more info visit the official plugin documentation: 
        // http://docs.jquery.com/Plugins/Validation

        var form = $('#subForm');
        var error = $('.alert-danger', form);
        var success = $('.alert-success', form);

        form.validate({
            errorElement: 'span', //default input error message container
            errorClass: 'help-block', // default input error message class
            focusInvalid: false, // do not focus the last invalid input
            ignore: "",

            rules: {
                email: {
                    required: true,
                    email: true
                }
            }, 
            messages: { 
                email: {
                    required: "Please enter your Email Address",
                    email: "Please enter valid Email"
                },
            },               

            highlight: function (element) { // hightlight error inputs
                $(element).closest('.form-group').addClass('has-error'); // set error class to the control group
            },

            unhighlight: function (element) { // revert the change done by hightlight
                $(element).closest('.form-group').removeClass('has-error'); // set error class to the control group
            },

            success: function (label) {
                //label.closest('.form-group').removeClass('has-error'); // set success class to the control group
            },

            submitHandler: function (form) {
                success.show();
                error.hide();
               // form.submit();
            
            }
        });
    }

    jQuery(document).ready(function() {    
         // initiate layout and plugins<br>RICS REGISTERED VALUERS
       
        handleValidation(); 
      
        $(document).on('click','#subscriber',function(e){

            e.preventDefault();
            if($("#subForm").valid()){
                $.ajax({
                    url : 'emil_sub_form.php',
                    data : $('#subForm').serialize(),
                    type : 'post',
                    dataType: 'json',
                    beforeSend: function() {
                        $('#mailresponsec').removeClass('valid').text('');
                        $('#mailresponsec').removeClass('error').text('');
                    },
                    success : function(response){ 
                     
                        console.log(response);
                        //$('#subForm input[type= "text"]').val('');
                        //$('#subForm .textare').val('');
                        $("input[type=text], textarea").val("");

                        if(response.status == 'success'){
                            //alert(response.text);
                            $('#mailresponsec').addClass('valid').text(response.text);
                             document.getElementById("subForm").reset();
                        }else{
                            //alert(response.text);
                            $('#mailresponsec').addClass('error').text(response.text);
                        }
                    }
                });
            }
        });
    });

</script>
<script type="text/javascript">
    function courselocations(){
        var divlocations = jQuery('.project-content').innerHeight();
        //alert(divlocations);
        jQuery(".project-image").css('height',divlocations+'px');
    }
    jQuery(window).resize(function()
    {
      courselocations();
    });
    jQuery(window).load(function()
     {
      courselocations();
    });
</script>
<script type="text/javascript">
    function maphomeheight(){
        var mapheight = jQuery('.formv-home').innerHeight();
        jQuery(".google-map-home").css('height',mapheight+'px');  
    }
    jQuery(window).resize(function()
    {
      maphomeheight();
    });
    jQuery(window).load(function()
     {
      maphomeheight();
    });
</script>
 <script type="text/javascript">    
    $(document).ready(function() {
        var random = Math.floor(Math.random() * $('.item').length);
      $('.item').hide().eq(random).show();
    });
</script>

<script type="text/javascript">
     function bannerheight(){
        var h = window.innerHeight
        jQuery(".item").css('height',h+'px');
     }
    $( window ).resize(function(){
        bannerheight();
    });
    $( window ).load(function(){
        bannerheight();
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
  var trigger = $('.hamburger'),
      overlay = $('.overlay'),
     isClosed = false;

    trigger.click(function () {
      hamburger_cross();      
    });

    function hamburger_cross() {

      if (isClosed == true) {          
        overlay.hide();
        trigger.removeClass('is-open');
        trigger.addClass('is-closed');
        isClosed = false;
      } else {   
        overlay.show();
        trigger.removeClass('is-closed');
        trigger.addClass('is-open');
        isClosed = true;
      }
  }
  
  $('[data-toggle="offcanvas"]').click(function () {
        $('#wrapper').toggleClass('toggled');
  });  
});
</script>
<script>
    var maxHeight = 0;

$(".box-top").each(function(){
   if ($(this).height() > maxHeight) { maxHeight = $(this).height(); }
});

$(".box-top").height(maxHeight);


</script>
</body>
</html>
