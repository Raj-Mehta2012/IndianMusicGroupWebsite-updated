<!-- /* TEMPLATE HTML. DO NOT MAKE CHANGES */ -->
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
    <link rel="stylesheet" href="css/partner.css">
    <link rel="icon" href="images/img_logo_wo_text1.png">
    <title>Indian Music Group</title>
</head>
<body>
    <div class="master_class">
        <?php include('topnav.php'); ?>

        <div class="partner_main">            
            <div class="sponsor_heading_class"><h1>OUR SPONSORS</h1></div>
            <div class="taj_div">
                <div class="logo_title_div"><h3>Sponsored By</h3></div><br>
                <div class="taj_logo_div"></div><img src="images/partner/Taj_Mahal.png" class="taj_logo logo" alt="">
            </div>
            <div class="level_2_logos">
                <div class="yono_div">
                    <div class="logo_title_div"><h3>Associate Sponsor</h3></div><br>
                    <div class="yono_logo_div"></div><img src="images/partner/yono.png" class="yono_logo logo" alt="">
                </div>
                <div class="lokmath_div">
                    <div class="logo_title_div"><h3>Media Partner</h3></div><br>
                    <div class="lok_logo_div"></div><img src="images/partner/lokmat.png" class="lokmat_logo logo" alt="">
                </div>
            </div>
            <br><br>
            <div class="heading_class"><h1>PARTNER WITH US</h1></div>
            <div class="para_class1"><p>In the span of the glorious 47 years, We, at the Indian Music Group relentlessly strives to etch the mark of Indian Classical Music amidst the minds of the people, students in particular. Thus, the Indian Music Group organises Baithaks, Concerts and Music Appreciation Courses throughout the year leading to our flagship event in January called Janfest. </p></div>
            <div class="image_class"><img src="images/partner/Janfest.jpg" alt="Image of the quadrangle during Janfest" class="image_actual"></div>
            <div class="para_class2">
                <p>The first quadrangle of St. Xavier’s College Mumbai lights up with a melange of colours and soulful music every year on the 25th and 26th of January, as the Indian Music Group organises its annual music extravaganza called ‘Janfest.’ Over the years, Janfest has transformed into a magnum opus with a growing audience of over 2000 avid listeners. Thriving with all guns blazing since 1979, Janfest is undoubtedly one of the most awaited classical music concerts in India. Thus, it is a platform that has witnessed eminent maestros like Pandit Shivkumar Sharma, Pandit Hariprasad Chaurasia, Ustad Alla Rakha Khan, Pandit Bhimsen Joshi and many more, bless the audience with their gift of music.</p>
                <p>The Indian Music Group strives to develop enriching associations in the pursuit of promoting Indian Classical music. We have a large membership audience of over 2000 people spanning across different age groups along with the college student audience of over 4000 people from different streams.  To add to this, we have an extensive press coverage in both English and regional newspapers. </p>
                <p>Thus, we hope to connect with organisations far and wide with the objective of propagating classical music and establishing a valuable partnership. </p>
            </div>
            <br>
            <div class="contacts_partner">
                <div class="marketing_contact">
                    <div class="email_img"><img src="images/partner/email.png" alt="Logo Of an Envelope" class="logos"></div>
                    <div class="mail_text_div">
                        <h3>PARTNER WITH US AT</h3>
                        <h4>marketing.janfest@gmail.com</h4>
                    </div>
                </div>
                <div class="gensec_contact">
                <div class="phone_img"><img src="images/partner/Contact.png" alt="Logo Of a Telephone" class="logos"></div>
                    <div class="number_text_div">
                        <h3>CONTACT</h3>
                        <h4>Shaurya Singh: +918433614010</h4>
                    </div>
                </div>
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