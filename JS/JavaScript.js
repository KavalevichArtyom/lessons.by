﻿/* window.onload=function(){
alert("Размер элемента:" + this.offsetWidth +"x"+ this.offsetHeight)
}  */

function block_and_href(check,href,number_test){

	window.location= href+"?test="+number_test;
	
 	var elems=document.getElementsByClassName(check);
    for(var i=0; i<elems.length; i++)elems[i].style.display='block'; 
}

function block(check){

 	var elems=document.getElementsByClassName(check);
    for(var i=0; i<elems.length; i++)elems[i].style.display='block'; 
}

function none(check){
 	var elems=document.getElementsByClassName(check);
    for(var i=0; i<elems.length; i++)elems[i].style.display='none'; 
}

function combo(block,none){
 	var elems=document.getElementsByClassName(block);
    for(var i=0; i<elems.length; i++)elems[i].style.display='block'; 

 	var elems=document.getElementsByClassName(none);
    for(var i=0; i<elems.length; i++)elems[i].style.display='none'; 
}



function About_the_site_page()
{
window.location= "index.php";
}

function href_query_next(href)
{
window.location= href+"?autorize=1";
}

function href_query_next_registrition(href)
{
	window.location= href+"?registrition=1";
	
/*  	var elems=document.getElementsByClassName('block_registation');
    for(var i=0; i<elems.length; i++)elems[i].style.display='block'; 

 	var elems=document.getElementsByClassName('block_autorize');
    for(var i=0; i<elems.length; i++)elems[i].style.display='none';  */
}

function Tema_page()
{
window.location= "Tema_page.php";
}

function Presentation_page()
{
window.location= "Presentation_page.php";
}

function Control_know_page()
{
window.location= "Control_know_page.php";
}

var t;
function up() {	
  var top = Math.max(document.body.scrollTop,document.documentElement.scrollTop);
  if(top > 0) {
    window.scrollBy(0,-100);
    t = setTimeout('up()',0.1);
  } else clearTimeout(t);
  return false;
}

function check()
{
    var inp = document.getElementsByName('r');
    for (var i = 0; i < inp.length; i++) {
        if (inp[i].type == "radio" && inp[i].checked) {
            alert("selected: " + inp[i].value);
        }
    }
}
