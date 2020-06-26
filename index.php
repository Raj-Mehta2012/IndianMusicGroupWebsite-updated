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
    <link rel="stylesheet" href="css/home.css">
    <link rel="icon" href="images/img_logo_wo_text1.png">
    <!--Slider links-->
    <link rel="stylesheet" type="text/css" href="engine1/style.css" />
    <script type="text/javascript" src="engine1/jquery.js"></script>
    <title>Indian Music Group</title>
</head>
<body>
    <div class="master_class">
        <?php include('topnav.php'); ?>
        
        <!-- Slider --> 

            <div id="wowslider-container1">
            <div class="ws_images"><ul>
                <li><img src="images/slider/slides/janfest_invite.png" alt="Janfest Invite" title="Janfest Invite" id="wows1_0"/></li>
                <li><img src="images/slider/slides/aaroh1.jpg" alt="Aaroh" title="Aaroh" id="wows1_1"/></li>
                <li><img src="images/slider/slides/aaroh2.jpg" alt="Aaroh" title="Aaroh" id="wows1_2"/></li>
                <li><img src="images/slider/slides/mkp1.jpg" alt="Malhar ke Prakaar" title="Malhar ke Prakaar" id="wows1_3"/></li>
                <li><img src="images/slider/slides/mkp2.jpg" alt="Malhar ke Prakaar" title="Malhar ke Prakaar" id="wows1_4"/></li> 
            </ul></div>
            <div class="ws_bullets"><div>
                <a href="#" title="Janfest Invite"><span><img src="images/slider/bullet/janfest_invite.png" alt="Janfest Invite"/>1</span></a>
                <a href="#" title="Aaroh"><span><img src="images/slider/bullet/aaroh1.jpg" alt="Aaroh"/>2</span></a>
                <a href="#" title="Aaroh"><span><img src="images/slider/bullet/aaroh2.jpg" alt="Aaroh"/>3</span></a>
                <a href="#" title="Malhar ke Prakaar"><span><img src="images/slider/bullet/mkp1.jpg" alt="Malhar ke Prakaar"/>4</span></a>
                <a href="#" title="Malhar ke Prakaar"><span><img src="images/slider/bullet/mkp2.jpg" alt="Malhar ke Prakaar"/>5</span></a>
            </div></div>
            <div class="ws_shadow"></div>
            </div>  
            <script type="text/javascript" src="engine1/wowslider.js"></script>
            <script type="text/javascript" src="engine1/script.js"></script>

        <!-- End Of Slider-->

        <div class="membership_advert">
            <div class="quote_class"><h2><i>"Music expresses that which cannot be said and on which it is impossible to be silent."</i></h2></div>
            <div class="vic_hugo"><h4>-VICTOR HUGO</h4></div>
            <div class="memebrship_pitch"><p>Is music something more than just a sound to you? Do you enjoy the purity and beauty of sur and taal? Are you always in search of new melodies to suit your current emotions? Join us at the Indian Music Group to help you explore this vast world of Indian Classical Music. Register yourself as a member and experience the ambience and facilities of the 47 year old IMG library.</p></div>
            <br>
            <div class="membership_card_block">
                <div><img src="images/img_membership_card.png" class="img_membership_card"></div>
                <div class="perks_of_member">
                    <div class="perks_of_member_title"><h3>PERKS OF BEING A MEMBER</h3></div>
                    <div class="perks_list">
                        <div><li>Access to 2000 hours of records and tapes</li></div>
                        <div><li>Access to music books and encyclopedia</li></div>
                        <div><li>Postal invites and mails</li></div>
                        <div><li>Discount on Janfest tickets</li></div>
                    </div>
                </div>
            </div>
            <div class="membership_button_block"><button class="membership_button" onclick="window.location.href = 'membership.php'">BECOME A MEMBER TODAY</button></div>
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