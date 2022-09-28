<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cv Jon Snow</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>

<body>
    <main>

        <script src="https://kit.fontawesome.com/67a2af0157.js" crossorigin="anonymous">

        </script>
        <div class="buttons">

            <i id="button-on" class="fa-solid fa-toggle-on"  onclick="darkmode()" ></i>


            <i id="button-off" class="fa-solid fa-toggle-off" onclick="lightmode()" ></i>
            <div class="drop-down-menu">

                <span><a href="#" class="lang" onclick="languageOn()">Select language</a></span>
               
                
            </div>
        </div>

        </div>
        <div id="lang-selection">
        <span> FR <br /> ENG <br /> VAL  <br /><a href="#" onclick="replierLanguage();" id="replierLanguage">X</a></span>
       
    </div>
        <header>
            <img src="img/JonSnow.jpg" alt="Profil" srcset="">


        </header>
        <div id="about">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>
        <article>
            <a href="#" onclick="voirsuite1();" id="voirsuite1">
                <h2>Expérience</h2>
            </a>
            <div id="suite1">
                <h2 class="article-title">Expérience</h2>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.<br />
                Lorem ipsum dolor sit amet consectetur adipisicing elit.<br />
                Lorem ipsum dolor sit amet consectetur adipisicing elit.<br />
                Lorem ipsum dolor sit amet consectetur adipisicing elit.<br />
                Lorem ipsum dolor sit amet consectetur adipisicing elit.<br /><br />
                <a href="#" onclick="replier1();" id="replier1"><span>X</span></a>

            </div>
        </article>
        <article>
            <a href="#" onclick="voirsuite2();" id="voirsuite2">
                <h2>Compétences</h2>
            </a>
            <div id="suite2">
                <h2>Compétences</h2>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.<br />
                Lorem ipsum dolor sit amet consectetur adipisicing elit.<br />
                Lorem ipsum dolor sit amet consectetur adipisicing elit.<br />
                Lorem ipsum dolor sit amet consectetur adipisicing elit.<br />
                Lorem ipsum dolor sit amet consectetur adipisicing elit.<br /><br />
                <a href="#" onclick="replier2();" id="replier2">X</a>
            </div>
        </article>
        <article>
            <a href="#" onclick="voirsuite3();" id="voirsuite3">
                <h2>Formation</h2>
            </a>
            <div id="suite3">
                <h2>Formation</h2>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.<br />
                Lorem ipsum dolor sit amet consectetur adipisicing elit.<br />
                Lorem ipsum dolor sit amet consectetur adipisicing elit.<br />
                Lorem ipsum dolor sit amet consectetur adipisicing elit.<br />
                Lorem ipsum dolor sit amet consectetur adipisicing elit.<br /><br />
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
    </main>

</body>

</html>