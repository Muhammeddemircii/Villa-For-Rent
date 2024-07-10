function w3_open() {
  document.getElementById("main").style.marginLeft = "25%";
  document.getElementById("mySidebar").style.width = "25%";
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("openNav").style.display = 'none';
}
function w3_close() {
  document.getElementById("main").style.marginLeft = "0%";
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("openNav").style.display = "inline-block";
}
$("img").on("click", function(){
    $(this).animate({opacity: 0.5}).delay(100).animate({opacity:1.0});
})
window.sr=new ScrollReveal()
sr.reveal(".intro > h4", {
    origin:"top",
    delay:200,
    distance:"225px"
})
sr.reveal(".navbar", {
    delay:500
});

sr.reveal(".flex", {
    delay:700,
    rotate:{x:250, y:250, z:20}
})
sr.reveal("h5", {
    delay:500,
    origin:"top",
    distance:"125px"
})
