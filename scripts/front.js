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


function tester(){

let templateUrl = object_name.templateUrl;

let sponsorImagesArray = new Array();
sponsorImagesArray[0] = new Image();

sponsorImagesArray[0].src= templateUrl + "/images/bjjbelt.jpg"

let element = document.getElementById("sponsorImage");


element.src = sponsorImagesArray[0].src;

}