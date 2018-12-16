
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


function refreshSponsorImages(){

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

  