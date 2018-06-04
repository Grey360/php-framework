/*let url = "<?php echo URL; ?>";
const uri = document.getElementById("uri");
let currentURI = "";
uri.innerHTML = "<?php echo $_SERVER[\"REQUEST_URI\"] ?>";

function uriClick() {
    currentURI = uri.substr(uri.innerHTML.length - currentURI.length);
    uri.innerHTML = "<?php echo $_SERVER[\"REQUEST_URI\"] ?>";
}
const navigation = document.getElementsByClassName("navigation");
const navArray = navigation[0].children;
for(nav in navArray) {
    nav.onclick = (event) => {
        event.preventDefault();
        uriClick();
    };
}*/
console.log("Hello World!");