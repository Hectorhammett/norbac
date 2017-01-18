var arrayOfBg = [
    {
        img : "img/bg/bg1.jpg"
    },
    {
        img : "img/bg/bg2.jpg",
        position: "0 -477px"
    },
    {
        img : "img/bg/bg3.jpg"
    },
    {
        img : "img/bg/bg4.jpg"
    }
]

$(document).ready(function(){
    var background = arrayOfBg[Math.floor(Math.random() * 4)];
    var backgroundDiv = $("#background-image")
    backgroundDiv.css("background-image","linear-gradient(rgba(17, 15, 53, 0.5), rgba(17, 15, 53, 0.7)),url(" + background.img + ")");
    if(background.position !== undefined){
        backgroundDiv.css("background-position","0 0," + background.position);
    }
    backgroundDiv.addClass("background-visible");
})