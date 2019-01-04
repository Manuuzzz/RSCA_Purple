function start() {

tweenTitle();
twitterStyling();

}

function tweenTitle() {
    
    TweenMax.to("#tweenColor", 1, {"--tweenColor1":"#39367d",  yoyo:true, repeat:50});

}

function twitterStyling() {

   
    var widgetCSS = "" +
".timeline-Tweet-text{color: #232323;font-size: 1.3em !important; padding: 3px; }"+
".SandboxRoot.env-bp-330 .timeline-Tweet-text{line-height: 22px;}"
var w = document.getElementById("twitter-widget-0").contentDocument;

var s = document.createElement("style");
s.innerHTML = widgetCSS;
s.type = "text/css";
w.head.appendChild(s);


}

sponsorImagesArray = new Array();
sponsorImagesArray[0] = new Image();
sponsorImagesArray[1] = new Image();
let x = 0;

function toggleMenu() {

    let menu = document.getElementById("flex-menu-sm-listed");

if (menu.style.display === "flex") {

    menu.style.display = "none"; }

    else menu.style.display = "flex";

}

function hideMenu() {
    let menu = document.getElementById("flex-menu-sm-listed");
    menu.style.display = "none";

 

}


/*function refreshSponsorImages(){

templateUrl = object_name.templateUrl;
sponsorImagesArray[0].src= templateUrl + "/images/bjjbelt.jpg"
sponsorImagesArray[1].src= templateUrl + "/images/bjjbelt2.jpg"
element = document.getElementById("sponsorImage");

setInterval(changeImage, 5000);
    
 }



function changeImage() {


element.src = sponsorImagesArray[x].src; 

x = x + 1;
   
if (x > sponsorImagesArray.length-1)   {
x = 0;
}

}

  */