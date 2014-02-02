$(document).ready(function(){
    
    var topL = $("#topL");
    var topM = $("#topM");
    var topR = $("#topR");
    var midL = $("#midL");
    var midM = $("#midM");
    var midR = $("#midR");
    var botL = $("#botL");
    var botM = $("#botM");
    var botR = $("#botR");
    
    var playCount = 0;
    var player = "X";
    var hasWon = false;
    
    function result()
    {
        if (hasWon == true)
        {
            alert("Player \"" + player + "\" is the winner");
            location.reload();
        }
        else if (playCount == 9)
        {
            alert("'Twas a tie");
            location.reload();
        }
    }
    
    function checkWin()
    {
        if (topL.text() == player && topM.text() == player && topR.text() == player)
        {
            hasWon = true;
        }
        else if (midL.text() == player && midM.text() == player && midR.text() == player)
        {
            hasWon = true;
        }
        else if (botL.text() == player && botM.text() == player && botR.text() == player)
        {
            hasWon = true;
        }
        else if (topL.text() == player && midL.text() == player && botL.text() == player)
        {
            hasWon = true;
        }
        else if (topM.text() == player && midM.text() == player && botM.text() == player)
        {
            hasWon = true;
        }
        else if (topR.text() == player && midR.text() == player && botR.text() == player)
        {
            hasWon = true;
        }
        else if (topL.text() == player && midM.text() == player && botR.text() == player)
        {
            hasWon = true;
        }
        else if (topR.text() == player && midM.text() == player && botL.text() == player)
        {
            hasWon = true;
        }
    }
    
    function tic(btn) {
        if (player == "X")
        {
            btn.append("X");
            playCount++;
            checkWin();
            result();
            player = "O";
        } 
        else 
        {
            btn.append("O")
            playCount++;
            checkWin();
            result();
            player = "X";
        }
    }
    
    topL.click(function() {
        if (topL.text() == "") {
            tic(topL);
        }
    })
    
    topM.click(function() {
        if (topM.text() == "") {
            tic(topM);
        }
    })
    
    topR.click(function() {
        if (topR.text() == "") {
            tic(topR);
        }
    })
    
    midL.click(function() {
        if (midL.text() == "") {
            tic(midL);
        }
    })
    
    midM.click(function() {
        if (midM.text() == "") {
            tic(midM);
        }
    })
    
    midR.click(function() {
        if (midR.text() == "") {
            tic(midR);
        }
    })
    
    botL.click(function() {
        if (botL.text() == "") {
            tic(botL);
        }
    })
    
    botM.click(function() {
        if (botM.text() == "") {
            tic(botM);
        }
    })
    
    botR.click(function() {
        if (botR.text() == "") {
            tic(botR);
        }
    })
    
});