
<?php
date_default_timezone_set('Asia/Manila');

$dateset = "";
// Set target date to 24 hours from now
$targetDate = strtotime("+0 day") * 1000; // Convert to milliseconds
?>
<form action='#' method='post'>
<div class="count-down">
    <div>
        <p id="days">00</p><br>
        <span>Days</span>
    </div>
    <div>
        <p id="hours">00</p><br>
        <span>Hours</span>
    </div>
    <div>
        <p id="minutes">00</p><br>
        <span>Minutes</span>
    </div>
    <div>
        <p id="seconds">00</p><br>
        <span>Seconds</span>
    </div>
</div><!--Count-down-->
<div class="setbtn">
<input type='text' name='time' minlength='' placeholder='' required>
<select name="dhms">
  <option value="day">Days</option>
  <option value="hour">Hours</option>
  <option value="minute">Minutes</option>
  <option value="second">Seconds</option>
</select>
<input type='submit' name='settime' value ='Set'>

</div>
<script type="text/javascript">
    <?php 
if (isset($_POST['settime'])) {
	$targetDate = strtotime("+{$_POST['time']} {$_POST['dhms']}") * 1000;
	//$_SESSION[$targetDate];
	} 

    echo "var countDownDate = $targetDate;"; ?>
    
    var x = setInterval(function() {
        var now = new Date().getTime();
        var distance = countDownDate - now;

        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        document.getElementById("days").innerHTML = days;
        document.getElementById("hours").innerHTML = hours;
        document.getElementById("minutes").innerHTML = minutes;
        document.getElementById("seconds").innerHTML = seconds;

        if (distance < 0) {
            clearInterval(x);
            document.getElementById("days").innerHTML = "00";
            document.getElementById("hours").innerHTML = "00";
            document.getElementById("minutes").innerHTML = "00";
            document.getElementById("seconds").innerHTML = "00";				
        }
    }, 1000);
</script>
<style type="text/css">
	.count-down{
		color: #333;
		margin-top: -3%;
		margin-left: 75%;
		text-align: center;
		display: flex;
	}
	
	.count-down div{
		flex-basis: 100px;
	}
	.count-down div p{
		background: #ffffff73;
			backdrop-filter: blur(15px);
		font-size: 60px;
		margin-bottom: -14px;
	}
	.setbtn{
		color: #333;
		margin-top: 1%;
		margin-left: 78%;
		text-align: center;
		display: flex;
	}
</style>