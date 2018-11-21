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