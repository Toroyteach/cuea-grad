<div class="countTimer">

    <!-- Countdown 4-->
    <div class="rounded bg-gradient-4 text-white shadow p-5 text-center mb-5">

        <div class="" style="display: none;" id="timerdeadline">
            <h2 class="mb-0 font-weight-bold text-white">{{ $timerdeadline }}</h2>
        </div>

        <h3 class="mb-0 font-weight-bold text-white" id="timertitle">{{ $timertitle }}</h3>


        <div id="clock-c" class="countdown">
            <span id="days"></span>days
            <span id="hours"></span>Hours
            <span id="minutes"></span>Minutes
            <span id="seconds"></span>Seconds
        </div>

    </div>

</div>

<script type="text/javascript">
    let timerCheck = '{{ $timer}}';
    if (timerCheck) {

        const countDownDateParts = '{{ $timer}}'.split('/');
        const countDownDate = new Date(timerCheck).getTime();

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
                const countdownElement = document.getElementById("clock-c");
                countdownElement.style.display = "block";

                countdownElement.classList.add('blink');
            }

            // Hide the countdown when date is reached
            if (distance <= 0) {
                document.getElementById("clock-c").style.display = "none";
                document.getElementById("timerdeadline").style.display = "block";
                document.getElementById("timertitle").style.display = "none";
                clearInterval(x);
            }
        }, 1000);
    } else {

        document.getElementById("clock-c").style.display = "none";
    }
</script>