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
    <link rel="stylesheet" href="css/janfest.css">
    <link rel="icon" href="images/img_logo_wo_text1.png">
    <title>Indian Music Group</title>
</head>
<body>
    <div class="master_class">
        <?php include('topnav.php'); ?>

        <div class="patterns">
            <img class="left_image" src="images/JanFest/left.png" alt="Left Pattern">
            <img class="right_image" src="images/JanFest/right.png" alt="Right Pattern">
        </div>
        <div class="janfest_main_class">
            <div class="heading_class"><h1>Janfest</h1></div>
            <div class="poem_class">
                <h3>The morning wakes up</h3>
                <h3>with faint traces of nostalgia</h3>
                <h3>for the strains of last evening,</h3>
                <h3>when the sitar</h3>
                <h3>and the tabla</h3>
                <h3>created magic – serene, yet joyous.</h3>
                <h3>Amidst gothic figures keeping watch,</h3>
                <h3>and the flutter of a dozen parrots,</h3>
                <h3>to the rhythm of an early raag,</h3>
                <h3>the morning rubs its eyes</h3>
                <h3>and shrugs in remembrance</h3>
                <h3> of the music that echoed only yesterday. </h3>
            </div>
            <br>
            <div class="janfest_lineup_link">
            <iframe class="janfest_lineup_link_video" src="https://www.youtube.com/embed/xQNbjs41R5M" allowfullscreen>
            </iframe>
            </div>
            <div class="janfest_para1"><p><span class="janfest_text">Janfest </span>  has always been the pride of the Indian Music Group, which started off as a small concert spanning 3 days grew into a massive music festival with 3 sessions across 2 days attended by thousands of music lovers. Janfest has had the honor and the humble privilege of hosting some of the biggest names in the Classical Music industry.</p></div>
            <div class="janfest_image">
                <img src="images/JanFest/quad_janfest.png" alt="Quadrangle">
            </div>
            <div class="janfest_para2">
                <p>This grand concert is held on the 25th and 26th of January of every year and has 3 sessions - an evening session which slowly eases us into the world of Classical Music, a morning concert on the 26th which explores the morning Raagas as the sun rises over the 150 year old Xavier's College Quadrangle, spreading warmth amidst the chilly winter morning followed by a gripping finale on the night of the 26th which leaves us with goosebumps craving for more.</p>
                <p>As the 'waah waah's and the 'kya baat hai's reverberate through the Quadrangle decked with sarees, and kurtas, one finds the audience following the musical beats with tapping feet and rhythmic wavers of their hand. The strings of the Santoor resonate, narrating a story unlike any other; vocalists and instrumentalists exploring the nuances of their music giving the audience a chance to witness magic unfold at the hands of great Ustads and Pandits.</p>
                <p>Being a student-organised music festival, Janfest ushers in a contemporary perspective to the otherwise Classical approach taken towards such an event. In recent times, we have witnessed a rise in the interest of the youth towards Classical Music and the Indian Music Group is constantly striving to induce the love for music and other art forms amongst teenagers and young adults.</p>
                <p>People who attend Janfest are often heard saying that it was a mesmerizing performance, that they have never experienced such love and affection for music elsewhere, that it was a once in a lifetime kind of experience, to which we humbly promise - it is all of that, and much more.</p>
            </div>
            <div class="janfest_quote">
                <h2>COME, BE PART OF SOMETHING MAGICAL</h2>
                <h2>COME, BECOME A PART OF THE <span class="janfest_text">Janfest</span>&nbsp FAMILY.</h2>
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