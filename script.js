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