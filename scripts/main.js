var dropSequence = false;

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
    
    htmldrop.click(function() {
        dropDown(htmldrop);
    });
    
    jsdrop.click(function() {
        dropDown(jsdrop);
    });
    
    phpdrop.click(function() {
        dropDown(phpdrop);
    });
    
    wpdrop.click(function() {
        dropDown(wpdrop);
    });

    clientdrop.click(function() {
        dropDown(clientdrop);
    });
    
    dropHas();
});