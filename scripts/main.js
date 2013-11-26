$(document).ready(function() {
    dropSequence = false;
    
    htmldrop = $("#htmldrop");
    jsdrop = $("#jsdrop");
    
    function dropDown(drop) {
        if (dropSequence == false)
        {
            dropSequence = true;
            menu = drop.children("ul");
            displacement = (menu.children("li").length) * 26;
            
            if (menu.css("opacity") == "0")
            {
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
                menu.animate({opacity: "0"}, 175, function() {
                    dropSequence = false;
                    menu.css("position", "absolute");
                    drop.css("margin-bottom", displacement + "px");
                    drop.animate({"margin-bottom": "0px"}, 360, "easeInOutCubic");
                });
            }
        }
    }
    
    htmldrop.click(function(){
        dropDown(htmldrop);
    });
    
    jsdrop.click(function(){
        dropDown(jsdrop);
    });
});