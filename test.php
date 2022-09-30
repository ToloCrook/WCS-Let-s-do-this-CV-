<?php
require 'elements/data.php';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cv Jon Snow</title>

    <link rel="stylesheet" media='screen and (max-width: 930px)' href="styleMobile.css"/>
    <link rel="stylesheet" media='screen and (min-width: 931px)' href="styleDesktop.css"/>
    <link rel="stylesheet"  href="style.css"/>
</head>

<body>


    <main>

  <script src="https://kit.fontawesome.com/67a2af0157.js" crossorigin="anonymous">

        </script>

        <div class="buttons">
        <div class="button">

            <i id="button-on" class="fa-solid fa-toggle-on" onclick="darkmode()"></i>
            <i id="button-off" class="fa-solid fa-toggle-off" onclick="lightmode()"></i>

</div>


            <div class="drop-down-menu">

                <span><a href="#" class="lang" onclick="languageOn()" >Select language</a></span>
               
            </div>
        </div>

        <div id="lang-selection">
            <span >
                <a href='index.php?data=FR' class="lang">FR</a>
                <a href='index.php?data=EN' class="lang">EN</a>
                <a href='index.php?data=VAL' class="lang">VAL</a>
                <a href="#" onclick="replierLanguage();" id="replierLanguage" class="lang">X</a>
            </span>
       
    </div>

        <header>
            <img src="/img/JonSnow.jpg" alt="Profil" srcset="">
            <h1 id="fName">jon</h1>
            <h1 id="lName">SNOW</h1>
                <div class="logoReseaux">
                <a href="https://twitter.com/LordSnow" target="_blank"><img src="/img/twitter-logo.png" class ="twitter" alt="logo lien twitter"></a>
                <a href="https://uk.linkedin.com/in/jon-snow-3b1245192/fr?trk=people-guest_people_search-card" target="_blank"><img src="/img/linkedin-logo.png" class="linkedin" alt="logo lien linkedin"></a>
                </div>
        </header>

        <div id="about">
            <h2>Team leader</h2>
            <p><?= $data[4][0] ?></p>
        </div>

        <section class="info">


      
        <div class ="wrapperExp">
        <article class="collapsibleExp">
            <input type="checkbox" id="collapisbleExpHead">
            <label for="collapisbleExpHead"><?= $data[0][0] ?></label>
            <div id="collapsibleTextExp">
                <h2><?= $data[0][0] ?></h2>
                <?php foreach ($data[1] as $value) {
                    echo $value . "<br>";
                }
                ?>
                <br>
            </div>
        </article>
        </div>




        <article>
            <a href="#" onclick="voirsuite2();" id="voirsuite2">


                <h2><?= $data[0][1] ?></h2>
            </a>
            <div id="suite2">
                <h2><?= $data[0][1] ?></h2>
                <?php foreach ($data[2] as $value) {
                    echo $value . "<br>";
                }
                ?><br />

                <a href="#" onclick="replier2();" id="replier2">X</a>
            </div>
        </article>
        <article>
            <a href="#" onclick="voirsuite3();" id="voirsuite3">

                <h2><?= $data[0][2] ?></h2>
            </a>
            <div id="suite3">
                <h2><?= $data[0][2] ?></h2>
                <?php foreach ($data[3] as $value) {
                    echo $value . "<br>";
                }
                ?><br />


                <a href="#" onclick="replier3();" id="replier3">X</a>
            </div>
        </article>
        <article>

            <a href="#" onclick="voirsuite4();" id="voirsuite4">
                <h2>Contact</h2>
            </a>
            <div id="suite4">
                <h2>Contact</h2>
                Mobile : 01.23.45.67.89<br />
                Linkekin : jon.snow@linkedin.fr<br />
                <a href="mailto:jon.snow@gameofthrones">@ jon.snow@gameofthrones</a><br /><br />
                <a href="#" onclick="replier4();" id="replier4">X</a>
            </div>
        </article>
        </section>

    </main>

    <script src="/script.js"></script>

</body>

</html>