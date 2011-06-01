sec=1;
min=60*sec;
hr=60*min;
day=24*hr;

var days_div, hours_div, mins_div, secs_div;

var counter = 0;

function timer(){
    days_div = document.getElementById('days');
    hours_div = document.getElementById('hours');
    mins_div = document.getElementById('mins');
    secs_div = document.getElementById('secs');
    msecs_div = document.getElementById('msecs');
    if(days_div == null){
        return;
    }
	countdown();
}

var interval = 13;

function countdown(){
    counter+=interval;
	var d=new Date();
	var cur_ts=d.getTime();
	cur_ts=Math.floor(cur_ts/1000);
	if(cur_ts < target_ts){
	    
		diff=target_ts-cur_ts * 1;
		var days=diff/day;
		int_days=Math.floor(days);
        diff=diff%day;
		var hours=diff/hr;
		int_hrs=Math.floor(hours);
		diff=diff%hr;
		var mins=diff/min;
		int_min=Math.floor(mins);
		diff=diff%min;
		var secs=diff;
		
		var a = document.getElementById("_countdown_");
		days_div.innerHTML = int_days + '';
		hours_div.innerHTML = int_hrs + '';
		mins_div.innerHTML = int_min + '';
		secs_div.innerHTML = secs + '';
		msecs_div.innerHTML = (1000 - (counter % 1000)) + '';
		setTimeout(function(){
		    countdown()
		}, interval);
	}else{
		clearInterval();
	}
}