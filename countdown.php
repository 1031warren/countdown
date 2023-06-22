<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Countdown</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="col">
            <div id="counter" class="countdown"></div>
           <div>
          <div>
        <div>

    <?php
        $dateTime = strtotime('July 4, 2023 12:00:00');
        $getDateTime = date("F d, Y H:i:s", $dateTime);
    ?>
    
    <script>
        var countDownTimer = new Date("<?php echo "$getDateTime"; ?>").getTime();
        // Update the count down every  second
        
        var interval = setInterval(function(){
            var current = new Date().getTime();

            console.log(current);


            // Find the difference between current and the count down date
            var diff = countDownTimer - current;
            // Countdown Time calculation for days, hours, minutes and seconds
            var days = Math.floor(diff / (1000 * 60 * 60 * 24));
            var hours = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((diff % (1000 * 60)) / 1000);

            document.getElementById("counter").innerHTML = days + " Days : " + hours + " hours " +
            minutes + " minutes " + seconds + " seconds ";
            // Display Expired, if the count down is over
            if (diff < 0) {
                clearInterval(interval);
                document.getElementById("counter").innerHTML = "You missed the takeoff.";
            }
            
        }, 1000); 
</script>

</body>
</html>