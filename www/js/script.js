console.log("Gailor's PHP Framework.\n" + new Date().getFullYear() + " All rights reserved.");
const userAddLink = document.getElementById("userAddLink");
const userAddInput = document.getElementById("userAddInput");
userAddLink.onclick = event => {
    event.preventDefault();
    const postRequest = new XMLHttpRequest();
    const query = "/www/user/add?query=" + userAddInput.value;
    postRequest.open("POST", query, true);
    postRequest.send();
}

const links = document.getElementsByClassName("navigation")[0].children;
const uri = document.getElementById("uri");

for(let i = 0; i < links.length; i++) {
    links[i].onclick = event => {
        event.preventDefault();
        window.location = links[i].children[0].href;
        uri.innerHTML = links[i].children[0].href;
    }
};