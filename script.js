/*function voirsuite1() {
    document.getElementById('voirsuite1').style.display = 'none';
    document.getElementById('suite1').style.display = 'block';
}*/
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
function replier1() {
    document.getElementById('voirsuite1').style.display = 'block';
    document.getElementById('suite1').style.display = 'none';
}
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

 
 
        buttons.addEventListener('click', ()=> {
            body.classList.toggle('dark-mode');
        })

// ------------------ ANDY JS --------------------------------------------------------------------------------------------
var z=999;
$(function() {
	$('.info .expBlock').click(function(){
	   var $more=$(this).find('.info #suite1')
       $more.css('z-index',z).show();
       z++;
       
       var h=$more.height();     
       $(this).height(h);
	})
    
    $('.info #suite1').click(function(event){
        event.stopPropagation();
        $(this).hide();        
        $('.info .expBlock').height(100);        
    })
})