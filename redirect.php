<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
    <title>Road to ST7 - Praveen Selvam's True Wanderer Campaign</title>
    <link media="screen, projection" type="text/css" href="styles/screen.css" rel="stylesheet">
    <link media="print" type="text/css" href="styles/print.css" rel="stylesheet">
    <link media="screen, projection" type="text/css" href="styles/plugins/fancy-type/screen.css" rel="stylesheet">
    <link media="screen, projection" type="text/css" href="styles/home.css" rel="stylesheet">
    <link rel="SHORTCUT ICON" href="http://praveenselvam.com/truewanderer/favicon.ico" />
    <script>

        <?php
            $r_url = substr($_SERVER["QUERY_STRING"], 4, strlen($_SERVER["QUERY_STRING"]))
        ?>
        var redirectUrl = "<?php echo $r_url ?>";
        curvalue=25;
        
    	var timer=function(){
    		if(curvalue > 0){
    			document.getElementById("timeleft").style.visibility='visible';
    			document.getElementById("timeleft").innerHTML = 'You will be redirected to the blog in ' + curvalue-- + ' seconds.';
    			setTimeout(function(){
        		    timer();
        		}, 1000);
    		}else{
    		    document.getElementById("timeleft").innerHTML = "Redirecting..."
    			window.location = redirectUrl;
    		}
    	}
    	
    	
    	
    	function setCookie(c_name,value,exdays)
        {
            var exdate=new Date();
            exdate.setDate(exdate.getDate() + exdays);
            var c_value=escape(value) + ((exdays==null) ? "" : "; expires="+exdate.toUTCString());
            document.cookie=c_name + "=" + c_value;
        }
        
        function getCookie(c_name)
        {
            var i,x,y,ARRcookies=document.cookie.split(";");
            for (i=0;i<ARRcookies.length;i++)
            {
                x=ARRcookies[i].substr(0,ARRcookies[i].indexOf("="));
                y=ARRcookies[i].substr(ARRcookies[i].indexOf("=")+1);
                x=x.replace(/^\s+|\s+$/g,"");
                if (x==c_name)
                {
                    return unescape(y);
                }
            }
        }
        
        (function checkCookie()
        {
            var alreadyVisited=getCookie("already_visited");
            if (alreadyVisited != null && alreadyVisited == "true")
            {
                window.location = redirectUrl;
            }
            else
            {
                setCookie("already_visited", "true",1);
            }
        })();

    </script>
</head>
<body onload="timer();">
    <div class="container">
        <?php
            include 'header.php';
        ?>
        <?php
            include 'rating_tips.php';
        ?>
        <div class="span-24 last center">
            <img src="images/copyleft.jpg" />
            <a href="http://en.wikipedia.org/wiki/Copyleft">Copyleft</a>
        </div>
    </div>
</body>
</html>