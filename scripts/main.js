var animSequence = false;
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
        if (animSequence == false)
        {
            animSequence = true;
            var menu = drop.children("ul");
            var displacement = (menu.children("li").length) * 26;
            
            if (menu.css("opacity") == "0")
            {
                drop.children("h2").toggleClass("toggle");
                drop.delay(75).animate({"margin-bottom": displacement + "px"}, 525, "easeOutBack", function() {
                    menu.css("position", "static");
                    drop.css("margin-bottom", "0px");
                    menu.animate({opacity: "1"}, 300, function() {
                        animSequence = false;
                    });
                });
            }
            else
            {
                drop.children("h2").toggleClass("toggle");
                menu.animate({opacity: "0"}, 175, function() {
                    animSequence = false;
                    menu.css("position", "absolute");
                    drop.css("margin-bottom", displacement + "px");
                    drop.animate({"margin-bottom": "0px"}, 360, "easeInOutCubic");
                });
            }
        }
    }
    
    $("#sidebar").find("a").click(function() {
        if (animSequence == false)
        {
            var activeObj = $(this);
            var objLocation = ((activeObj.position().top) + 205);
            animSequence = true;
            
            if (branchSelected == false) // Nothing is selected, button is pressed
            {
                activeObj.toggleClass("selected");
                branchSelected = true;
                branchObj = activeObj;
                pageRender(objLocation, true, false);
            }
            else
            {
                if (activeObj.hasClass("selected")) // Button is selected, same button gets pressed
                {
                    activeObj.toggleClass("selected");
                    delete branchObj;
                    branchSelected = false;
                    pageRender(objLocation, false, true);
                }
                else // Button is selected, different button gets pressed
                {
                    branchObj.toggleClass("selected");
                    activeObj.toggleClass("selected");
                    branchObj = activeObj;
                    pageRender(objLocation, false, false);
                }
            }
        }
    });
    
    function pageRender(objLocation, newLine, shouldReset) {
        
        if (newLine == true)
        {
            $("main").append("<hr id='lineGen_01' />");
            var lineGen_01 = $("#lineGen_01");
            lineGen_01.css("top", objLocation.toString() + "px");
            lineGen_01.delay(200).animate({"width": "75px", "opacity": "1"}, 150, "easeInOutQuart", function() {
                $("main").append("<div id='lineGen_02'></div>");
                var lineGen_02 = $("#lineGen_02");
                lineGen_02.css({"top": (objLocation + 4).toString() + "px"});
                lineGen_02.animate({"width": "9px", "height": "9px", "opacity": "1"}, 150, "easeInOutBack", function() {
                    $("main").append("<div id='lineGen_03'></div>");
                    var lineGen_03 = $("#lineGen_03");
                    lineGen_03.css({"height": (objLocation - 75).toString() + "px", "top": "80px"});
                    lineGen_03.animate({"opacity": "1"}, 150, "easeInOutQuart", function() {
                        $("main").append("<div id='lineGen_04'></div>");
                        var lineGen_04 = $("#lineGen_04");
                        lineGen_04.css({"top": "71px"});
                        lineGen_04.animate({"width": "9px", "height": "9px", "opacity": "1"}, 150, "easeInOutBack", function() {
                            $("main").append("<div id='lineGen_05'></div>");
                            var lineGen_05 = $("#lineGen_05");
                            lineGen_05.css("top", "75px");
                            lineGen_05.animate({"opacity": "1"}, 150, "easeInOutQuart", function() {
                                $("main").append("<div id='lineGen_06'></div>");
                                var lineGen_06 = $("#lineGen_06");
                                lineGen_06.css({"top": "71px"});
                                lineGen_06.animate({"width": "9px", "height": "9px", "opacity": "1"}, 150, "easeInOutBack", function() {
                                    $("main").append("<div id='lineGen_07'></div>");
                                    var lineGen_07 = $("#lineGen_07");
                                    lineGen_07.css({"top": "75px"});
                                    lineGen_07.animate({"height": "500px", "width": "600px", "opacity": "1"}, 250, "easeInOutCubic", function() {
                                        animSequence = false;
                                    });
                                });
                            });
                        });
                    });
                });
            });
        }
        else
        {
            if (shouldReset == true)
            {
                var lineGen_01 = $("#lineGen_01");
                lineGen_01.animate({"width": "0px", "opacity": "0.3"}, 150, "easeInOutQuart", function() {
                    animSequence = false;
                });
                $("main").remove(lineGen_01);
            }
            else
            {
                var lineGen_01 = $("#lineGen_01");
                lineGen_01.animate({"width": "0px", "opacity": "0.3"}, 150, "easeInOutQuart", function() {
                    lineGen_01.css("top", objLocation.toString() + "px")
                    lineGen_01.animate({"width": "75px", "opacity": "1"}, 300, "easeInOutQuart", function() {
                        animSequence = false;
                    });
                });
            }
        }
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