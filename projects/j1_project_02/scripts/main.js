var header = $("header");
var logo = $("header img");
var nav = $("nav");

var isAnimate = false;
var animateObject = $("#obj_animate");

var keypressObject = $("#obj_keypress");

var toggleObject = $("#obj_toggle");

$(document).keypress(function(e) {
    if(e.which == 100) 
    {
        keypressObject.toggleClass("keypress_toggle");
    }
});

function animate() {
    if (isAnimate == false){
        isAnimate = true;
        animateObject.animate({"left":"25px"}, 150).animate({"left":"-25px"}, 150).animate({"left":"25px"}, 150).animate({"left":"-5px"}, 200).animate({"left":"0px"}, 250, function(){
            isAnimate = false;
        });
    }
}

function toggle() {
    toggleObject.toggleClass("classToToggle");
}

animateObject.click(function() {
    animate();
});

toggleObject.click(function() {
    toggle();
});


$(window).scroll(function(){
    var scroll = $(window).scrollTop(); 
    
    if (scroll > 0)
    { 
        header.css("height", "90px");
        logo.css("margin-top", "0px");
        nav.css("margin-top", "18px");
    }
    else
    {
        header.css("height", "200px");
        logo.css("margin-top", "60px");
        nav.css("margin-top", "78px");
    }
});
