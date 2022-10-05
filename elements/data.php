<?php

$dataFrench = [
    ["Expériences", "Compétences", "Formations", "Contact"],
    ["- Roi et Gardien du Nord", "- Leader de la Bataille des Bâtards", "- Combattant de marcheurs blancs à dos de Dragon", "- Lord Commandant de la Garde de Nuit", "- Gardien et combattant de la Garde de Nuit", "- Bâtard de Winterfell"],
    ["- Epéiste reconnu", "- Dirigeant, leadership, exemplarité", "- Engagé, résolu", "- Eloquence et négocations", "- Monter à cheval", "- Monter à dragon", "- Immortel"],
    ["- Apprentissage du maniement de l'épée et de l'arc, en tant que Gardien du Mur et Bâtard de Winterfell", "- Rudiments de la Politique et des négociations", "- Eloquence et argumentation", "- Chevauche de chevaux et de dragons", "- Apprivoisement des bêtes", "- Education de loups"],
    ["Je suis un leader efficace, qui a le pouvoir de motiver des personnes fidèles à atteindre et à dépasser leur potentiel. Je prêche par l'exemple et j'ai un flair naturel pour le leadership avec un palmarès éprouvé de victoires."],
    ["- jon.snow@knowsnothing.com", "- 01.05.02.05.02", "- Contact me"],
    ["Choisis une langue"],
    ["Lord Commandant de la Garde de Nuit"],
];

$dataEnglish = [
    ["Experiences", "Skills", "Training", "Contact"],
    ["- King and Warden of the North", "- Leader of the Battle of the Bastards", "- Fighter of the White Walkers on the back of a dragon", "- Lord Commander of the Night's Watch", "- Guardian and knight of the Night's Watch", "- Bastard of Winterfell"],
    ["- Reputed swordsman", "- Leader, leadership, exemplary nature", "- Engaged, determined", "- Eloquent and negociations", "- Horse Riding", "- Dragon riding", "- Immortal"],
    ["- Training in sword and bow manipulation, as knight of the Night's Watch et Bastard of Winterfell", "- Politics and negociations rudiments ", "- Eloquence and argumentations", "- Horse and dragon riding", "- Taming a beast", "- Wolf education"],
    ["I am an effective leader, that has the power to motivate loyal people to reach and exceed their potential. I lead by example and I have a natural flair for leadership with a proven track record of winning."],
    ["- jon.snow@knowsnothing.com", "- 01.05.02.05.02", "- Contact me"],
    ["Select a language"],
    ["Lord Commander of the Night's Watch"],
];

$dataValyrian = [
    ["Aldrīzoti", "Skorverdon", "Majaqsa", "Rytsas"],
    ["Taoba", "Varys", "Eēza"],
    ["- Nyke ȳdra daor gīmigon skoros naejot", "- Bardugon yn nyke", "- Nyke sepār jorrāelagon", "- Iksis jāre naejot shifang skoros", "- Nyke jorrāelagon tolī ra naejot dīnagon"],
    ["- Bisa ȳdrassis va Ēlīedar lantpyro bȳre ampā sētīles", "- Se ēza issare mazverdāre mirre pār", "- Mirre udra māzigon hen Valyrio Eglie", "- Valyriā Mīrīnot tembyrōva va", "- Lo ao jorrāelagon iā qantre", "- Idrir iā brōzi arliñagon"],
    ["Skoriot ñuhyz zaldrīzesse ilzi, nuhor līr gūrēnna. Sīkudi nopāzmi! Daoruni gīmī, Ionos Sōnaro. Skorī dēmalȳti tymptir tymis, ērinis iā morghūlis. Bantis zōbrie issa se ossȳngnoti lēdys."],
    ["- jon.snow@knowsnothing.com", "- 01.05.02.05.02", "- ȳdra daor pirtir"],
    ["Iderēbagon nykeā udrir"],
    ["Āeksio jentys hen Urnēbagon Bantior"],

];

if (isset($_GET['language'])) {
    if (!empty($_GET['language']  == "EN")) {
        $data = $dataEnglish;
    } elseif (!empty($_GET['language'] == "VAL")) {
        $data = $dataValyrian;
    } elseif (!empty($_GET['language']  == "FR")) {
        $data = $dataFrench;
    }
} else {
    $data = $dataFrench;
};
