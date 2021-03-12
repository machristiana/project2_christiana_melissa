<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Fira+Sans&family=Montserrat&display=swap" rel="stylesheet">

<!-- Font Awesome -->
<script src="https://kit.fontawesome.com/70a4005e9d.js" crossorigin="anonymous"></script>

<!-- Favicon -->
<link rel="icon" type="image/png" href="images/favicon.png" />
<link rel="icon" type="image/ico" href="images/favicon.ico" />

<style type="text/css">

@font-face {
	font-family: 'Conv_billie-bonnie';
	src: url('fonts/billie-bonnie.eot');
	src: local('☺'), url('fonts/billie-bonnie.woff') format('woff'), url('fonts/billie-bonnie.ttf') format('truetype'), url('fonts/billie-bonnie.svg') format('svg');
	font-weight: normal;
	font-style: normal;
}

* {
  border: 0;
  padding: 0;
  margin: 0;
}

body {
  background: rgb(228, 207, 195);
}

.container-contact {
  max-width: 900px;
  margin: 50px auto 410px;
  text-align: center;
}

.heading {
  background: rgb(171, 96, 79);
  text-align: center;
  color: white;
  padding: 10px;
}

.main {
  font-family: "Billie Bonnie", cursive;
  font-size: 60px;
  letter-spacing: .025em;
  font-weight: normal;
}

.border {
  display: inline-block;
}

.border-left {
  border-top: 2px solid white;
  position: relative;
  right: 150px;
  top: 6px;
  width: 160px;
}

.border-right {
  border-top: 2px solid white;
  position: relative;
  left: 150px;
  bottom: 25px;
  width: 160px;

}

.title {
  font-family: "Montserrat", sans-serif;
  font-weight: normal;
  font-size: 18px;
  padding-bottom: 7px;
}

.menu {
  background: rgb(142, 136, 108);
  text-align: center;
  padding: 15px;
}

.menu ul {
  list-style: none;
  z-index: 9;
}

.menu > ul > li {
  display: inline-block;
  background: rgb(142, 136, 108);
  position: relative;
}

.menu ul li a {
  color: white;
  text-decoration: none;
  padding: 8px 26px 8px 20px;
  font-family: "Montserrat", sans-serif;
  text-transform: uppercase;
  display: block;
  transition: .3s;
}

.menu ul li a:hover {
  background: white;
  color: #3c3c3c;
  transition: .3s;
}

.sub-menu {
  display: none;
}

.menu-item:hover .sub-menu {
  display: block;
  position: absolute;
  top:32px;
  background: rgb(142, 136, 108);
  width: 100%;
}

h2,
p,
ul {
  color: rgb(121, 115, 81);
  font-family: "Fira Sans", sans-serif;
}

/************************** START STICKY FOOTER ****************************/
.site {
	display: flex;
	flex-direction: column;
	min-height: 100vh;
}

.site-content {
	flex: 1;
}
/******************************* END STICKY FOOTER **********************/

footer {
  background: rgb(171, 96, 79);
  position: relative;
  color: white;
}

footer ul li {
  display: inline-block;
  padding: 40px 10px 10px 10px;
}

footer ul li a {
  color: white;
  text-decoration: none;
  text-transform: uppercase;
  font-family: "Montserrat",sans-serif;
}

footer p a {
  color: white;
  padding-left: 5px;
  font-size: 35px;
}

.social-media-icons {
  position: absolute;
  right: 15px;
  bottom: 5px;
}

</style>

<div class="site">
  <header>
    <div class="heading">
      <h1 class="main">Melissa Christiana</h1>
      <div class="border">
        <div class="border-left"></div>
        <h1 class="title">PORTFOLIO</h1>
        <div class="border-right"></div>
      </div>
    </div>

    <nav class="menu">
      <ul>
        <li class="menu-item"><a href="index.html">Home</a></li>
        <li class="menu-item"><a href="about.html">About</a></li>
        <li class="menu-item"><a href="#">Portfolio <i class="fas fa-angle-down"></i></a>
          <ul class="sub-menu">
            <li class="menu-item"><a href="photoshop.html">Photoshop</a></li>
            <li class="menu-item"><a href="illustrator.html">Illustrator</a></li>
          </ul>
        </li>
        <li class="menu-item"><a href="contact.html">Contact</a></li>
      </ul>
    </nav>
  </header>

  <div class="container-contact site-content">
  	<h2>Missing fields</h2>
  	<p>Sorry, you have not completed all of the required fields.</p>
  	<p>Please hit <a href="#" onClick="history.go(-1)">back</a> and complete the following required fields.</p>

  	<ul>
  	<?php
  		for($i=0; $i<count($this->missing_required_fields); $i++){
  			echo "<li>" . $this->missing_required_fields[$i]['title'] . "</li>\n";
  		}
  	?>
  	</ul>

  	<p><strong><a href="#" onClick="history.go(-1)">Back to form</a></strong></p>
  </div>

  <footer>
    <ul>
      <li class="menu-item" id="portfolio"><a href="index.html">Home</a></li>
      <li class="menu-item"><a href="about.html">About</a></li>
      <li class="menu-item"><a href="#">Portfolio</a>
      <li class="menu-item"><a href="contact.html">Contact</a></li>
    </ul>

    <p class="social-media-icons">
      <a class="social-media-icon2" href="https://www.linkedin.com/in/melissa-christiana-996b67106/" target="_blank"><i class="fab fa-linkedin"></i></a>
      <a class="social-media-icon1" href="mailto:machristiana1310@gmail.com" target="_blank"><i class="fas fa-envelope"></i></a>
    </p>
  </footer>
</div>
