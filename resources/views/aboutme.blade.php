<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/aboutme.css">
    <script src='js/jquery-3.6.0.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>WELCOME</title>
    <script>
		$(document).ready(function(){
				$(".icon").hide();
		});
		$(document).ready(function(){
			$(".button").click(function(){
				$(".icon").slideToggle(5000);			
			});
		});
	</script>
</head>
<body>
    <div class="fpage">
        <nav>
            <ul>
                <li><a href="/urwelcome">Home</a></li>
                <li><a href="/aboutme">About Me</a></li>
                <li><a href="/comingsoon">Project</a></li>
                <li><a href="/comingsoon">Feedback</a></li>
            </ul>
        </nav>
        <div class="content">
            <h4>Hello, My Name Is</h4>
            <h1>Iqshan <span>Bagus P</span></h1>
            <h3>I'am a College Student</h3>
            <div class="contact">
                <form method="post" action="mailto:bagusiqshan81@gmail.com">
                    <input type="email" name="email" id="mail" placeholder="Enter Your Email">
                    <input type="submit" name="submit" value="contact me">
                </form>
            </div>
        </div>
    </div>
    <section class="desc">
        <div class="slider">
            <div class="rectangle">
                <div class="main">
                    <div class="desc-text">
                        <h2><span>About</span> Me</h2>
                        <h5>student at <span>Malang State Polytechnic</span></h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Nemo dicta illum repudiandae quia quibusdam quidem sint 
                        fuga mollitia quisquam ratione unde nam nulla adipisci nihil, 
                        voluptatem, doloremque reiciendis rerum nesciunt.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Nemo dicta illum repudiandae quia quibusdam quidem sint 
                        fuga mollitia quisquam ratione unde nam nulla adipisci nihil, 
                        voluptatem, doloremque reiciendis rerum nesciunt.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Nemo dicta illum repudiandae quia quibusdam quidem sint 
                        fuga mollitia quisquam ratione unde nam nulla adipisci nihil, 
                        voluptatem, doloremque reiciendis rerum nesciunt.
                        </p>
                        <button type="button" onclick="window.location.
                        href='https://api.whatsapp.com/send?phone=+6289630303740&text=Halo';">Let's Talk</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="data">
        <div class="title">
            <h2>My <span>Biodata</span></h2>
        </div>
        <div class="box">
            <div class="card">
                <img src="img/name.png">
                <h5>Name</h5>
                <div class="pra">
                    <p>Iqshan Bagus Prasetyo</p>
                </div>
            </div>
            <div class="card">
                <img src="img/calendar.png">
                <h5>Date Of Born</h5>
                <div class="pra">
                    <p>5 August 2002</p>
                </div>
            </div>
            <div class="card">
                <img src="img/address.png">
                <h5>Address</h5>
                <div class="pra">
                    <p>Sudimoro Street No. 34</p>
                </div>
            </div>
            <div class="card">
                <img src="img/nation.png">
                <h5>Nation</h5>
                <div class="pra">
                    <p>Indonesia</p>
                </div>
            </div>
            <div class="card">
                <img src="img/religion.png">
                <h5>Religion</h5>
                <div class="pra">
                    <p>Islam</p>
                </div>
            </div>
            <div class="card">
                <img src="img/phone.png">
                <h5>Phone</h5>
                <div class="pra">
                    <p>0896xxxxxxxx</p>
                </div>
            </div>
            <div class="card">
                <img src="img/email.png">
                <h5>Email</h5>
                <div class="pra">
                    <p>bagusiqshan81@gmail.com</p>
                </div>
            </div>
        </div>
        <button type="button" class="button">Social Media</button>
        <div class="icon">
			<ul>
				<li><a href="https://www.instagram.com/"><img src="img/instagram.png" class="social"></a></li>
				<li><a href="https://www.facebook.com/"><img src="img/facebook.png" class="social"></a></li>
				<li><a href="https://www.twitter.com/"><img src="img/twitter.png" class="social"></a></li>
                <li><a href="https://www.github.com/"><img src="img/github.png" class="social"></a></li>
				<li><a href="https://www.youtube.com/"><img src="img/youtube.png" class="social"></a></li>
			</ul>
		</div>
    </section>
</body>
</html>