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
const userAddLink = document.getElementById("userAddLink");
const userAddInput = document.getElementById("userAddInput");
userAddLink.onclick = event => {
    event.preventDefault();
    const postRequest = new XMLHttpRequest();
    const query = "/www/user/add?query=" + userAddInput.value;
    postRequest.open("POST", query, true);
    postRequest.send();
}