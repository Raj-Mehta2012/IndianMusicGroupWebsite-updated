<!-- /* TEMPLATE CSS WITH BREAKPOINTS. DO NOT MAKE CHANGES */ -->
<?php
    include("nav.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="icon" href="images/img_logo_wo_text1.png">

    <title>Indian Music Group</title>
</head>
<body>
    <div class="master_class">
        <?php include('topnav.php'); ?>

        <div class='header-container'>
                  <div class='header'>
                    <div class='logo'><img src='images/contact/three-buildings.png'/></div>
                    <div class='spacer'></div>
                   	<div class='content'>
                   		<div class='headers_content_div'><h1 class='headers_content'>OFFICE HOURS</h1></div>
                   		<div class="normal_text_div"><p class='normal_text'>Mon-Sat : 10:30 am to 4:30 pm.</p></div>
                   		<div class="normal_text_div"><p class='normal_text'>Closed on Sundays and all Public holidays</p></div>
                   	</div>
                  </div>

                  <div class='header'>
                    <div class='logo'><img src='images/contact/press-pass.png'/></div>
                    <div class='spacer'></div>
                   	<div class="content">
                   		<div class='headers_content_div'><h1 class="headers_content">PRESS & PUBLICITY</h1></div>
                   		<div class="normal_text_div"><p class="normal_text">Anupama Gopinathan : +918879854565.</p></div>
                   		<div class="normal_text_div"><p class="normal_text">Ishah Taimni &emsp; &emsp; &emsp; &emsp; : +919820404776</p></div>
                   	</div>
                  </div>

                   <div class='header'>
                    <div class='logo'><img src='images/contact/connection.png'/></div>
                    <div class='spacer'></div>
                   	<div class="content">

                   		<div class='headers_content_div'><h1 class="headers_content">ASSOCIATE WITH US</h1></div>
                   		<div class="normal_text_div"><p class="normal_text">Shaurya Singh&emsp;&emsp;&emsp;:&emsp;+918433614010</p></div>
                   	</div>
                   	
                  </div>
            </div>
           
                  <div class='map_headers'>

                   	<div class="contact_info">
                        <div class="img_address">
                            <div class='headers_content_div'><h1 class="headers_content">ADDRESS</h1></div>
                            <div class="normal_text_div"><p class="normal_text">Indian Music Group</p></div>   
                   		    <div class="normal_text_div"><p class="normal_text">5, Mahapalika Marg</p></div>
                   		    <div class="normal_text_div"><p class="normal_text">St. Xavier's College, Autonomous</p></div>
                   		    <div class="normal_text_div"><p class="normal_text">Mumbai-400001</p></div>
                        </div>
                        <div class="img_email">
                   		    <div class='headers_content_div'><h1 class="headers_content">EMAIL</h1></div>
                   		    <div class="normal_text_div"><p class="normal_text">img.xaviers@gmail.com</p></div>
                   		</div>
                   	</div>
                   	 <div class='logo'>
                    	<div class="mapouter"><div class="gmap_canvas"><iframe class="iframe_class" id="gmap_canvas" src="https://maps.google.com/maps?q=indian%20music%20group%20st%20xaviers%20college%2C%20mumbai&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div><style></style></div>
                    </div>

                   	
                  </div>
            

        <?php include('footer.php'); ?>
    </div>
    <script>
        /* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
        function myFunction() {
            var x = document.getElementById("myTopnav");
                if (x.className === "topnav") {
                    x.className += " responsive";
                } 
                else {
                    x.className = "topnav";
                }
            }
        </script>

</body>
</html>