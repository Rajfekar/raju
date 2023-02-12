import "./bootstrap";
import Alpine from "alpinejs";
window.Alpine = Alpine;
Alpine.start();
var fb = document.getElementById("fb");
var insta = document.getElementById("insta");
var tw = document.getElementById("tw");
var wp = document.getElementById("wp");
fb.addEventListener("mouseenter", () => fb.classList.add("fa-shake"));
fb.addEventListener("mouseleave", () => fb.classList.remove("fa-shake"));
tw.addEventListener("mouseenter", () => tw.classList.add("fa-bounce"));
tw.addEventListener("mouseleave", () => tw.classList.remove("fa-bounce"));
insta.addEventListener("mouseenter", () => insta.classList.add("fa-spin"));
insta.addEventListener("mouseleave", () => insta.classList.remove("fa-spin"));
wp.addEventListener("mouseenter", () => wp.classList.add("fa-shake"));
wp.addEventListener("mouseleave", () => wp.classList.remove("fa-shake"));

// mobile device menu list toggle
var Menu = () => {
    // var aboutus = document.getElementById("aboutus");
    // var contactus = document.getElementById("contactus");
    // aboutus.style.display = "block";
    // contactus.style.display = "block";
    var aboutus = document.getElementById("aboutus");
    var contactus = document.getElementById("contactus");
    var a = document.getElementById("menu");
    var flag = a.className == "fa-solid fa-list";
    flag ? T() : F();
};

var T = () => {
    var list = document.getElementById("menulist");
    var a = document.getElementById("menu");
    a.classList.remove("fa-list");
    a.classList.add("fa-xmark");
    list.classList.add("top-[80px]");
    list.classList.add("opacity-100");
};

var F = () => {
    var list = document.getElementById("menulist");
    var a = document.getElementById("menu");
    a.classList.remove("fa-xmark");
    a.classList.add("fa-list");
    list.classList.remove("tip-[80px]");
    list.classList.remove("opacity-100");
};
