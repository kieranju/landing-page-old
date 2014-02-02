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
    
    function contentGeneration(clicked, degenerate, generate, mobile) { // ADDING LINKS MUST BE DONE HERE, AND IN THE HTML; MUST ADD CLICK EVENT AS WELL
        idButton = clicked.attr("id");
        page = $("#docView");
        
        if (degenerate == true)
        {
            page.empty();
        }
        
        if (generate == true)
        {
            if (idButton == "hc_l1p1")
            {
                if (mobile == true)
                {
                    window.location.href = "http://kutz.htpwebdesign.ca/projects/hc1_project_01/";
                }
                else
                {
                    page.append("<div id='image'></div>").append("<a href='#'>Visit the Project Page &rarr;</a>").append("<h1>Example Project</h1>").append("<p>January 1st, 2014</p>").append("<div class='clearfix'></div>");
                    $("#image").css("background-image", "");
                }
            }
            else if (idButton == "hc_l2p2")
            {
                if (mobile == true)
                {
                    window.location.href = "http://kutz.htpwebdesign.ca/projects/hc2_project_02/";
                }
                else
                {
                    page.append("<div id='image'></div>").append("<a href='#'>Visit the Project Page &rarr;</a>").append("<h1>Example Project</h1>").append("<p>January 1st, 2014</p>").append("<div class='clearfix'></div>");
                    $("#image").css("background-image", "url(../images/hc_l2p2.png)");
                }
            }
            else if (idButton == "hc_l3p1")
            {
                if (mobile == true)
                {
                    window.location.href = "http://kutz.htpwebdesign.ca/projects/hc3_project_01/";
                }
                else
                {
                    page.append("<div id='image'></div>").append("<a href='#'>Visit the Project Page &rarr;</a>").append("<h1>Example Project</h1>").append("<p>January 1st, 2014</p>").append("<div class='clearfix'></div>");
                    $("#image").css("background-image", "");
                }
            }
            else if (idButton == "hc_l4p1")
            {
                if (mobile == true)
                {
                    window.location.href = "http://kutz.htpwebdesign.ca/projects/hc4_project_01/";
                }
                else
                {
                    page.append("<div id='image'></div>").append("<a href='#'>Visit the Project Page &rarr;</a>").append("<h1>Example Project</h1>").append("<p>January 1st, 2014</p>").append("<div class='clearfix'></div>");
                    $("#image").css("background-image", "");
                }
            }
            else if (idButton == "js_l1p1")
            {
                if (mobile == true)
                {
                    window.location.href = "http://kutz.htpwebdesign.ca/projects/j1_project_01/";
                }
                else
                {
                    page.append("<div id='image'></div>").append("<a href='#'>Visit the Project Page &rarr;</a>").append("<h1>Example Project</h1>").append("<p>January 1st, 2014</p>").append("<div class='clearfix'></div>");
                    $("#image").css("background-image", "");
                }
            }
            else if (idButton == "js_l1p2")
            {
                if (mobile == true)
                {
                    window.location.href = "http://kutz.htpwebdesign.ca/projects/j1_project_02/";
                }
                else
                {
                    page.append("<div id='image'></div>").append("<a href='#'>Visit the Project Page &rarr;</a>").append("<h1>Example Project</h1>").append("<p>January 1st, 2014</p>").append("<div class='clearfix'></div>");
                    $("#image").css("background-image", "");
                }
            }
        }
    }
    
    $("#sidebar").find("a").click(function() {
        if (animSequence == false)
        {
            var activeObj = $(this);
            var objLocation = ((activeObj.position().top) + 205);
            
            if (!($(window).width() <= 550))
            {
                animSequence = true;
                if (branchSelected == false) // nothing is selected, button is pressed
                {
                    activeObj.toggleClass("selected");
                    branchSelected = true;
                    branchObj = activeObj;
                    pageRender(objLocation, true, false);
                    contentGeneration(activeObj, false, true, activeObj, false);
                }
                else
                {
                    if (activeObj.hasClass("selected")) // button is selected, same button gets pressed
                    {
                        activeObj.toggleClass("selected");
                        delete branchObj;
                        branchSelected = false;
                        pageRender(objLocation, false, true, activeObj);
                    }
                    else // button is selected, different button gets pressed
                    {
                        branchObj.toggleClass("selected");
                        activeObj.toggleClass("selected");
                        branchObj = activeObj;
                        pageRender(objLocation, false, false, activeObj);
                    }
                }
            }
            else
            {
                contentGeneration(activeObj, false, true, true);
            }
        }
    });
    
    function pageRender(objLocation, newLine, shouldReset, activeObj) {
        var docView = $("#docView");
    
        if (newLine == true)
        {
            $("main").append("<hr id='lineGen_01' class='lineGen' />");
            var lineGen_01 = $("#lineGen_01");
            lineGen_01.css("top", objLocation.toString() + "px");
            lineGen_01.delay(200).animate({"width": "75px", "opacity": "1"}, 125, "easeInOutQuart", function() {
                $("main").append("<div id='lineGen_02' class='lineGen'></div>");
                var lineGen_02 = $("#lineGen_02");
                lineGen_02.css({"top": (objLocation + 4).toString() + "px"});
                lineGen_02.animate({"width": "10px", "height": "10px", "opacity": "1"}, 125, "easeInOutBack", function() {
                    $("main").append("<div id='lineGen_03' class='lineGen'></div>");
                    var lineGen_03 = $("#lineGen_03");
                    lineGen_03.css({"height": (objLocation - 75).toString() + "px", "top": "80px"});
                    lineGen_03.animate({"opacity": "1"}, 125, "easeInOutQuart", function() {
                        $("main").append("<div id='lineGen_04' class='lineGen'></div>");
                        var lineGen_04 = $("#lineGen_04");
                        lineGen_04.animate({"width": "10px", "height": "10px", "opacity": "1"}, 125, "easeInOutBack", function() {
                            $("main").append("<div id='lineGen_05' class='lineGen'></div>");
                            var lineGen_05 = $("#lineGen_05");
                            lineGen_05.animate({"opacity": "1"}, 125, "easeInOutQuart", function() {
                                $("main").append("<div id='lineGen_06' class='lineGen'></div>");
                                var lineGen_06 = $("#lineGen_06");
                                lineGen_06.animate({"width": "10px", "height": "10px", "opacity": "1"}, 125, "easeInOutBack", function() {
                                    docView.animate({"opacity": "1"}, 225, "easeInOutCubic", function() {
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
            var lineGen_01 = $("#lineGen_01");
            var lineGen_02 = $("#lineGen_02");
            var lineGen_03 = $("#lineGen_03");
            var lineGen_04 = $("#lineGen_04");
            var lineGen_05 = $("#lineGen_05");
            var lineGen_06 = $("#lineGen_06");
            
            if (shouldReset == true)
            {
                docView.animate({"opacity": "0"}, 150, "easeInOutQuart", function() {
                    lineGen_06.animate({"opacity": "0"}, 50, "easeInBack", function() {
                        lineGen_06.css({"width": "5px", "height": "5px"});
                        lineGen_05.animate({"opacity": "0"}, 100, "easeInOutQuart", function() {
                            lineGen_04.animate({"opacity": "0"}, 50, "easeInBack", function() {
                                lineGen_04.css({"width": "5px", "height": "5px"});
                                lineGen_03.animate({"opacity": "0"}, 100, "easeInOutQuart", function() {
                                    lineGen_02.animate({"opacity": "0"}, 50, "easeInBack", function() {
                                        lineGen_02.css({"width": "5px", "height": "5px"});
                                        lineGen_01.animate({"width": "0px", "opacity": "0"}, 100, "easeInOutQuart", function() {
                                            $("main").remove(".lineGen");
                                            contentGeneration(activeObj, true, false, false);
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
                docView.animate({"opacity": "0"}, 150, "easeInOutQuart", function() {
                    lineGen_06.animate({"opacity": "0"}, 50, "easeInBack", function() {
                        lineGen_06.css({"width": "5px", "height": "5px"});
                        lineGen_05.animate({"opacity": "0"}, 100, "easeInOutQuart", function() {
                            lineGen_04.animate({"opacity": "0"}, 50, "easeInBack", function() {
                                lineGen_04.css({"width": "5px", "height": "5px"});
                                lineGen_03.animate({"opacity": "0"}, 100, "easeInOutQuart", function() {
                                    lineGen_02.animate({"opacity": "0"}, 50, "easeInBack", function() {
                                        lineGen_02.css({"width": "5px", "height": "5px"});
                                        lineGen_01.animate({"width": "0px", "opacity": "0"}, 100, "easeInOutQuart", function() {
                                            lineGen_01.css("top", objLocation.toString() + "px");
                                            contentGeneration(activeObj, true, true, false);
                                            
                                            lineGen_01.delay(200).animate({"width": "75px", "opacity": "1"}, 125, "easeInOutQuart", function() {
                                                lineGen_02.css({"top": (objLocation + 4).toString() + "px"});
                                                lineGen_02.animate({"width": "10px", "height": "10px", "opacity": "1"}, 125, "easeInOutBack", function() {
                                                    lineGen_03.css({"height": (objLocation - 75).toString() + "px", "top": "80px"});
                                                    lineGen_03.animate({"opacity": "1"}, 150, "easeInOutQuart", function() {
                                                        lineGen_04.animate({"width": "10px", "height": "10px", "opacity": "1"}, 125, "easeInOutBack", function() {
                                                            lineGen_05.animate({"opacity": "1"}, 150, "easeInOutQuart", function() {
                                                                lineGen_06.animate({"width": "10px", "height": "10px", "opacity": "1"}, 125, "easeInOutBack", function() {
                                                                    docView.animate({"opacity": "1"}, 225, "easeInOutCubic", function() {
                                                                        animSequence = false;
                                                                    });
                                                                });
                                                            });
                                                        });
                                                    });
                                                });
                                            });
                                            
                                        });
                                    });
                                });
                            });
                        });
                    });
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

    $("#sidebar").children("ul").children("ul").click(function(e) {
        e.stopPropagation();
    });
    
    dropHas();
});