<!doctype html>
<html class="no-js" lang="en-US">

<head>

    <!-- DEFAULT META TAGS -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <!-- FONTS -->
    <link href="http://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500" rel="stylesheet" type="text/css">

    <!-- CSS -->
    <link rel="stylesheet" id="responisve-style-css" href="files/css/start_project_slider_s3.css" type="text/css" media="all" />
    <link rel="stylesheet" id="default-style-css" href="files/css/style.css" type="text/css" media="all" />
    <link rel="stylesheet" id="fontawesome-style-css" href="files/css/font-awesome.min.css" type="text/css" media="all" />
    <link rel="stylesheet" id="ionic-icons-style-css" href="files/css/ionicons.css" type="text/css" media="all" />
    <link rel="stylesheet" id="responsive-css" href="files/css/mqueries.css" type="text/css" media="all" />
    <link rel="stylesheet" id="responisve-style-css" href="files/css/bootstrap.min.css" type="text/css" media="all" />
    <link rel="stylesheet" id="responisve-style-css" href="files/css/custom.css" type="text/css" media="all" />
    <!-- FAVICON -->
       <link rel="shortcut icon" href="files/images/Icons/wta_fevicon.png" />
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
    <script src="script.js"></script>
    <!-- DOCUMENT TITLE -->
    <title> WTA start project</title>

</head>

<body ng-app="app" ng-controller="appController">
    
<!-- 
<p>Input something in the input box:</p>
<p>Name: <input type="text" ng-model="name"></p>
<p ng-bind="name"></p>-->

    <!-- PAGE LOADER -->
    <div id="page-loader" class="pulsing">
        <div class="loader-name"><img src="files/images/logo_wta.png" srcset="files/images/logo_wta.png 1x, files/images/logo_wta@2x.png 2x" alt="Loader Logo"></div>
        <div class="loader-circle">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 253.4 253.4">
                <circle cx="126.7" cy="126.7" r="124.2" />
            </svg>
        </div>
    </div>
    <!-- PAGE LOADER -->

    <!-- PAGE CONTENT -->
    <div id="page-content">

        <!-- HEADER -->
        <header id="header" class="wrapper not-sticky">
            <div class="header-inner clearfix">

                <!-- LOGO -->
                <div id="logo">
                    <a href="index.php">
                        <img src="files/images/logo_wta.png" srcset="files/images/logo_wta.png 1x, files/images/logo_wta@2x.png 2x" alt="Logo Dark">
                    </a>
                </div>

                <!-- MAIN NAVIGATION -->
                <div id="menu" class="clearfix">

                    <div class="menu-actions clearfix">
                        <div class="menu-toggle"><span class="hamburger"></span><span class="cross"></span></div>
                    </div>
                    <!-- END .menu-actions -->
                    <div id="menu-inner">
                        <nav id="main-nav">
                             <ul>
                                <li class="menu-item-has-children"><a href="index.php">Home</a>
                                </li>
                                <li class="menu-item-has-children"><a href="about.php">About</a>
                                </li>
                                <li class="menu-item-has-children"><a href="process.php">Process</a>
                                </li>
                                <li class="menu-item-has-children"><a href="services.php">Services</a></li>
                                <li class="menu-item-has-children"><a href="clients.php">Clients</a>
                                </li>
                                <li class="menu-item-has-children"><a href="career.php">Careers</a>
                                </li>
                                <!--<li class="menu-item-has-children"><a href="work.php">work</a> </li>-->
                               
                                <li class="menu-item-has-children"><a href="contact.php">Contact</a>
                                </li>
                            </ul>
                        </nav>
                        <div id="menu-widget">
                            <div class="widget widget_social">
                                <ul class="socialmedia-widget">
                                    <li class="facebook">
                                        <a href="#"></a>
                                    </li>
                                    <li class="twitter">
                                        <a href="#"></a>
                                    </li>
                                    <li class="behance">
                                        <a href="#"></a>
                                    </li>
                                    <li class="pinterest">
                                        <a href="#"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- END #main-nav -->
                </div>
                <!-- END #menu -->

            </div>
            <!-- END .header-inner -->
        </header>
        <!-- HEADER end -->

        <!-- PAGEBODY -->
        <section id="page-body" class="">
            <div class="wrapper start_project_main">
                <div class="wrapper-small bg_yellow_position">
                    <div class="col-md-12 col-xs-12">
                        <div class="col-md-9">
                             <div class="stepwizard">
                        <div class="stepwizard-row setup-panel">
                            <div class="stepwizard-step">
                                <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
                                <!-- <p>Step 1</p> -->
                            </div>
                            <div class="stepwizard-step">
                                <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                                <!-- <p>Step 2</p> -->
                            </div>
                            <div class="stepwizard-step">
                                <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                                <!-- <p>Step 3</p> -->
                            </div>
                            <div class="stepwizard-step">
                                <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
                                <!-- <p>Step 4</p> -->
                            </div>
                        </div>
                    </div>
                            </div>
                        <div class="col-md-3">
                        <div class="bg_yellow_start_project"></div>
                        <h4 class="align-right start_project_fixed_heading"><strong>Start a Project</strong></h4>
                        </div>
                       
                    </div>
                   

                    <div class="row setup-content border_left_full" id="step-2">

                        <div class="col-md-12 col-xs-12">
                             <div class="spacer-small"></div>
                            <div class="start_project_heading">
                                                            <div class="number_height"><p>TWO</p></div>

                                <h1>What is the Device of your project</h1>
                            </div>
<!--                                <div class="vertical_line"></div>-->
                            <form>
                            <div class="col-md-4" ng-repeat="name in device">
                                <div class="checkbox checkbox-danger checkbox-circle">
                                    <input id="{{ 'checkbox' + $index }}" type="checkbox" ng-model="name.deviceFlag" ng-click="deviceType(name.deviceName,$index,name.deviceFlag)" name="device_name[]"  value="{{name}}" ng-required="true">
                                    <label for="{{ 'checkbox' + $index }}">
                          <div class="services_checked_project text-center">
                              <img ng-src="{{name.deviceImg}}" class="img-responsive">
                              <h4>{{name.deviceName}}</h4>
                          </div>

                        </label>
                                </div>
                            </div>
                          
                            
                            <div class="col-md-12 col-xs-12 stat_project_next_btn">
                                <!-- <a class="btn btn-primary nextBtn " type="button">Next <b class="right-caret"></b></a> -->
                                <button type="submit" class="btn btn-primary nextBtn" name="submit" value="{{btnName2}}" ng-click="devicedata()" ng-disabled="countChecked() == 0">Next <b class="right-caret"></b></button>
<!--                                <input type="submit" class="btn btn-primary nextBtn" name="submit" value="Next">-->
                            </div>
                                 </form>
                        </div>
                       
                    </div>
                    <div class="row setup-content border_left_full" id="step-3">
                        <div class="col-md-12 col-xs-12">
                             <div class="spacer-small"></div>
                            <div class="start_project_heading">
                                <h1>What is your budget?</h1>
<!--                                <h1>What is Scope of your Project?</h1>-->
                                <p>A transparent budget will help us ensure expectations are met.<br> Tell us what you have in mind.</p>
                                                               <div class="number_height three"><p>THREE</p></div>

                            </div>
                                
<!--
                                <div class="col-xs-12">
                                      <div class="start_project_heading">
                                    <h1>What is your budget?</h1>
                                    <p>A transparent budget will help us ensure expectations are met.<br> Tell us what you have in mind.</p>
                                                                 <div class="number_height four"><p>FOUR</p></div>

                                </div>
                            </div>
-->
                                
                         <div class="col-md-12 col-xs-12 stat_project_next_btn">
                                <a class="btn btn-primary nextBtn " type="button">Next <b class="right-caret"></b></a>
                            </div>

                        </div>
                        </div>
                        <div class="row setup-content border_left_full" id="step-4">
                            <div class="col-md-12 col-xs-12">
                                      <div class="spacer-small"></div>
                                <div class="start_project_heading">
                                    <h1>Tell us about the Project ?</h1>
<!--                                    <p>A transparent budget will help us ensure expectations are met.<br> Tell us what you have in mind.</p>-->
                                                                 <div class="number_height four"><p>FOUR</p></div>

                                </div>
                                      <div class="col-xs-12">
                     
                                <div class="form-group">
                                    <textarea  rows="8" class="form-control" placeholder="Tell us something about the Project"></textarea>
                                </div>
                                </div>

                               
                                 <div class="col-md-12 col-xs-12 stat_project_next_btn">
                                <a class="btn btn-success " type="button">Submit <b class="right-caret"></b></a>
                            </div>
                            </div>

                        </div>
                        <div class="wrapper-small setup-content border_left_full" id="step-1">
                            <div class="col-md-12 col-xs-12">
                                      <div class="spacer-small"></div>
                                <div class="start_project_heading">
                                    <h1>LET'S THINK TOGETHER</h1>
                                     <p>Thanks for your interest in working with us. Please complete the details below and we'll get back to you within one bussiness day.</p>
                                <div class="number_height"><p>ONE</p></div>
                                </div>
                                 <div class="col-sm-12 col-xs-12 col-md-8">

<!--                <h4 class="page-header">Default Implementation</h4>-->
<!-- <div class="spacer-small"></div> -->
             
                <form class="start_project_form" name="userForm"  novalidate>

        <!-- NAME -->
        <div class="form-group float-label-control" ng-class="{ 'has-error' : userForm.name.$invalid && !userForm.name.$pristine }">
            <label for="">What should we call you?</label>
            <input type="text" name="name" class="form-control" placeholder="Your Name Here" ng-model="name" required>
            <p ng-show="userForm.name.$invalid && !userForm.name.$pristine" class="help-block">You name is required.</p>
        </div>
      
        <!-- USERNAME -->
        <div class="form-group float-label-control" ng-class="{ 'has-error' : userForm.username.$invalid && !userForm.username.$pristine }">
             <label for="">What is the name of your company/organisation?</label>
            <input type="text" name="username" class="form-control" placeholder="WTAStudios" ng-model="company" ng-minlength="3" >
            <p ng-show="userForm.username.$error.minlength" class="help-block">company/organisation is too short.</p>
        
        </div>
        
        <!-- EMAIL -->
        <div class="form-group float-label-control" ng-class="{ 'has-error' : userForm.email.$invalid && !userForm.email.$pristine }">
            <label for="">How can we contact you?</label>
            <input type="email" name="email" class="form-control" ng-model="email" placeholder="Email">
            <p ng-show="userForm.email.$invalid && !userForm.email.$pristine" class="help-block">Enter a valid email.</p>
            
        </div>
        <div class="form-group float-label-control" ng-class="{ 'has-error' : userForm.mobile.$invalid && !userForm.mobile.$pristine }">
                       <input type="number" name="mobile" class="form-control" ng-model="mobile"  ng-minlength="10" ng-maxlength="10" placeholder="Mobile Number"  ng-required="true">
            <p ng-show="userForm.mobile.$invalid && !userForm.mobile.$pristine" class="help-block">Enter a valid mobile number.</p>
                    </div>
         <div class="col-md-12 col-xs-12 stat_project_next_btn">
                            
        <button type="submit" class="btn btn-primary nextBtn" value="{{btnName}}" ng-click="insertdata()" ng-disabled="userForm.$invalid">Next <b class="right-caret"></b> </button>
                            
                            </div>
                     </form>
                        </div>
       
        
   


            </div>
                            </div>



                    
                </div>

        </section>
        <!-- PAGEBODY -->


        <footer >
            <div class="footer-inner wrapper">


                <hr>
                <div class="column-section clearfix">
                    <div class="col-md-3 col-sm-2 col-xs-6">
                        <div class="widget widget_text">
                            <h5 class="widget-title title-alt"><strong>HYDERABAD</strong></h5>
                            <p>8-2-293/82/A/472, Third Floor,<br>
                            Road No. 36, Next To Nissan Showroom,<br>
                            Jubilee Hills, Hyderabad,<br>
                            Telangana 500033, India</p>

                        </div>
                        
                  
                    </div>

                    <div class="col-md-2 col-sm-3 col-xs-6">
                        <div class="widget widget_text">
                            <h5 class="widget-title title-alt"><strong>SAN FRANSICO</strong></h5>
                            <p>We provide perfect and professional services.<br>Covering areas of the modern communication.</p>

                        </div>
                    </div>

                    <div class="col-md-3 col-sm-3 col-xs-6">
                              <div class="widget widget_text">
                            <h5 class="widget-title title-alt"><strong>LONDON</strong></h5>
                            <p>34 Heathside close <br> 
                            Newbury Park<br>
                            IG2 7PD<br>
                            United Kingdom
                            </p>

                        </div>
                        
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-6">
                        <div class="widget widget_dribbble bg_yellow_big_position">
                            <a href="start_project.html">
                            <div class="bg_yellow_big"></div>
                            <h3 class="widget-title title-alt lets_think_together"><strong>LETS <br> THINK <br>TOGETHER?</strong></h3>
                            <div class="dribbble-widget col-4" data-user="Aditya-Chhatrala" data-count="8"></div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="column-section clearfix">
                    <div class="col-md-6 col-sm-6">
                        <h4><span style="font-weight:300;">Contact us on </span>info@wtastudios.com</h4>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <h4>+919652521125</h4>
                    </div>
                </div>
            </div>
            <div id="footer">
                <div class="footer-bottom wrapper">
                    <div class="column-section clearfix row">
                        <div class="col-md-4 col-sm-4 ">
                            <div class="widget widget_social footer_items_all">
                                <ul class="list-inline ">
                                    <!--                                    socialmedia-widget-->
                                    <li class="facebook">
                                        <a href="https://www.facebook.com/wtastudios/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="twitter">
                                        <a href="https://twitter.com/WTAStudios"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="behance">
                                        <a href="https://www.behance.net/WTASTUDIOS"><i class="fa fa-behance" aria-hidden="true"></i></a>
                                    </li>
                                    <li class="pinterest">
                                        <a href="https://www.instagram.com/wtastudios/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                    </li>
                                    <!--https://www.instagram.com/wtastudios/-->
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-4 text-center footer_items_all">
                            <p>2017 Copyright ©  by WTA STUDIOS PVT. LTD</p>
                        </div>
                        <div class="col-md-4 col-sm-4 text-right footer_items_all">
                            <p>Made with love from <strong>San Fransico</strong></p>
                        </div>
                    </div>
                </div>
                  <a id="backtotop" href="#" ><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
            </div>
          

        </footer>
        <!-- FOOTER End -->

        </div>
        <!-- END #page-content -->
        <!-- PAGE CONTENT -->
        <!-- slider script-->
 <script type="text/javascript">                
(function ($) {
    $.fn.floatLabels = function (options) {

        // Settings
        var self = this;
        var settings = $.extend({}, options);


        // Event Handlers
        function registerEventHandlers() {
            self.on('input keyup change', 'input, textarea', function () {
                actions.swapLabels(this);
            });
        }


        // Actions
        var actions = {
            initialize: function() {
                self.each(function () {
                    var $this = $(this);
                    var $label = $this.children('label');
                    var $field = $this.find('input,textarea').first();

                    if ($this.children().first().is('label')) {
                        $this.children().first().remove();
                        $this.append($label);
                    }

                    var placeholderText = ($field.attr('placeholder') && $field.attr('placeholder') != $label.text()) ? $field.attr('placeholder') : $label.text();

                    $label.data('placeholder-text', placeholderText);
                    $label.data('original-text', $label.text());

                    if ($field.val() == '') {
                        $field.addClass('empty')
                    }
                });
            },
            swapLabels: function (field) {
                var $field = $(field);
                var $label = $(field).siblings('label').first();
                var isEmpty = Boolean($field.val());

                if (isEmpty) {
                    $field.removeClass('empty');
                    $label.text($label.data('original-text'));
                }
                else {
                    $field.addClass('empty');
                    $label.text($label.data('placeholder-text'));
                }
            }
        }


        // Initialization
        function init() {
            registerEventHandlers();

            actions.initialize();
            self.each(function () {
                actions.swapLabels($(this).find('input,textarea').first());
            });
        }
        init();


        return this;
    };

    $(function () {
        $('.float-label-control').floatLabels();
    });
})(jQuery);

</script>

        <!-- SCRIPTS -->
        <script src="files/js/jquery-2.1.4.min.js"></script>
        <script type="text/javascript" src="files/js/start_project_slider_s3.js"></script>
        <script type="text/javascript" src="files/js/plugins.js"></script>
        <script type="text/javascript" src="files/js/jribbble.min.js"></script>
        <script type="text/javascript" src="files/js/script.js"></script>
        <!-- SCRIPTS -->

</body>

</html>