<?php 
    if (isset($_POST['btnsubmit'])){
        $to      = 'iconmoving@gmail.com';
        $subject = 'Icon Moving - Moving Quote Request';
        $message = '
        <html>
        <head>
        </head>
        <body>
		
            <table>
                <tr>
                    <th>Infomation</th>
                </tr>
                <tr>
                    <td>Pickup  Zip: </td>
                    <td>' . $_POST['txtpickup'] . '</td>
                </tr>
                <tr>
                    <td>Delivery Zip: </td> 
                    <td>' .  $_POST['txtdelivery'] . '</td>
                </tr>
                <tr>
                    <td>Moving Date: </td>
                    <td>' .  $_POST['txtmoving'] . '</td>
                </tr>
                <tr>
                    <td>Name: </td>
                    <td>' .  $_POST['txtname'] . '</td>
                </tr>
                <tr>
                    <td>Address: </td>
                    <td>' .  $_POST['txtaddress'] . '</td>
                </tr>
                <tr>
                    <td>Phone: </td>
                    <td>' .  $_POST['txtphone'] . '</td>
                </tr>
                <tr>
                    <td>Email: </td>
                    <td>' .  $_POST['txtemail'] . '</td>
                </tr>
                <tr>
                    <td>Estimated Move Weight: </td>
                    <td>' .  $_POST['estimated'] . '</td>
                </tr>
            </table>            
        </body>
        </html>';
        // To send HTML mail, the Content-type header must be set
		
        $headers   = "From: Icon Moving - Website Enquiry <sales@iconmoving.com>" . "\r\n";
		$headers  .= 'MIME-Version: 1.0' . "\r\n";
		$headers  .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        // Additional headers
        $baoLoi = mail($to, $subject, $message, $headers);
        if (!$baoLoi)
            $baoLoi = "Send mail error.";
        else
            $baoLoi = "Thank you. An email sent to you.";
    }
    function title() {
      $page1 = basename($_SERVER['SCRIPT_NAME']);
      // Set variable $page as the current webpage
      $page1 = str_replace(".php","",$page1);
      // Remove the .php ending from the string: $page
      $page = str_replace("/","",$page1);
      // Remove the / before the website name
      $page1 = ucwords($page1);
	  
	  if (strpos($page1,'Index') !== false) {
	    $page1 = "Your Florida Moving Company (800-719-3590) - Icon Moving";
	  }
	  else if (strpos($page1,'Local') !== false) {
	    $page1 = "Local Moving Services in Boca Raton and Miami (800-719-3590) - Icon Moving";
	  }
	  else if (strpos($page1,'Long-distance') !== false) {
	    $page1 = "Long Distance Moving Services from and to Boca Raton and Miami (800-719-3590) - Icon Moving";
	  }
	  else if (strpos($page1,'International') !== false) {
	    $page1 = "International Moving Services from and to Boca Raton and Fort Lauderdale (800-719-3590) - Icon Moving";
	  }
	  else if (strpos($page1,'More-services') !== false) {
	    $page1 = "Moving Services in Boca Raton, Florida (800-719-3590) - Icon Moving";
	  }
	  else if (strpos($page1,'Storage') !== false) {
	    $page1 = "Moving & Storage Services in Boca Raton, Florida (800-719-3590) - Icon Moving";
	  }	  	
	  else if (strpos($page1,'Contactus') !== false) {
	    $page1 = "Contact Icon Moving Now (800-719-3590) - When Moving from and to Florida";
	  }	  		
	  else if (strpos($page1,'Coupons') !== false) {
	    $page1 = "Moving & Storage Coupons in Boca Raton (800-719-3590) - Icon Moving";
	  }	  		 
	  else if (strpos($page1,'Fort_lauderdale_movers') !== false) {
	    $page1 = "Premier Movers Fort Lauderdale (800-719-3590) - Making Your Move a Superb Experience";
	  }	  		     
	  else if (strpos($page1,'Miami_movers') !== false) {
	    $page1 = "Moving Company Miami (800-719-3590) - A Convenient Moving Experience ";
	  }	   		
	  else if (strpos($page1,'West_palm_beach_movers') !== false) {
	    $page1 = "How to Find Local Movers West Palm Beach  (800-719-3590) - Icon Moving";
	  }	 	         	  	  
	  else if (strpos($page1,'Boca_raton_movers') !== false) {
	    $page1 = "Local Movers Boca Raton Not Only Move Your Items (800-719-3590) - They Do It with Care";
	  }	 		  	    	  	  
	  else if (strpos($page1,'Boynton_beach_movers') !== false) {
	    $page1 = "What You need to do Before Letting Movers Boynton Beach Take Over the Job (800-719-3590)";
	  }	 	
	  else if (strpos($page1,'Delray_beach_movers') !== false) {
	    $page1 = "Movers Delray Beach (800-719-3590) - Icon Moving";
	  }	 
	  else if (strpos($page1,'Wellington_movers') !== false) {
	    $page1 = "A++ Movers Wellington (800-719-3590) - Icon Moving";
	  }	  	  
	  else if (strpos($page1,'Palm_beach_garden_movers') !== false) {
	    $page1 = "High Quality and Convenient Moving Services Offered by Moving Company Palm Beach Gardens (800-719-3590)";
	  }	  	  
	  else if (strpos($page1,'Jupiter_movers') !== false) {
	    $page1 = "The Great Difference of Moving Company Jupiter from Other Moving Companies (800-719-3590)";
	  }	  	  
	  	  	  	  
	  
      // Capitalize the first letters
      echo '<title>' .$page1. '</title>';
    }
function desc() {
      $page1 = basename($_SERVER['SCRIPT_NAME']);
      // Set variable $page as the current webpage
      $page1 = str_replace(".php","",$page1);
      // Remove the .php ending from the string: $page
      $page = str_replace("/","",$page1);
      // Remove the / before the website name
      $page1 = ucwords($page1);
	  
	  if (strpos($page1,'Index') !== false) {
	    $page1 = "(BBB)  Get hold of hassle free and convenient moving experience upon getting in touch with the stress free and effective services offered by our moving company in Boca Raton and Miami Florida";
	  }
	  else if (strpos($page1,'Local') !== false) {
	    $page1 = "(A+++)  The local moving services of our moving company in Florida offers at Boca Raton and Miami plays an essential role towards maintaining the safety and convenient of the items that needs to be moved";
	  }
	  else if (strpos($page1,'Long-distance') !== false) {
	    $page1 = "(BBB)  Safe, organized, and relaxed long distance moving experience from and to West Palm Beach Florida you should not miss through the long distance moving services our moving company Florida provides";
	  }
	  else if (strpos($page1,'International') !== false) {
	    $page1 = "(A+++)  Obtain safe and fast international movement and relocation experience as our moving company in Florida provides convenient and reliable international moving from and to Fort Lauderdale Florida";
	  }
	  else if (strpos($page1,'More-services') !== false) {
	    $page1 = "(BBB)  Our moving company provides the most convenient and high quality experience that quickly respond to the relocation and moving needs of the people in Florida with our moving services in South Beach Florida";
	  }
	  else if (strpos($page1,'Storage') !== false) {
	    $page1 = "(A+++)  Our moving company in Florida offers various types of storage services in Boca Raton Florida that puts emphasis to high quality storage and moving experience with the high quality features of the storage units we provide";
	  }	  	
	  else if (strpos($page1,'Contactus') !== false) {
	    $page1 = "(BBB)  Wondering when you should start planning your move? The best time of year to move? How to move your plants? Icon Moving answers all your packing and moving questions";
	  }	  		
	  else if (strpos($page1,'Coupons') !== false) {
	    $page1 = "(A+++)  Come to find the best coupons for moving and storage in Boca Raton, Florida.";
	  }	  		 
	  else if (strpos($page1,'Fort_lauderdale_movers') !== false) {
	    $page1 = "(BBB)  Fort Lauderdale, also known as the Venice of America is situated between Palm Beach and Miami. Fort Lauderdale has a great tropical climate making it a prime location for both recreation and business. ";
	  }	  		     
	  else if (strpos($page1,'Miami_movers') !== false) {
	    $page1 = "(A+++)  Moving companies provide a wide range of services for those who want to move their office or home to a new location. Some of the services offered by a moving company Miami include packing supplies, transferring and storing them";
	  }	   		 		    	       	  	  
	  else if (strpos($page1,'West_palm_beach_movers') !== false) {
	    $page1 = "(BBB)  A moving company West Palm will pack your belongings for you, load them into the van and deliver and unload them at your new place. They can also park as close as possible to your new place and safely unload your items fast. ";
	  }	 
	  else if (strpos($page1,'Boca_raton_movers') !== false) {
	    $page1 = "(A+++)  Learn how movers Boca Raton can help in safely moving your items to your new place. With their expertise, there is no moment you'll have to worry about your expensive goods";
	  }	 			  	   	  	      	  	  
	  else if (strpos($page1,'Boynton_beach_movers') !== false) {
	    $page1 = "(BBB)  Hiring a moving company Boynton Beach is not the only thing there is to do when it comes to moving. You need to know the rules as well, especially when it comes to packing your items. By dealing with this firsthand, you also get to save money in the end";
	  }	 	
	  else if (strpos($page1,'Delray_beach_movers') !== false) {
	    $page1 = "(BBB)  A local movers Delray Beach is committed to provide you the finest moving and storage services. Their top priority is the customer's satisfaction. They make sure that they have an efficient moving process including the moving assessments to assigning and setting up your fixtures. ";
	  }	 
	  else if (strpos($page1,'Wellington_movers') !== false) {
	    $page1 = "(A+++)  The Moving Company Wellington understand that you need skilled and trained professional movers that will makes sure that your moving will be efficient, safe and hassle-free";
	  }	  	  
	  else if (strpos($page1,'Palm_beach_garden_movers') !== false) {
	    $page1 = "(BBB)  Get hold of safe and very secure moving experience as moving company Palm Beach Gardens provides their high quality and very affordable moving services to the people";
	  }	  	  
	  else if (strpos($page1,'Jupiter_movers') !== false) {
	    $page1 = "(A+++)  There are several differences when it comes to quality and quantity of services that Moving Company Jupiter is highlighting which makes them unique and convenient to all the people";
	  }	  	  
	  	  	  
			  
      // Capitalize the first letters
      echo $page1;
    }	
function keywords() {
      $page1 = basename($_SERVER['SCRIPT_NAME']);
      // Set variable $page as the current webpage
      $page1 = str_replace(".php","",$page1);
      // Remove the .php ending from the string: $page
      $page = str_replace("/","",$page1);
      // Remove the / before the website name
      $page1 = ucwords($page1);
	  
	  if (strpos($page1,'Index') !== false) {
	    $page1 = "movers, moving companies, moving company, local, national, residential, licensed, moving co, move, services, help, top moving companies, professional, specialists, trained, van line, apartments, condominiums, homes, houses, businesses, commercial, corporate, franchise, franchisee, franchise opportunity, new horizon movers, long distance movers, interstate movers, moving companies, moving company, moving, moving services, moving service, corporate relocation, relocation services, Boca Raton moving and storage, local moving companies";
	  }
	  else if (strpos($page1,'Local') !== false) {
	    $page1 = "Local Movers, Moving Companies,Boca Raton Moving, Movers, Auto Transport, International Movers, self move companies, moving services, relocation services, car mover";
	  }
	  else if (strpos($page1,'Long-distance') !== false) {
	    $page1 = "movers in N. Broward/Boca Raton, N. Broward/Boca Raton moving companies, moving company in N. Broward/Boca Raton, local, Florida, national, residential, licensed, moving co, move, services, help, top moving companies, professional, specialists, trained, van line, apartments, condominiums, homes, houses, businesses, commercial, corporate";
	  }
	  else if (strpos($page1,'International') !== false) {
	    $page1 = "Moving Companies, international shipping, international movers, overseas moving companies, movers, moving companies, shipping, shippers, International Moving, International Sea and Air, International Movers, International Shipping, Moving Overseas, Overseas Specialists, Move from the USA, Move to the USA";
	  }
	  else if (strpos($page1,'More-services') !== false) {
	    $page1 = "Movers,Boca Raton movers,Moving,Company,Apartment,Home,House,Office,Furniture,Cheap,Affordable,Trusted,Florida movers";
	  }
	  else if (strpos($page1,'Storage') !== false) {
	    $page1 = "rates, equipment, local, South Beach movers, Boca Raton movers, Florida movers, suburbs, suburban, Florida, references, hoist, hoists, truck, equipment, prices, travel, time, packing";
	  }	  	
	  else if (strpos($page1,'Contactus') !== false) {
	    $page1 = "moving companies, free moving estimate, moving estimate, moving counselor, free quote, best time to move, move children, basic carrier liability, full replacement value, customer packed, not shipped, National Van Lines";
	  }	  		    	  	  
	  else if (strpos($page1,'Coupons') !== false) {
	    $page1 = "moving companies, free moving estimate, moving estimate, moving counselor, free quote, moving coupons boca raton, movers boca raton, basic carrier liability, full replacement value, customer packed, movers coupons maimi, National Van Lines";
	  }	  		  
      // Capitalize the first letters
      echo $page1;
    }		
?>

<!DOCTYPE HTML>
<html>
<head>
	<meta name="google-site-verification" content="nh8xIuBnjExjSyBOgogHY0D81EHHfpIPxV2ybTDh7e0" />
	<meta name="msvalidate.01" content="68A3533D26DBD8A35F9A60F770B99692" />
    <meta http-equiv="content-type" content="text/html" />
    <meta name="author" content="moving" />
    <meta name="Description" content="<?php desc(); ?>" />
	<meta name="Keywords" content="<?php keywords(); ?>" />
   <?php title(); ?>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css">
    <script src="js/jquery-1.9.1.min.js"></script>
    <script src="http://code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
    <link href="dimsemenov-preview-pack.css" rel="stylesheet" type="text/css" />
     <script src="js/jquery.touchcarousel-1.0.min.js" type="text/javascript"></script>
    <script>
        $(function() {
            carouselInstance = $("#carousel-single-image").touchCarousel({
                pagingNav: true,
                scrollbar: false,
                directionNavAutoHide: false,                
                itemsPerMove: 1,                
                loopItems: true,                
                directionNav: true,
                autoplay: false,
                autoplayDelay: 2000,
                useWebkit3d: true,
                transitionSpeed: 400
            }).data('touchCarousel');   
        })
    </script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-56526701-1', 'auto');
  ga('send', 'pageview');

</script>  
<script src="http://static.dudamobile.com/DM_redirect.js" type="text/javascript"></script>
<script type="text/javascript">DM_redirect("http://mobile.dudamobile.com/site/iconmoving");</script>
    <script language="javascript">
        function checkRong(){
            if (document.getElementById('txtname').value == ''){
                alert('Name Field cannot be Blank.');
                return false
            }
            if (document.getElementById('txtphone').value == ''){
                alert('Phone Field cannot be Blank.');
                return false
            }
            var email = document.getElementById("txtemail").value;
            if ( email != ''){
                var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
                if (reg.test(email) == false){
                    alert('Invalid Email Address. Please try again.');
                    return false;
                }
            }else{
                alert('Email Field cannot be Blank.');
                return false
            }
        }
        jQuery(function($) {
            $( "#txtmoving" ).datepicker();
        });
    </script>
    <script type="text/javascript" src="js/jssor.core.js"></script>
    <script type="text/javascript" src="js/jssor.utils.js"></script>
    <script type="text/javascript" src="js/jssor.slider.js"></script>
    <script>
        jQuery(document).ready(function ($) {

            var _CaptionTransitions = [];
            _CaptionTransitions["L"] = { $Duration: 900, $FlyDirection: 1, $Easing: { $Left: $JssorEasing$.$EaseInOutSine }, $ScaleHorizontal: 0.6, $Opacity: 2 };
            _CaptionTransitions["R"] = { $Duration: 900, $FlyDirection: 2, $Easing: { $Left: $JssorEasing$.$EaseInOutSine }, $ScaleHorizontal: 0.6, $Opacity: 2 };
            _CaptionTransitions["T"] = { $Duration: 900, $FlyDirection: 4, $Easing: { $Top: $JssorEasing$.$EaseInOutSine }, $ScaleVertical: 0.6, $Opacity: 2 };
            _CaptionTransitions["B"] = { $Duration: 900, $FlyDirection: 8, $Easing: { $Top: $JssorEasing$.$EaseInOutSine }, $ScaleVertical: 0.6, $Opacity: 2 };
            _CaptionTransitions["ZMF|10"] = { $Duration: 900, $Zoom: 11, $Easing: { $Zoom: $JssorEasing$.$EaseOutQuad, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 };
            _CaptionTransitions["RTT|10"] = { $Duration: 900, $Zoom: 11, $Rotate: 1, $Easing: { $Zoom: $JssorEasing$.$EaseOutQuad, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInExpo }, $Opacity: 2, $Round: { $Rotate: 0.8} };
            _CaptionTransitions["RTT|2"] = { $Duration: 900, $Zoom: 3, $Rotate: 1, $Easing: { $Zoom: $JssorEasing$.$EaseInQuad, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $Opacity: 2, $Round: { $Rotate: 0.5} };
            _CaptionTransitions["RTTL|BR"] = { $Duration: 900, $Zoom: 11, $Rotate: 1, $FlyDirection: 10, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Top: $JssorEasing$.$EaseInCubic, $Zoom: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInCubic }, $ScaleHorizontal: 0.6, $ScaleVertical: 0.6, $Opacity: 2, $Round: { $Rotate: 0.8} };
            _CaptionTransitions["CLIP|LR"] = { $Duration: 900, $Clip: 15, $Easing: { $Clip: $JssorEasing$.$EaseInOutCubic }, $Opacity: 2 };
            _CaptionTransitions["MCLIP|L"] = { $Duration: 900, $Clip: 1, $Move: true, $Easing: { $Clip: $JssorEasing$.$EaseInOutCubic} };
            _CaptionTransitions["MCLIP|R"] = { $Duration: 900, $Clip: 2, $Move: true, $Easing: { $Clip: $JssorEasing$.$EaseInOutCubic} };

            var options = {
                $FillMode: 2,                                       //[Optional] The way to fill image in slide, 0 stretch, 1 contain (keep aspect ratio and put all inside slide), 2 cover (keep aspect ratio and cover whole slide), 4 actual size, 5 contain for large image, actual size for small image, default value is 0
                $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlayInterval: 6000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 1,                                   //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, default value is 1

                $ArrowKeyNavigation: true,                          //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                $SlideEasing: $JssorEasing$.$EaseOutQuint,          //[Optional] Specifies easing for right to left animation, default value is $JssorEasing$.$EaseOutQuad
                $SlideDuration: 500,                               //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
                //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                $SlideSpacing: 0,                                   //[Optional] Space between each slide in pixels, default value is 0
                $DisplayPieces: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                $ParkingPosition: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
                $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
                $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
                $DragOrientation: 1,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

                $CaptionSliderOptions: {                            //[Optional] Options which specifies how to animate caption
                    $Class: $JssorCaptionSlider$,                   //[Required] Class to create instance to animate caption
                    $CaptionTransitions: _CaptionTransitions,       //[Required] An array of caption transitions to play caption, see caption transition section at jssor slideshow transition builder
                    $PlayInMode: 1,                                 //[Optional] 0 None (no play), 1 Chain (goes after main slide), 3 Chain Flatten (goes after main slide and flatten all caption animations), default value is 1
                    $PlayOutMode: 3                                 //[Optional] 0 None (no play), 1 Chain (goes before main slide), 3 Chain Flatten (goes before main slide and flatten all caption animations), default value is 1
                },

                $BulletNavigatorOptions: {                          //[Optional] Options to specify and enable navigator or not
                    $Class: $JssorBulletNavigator$,                 //[Required] Class to create navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 1,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                    $Lanes: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
                    $SpacingX: 8,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
                    $SpacingY: 8,                                   //[Optional] Vertical space between each item in pixel, default value is 0
                    $Orientation: 1                                 //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
                },

                $ArrowNavigatorOptions: {                           //[Optional] Options to specify and enable arrow navigator or not
                    $Class: $JssorArrowNavigator$,                  //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 1,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 2,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
                }
            };

            var jssor_slider2 = new $JssorSlider$("slider2_container", options);

            //var jssor_slider2 = new $JssorSlider$("slider2_container", options);
        });
    </script>
</head>

<body>
<div id="wraper">
    <div id="wraper-header">
        <div class="container">
        <div id="logo">
            <a href="index.php"><img src="images/logo.png" alt="logo" /></a>
        </div>
        <div id="header-right">
            <div id="social">
                <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
                <script type="text/javascript">stLight.options({publisher: "3860dc3a-7129-44b4-a4f8-f27f64b3dce5", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
                <ul>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-skype"></i></a></a></li>
                    <li><a href="#"><i class="fa fa-vine"></i></a></li>
                    <!--<li id="phone"><a href="tel:561-338-3157"><i class="fa fa-phone"></i>561-338-3157</a></li>
                    <li id="phone"><a href="tel:800-719-3590"><i class="fa fa-phone"></i>800-719-3590</a></li>-->
                </ul>
            </div><!--end #social -->
			<div id="call">
				<div class="icon"><img src="images/bg_call.png" alt="call" /></div>
				<div class="right-b">
					<span class="ctd">Call to day</span>
					<span class="phone">561-338-3157</span>
				</div>
				
			</div>
            <div id="nav">
            <nav>
                <ul>
                    <?php $page = basename($_SERVER['SCRIPT_NAME']); ?>
                    <li><a <?php if ($page == 'index.php') { ?>class="active"<?php } ?> href="index.php">Home</a></li>
                    <li><a <?php if ($page == 'local.php') { ?>class="active"<?php } ?> href="local.php">Local</a></li>
                    <li><a <?php if ($page == 'long-distance.php') { ?>class="active"<?php } ?> class="" href="long-distance.php">Long Distance</a></li>
                    <li><a <?php if ($page == 'international.php') { ?>class="active"<?php } ?> href="international.php">International</a></li>
                    <li><a <?php if ($page == 'more-services.php') { ?>class="active"<?php } ?> href="more-services.php">More Services</a></li>
                    <li><a <?php if ($page == 'storage.php') { ?>class="active"<?php } ?> href="storage.php">Storage</a></li>
                    
                    <li><a <?php if ($page == 'contactus.php') { ?>class="active"<?php } ?> href="contactus.php">Contact US</a></li>
                </ul>
            </nav>
            </div><!--end # nav -->
        </div>
        </div><!-- end # container header -->
    </div><!-- end # wraper-header -->
        <div id="wraper-main">
            <div id="main-slide">
                <div id="slider2_container" style="position: relative; margin: 0 auto;
        top: 0px; left: 0px; width:1366px;min-width: 1140px; height: 400px; overflow: hidden;">
                    <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width:1366px;min-width: 1140px;
            height: 400px; overflow: hidden;">
                        <div>
                            <img u="image" src="images/slide1.png" />
                            <div class="caption"><p>Licensed & Insured<br/>We're here to Help</p>
                            </div>
                        </div>
                        <div>
                            <img u="image" src="images/slide2.png" />
                            <div class="caption"><p>Safe, secure Moving<br/>Licensed & Insured</p>
                            </div>
                        </div>
                        <div>
                            <img u="image" src="images/slide3.png" />
                            <div class="caption"><p>Florida Movers<br/>Licensed & Insured</p>
                            </div>
                        </div>
						<div>
                            <img u="image" src="images/slide4.png" />
                            <div class="caption"><p>Florida Movers<br/>Licensed & Insured</p>
                            </div>
                        </div>
                    </div>
                    <!-- bullet navigator container -->
                    <div u="navigator" class="jssorb01" style="position: absolute; bottom: 16px; right: 10px;">
                        <!-- bullet navigator item prototype -->
                        <div u="prototype" style="POSITION: absolute; WIDTH: 15px; HEIGHT: 15px;"></div>
                    </div>
                    <!-- Arrow Left -->
                    <span u="arrowleft" class="jssora05l" style="width: 50px; height: 50px; top: 45%; left: 50px;">
                    </span>
                    <!-- Arrow Right -->
                    <span u="arrowright" class="jssora05r" style="width: 50px; height: 50px; top: 45%; right: 50px">
                    </span>
                </div>
            </div><!-- end # main-slide -->
            <div id="main-learnmore">
                <div class="container">
                    <p>We make Florida moving more affordable! LOCAL, LONG DISTANCE AND INTERNATIONAL</p>
                    <a href="contactus.php">Learn More</a>
                </div>
            </div><!-- end # main-learnmore-->