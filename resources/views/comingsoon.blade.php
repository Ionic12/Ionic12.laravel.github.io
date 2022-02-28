<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/welcome.css">
    <script src='js/jquery-3.6.0.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>WELCOME</title>
</head>
<body>
    <div class="slider">
        <div class="rectangle">
            <nav>
                <ul>
                    <li><a href="/urwelcome">Home</a></li>
                    <li><a href="/aboutme">About Me</a></li>
                    <li><a href="/comingsoon">Project</a></li>
                    <li><a href="/comingsoon">Feedback</a></li>
                </ul>
            </nav>
            <div class="load">
            </div>
            <div class="content">
                <div class="welcome">
                    <h1 class="coming">Coming Soon</h1>
                </div>
                <div class="clock">
                <div class="hours">
                    <div class="first">
                    <div class="number">0</div>
                    </div>
                    <div class="second">
                    <div class="number">0</div>
                    </div>
                </div>
                <div class="tick">:</div>
                <div class="minutes">
                    <div class="first">
                    <div class="number">0</div>
                    </div>
                    <div class="second">
                    <div class="number">0</div>
                    </div>
                </div>
                <div class="tick">:</div>
                <div class="seconds">
                    <div class="first">
                    <div class="number">0</div>
                    </div>
                    <div class="second infinite">
                    <div class="number">0</div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    var hoursContainer = document.querySelector(".hours");
    var minutesContainer = document.querySelector(".minutes");
    var secondsContainer = document.querySelector(".seconds");
    var tickElements = Array.from(document.querySelectorAll(".tick"));

    var last = new Date(0);
    last.setUTCHours(-1);

    var tickState = true;

    function updateTime() {
    var now = new Date();

    var lastHours = last.getHours().toString();
    var nowHours = now.getHours().toString();
    if (lastHours !== nowHours) {
        updateContainer(hoursContainer, nowHours);
    }

    var lastMinutes = last.getMinutes().toString();
    var nowMinutes = now.getMinutes().toString();
    if (lastMinutes !== nowMinutes) {
        updateContainer(minutesContainer, nowMinutes);
    }

    var lastSeconds = last.getSeconds().toString();
    var nowSeconds = now.getSeconds().toString();
    if (lastSeconds !== nowSeconds) {
        //tick()
        updateContainer(secondsContainer, nowSeconds);
    }

    last = now;
    }

    function tick() {
    tickElements.forEach((t) => t.classList.toggle("tick-hidden"));
    }

    function updateContainer(container, newTime) {
    var time = newTime.split("");

    if (time.length === 1) {
        time.unshift("0");
    }

    var first = container.firstElementChild;
    if (first.lastElementChild.textContent !== time[0]) {
        updateNumber(first, time[0]);
    }

    var last = container.lastElementChild;
    if (last.lastElementChild.textContent !== time[1]) {
        updateNumber(last, time[1]);
    }
    }

    function updateNumber(element, number) {
    //element.lastElementChild.textContent = number
    var second = element.lastElementChild.cloneNode(true);
    second.textContent = number;

    element.appendChild(second);
    element.classList.add("move");

    setTimeout(function () {
        element.classList.remove("move");
    }, 990);
    setTimeout(function () {
        element.removeChild(element.firstElementChild);
    }, 990);
    }
    setInterval(updateTime, 100);
</script>
</html>