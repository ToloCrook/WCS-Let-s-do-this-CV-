/* ------------------------------------------ Dark/Light mode -----------------------------------------*/
function darkmode() {
    document.getElementById('button-on').style.display = 'none';
    document.getElementById('button-off').style.display = 'block';
}

function lightmode() {
    document.getElementById('button-off').style.display = 'none';
    document.getElementById('button-on').style.display = 'block';
}

let buttons = document.querySelector('.button');
let body = document.querySelector('body');

body.className = localStorage.getItem('theme');

buttons.addEventListener('click', () => {
    body.classList.toggle('light-mode');
    localStorage.setItem("theme", body.className);
});


/*-------------------------------------- Open/close animation mobile ----------------------------------*/
const block = document.getElementsByClassName('block');

for (i = 0; i < block.length; i++) {
    block[i].addEventListener('click', function () {
        this.classList.toggle('active')
    })
}


/*-------------------------------------Andy--------------------------------------------------------------*/
function changeZindexExp() {
    if (document.getElementById('collapsible_head').checked) {
        document.getElementById('labelEdu').style.zIndex = 2;
        document.getElementById('collapsible_textEdu').style.zIndex = 1;
        document.getElementById('labelSkl').style.zIndex = 2;
        document.getElementById('collapsible_textSkl').style.zIndex = 1;
        document.getElementById('labelCon').style.zIndex = 2;
        document.getElementById('contactDetails').style.zIndex = 1;
    } else {
        document.getElementById('labelEdu').style.zIndex = -1;
        document.getElementById('collapsible_textEdu').style.zIndex = -1;
        document.getElementById('labelSkl').style.zIndex = -1;
        document.getElementById('collapsible_textSkl').style.zIndex = -1;
        document.getElementById('labelCon').style.zIndex = -1;
        document.getElementById('contactDetails').style.zIndex = -1;
    }
}

function changeZindexEdu() {
    if (document.getElementById('collapsible_headEdu').checked) {
        document.getElementById('labelEdu').style.left = "52%"
        document.getElementById('labelExp').style.zIndex = 2;
        document.getElementById('collapsible_text').style.zIndex = 1;
        document.getElementById('labelSkl').style.zIndex = 2;
        document.getElementById('collapsible_textSkl').style.zIndex = 1;
        document.getElementById('labelCon').style.zIndex = 2;
        document.getElementById('contactDetails').style.zIndex = 1;
    } else {
        document.getElementById('labelEdu').style.left = "0%"
        document.getElementById('labelExp').style.zIndex = -1;
        document.getElementById('collapsible_text').style.zIndex = -1;
        document.getElementById('labelSkl').style.zIndex = -1;
        document.getElementById('collapsible_textSkl').style.zIndex = -1;
        document.getElementById('labelCon').style.zIndex = -1;
        document.getElementById('contactDetails').style.zIndex = -1;
    }
}

function changeZindexSkl() {
    if (document.getElementById('collapsible_headSkl').checked) {
        document.getElementById('labelSkl').style.top = "60%"
        document.getElementById('labelExp').style.zIndex = 2;
        document.getElementById('collapsible_text').style.zIndex = 1;
        document.getElementById('labelEdu').style.zIndex = 2;
        document.getElementById('collapsible_textEdu').style.zIndex = 1;
        document.getElementById('labelCon').style.zIndex = 2;
        document.getElementById('contactDetails').style.zIndex = 1;
    } else {
        document.getElementById('labelSkl').style.top = "0%"
        document.getElementById('labelExp').style.zIndex = -1;
        document.getElementById('collapsible_text').style.zIndex = -1;
        document.getElementById('labelEdu').style.zIndex = -1;
        document.getElementById('collapsible_textEdu').style.zIndex = -1;
        document.getElementById('labelCon').style.zIndex = -1;
        document.getElementById('contactDetails').style.zIndex = -1;
    }
}