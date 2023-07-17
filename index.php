<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
        <!-- Navigation Section -->
    <header class="Navbar-section clearfix">
		<div class="container-fluid">
			<a href="index1.html" class="site-logo">
				<img src="img/logo.png" alt="">
			</a>
			<div class="responsive-bar"><i class="fa fa-bars"></i></div>
			<a href="" class="user"><i class="fa fa-user"></i></a>
			<div class="site-btn"><a href="#appointment" id="button">Contact</a></div>
			<nav class="main-menu">
				<ul class="menu-list">
					<li><a href="#home" >Home</a></li>
					<li><a href="#about" >About</a></li>
                    <li><a href="#services" >Services</a></li>
					<li><a href="#appointment">Appointment</a></li>
				</ul>
			</nav>
		</div>
	</header>
    <section class="hero-section" id="home">
		<div class="container1">
			<div class="row1">
				<div class="col-md-6 hero-text">
					<h2>Health <span>care</span> <br>for whole family</h2>
					<h4>In healthcare sector,service excellence is the facility <br>
                        of the hospital as healthcare service provider to consistently. </h4>
					<div class="register-btn"><a href="#appointment" id="butn">Book Appointment</a></div>
				</div>
				<div class="col-md-6">
					<img src="img/laptop.png" class="laptop-image" alt="">
				</div>
			</div>
		</div>
	</section>
   <section class="about">
    <div class="img">
    <img src="about-img.jpg">
    </div>
    <div class="text" id="about">
        <h1>ABOUT US</h1>
        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
              in some form, by injected humour, or randomised words which don't look even slightly believable. If you
              are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in
              the middle of text. All</p>
              <div class="read-btn"><a href="#" id="">Read More</a></div>
    </div>
   </section>
    <section class="container" id="services">
    <h2>OUR SERVICES</h2>
    <div class="row">
      <div class="service">
        <img src="lung.png">
        <h3>Lungs</h3>
        <p>Your lungs are the pair of spongy, pinkish-gray organs in your chest. When you inhale (breathe in), air enters your lungs, and oxygen from that air moves to your blood. At the same time, carbon dioxide, a waste gas, moves from your blood to the lungs and is exhaled (breathed out).</p>
      </div>
      <div class="service">
      <img src="hospital.png">
        <h3>Hospitality</h3>
        <p>Hospitality is basically developing a relationship between a guest and a host. In the relationship process a stranger becomes a guest, a friend and finally a loyal customer.</p>
      </div>
      <div class="service">
      <img src="heartbeat1.png">
        <h3>Monitering</h3>
        <p>Patient monitors are used for continuous measurement of patient parameters such as heart rate and rhythm, respiratory rate, blood pressure, blood-oxygen saturation and many other parameters to take care of critically ill patients.</p>
      </div>
      <div class="service">
      <img src="bed.png">
        <h3>Bed Facility</h3>
        <p>A hospital bed or hospital cot is a bed specially designed for hospitalized patients or others in need of some form of health care. These beds have special features both for the comfort and well-being of the patient and for the convenience of health care workers.</p>
      </div>
      <div class="service">
      <img src="van.png">
        <h3>Ambulance</h3>
        <p>An ambulance is a vehicle used to transport people who are sick or injured. Most ambulances are either trucks with space for patients or cargo vans with raised roofs. Ambulances usually take patients to a hospital. Specially trained people called emergency medical technicians, or EMTs, ride in ambulances.</p>
      </div>
      <div class="service">
      <img src="tem.png">
        <h3>Temperature</h3>
        <p>In the Winter and cooler months temperature is recommended to be kept slightly lower with the range being 75.2°F to 78.8°F. Humidity is also important as it can effect bacteria and disease spread. Recommended humidity in hospitals is between 50%rh and 60%rh.</p>
      </div>
    </div>
  </section>
  <div class="registration" id="appointment">
		<div class="register-content" id="appointment">
		  <h1>BOOK APPOINTMENT</h1>
		  <?php 
		  if(isset($_GET['success'])){ ?>
		  <p class="success"><?php echo $_GET['success'];?></p>
		  <?php }?>
          <div class="border">
		  <form action="appointment.php" method="POST">
		  <input type="text" placeholder="First Name" name="fname" required><br>
		  <input type="text" placeholder="Last Name" name="lname" required><br>
          <input type="text" placeholder="Age" name="age" required><br>
		  <input type="number" placeholder="Contact" name="contact" required><br>
		  <input type="text" placeholder="E-mail" name="email" required><br>
		  <input type="date" placeholder="Date" name="date" required> <br>
      <input type="time" placeholder="Time" name="time" required> <br>
		  <input type="submit" placeholder="Submit" value="submit"><br>
		</form>
        </div>
		</div>  
	</div>
<section class="footer">
    <div class="footerleft">
            <p class="ft">Copyright © 2018, All Right Reserved Ashish</p>
    </div>
    <div class="footerright">
        
    <p>Home</p><p>Terms</p><p>Privacy</p><p> Policy</p><p>Contact</p>
    </div>

</section>

    </body>
</html>