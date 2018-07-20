/* Dates */
var dayOfWeek = new Date();
var daysOfWeek = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

/*DOM Collection*/
var imgs = document.getElementsByTagName("img");

/* Modal Image on Interest Page*/
var modal = document.getElementById("myModal");
var modalImg = document.getElementById("modalImage");
var captionText = document.getElementById("caption");

/* Dates */
document.getElementById("todayDate").innerHTML = daysOfWeek[dayOfWeek.getDay()] + ", " + months[dayOfWeek.getMonth()] + " " + dayOfWeek.getDate() + ", " + dayOfWeek.getFullYear();

/* Hover effect for div on landing page*/
function combineHover() {
    "use strict";
    document.getElementById("leftArticleOne").style.opacity = 0.2;
    document.getElementById("leftBlockTitle").style.opacity = 0.2;
}

function combineHoverLeave() {
    "use strict";
    document.getElementById("leftArticleOne").style.opacity = 1;
    document.getElementById("leftBlockTitle").style.opacity = 1;
}

/* Modal Image on Interest Page*/
function fullScreen(id) {
    "use strict";
    modal.style.display = "block";
    modalImg.src = "../Images/" + id + ".jpg";
}

function pleaseClose() {
    "use strict";
    modal.style.display = "none";
}
