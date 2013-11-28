var dropSequence = false;
var branchSelected = false;

var htmldrop = $("#htmldrop");
var jsdrop = $("#jsdrop");
var phpdrop = $("#phpdrop");
var wpdrop = $("#wpdrop");
var clientdrop = $("#clientdrop");
var dropArray = [htmldrop, jsdrop, phpdrop, wpdrop, clientdrop];

$(document).ready(function() {
    
    function dropHas() {
        for (i=0;i<dropArray.length;i++)
        {
            if (dropArray[i].children("ul").children("li").length == 0)
            {
                dropArray[i].children("h2").toggleClass("off");
            }
            else
            {
                dropArray[i].find("a").addClass("notch");
            }
        }
    }
    
    function dropDown(drop) {
        if (dropSequence == false)
        {
            dropSequence = true;
            menu = drop.children("ul");
            displacement = (menu.children("li").length) * 26;
            
            if (menu.css("opacity") == "0")
            {
                drop.children("h2").toggleClass("toggle");
                drop.delay(75).animate({"margin-bottom": displacement + "px"}, 525, "easeOutBack", function() {
                    menu.css("position", "static");
                    drop.css("margin-bottom", "0px");
                    menu.animate({opacity: "1"}, 300, function() {
                        dropSequence = false;
                    });
                });
            }
            else
            {
                drop.children("h2").toggleClass("toggle");
                menu.animate({opacity: "0"}, 175, function() {
                    dropSequence = false;
                    menu.css("position", "absolute");
                    drop.css("margin-bottom", displacement + "px");
                    drop.animate({"margin-bottom": "0px"}, 360, "easeInOutCubic");
                });
            }
        }
    }
    
    $("#sidebar").find("a").click(function() {
        activeObj = $(this);
        objLocation = ((activeObj.position().top) + 205).toString();
        
        if (branchSelected == false)
        {
            activeObj.toggleClass("selected");
            branchSelected = true;
            branchObj = activeObj;
        }
        else
        {
            if (activeObj.hasClass("selected"))
            {
                activeObj.toggleClass("selected");
                delete branchObj;
                branchSelected = false;
            }
            else
            {
                branchObj.toggleClass("selected");
                activeObj.toggleClass("selected");
                branchObj = activeObj;
            }
        }
        
        $("main").append("<hr id='lineGen_01' />");
        $("#lineGen_01").css("top", objLocation + "px");
    });
    
    function pageRender(drop) {
        
    }
    
    htmldrop.click(function() {
        dropDown(htmldrop);
    });
    htmldrop.children("ul").click(function(e) {
        e.stopPropagation();
    });
    
    jsdrop.click(function() {
        dropDown(jsdrop);
    });
    jsdrop.children("ul").click(function(e) {
        e.stopPropagation();
    });
    
    phpdrop.click(function() {
        dropDown(phpdrop);
    });
    phpdrop.children("ul").click(function(e) {
        e.stopPropagation();
    });
    
    wpdrop.click(function() {
        dropDown(wpdrop);
    });
    wpdrop.children("ul").click(function(e) {
        e.stopPropagation();
    });

    clientdrop.click(function() {
        dropDown(clientdrop);
    });
    clientdrop.children("ul").click(function(e) {
        e.stopPropagation();
    });
    
    dropHas();
});