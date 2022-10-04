<?php
require_once 'elements/data.php';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cv Jon Snow</title>


    <link rel="stylesheet" media='screen and (max-width: 930px)' href="styleMobile.css" />
    <link rel="stylesheet" media='screen and (min-width: 931px)' href="styleDesktop.css" />
    <link rel="stylesheet" href="style.css" />

</head>

<body>
    <main>

        <!---------------------------Light & Dark mode section------------------------------------------------------------------->
        <script src="https://kit.fontawesome.com/67a2af0157.js" crossorigin="anonymous"></script>

        <div class="buttons">
            <div class="button">
                <i id="button-on" class="fa-solid fa-toggle-on" onclick="darkmode()"></i>
                <i id="button-off" class="fa-solid fa-toggle-off" onclick="lightmode()"></i>
            </div>

            <!---------------------------language section---------------------------------------------------------------------------->

            <div id="lang-selection">
                <form action="index.php" method="get">
                    <label for="language" class="font-language"><?= $data[6][0] ?></label>
                    <select name="language" id="language">
                        <option class="lang" value="FR">FR</option>
                        <option class="lang" value="EN">EN</option>
                        <option class="lang" value="VAL">VAL</option>
                        <input type="submit" id="submit-button" value="Change">
                    </select>
                </form>
            </div>
        </div>

        <!---------------------------SocialMedia buttons---------------------------------------------------------------------------->

        <div class="logoReseaux">

            <a href="https://twitter.com/LordSnow" target="_blank"><img src="/img/twitter-icon-25px.png" class="twitter" alt="logo lien twitter"></a>

            <a href="https://www.linkedin.com/in/jon-snow-b46979163/fr?trk=people-guest_people_search-card" target="_blank"><img src="/img/linkedin-icon-25px.png" class="linkedin" alt="logo lien linkedin"></a>
        </div>

        <!---------------------------header section---------------------------------------------------------------------------->

        <header>
            <img src="/img/JonSnow.jpg" alt="Profil" srcset="">
            <h1 id="fName">Jon</h1>
            <h1 id="lName">SNOW</h1>
            <h1 id="name">Jon SNOW</h1>
        </header>

        <!---------------------------about section------------------------------------------------------------------------------->

        <div id="about">
            <div class="logoGoT">
                <img src="/img/stark2.png" class="stark" alt="logo stark">
                <img src="/img/targaryen2.png" class="targaryen" alt="logo targaryen">
                <img src="/img/stark1.png" class="stark1" alt="logo stark">
                <img src="/img/targaryen1.png" class="targaryen1" alt="logo targaryen">
            </div>

            <div>
                <h2>King of the North</h2>
                <p><?= $data[4][0] ?></p>
            </div>
        </div>
        <!---------------------------Info section--------------------------------------------------------------------------->
        <section class="info">
            <!---------------------------Experience section--------------------------------------------------------------------------->
            <div class="collapsible block">
                <input type="checkbox" id="collapsible_head" />
                <label id="labelExp" for="collapsible_head" onclick="changeZindexExp()"><?= $data[0][0] ?></label>
                <div class="title-article">
                    <h2><?= $data[0][0] ?></h2>
                </div>
                <div id="collapsible_text" class="text">
                    <p><?php foreach ($data[1] as $value) {
                            echo $value . "<br>";
                        }
                        ?>
                    </p>
                </div>
            </div>
            <!---------------------------education section------------------------------------------------------------------->
            <div class="collapsibleEdu block">
                <input type="checkbox" id="collapsible_headEdu" />
                <label id="labelEdu" for="collapsible_headEdu" onclick="changeZindexEdu()"><?= $data[0][2] ?></label>
                <div class="title-article">
                    <h2><?= $data[0][2] ?></h2>
                </div>
                <div id="collapsible_textEdu" class="text">
                    <p><?php foreach ($data[3] as $value) {
                            echo $value . "<br>";
                        }
                        ?>
                    </p>
                </div>
            </div>

            <!---------------------------Skills section------------------------------------------------------------------------->
            <div class="collapsibleSkl block">
                <input type="checkbox" id="collapsible_headSkl" />
                <label id="labelSkl" for="collapsible_headSkl" onclick="changeZindexSkl()"><?= $data[0][1] ?></label>
                <div class="title-article">
                    <h2><?= $data[0][1] ?></h2>
                </div>
                <div id="collapsible_textSkl" class="text">
                    <p><?php foreach ($data[2] as $value) {

                            echo $value . "<br>";
                        }
                        ?>
                    </p>
                </div>
            </div>

            <!---------------------------contact section------------------------------------------------------------------------>
            <div class="contact block">
                <label id="labelCon">CONTACT</label>
                <div class="title-article">
                    <h2>Contact</h2>
                </div>
                <div class="contactDetails text">
                    <p><?php foreach ($data[5] as $value) {

                            echo $value . "<br>";
                        }
                        ?>
                    </p>
                </div>
            </div>
            <!---------------------------end of info section-------------------------------------------------------------------->
        </section>
    </main>

    <script src="/script.js"></script>
</body>

</html>