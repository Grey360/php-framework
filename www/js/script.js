console.log("Gailor's PHP Framework.\n" + new Date().getFullYear() + " All rights reserved.");

const links = document.getElementsByClassName("navigation")[0] ? document.getElementsByClassName("navigation")[0].children : null;
const uri = document.getElementById("uri") ? document.getElementById("uri") : null;

function setLinksEvents(links, uri) {
    if(links !== null && uri !== null){
        for(let i = 0; i < links.length; i++) {
            links[i].onmspointerover = event => {
                uri.innerHTML = links[i].children[0].href;
            }
        };
    }   
}