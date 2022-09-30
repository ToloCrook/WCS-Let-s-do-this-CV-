//function voirsuite1() {
  //document.getElementById('voirsuite1').style.display = 'none';
    //document.getElementById('suite1').style.display = 'block';
//}
function voirsuite2() {
    document.getElementById('voirsuite2').style.display = 'none';
    document.getElementById('suite2').style.display = 'block'; z
}
function voirsuite3() {
    document.getElementById('voirsuite3').style.display = 'none';
    document.getElementById('suite3').style.display = 'block';
}
function voirsuite4() {
    document.getElementById('voirsuite4').style.display = 'none';
    document.getElementById('suite4').style.display = 'block';
}
//function replier1() {
    //document.getElementById('voirsuite1').style.display = 'block';
    //document.getElementById('suite1').style.display = 'none';
//}
function replier2() {
    document.getElementById('voirsuite2').style.display = 'block';
    document.getElementById('suite2').style.display = 'none';
}
function replier3() {
    document.getElementById('voirsuite3').style.display = 'block';
    document.getElementById('suite3').style.display = 'none';
}

function replier4()
{
    document.getElementById('voirsuite4').style.display='block';   
    document.getElementById('suite4').style.display='none';
}


function darkmode() {
    document.getElementById('button-on').style.display='none';   
    document.getElementById('button-off').style.display='block';
}

function lightmode() {
    document.getElementById('button-off').style.display='none';   
    document.getElementById('button-on').style.display='block';
   
}

function languageOn() {
   document.getElementById('lang-selection').style.display='none';
    document.getElementById('lang-selection').style.display='block';
}

function replierLanguage() {
    document.getElementById('lang-selection').style.display='block';
     document.getElementById('lang-selection').style.display='none';


 }

 let buttons = document.querySelector('.button');

 let body = document.querySelector('body');

 body.className = document.cookie;


 buttons.addEventListener('click', ()=> {
            body.classList.toggle('light-mode');
            document.cookie = body.className;
            console.log(document.cookie);
        });

let title1 = document.querySelector('.more1');
let text1 = document.querySelector('.text1');

title1.addEventListener('click', () => {
    text1.classList.toggle('visible');
})