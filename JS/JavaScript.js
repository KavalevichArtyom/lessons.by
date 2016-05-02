/* window.onload=function(){
alert("Размер элемента:" + this.offsetWidth +"x"+ this.offsetHeight)
}  */

function About_the_site_page()
{
window.location= "index.php";
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



