   <?php
$title = "WTA Services";    
   
include_once('header_all.php');           
?>
   
    <!-- HERO  -->
    <section id="hero" class="hero-big text-light parallax-section" data-parallax-image="files/uploads/1680x1100-dark.jpg">
        <div id="page-title" class="wrapper-small align-center">
            <p class="hidden" ><img src="files/uploads/est.png" srcset="files/uploads/est.png 1x, files/uploads/est@2x.png 2x" alt="Established"></p>
            <div class="spacer-medium"></div>
            <h6 class="title-alt uppercase hidden">Where the magic happens</h6>
            <h2>Let’s build <strong><em>something great</em></strong> together!</h2>
        </div> <!-- END #page-title -->
    </section>
    <!-- HERO -->
	
	<!-- PAGEBODY -->
	<section>
        
    	<div class="spacer-big"></div>
    	                
        <div class="wrapper contact_address">
                <div class="col-sm-4">
                <div class="text-center">
                     <img src="files/images/Contact/Icons_Hyderabad.svg">
                    <h5><strong>HYDERABAD</strong></h5>
                            <p>8-2-293/82/A/472, Third Floor,<br>
                            Road No. 36, Next To Nissan Showroom,<br>
                            Jubilee Hills, Hyderabad,<br>
                            Telangana 500033, India</p>
                 
                   <h5><strong>+919652521125</strong></h5>
                </div>
            </div>
             <div class="col-sm-4">
                <div class="text-center">
                     <img src="files/images/Contact/Icons_London.svg">
                      <h5><strong>LONDON</strong></h5>
                            <p>34 Heathside close <br> 
                            Newbury Park<br>
                            IG2 7PD<br>
                            United Kingdom
                            </p>
                  
                 
                   <h5><strong>+919491301689</strong></h5>
                </div>
            </div>    
            <div class="col-sm-4">
                <div class="text-center">
                     <img src="files/images/Contact/Icons_Sanfrancisco.svg">
                    
                    <h5><strong>SAN FRANSICO</strong></h5>
                            <!-- <p>We provide perfect and professional services.<br>Covering areas of the modern communication.</p> -->
 <p>34 Heathside close <br> 
                            Newbury Park<br>
                            IG2 7PD<br>
                            United Kingdom
                            </p>
                 
                   <h5><strong>+919652521125</strong></h5>
                </div>
            </div>
              
         
            <div class="col-sm-12 text-center">
                   <div class="spacer-small"></div>
                <p>Contact Us on info@wtastudios.com</p>
                 <div class="form-group text-center contact_submit">
					<a href="start_project.php" class="btn btn-primary center">Start a Project</a>
					  </div>
            </div> 
        </div>

        
  
            <div class="spacer-big"></div>
            <div class="wrapper contact_page_form">
                <!--<div class="col-md-12">
                        <h6><strong>Hi there WTA studios, my name is</strong> <input type="text">. <strong>My email Address is </strong> <input type="email"> <strong>and my phone number is</strong>  <input type="number"></h6>
                        <h6>I would like to visit the studio on <br> <input type="date"></h6>
                         <h6>Can i also say <br> <textarea rows="10" cols="100"></textarea></h6>
                         </div>
                         <div class="col-md-12 col-sm-12">
<div class="col-md-9 col-sm-9 no-padding">
jas;jf;lkja;lskjf; akjs;lkjfaklsj; lfkjas fkja;lskjf a;skj;fkjas;lkfj; laskjf; laskjf; lkjas; lkdj f;laskjf; lkajs;f 
</div>
<div class="col-md-3 col-sm-3 no-padding">
               
        <button type="button" class="btn btn-default">Submit</button>
        
        
</div>
                         </div>-->
                         <div class="row">
    <div class="col-md-6 col-sm-12 col-lg-6 col-md-offset-3 contact_fields">

					
				<form name="myform">
					<div class="form-group ">
				
						<input id="myName" name="myName" class="form-control" placeholder="First Name" type="text" data-validation="required">
						<span id="error_name" class="text-danger"></span>
					</div>
					<div class="form-group ">
					
						<input id="lastname" name="lastname"  placeholder="Last Name" class="form-control" type="text" data-validation="email">
						<span id="error_lastname" class="text-danger"></span>
					</div>
							
					<div class="form-group">
						
						<input type="text" id="phone" placeholder="Mobile" name="phone" class="form-control" >
						<span id="error_phone" class="text-danger"></span>
					</div>
                 <div class="form-group ">
					
						<input id="email" name="email"  placeholder="Email" class="form-control" type="email" data-validation="email">
						<span id="error_email" class="text-danger"></span>
					</div>
					<div class="form-group ">
					
						<textarea class="form-control" placeholder="Discription" rows="3"></textarea>
					</div>
					  <div class="form-group text-center contact_submit">
					<a id="submit" type="submit" value="submit" class="btn btn-primary center">Submit</a>
					  </div>
				</form>

			</div>
</div>
            </div>
    
                       
 	</section>
	<!-- PAGEBODY -->
<!--    Slider -->
<!--
    <div class="row">
        <input id="milestone" type="text" data-slider-ticks="[0, 100, 200, 300, 400]" data-slider-ticks-snap-bounds="30" data-slider-ticks-labels='["$0", "$100", "$200", "$300", "$400"]'/>
           <div class="container">
        <input id="milestone" type="text"  data-provide="slider"
          data-slider-ticks="[1,2,3,4,5,6]"
          data-slider-ticks-labels='["March", "April", "May", "June" , "July" , "August"]'
          data-slider-min="1"
          data-slider-max="6"
          data-slider-step="1"
          data-slider-value="6"
          data-slider-tooltip="show"/>
        </div>
    </div>          
-->
    <?php

   
include_once('footer.php');           
?>