//D.O.M
window.onload = function() {

var elh1 = document.getElementById("titular");
var elh2 = document.querySelector("h2");
var imgLechuza = document.querySelector("#lechuza");
console.log(imgLechuza);
var copyright = document.querySelector("#copyright");
var icons = document.querySelectorAll(".icon");
var fbButton = document.querySelector(".fa-facebook");
var twButton = document.querySelector(".fa-twitter");
var ytbutton = document.querySelector(".fa-youtube");
var theForm = document.querySelector("form");
console.log(theForm);
imgLechuza.style.filter = "grayscale(100%)";

elh1.setAttribute("style", "display:none");
console.log(copyright);
elh1.setAttribute("icon", "color:red");
console.log(copyright.attributes);


for(var icon of icons){
icon.style.color="green";
}
var urlFb= fbButton.getAttribute("href");
var urlTw= twButton.getAttribute("href");
console.log(urlFb);
console.log(urlTw);

var urlYt= ytbutton.setAttribute("href","https://www.youtube.com/channel/UCKkPOtW8gQPgIUaxF4Og7PA");
console.log(ytbutton);

console.log(theForm.hasAttribute("action"));
var formUrl = theForm.getAttribute("url");
console.log(formUrl);
theForm.removeAttribute("url");
theForm.setAttribute("action",formUrl);
console.log(formUrl);


};
