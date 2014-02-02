$(document).ready(function() {
    var leftColumn = $("#leftMid");
    var rightColumn = $("#rightMid");
    var midColumn = $("#midMid");
    
    var leftHeight = leftColumn.height();
    var rightHeight = rightColumn.height();
    var midHeight = midColumn.height();
    
    var inquiry = $("#inquireText");
    
    inquiry.focusin(function() {
        inquiryHeight(1);
    }); 
    
    inquiry.blur(function() {
        inquiryHeight(0);
    });
    
    
    function inquiryHeight(x) // 0 = blur, 1 = focus
    {
        if (x == 1)
        {
            if (inquiry.height() == 16)
            {
                inquiry.height(80);
            }
        }
        else if (x == 0)
        {
            var inqText = inquiry.val();
            if (inqText != "")
            {
                inquiry.height(80);
            }
            else
            {
                inquiry.height(16);
            }
        }
    }
    
    function contentHeight()
    {
        if (midHeight > leftHeight || midHeight > rightHeight)
        {
            leftColumn.height(midHeight);
            rightColumn.height(midHeight);
        }
        else if (leftHeight > midHeight || rightHeight > midHeight)
        {
            if (rightHeight > leftHeight)
            {
                midColumn.height(rightHeight);
                leftColumn.height(rightHeight);
            }
            else if (leftHeight > rightHeight)
            {
                midColumn.height(leftHeight);
                rightColumn.height(leftHeight);
            }
        }
    }
    
    contentHeight();
});