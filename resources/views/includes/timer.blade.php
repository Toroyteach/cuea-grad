<div class="clock" id="clock1">
    <div id="countdown">
        <ul>
            <li><span id="days"></span>days</li>
            <li><span id="hours"></span>Hours</li>
            <li><span id="minutes"></span>Minutes</li>
            <li><span id="seconds"></span>Seconds</li>
        </ul>
    </div>
</div>

<script type="text/javascript">
    let timerCheck = '{{ $timer}}';
    if (timerCheck) {

        const countDownDateParts = '{{ $timer}}'.split('/');
        const countDownDate = new Date(
            parseInt(countDownDateParts[2]), // Year
            parseInt(countDownDateParts[1]) - 1, // Month (0-based index)
            parseInt(countDownDateParts[0]) // Day
        ).getTime();

        const x = setInterval(function() {
            const now = new Date().getTime();
            const distance = countDownDate - now;

            const day = 24 * 60 * 60 * 1000;
            const hour = 60 * 60 * 1000;
            const minute = 60 * 1000;
            const second = 1000;

            const days = Math.floor(distance / day);
            const hours = Math.floor((distance % day) / hour);
            const minutes = Math.floor((distance % hour) / minute);
            const seconds = Math.floor((distance % minute) / second);

            document.getElementById("days").innerText = days;
            document.getElementById("hours").innerText = hours;
            document.getElementById("minutes").innerText = minutes;
            document.getElementById("seconds").innerText = seconds;

            // Check if less than 1 day is remaining
            if (distance < day) {
                const countdownElement = document.getElementById("countdown");
                countdownElement.style.display = "block";
            }

            // Hide the countdown when date is reached
            if (distance <= 0) {
                document.getElementById("countdown").style.display = "none";
                clearInterval(x);
            }
        }, 1000);
    }
</script>