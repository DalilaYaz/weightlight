function start(e) {
    e.dataTransfer.effectAllowed = "move";
    e.dataTransfer.setData("text", e.target.getAttribute("id"));

}
function over(e) {
    e.currentTarget.className = "fas fa-cloud-upload-alt";
    return false;
}
function drop(e) {
    ob = e.dataTransfer.getData("text");
    e.currentTarget.appendChild(document.getElementById(ob));
    e.currentTarget.className = "";
    e.stopPropagation();
    return false;
}
function leave(e) {
    e.currentTarget.className = "fas fa-cloud-upload-alt";
}