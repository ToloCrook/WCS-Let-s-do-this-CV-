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

<body class="body">


    <main>

  <script src="https://kit.fontawesome.com/67a2af0157.js" crossorigin="anonymous">

        </script>


                <div class="buttons">
                            <div class="button">
                            <i id="button-on" class="fa-solid fa-toggle-on" onclick="darkmode()"></i>


                <i id="button-off" class="fa-solid fa-toggle-off" onclick="lightmode()"></i>



            
            </div>


         

            <div id="lang-selection">
                <form action="index.php" method ="get">
                    <label for="language" class="font-language"><?= $data[6][0]?></label>
                    <select name="language" id="language" >
                        <option class="lang" value="FR">FR</option>
                        <option class="lang" value="EN">EN</option>
                        <option class="lang" value="VAL">VAL</option>
                        <input type="submit" id="submit-button" value="Change">
                    </select>
                </form>

            </div>


        </div>
        <div class="logoReseaux">
            
            <a href="https://twitter.com/LordSnow" target="_blank"><img src="/img/twitter-icon-25px.png" class="twitter" alt="logo lien twitter"></a>

            <a href="https://uk.linkedin.com/in/jon-snow-3b1245192/fr?trk=people-guest_people_search-card" target="_blank"><img src="/img/linkedin-icon-25px.png" class="linkedin" alt="logo lien linkedin"></a>
        </div>
      

        <header>
            <img src="/img/JonSnow.jpg" alt="Profil" srcset="">
            <h1 id="fName">jon</h1>
            <h1 id="lName">SNOW</h1>
                <div class="logoGoT">
                <img src="/img/stark2.png" class ="stark" alt="logo stark">
                <img src="/img/targaryen2.png" class="targaryen" alt="logo targaryen">
                <img src="/img/stark1.png" class ="stark1" alt="logo stark">
                <img src="/img/targaryen1.png" class="targaryen1" alt="logo targaryen">
                
                
                </div>
        </header>
        <div id="about">
            <h2>Team leader</h2>
            <p><?= $data[4][0] ?></p>
        </div>


        <section id="info">



        <article>
                <a href="#article1">
                    <h2 class="more1">
                        <?= $data[0][0] ?>
                    </h2>
                </a>

                <div class="text1">
                    <?php foreach ($data[1] as $value) {
                        echo $value . "<br>";
                    }
                    ?>
                    <br>
                </div>
            </article>
        <article>
            
        <a href="#article2">
                    <h2 class="more2">
                        <?= $data[0][1] ?>
                    </h2>
                </a>
              

                <div class="text2">
                    <?php foreach ($data[2] as $value) {
                        echo $value . "<br>";
                    }
                    ?>
                    <br>
                </div>
        </article>
            </div>
                </div>
        <article>
        <a href="#article3">
                    <h2 class="more3">
                        <?= $data[0][2] ?>
                    </h2>
                </a>

                <div class="text3">
                    <?php foreach ($data[3] as $value) {
                        echo $value . "<br>";
                    }
                    ?>
                    <br>
                </div>
        </article>
        <article>

        <a href="#article4">
                    <h2 class="more4">
                        <?= $data[0][3] ?>
                    </h2>
                </a>

                <div class="text4">
                    <?php foreach ($data[5] as $value) {
                        echo $value . "<br>";
                    }
                    ?>
                    <br>
                </div>
        </article>

        </section>

    </main>

    <script src="/script.js"></script>

</body>

</html>