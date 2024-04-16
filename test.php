<!DOCTYPE html>
<!--[if lt IE 9 ]><html class="no-js oldie" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>

    <!--- basic page needs
   ================================================== -->
    <meta charset="utf-8">
    <title>B&R Paradise</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
   ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
   ================================================== -->
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/main.css">

    <!-- script
   ================================================== -->
    <script src="js/modernizr.js"></script>
    <script src="js/pace.min.js"></script>

    <!-- favicons
	================================================== -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

</head>
<style>
    body{
background: orange;
}
.road{
border-bottom: 7px dashed black;
}
.runner{
background: url("Cartoon.png") no-repeat;
width: 185px;
height: 290px;
 
animation: walk 1.2s steps(8) infinite,
forward 5s linear infinite;
-webkit-animation: walk 1.2s steps(8) infinite,
forward 5s linear infinite;
}
 
@keyframes walk{
0%{
background-position: 0px;
}
100%{
background-position: -1472px;
}
}
@keyframes forward{
0%{
transform: translateX(-100px);
}
100%{
transform: translateX(1200px);
}
}

</style>

<body id="top">

    <!-- FB LIKE -->
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v10.0" nonce="7V1pPlzs"></script>
    <!-- END OF FB LIKE-->


    <!-- header 
   ================================================== -->
   <header id="header" class="row">   

   		<div class="header-logo">
	        <a href="index.html">B&R Paradise</a>
	    </div>

	   	<nav id="header-nav-wrap">
			<ul class="header-main-nav">
				<li class="current"><a class="smoothscroll"  href="#home" title="home">Home</a></li>
                <li><a class="smoothscroll"  href="#about" title="about">About</a></li>
				<li><a class="smoothscroll"  href="#order" title="order">Order</a></li>	
			</ul>

            <a href="http://tasa.c1.biz/" title="Tasa" target="_blank" class="button button-primary cta">Tasa Coffee and Tea</a>
            
		</nav>

		<a class="header-menu-toggle" href="#"><span>Menu</span></a>    	
   	
   </header> <!-- /header -->


   <!-- home
   ================================================== -->
   <section id="home" data-parallax="scroll" data-image-src="images/brparadise-sketch.jpg" data-natural-width=3000 data-natural-height=2000>

        <div class="overlay"></div>
        <div class="home-content">        

            <div class="row contents">                     
                <div class="home-content-left">


                    <h1 data-aos="fade-up">
                        <br/><br/> <br/><br/>
                        <!--div class="runner"></div-->
                    </h1>

                    
                        <a href="https://www.adminfoodbooking.com/ordering/restaurant/menu?company_uid=468488dd-f3f8-4f41-a47c-adccd251169a&restaurant_uid=150d2326-c5fb-46d0-bfa4-114d22877ba0&facebook=true&fbclid=IwAR1HEOJ-69ce0svOWVhpQH-NLISS8lt6wPjiZR7yFwmGusB0gpIFS2UAj30" target="_blank" class="button stroke">
                            <span class="icon-circle-down" aria-hidden="true"></span>
                            Order Now
                        </a>
                    </div>                                         
                </div>

                <div class="home-image-right">
                    <img src="images/phone.png" 
                        srcset="images/phone.png 1x, images/phone.png 2x"  
                        data-aos="fade-up" width="1000">
                </div>
            </div>

        </div> <!-- end home-content -->

        <ul class="home-social-list">
            <li>
                <a href="https://www.facebook.com/brparadisesipandmunch"><i class="fa fa-facebook-square"></i></a>
            </li>
            <!--li>
                <a href="#"><i class="fa fa-twitter"></i></a>
            </li-->
            <li>
                <a href="https://www.instagram.com/brparadisesipandmunch/"><i class="fa fa-instagram"></i></a>
            </li>
            <!--li>
                <a href="#"><i class="fa fa-youtube-play"></i></a>
            </li-->
        </ul>
        <!-- end home-social-list -->

        <div class="home-scrolldown">
            <a href="#about" class="scroll-icon smoothscroll">
                <span>Scroll Down</span>
                <i class="icon-arrow-right" aria-hidden="true"></i>
            </a>
        </div>

    </section> <!-- end home -->  


    <!-- about
    ================================================== -->
    <section id="about">

        <div class="row about-intro">
            <div class="col-six">
                 <h1 class="intro-header" data-aos="fade-up">
                    <img src="images/milktea.png">     
                 </h1>      

            </div>
            <div class="col-six">
                <h1 class="intro-header"style="margin-top:50px;" data-aos="fade-up">About Us</h1>
                <p class="lead" data-aos="fade-up">
                    We are a small start-up business here in Manila. We started last year February 2020. We started this business through the gifts we received during our wedding last January 2020. It's been a tough start because we had to stop operation a month later due to pandemic. And milktea shop were everywhere. What makes our drinks and food different is the love and passion we have for our business. 
                </p>
            </div>                       
            
        </div>

        <div class="row about-features">

            <div class="features-list block-1-3 block-m-1-2 block-mob-full group">

                <div class="bgrid feature" data-aos="fade-up">	

                    <img src="images/icons/milktea.png"> 

                    <div class="service-content">	

                        <h3>Milktea</h3>

                        <p></p>
                        
                    </div> 	         	 

                    </div> <!-- /bgrid -->

                    <div class="bgrid feature" data-aos="fade-up">	

                    <img src="images/icons/coffee.png">                          

                    <div class="service-content">	
                        <h3>Hot or Cold</h3>  

                        <p></p>

                        
                    </div>	                          

                </div> <!-- /bgrid -->

                <div class="bgrid feature" data-aos="fade-up">

                    <img src="images/icons/fries.png"> 		            

                    <div class="service-content">
                        <h3>French Fry-Day</h3>

                        <p></p> 
                            
                    </div> 	            	               

                </div> <!-- /bgrid -->

                    <div class="bgrid feature" data-aos="fade-up">

                    <img src="images/icons/mojojojos.png">      	              

                    <div class="service-content">
                        <h3>Mojojojos</h3>

                        <p></p> 
                        
                    </div>                

                    </div> <!-- /bgrid -->

                <div class="bgrid feature" data-aos="fade-up">

                    <img src="images/icons/nachodancer.png">	            

                    <div class="service-content">	
                        <h3>Nacho Dancer</h3>

                        <p></p>                            
                    </div>	               

                </div> <!-- /bgrid -->

                <div class="bgrid feature" data-aos="fade-up">

                    <img src="images/icons/chicken.png">	   	           

                    <div class="service-content">
                        <h3>Chicken</h3>

                        <p></p> 
                            
                    </div>	               

                </div> <!-- /bgrid -->

            </div> <!-- end features-list -->

        </div> <!-- end about-features -->

        <div class="row about-bottom-image">

           <img src="images/app-screens-1200.png" 
                srcset="images/app-screens-600.png 600w, 
                        images/app-screens-1200.png 1200w, 
                        images/app-screens-2800.png 2800w" 
                sizes="(max-width: 2800px) 100vw, 2800px"
                alt="App Screenshots" data-aos="fade-up">

        </div>  <!-- end about-bottom-image -->       
        
    </section> <!-- end about -->  
   

    <!-- pricing
    ================================================== -->
    <section id="order">
        <div class="row about-how">
          
            <h1 class="intro-header" data-aos="fade-up">How to Order?</h1>           

            <div class="about-how-content" data-aos="fade-up">
                <div class="about-how-steps block-1-2 block-tab-full group">

                    <div class="bgrid step" data-item="1">
                        <h3>Select Product</h3>
                        <p>Choose item from the <a href="https://www.adminfoodbooking.com/ordering/restaurant/menu?company_uid=468488dd-f3f8-4f41-a47c-adccd251169a&restaurant_uid=150d2326-c5fb-46d0-bfa4-114d22877ba0&facebook=true&fbclid=IwAR1HEOJ-69ce0svOWVhpQH-NLISS8lt6wPjiZR7yFwmGusB0gpIFS2UAj30" target="_blank">order form</a>. 
                        </p> 
                    </div>

                    <div class="bgrid step" data-item="2">
                        <h3>Pickup</h3>
                        <p>You may pickup order when ready.
                        </p> 
                    </div>               
               
                    <div class="bgrid step" data-item="3">
                        <h3>Fill Up Form</h3>
                        <p>Make sure to fill up contact form as we will contact to confirm your order via text or call. We accept payment via bank transfer and gcash.
                        </p> 
                    </div>

                    <div class="bgrid step" data-item="4">
                        <h3>Enjoy</h3>
                        <p>Thank you for ordering! You may click link below to start ordering.
                        </p> 
                    </div>

                </div>  
           </div> <!-- end about-how-content -->
            
            <center><a class="text-center text-light" href="https://www.adminfoodbooking.com/ordering/restaurant/menu?company_uid=468488dd-f3f8-4f41-a47c-adccd251169a&restaurant_uid=150d2326-c5fb-46d0-bfa4-114d22877ba0&facebook=true&fbclid=IwAR1HEOJ-69ce0svOWVhpQH-NLISS8lt6wPjiZR7yFwmGusB0gpIFS2UAj30" target="_blank"><button type="button" class="btn btn-default">ORDER NOW</button></a></center>
        </div> <!-- end about-how -->
    </section> <!-- end pricing -->


    <!-- Testimonials Section
    ================================================== -->
    <section id="testimonials">

        <div class="row">
            <div class="col-twelve">
                <h1 class="intro-header" data-aos="fade-up">What They Say About Our App.</h1>
            </div>   		
        </div>   	

        <div class="row owl-wrap">

            <div id="testimonial-slider"  data-aos="fade-up">

                <div class="slides owl-carousel">

                    <div>
                        <p>
                        So whether you eat or drink or whatever you do, do it all for the glory of God 
                        </p> 
                        1 Corinthians 10:31
                        <!--div class="testimonial-author">
                                <img src="images/avatars/user-02.jpg" alt="Author image">
                                <div class="author-info">
                                    Steve Jobs
                                    <span class="position">CEO, Apple.</span>
                                </div>
                        </div-->                 
                    </div>  

                </div> <!-- end slides -->

            </div> <!-- end testimonial-slider -->         
            
        </div> <!-- end flex-container -->

    </section> <!-- end testimonials -->
    

    <!-- download
    ================================================== -->
    <!--section id="download">

        <div class="row">
            <div class="col-full">
                <h1 class="intro-header"  data-aos="fade-up">Download Our App Today!</h1>

                <p class="lead" data-aos="fade-up">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                </p>

                <ul class="download-badges">
                    <li><a href="#" title="" class="badge-appstore"  data-aos="fade-up">App Store</a></li>
                    <li><a href="#" title="" class="badge-googleplay" data-aos="fade-up">Play Store</a></li>
                </ul>

            </div>
        </div>

    </section> <!-- end download -->    


    <!-- footer
    ================================================== -->
    <footer id="footer">

        <div class="footer-main">
            <div class="row">  

                <div class="col-three md-1-3 tab-full footer-info">            

                    <h4>B&R Paradise</h4>

                    <p>
                        We do not just serve you with your favorite food and drinks, we serve it with love.
                        <br/><br/>
                        All Glory and Praises to God!
                    </p>

                    <ul class="footer-social-list">
                        <li>
                            <a href="https://www.facebook.com/brparadisesipandmunch"><i class="fa fa-facebook-square"></i></a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/brparadisesipandmunch"><i class="fa fa-instagram"></i></a>
                        </li>
                    </ul>
                    
                    
                </div> <!-- end footer-info -->

                <div class="col-three md-1-3 tab-1-2 mob-full footer-contact">

                    <h4>Contact</h4>

                    <p>
                    1001 B Matimyas Street Sampaloc Manila, Philippines<br>		        
                    </p>

                    <p>
                    brparadisesipandmunch@gmail.com<br>
                    Phone: (+63) 9205695270 <br> 
                    </p>                    

                </div> <!-- end footer-contact -->  

                <div class="col-two md-1-3 tab-1-2 mob-full footer-site-links">

                    <h4>Site Links</h4>

                    <ul class="list-links">
                        <li><a href="home">Home</a></li>
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#order">Order</a></li>
                        <li><a href="http://tasa.c1.biz/" target="_blank">Tasa Coffee and Tea</a></li>
                        <!--li><a href="#">Privacy Policy</a></li-->
                    </ul>	      		
                            
                </div> <!-- end footer-site-links --> 

                <div class="col-four md-1-2 tab-full footer-subscribe">

                    <h4>Subscribe</h4>

                    <p>Be the first to know our latest products and updates. We will send you coupons and discounts and many more.</p>

                    <div class="subscribe-form">
                
                        <form method="POST" action="customer.php" id="mc-form" class="group">

                            <input type="email" name="email" class="email" id="mc-email" placeholder="Email Address"> 
                
                            <input type="submit" name="subscribe" class="subscribe" value="Send">
                
                            <label for="mc-email" class="subscribe-message"></label>
                
                        </form>

                    </div>	

                    <div class="fb-like" data-href="https://www.facebook.com/brparadisesipandmunch" data-width="" data-layout="standard" data-action="like" data-size="large" data-share="true"></div>      		
                            
                </div> <!-- end footer-subscribe -->         

            </div> <!-- /row -->
        </div> <!-- end footer-main -->


      <div class="footer-bottom">

      	<div class="row">

      		<div class="col-twelve">
	      		<div class="copyright">
		         	<span>© Copyright B&R Paradise 2021</span> 	         	
		         </div>

		         <div id="go-top">
		            <a class="smoothscroll" title="Back to Top" href="#top"><i class="icon-arrow-up"></i></a>
		         </div>         
	      	</div>

      	</div> <!-- end footer-bottom -->     	

      </div>

    </footer>

    <div id="preloader"> 
    	<div id="loader"></div>
    </div>  

    <!-- Java Script
    ================================================== -->
    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>


    <script>
        var isMobile = false; //initiate as false
    // device detection
    if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent) 
        || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0,4))) { 
        isMobile = true;
        $('html').css('overflow-x', 'hidden');
        $('body').css('overflow-x', 'hidden');
    }
    </script>
</body>


</html>