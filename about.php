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
    <link rel="stylesheet" href="css/about.css">
    <link rel="icon" href="images/img_logo_wo_text1.png">
    <title>Indian Music Group</title>
</head>
<body>
    <div class="master_class">
    <?php include('topnav.php'); ?>


        <div class="container">
            <div class="header_container"><h1>ABOUT US</h1></div>
            <div class="col-s-12 col-12 abc">
                <p>The Indian Music group of St. Xavier’s College, Mumbai was founded in the year 1973 with the support of the then principal, Fr. Lancy Pereira and the great Ustad Alla Rakha Khan.</p>
            </div>

            <div class="col-s-12 col-12 abc">
                <img class="image_class" src="images\about\Library.jpg" class="col-s-12 col-12">
            </div>
            <div class="col-s-12 col-12 abc">
                <p>Since its inception in the year 1973, the IMG has been striving to inculcate appreciation and love for Indian Classical art forms amongst people of all ages. The legacy of the IMG is laden with enthralling performances by legends, celebrations of our heritage, and the magical ambience created by the gothic structure at St. Xavier’s College where the soothing sitar echoes through the 150 year old arches.</p>
            </div>

            <div class="col-s-12 col-12 abc">                
                <img class="image_class" src="images\about\Artist Collage.jpg" class="col-s-12 col-12">
            </div>

            <div class="col-s-12 col-12 abc">
            <p>A novel institution in Mumbai, the Indian Music Group has seen the evolution of classical music through the ages. IMG concerts have been graced by the presence of innumerable legends and dignitaries from Ustad Allah Rakha Khan to Pt. Jasraj, from Ustad Zakir Hussain to Pt. Shivkumar Sharma and many more.</p>
            </div>

            <div class="col-s-12 col-12 abc">                
                <img class="image_class" src="images\about\Baithak.jpg" class="col-s-12 col-12" >
            </div>
            <!--
            

            <img src="images\about\Janfest.jpg" class="col-s-12 col-12">
            -->
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