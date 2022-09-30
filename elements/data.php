<?php

$dataFrench = [
    ["Expériences", "Compétences", "Formations"],
    ["Exp1", "Exp2", "Exp3"],
    ["Epéiste", "Dirigeant", "Engagé"],
    ["Héritier", "For2", "For3"],
    ["Je suis un leader efficace, qui a le pouvoir de motiver des personnes fidèles à atteindre et à dépasser leur potentiel. Je prêche par l'exemple et j'ai un flair naturel pour le leadership avec un palmarès éprouvé de victoires."]
];

$dataEnglish = [
    ["Experiences", "Skills", "Training"],
    ["Exp1", "Exp2", "Exp3"],
    ["Swordsman", "Leader", "Engaged"],
    ["Heir", "For2", "For3"],
    ["I am an effective leader, that has the power to motivate loyal people to reach and exceed their potential. I lead by example and I have a natural flair for leadership with a proven track record of winning."]
];

$dataValyrian = [
    ["Aldrīzoti", "Skorverdon", "Majaqsa"],
    ["Taoba", "Varys", "Eēza"],
    ["Athchomar", "Dothras", "Ifas"],
    ["Zheanae", "Norethaan", "Maisi"],
    ["Skoriot ñuhyz zaldrīzesse ilzi, nuhor līr gūrēnna. Sīkudi nopāzmi! Daoruni gīmī, Ionos Sōnaro. Skorī dēmalȳti tymptir tymis, ērinis iā morghūlis. Bantis zōbrie issa se ossȳngnoti lēdys."]
];

if (isset($_GET['language'])){
    if (!empty($_GET['language']  == "EN")){
        $data = $dataEnglish;

    }elseif (!empty($_GET['language'] == "VAL")){
        $data = $dataValyrian;

    }elseif (!empty($_GET['language']  == "FR")){
        $data = $dataFrench;
    }}else{
    $data = $dataFrench;
}