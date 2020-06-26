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
    <link rel="stylesheet" href="css/events25.css">
    <link rel="icon" href="images/img_logo_wo_text1.png">
    <title>Indian Music Group</title>

    <style>
         @media only screen and (max-width: 600px) {
          /* For tablets/mobile: */
          .col-s-1 {width: 8.33%;}
          .col-s-2 {width: 16.66%;}
          .col-s-3 {width: 25%;}
          .col-s-4 {width: 33.33%;}
          .col-s-5 {width: 41.66%;}
          .col-s-6 {width: 50%;}
          .col-s-7 {width: 58.33%;}
          .col-s-8 {width: 66.66%;}
          .col-s-9 {width: 75%;}
          .col-s-10 {width: 83.33%;}
          .col-s-11 {width: 91.66%;}
          .col-s-12 {width: 100%;}
          .events-container{display: none;} 
          * {
          box-sizing: border-box;
        }

        .container12{
          align-content: center;
          width: 80%;
        }

        [class*="col-"] {
          float: left;
          padding: 0px;
        }

        p{
            color: #091d5a;
            text-align-last: left;
            text-align: justify;
            padding-bottom: -10px;
            padding-top: 10px; 
            padding-right: 20px;
            padding-left: 20px;
        }

        img{
        	padding-bottom: 10px;
        }

        html {
          background-color: #fbf4e1;
          font-family: "Myriad Pro", sans-serif;
        }

        .innerbox{
          background-color: white;
          align-self: center;
          align-content: center;
          border-radius: 25px;
          width: 100%;
          height: 100%;
          box-shadow: -7px 6px 28px -13px rgba(0,0,0,0.75);
        }

        .abc{
          display: flex;
          flex-wrap: center;
          align-items: center;
        } 

        .pqr{
        	padding-left: 12px;
        }       
      }

      @media only screen and (min-width: 768px) {
          /* For desktop: */
          .col-10 {width: 83.33%;}
          .col-11 {width: 91.66%;}
          .col-12 {width: 100%;}

          .container12{display: none;}
        }
    </style>
</head>
<body>
    <div class="master_class">
        <div class="top_bar">
            <div><img src="images/img_logo.png" class="img_logo_main"/></div>
            <div class="topnav" id="myTopnav">
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars"></i>
                </a>
                <a href="<?php echo $home; ?>" >HOME</a>
                <a href="<?php echo $about; ?>">ABOUT</a>
                <a href="<?php echo $events; ?>">EVENTS & CONCERTS</a>
                <a href="<?php echo $janfest; ?>">JANFEST</a>
                <a href="<?php echo $membership; ?>">MEMBERSHIP</a>
                <a href="<?php echo $partner; ?>">PARTNER WITH US </a>
                <a href="<?php echo $contact; ?>">CONTACT US</a>
                
            </div>
        </div>
        <!-- Contents start here -->
            <!--Desktop Version-->
        <div class="events-container">
        <div class="blueboxodd" align="center" style="background-image: url(images/events/baithaks.png)">
            <div class="textdiv">
                <div class="heading" align="left">BAITHAKS</div>
                <div class="para" align="left">We believe all talent is worthy of appreciation. Apart from our grand concerts, the IMG also serves as a platform for our budding performers to help them prepare for bigger stages, and greater applause. Baithaks bring to our younger audiences a chance to familiarize themselves with the nuances of Indian Classical Music. So do attend these informal gatherings of light music, and support talent when it needs it the most.</div>
            </div>

            <div class="imgdiv"></div>
            
        </div>
        <div class="blueboxeven" align="center" style="background-image: url(images/events/2.png)">

            <div class="imgdiv"></div>

            <div class="textdiv">
                <div class="heading" align="right">AAROH</div>
                <div class="para" align="right">Aaroh takes its name from one of the key component of a Raag. The concert not only borrows its name from this component but also imbibes its very meaning. As Aaroh defines a Raag, this first annual concert sets to define the coming year of the Indian Music Group. Giving way to the young budding student artists of St. Xavier’s College, it brings into the picture, humble beginnings of a Raag. The IMG as and with Aaroh, aspires to take classical music to an increasing order of frequency with every notch.</div>
            </div>
        </div>
        <div class="blueboxodd" align="center" style="background-image: url(images/events/3.png)">
            <div class="textdiv">
                <div class="heading" align="left">MALHAR KE PRAKAR</div>
                <div class="para" align="left">After having established a sound foundation with Aaroh, the Indian Music Group presents Malhar Ke Prakaar. Keeping with raag Malhar’s association to the atmosphere of torrential rains, Malhar ke Prakaar takes place in the month of August amidst the monsoons. The Indian Music Group has had the honour of hosting eminent artists such as Pandit Jasraj, Dr. Ashwini Bhide Deshpande, Shubha Mudgal, Ustad Ghulam Mustafa Khan and many more for this monsoon concert. These artists with their powerful performances, have surely induced showers of applause if not actual rain. Like the impressive and sweet Shuddha Nishad of Madra Saptak characteristic to Raag Miya Malhar, Malhar ke Prakaar stands out to be one of the monumental concerts of the Indian Music Group. </div>
            </div>

            <div class="imgdiv"></div>
            
        </div>
        <div class="blueboxeven" align="center" style="background-image: url(images/events/4.png)">

            <div class="imgdiv"></div>

            <div class="textdiv">
                <div class="heading" align="right">VIRAASAT</div>
                <div class="para" align="right">Aaroh takes its name from one of the key component of a Raag. The concert not only borrows its name from this component but also imbibes its very meaning. As Aaroh defines a Raag, this first annual concert sets to define the coming year of the Indian Music Group. Giving way to the young budding student artists of St. Xavier’s College, it brings into the picture, humble beginnings of a Raag. The IMG as and with Aaroh, aspires to take classical music to an increasing order of frequency with every notch.</div>
            </div>
        </div>
        <div class="blueboxodd" align="center" style="background-image: url(images/events/6.png)">
            <div class="textdiv">
                <div class="heading" align="left">MUSIC APPRECIATION COURSE</div>
                <div class="para" align="left">The legacy and heritage of Indian Classical Music has inspired people from time immemorial. Capturing the essence of this feeling, we present to you one of our most popular concerts, Viraasat. Being one of our student concerts, Viraasat has been a witness to young tabla players, Bharatanatyam performances, and vocal renditions in the past year. We wish to give the stage to proficient students who on their way to mastery need that final push. The IMG firmly believes that young artists should be given the opportunity and the encouragement that they deserve. Born out of this belief is this grand student concert of the IMG - Viraasat. </div>
            </div>

            <div class="imgdiv"></div>
            
        </div>
        
        <div class="blueboxeven" align="center" style="background-image: url(images/events/5.png)">

            <div class="imgdiv"></div>

            <div class="textdiv">
                <div class="heading" align="right">BIRTHDAY CONCERT</div>
                <div class="para" align="right">The Indian Music Group celebrates the anniversary of its inception in 1973 every year in early January. This concert marks the immense contribution of the IMG in the realm of classical music. Over the years, several great artists like Pt. Shivkumar Sharma, Pt. Hariprasad Chaurasia and other musical maestros have performed at this concert, which is a precursor to Janfest. This esteemed platform sees the reveal of the Janfest lineup. Birthday Concert is the celebratory curtain raiser, a preview to Janfest, and the wonders to come.</div>
            </div>
        </div>
        </div>
            <!--Desktop Version Ends here-->

            <!--Mobile/Tablet Version-->
                <div class="container12">
                <div class="innerbox col-s-11">
                <div class="col-12 col-s-12">
                  <p class="abc pqr" style="font-size:45px; ">BAITHAK</p>
                  <div>
                    <img src="images\events\Aaroh 1.jpg" class="col-s-12">
                  </div>
                  <div>  
                    <p>We believe all talent is worthy of appreciation. Apart from our grand concerts, the IMG also serves as a platform for our budding performers to help them prepare for bigger stages, and greater applause. Baithaks bring to our younger audiences a chance to familiarize themselves with the nuances of Indian Classical Music. So do attend these informal gatherings of light music, and support talent when it needs it the most.</p>
                  </div>
                </div>

                <div class="col-12 col-s-12">
                  <p class="abc pqr" style="font-size:45px; ">AAROH</p>
                  <div class="abc col-s-12 col-12">
                    <img src="images\events\Aaroh 2.jpg" class="col-s-12 col-12">
                  </div>
                  <div class="abc col-s-12 col-12">  
                    <p>Aaroh takes its name from one of the key component of a Raag. The concert not only borrows its name from this component but also imbibes its very meaning. As Aaroh defines a Raag, this first annual concert sets to define the coming year of the Indian Music Group. Giving way to the young budding student artists of St. Xavier’s College, it brings into the picture, humble beginnings of a Raag. The IMG as and with Aaroh, aspires to take classical music to an increasing order of frequency with every notch.</p>
                  </div>
                </div>

                <div class="col-12 col-s-12">
                  <p class="abc pqr" style="font-size:45px; ">MALHAR KE PRAKAR</p>
                  <div class="abc col-s-12 col-12">
                    <img src="images\events\MKP 1.jpg" class="col-s-12 col-12">
                  </div>
                  <div class="abc col-s-12 col-12">  
                    <p>After having established a sound foundation with Aaroh, the Indian Music Group presents Malhar Ke Prakaar. Keeping with raag Malhar’s association to the atmosphere of torrential rains, Malhar ke Prakaar takes place in the month of August amidst the monsoons. The Indian Music Group has had the honour of hosting eminent artists such as Pandit Jasraj, Dr. Ashwini Bhide Deshpande, Shubha Mudgal, Ustad Ghulam Mustafa Khan and many more for this monsoon concert. These artists with their powerful performances, have surely induced showers of applause if not actual rain. Like the impressive and sweet Shuddha Nishad of Madra Saptak characteristic to Raag Miya Malhar, Malhar ke Prakaar stands out to be one of the monumental concerts of the Indian Music Group. </p>
                  </div>
                </div>

                <div class="col-12 col-s-12">
                  <p class="abc pqr" style="font-size:45px; ">VIRAASAT</p>
                  <div class="abc col-s-12 col-12">
                    <img src="images\events\Viraasat 1.jpg" class="col-s-12 col-12">
                  </div>
                  <div class="abc col-s-12 col-12">  
                    <p>Aaroh takes its name from one of the key component of a Raag. The concert not only borrows its name from this component but also imbibes its very meaning. As Aaroh defines a Raag, this first annual concert sets to define the coming year of the Indian Music Group. Giving way to the young budding student artists of St. Xavier’s College, it brings into the picture, humble beginnings of a Raag. The IMG as and with Aaroh, aspires to take classical music to an increasing order of frequency with every notch.</p>
                  </div>
                </div class="col-12 col-s-12">

                <div class="col-12 col-s-12">
                  <p class="abc pqr" style="font-size:45px; ">MUSIC APPRECIATION COURSE</p>
                  <div class="abc col-s-12 col-12">
                    <img src="images\events\Janfest.jpg" class="col-s-12 col-12">
                  </div>
                  <div class="abc col-s-12 col-12">  
                    <p>The legacy and heritage of Indian Classical Music has inspired people from time immemorial. Capturing the essence of this feeling, we present to you one of our most popular concerts, Viraasat. Being one of our student concerts, Viraasat has been a witness to young tabla players, Bharatanatyam performances, and vocal renditions in the past year. We wish to give the stage to proficient students who on their way to mastery need that final push. The IMG firmly believes that young artists should be given the opportunity and the encouragement that they deserve. Born out of this belief is this grand student concert of the IMG - Viraasat. </p>
                  </div>
                </div>

                <div class="col-12 col-s-12">
                  <p class="abc pqr" style="font-size:45px; ">BIRTHDAY CONCERT</p>
                  <div class="abc col-s-12 col-12">
                    <img src="images\events\Bcon.NEF" class="col-s-12 col-12">
                  </div>
                  <div class="abc col-s-12 col-12">  
                    <p>The Indian Music Group celebrates the anniversary of its inception in 1973 every year in early January. This concert marks the immense contribution of the IMG in the realm of classical music. Over the years, several great artists like Pt. Shivkumar Sharma, Pt. Hariprasad Chaurasia and other musical maestros have performed at this concert, which is a precursor to Janfest. This esteemed platform sees the reveal of the Janfest lineup. Birthday Concert is the celebratory curtain raiser, a preview to Janfest, and the wonders to come.</p>
                  </div>
                </div>

      </div>
      </div>
            <!--Mobile/Tablet Version Ends here-->
        <!-- Contents end here -->

        <div class="footer_class_main">
            <div class="copyright_text_div"><h1 class="copyright_text_footer">COPYRIGHT &#xA9 2019 INDIAN MUSIC GROUP</h1></div>
            <div class="social_media_logos">
                <div class="social_icon_fb social_icons_div"><img src="images/social/facebook.png" class="social_icons"></div>
                <!--<div class="social_icon_tw social_icons_div"><img src="images/social/twitter.png" class="social_icons"></div>-->
                <div class="social_icon_insta social_icons_div"><img src="images/social/instagram.png" class="social_icons"></div>
                <div class="social_icon_yt social_icons_div"><img src="images/social/youtube.png" class="social_icons"></div>
            </div>
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