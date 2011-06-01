<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
	$sec=1;
	$min=60*$sec;
	$hr=60*$min;
	$day=24*$hr;
	// target date is June 1 2011, 11Hr, 0min, 0sec
	date_default_timezone_set("Asia/Calcutta");
	$target_ts=mktime(10,0,0,6,3,2011,-1);
	// returns the server time
	$cur_ts=mktime();
?>
<html>
<head>
    <title>Road to ST7 - Praveen Selvam's True Wanderer Campaign</title>
    <link media="screen, projection" type="text/css" href="styles/screen.css" rel="stylesheet">
    <link media="print" type="text/css" href="styles/print.css" rel="stylesheet">
    <link media="screen, projection" type="text/css" href="styles/plugins/fancy-type/screen.css" rel="stylesheet">
    <link media="screen, projection" type="text/css" href="styles/home.css" rel="stylesheet">
    <link rel="SHORTCUT ICON" href="http://praveenselvam.com/truewanderer/favicon.ico" />
    <script language="JavaScript">
        var target_ts= "<?php echo $target_ts ?>";
    </script>
    <script type="text/javascript" src="scripts/countdown.js"></script>
</head>
<body onload="timer();">
    <div class="container">
        <?php
            include 'header.php';
        ?>
        <?php
            include 'countdown.php';
        ?>
        <?php
            include 'rhs.php';
        ?>
    </div>
</body>
</html>
