<!DOCTYPE html>
<html>
<head>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>

    /*Drop down css */
    ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a, .dropbtn {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1;}

.dropdown:hover .dropdown-content {
  display: block;
}
    /*Other css */

body {font-family: "Times New Roman", Georgia, Serif;}
h1, h2, h3, h4, h5, h6 {
  font-family: "Playfair Display";
  letter-spacing: 5px;
}
</style>
</head>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
    <a href="#home" class="w3-bar-item w3-button">Elimu School</a>
    <!-- Right-sided navbar links. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="#about" class="w3-bar-item w3-button">About</a>
      <a href="#register" class="w3-bar-item w3-button">Apply</a>
      <a href="#contact" class="w3-bar-item w3-button">Contact</a>

     <ul>
     <li class="dropdown">
      <a href="javascript:void(0)" class="dropbtn" style="border-radius: 10px;">Login</a>
      <div class="dropdown-content">
      <a href="<?php echo e(route('login.form')); ?>">Student</a>
      <a href="#">Lecturer</a>
      <a href="#">Admin</a>
      </div>
     </li>
     </ul>

    </div>
  </div>
</div>

<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1600px;min-width:500px" id="home">
  <img class="w3-image" src="https://researchleap.com/wp-content/uploads/2022/02/Our_Best_Education_Articles_of_2020-1078x516.jpeg" alt="Hamburger Catering" width="1600" height="800">
  <div class="w3-display-bottomleft w3-padding-large w3-opacity">
    <h1 class="w3-xxlarge" style="color: white;">Elimu school</h1>
  </div>
</header>

<!-- Page content -->
<div class="w3-content" style="max-width:1100px">

  <!-- About Section -->
  <div class="w3-row w3-padding-64" id="about">
    <div class="w3-col m6 w3-padding-large w3-hide-small">
     <img src="https://crescent.sc.ke/assets/img/cr/g4.jpeg" class="w3-round w3-image w3-opacity-min" alt="Table Setting" width="600" height="1000">
    </div>

    <div class="w3-col m6 w3-padding-large">
      <h1 class="w3-center">About Elimu School</h1><br>
      <h5 class="w3-center">Tradition since 1975</h5>
      <p class="w3-large">Elimu school was founded in 1975 by Mr. Smith in lorem ipsum dolor sit amet, consectetur adipiscing elit consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute iruredolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.We are located in <span class="w3-tag w3-light-grey">Nairobi,</span> Kenya.</p>
    </div>
  </div>
  
  <hr>
  
  <!-- Menu Section -->
    <div class="w3-container w3-padding-64" id="contact">
      <h1>Register</h1><br>
      <form action="/action_page.php" target="_blank">
      <p><input class="w3-input w3-padding-16" type="text" placeholder="First Name" required name="fname"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Last Name" required name="lname"></p>
      <p><input class="w3-input w3-padding-16" type="number" placeholder="Phone Number" required name="pnumber"></p>
      <p><input class="w3-input w3-padding-16" type="email" placeholder="Email Address" required name="email"></p>
      <p><input class="w3-input w3-padding-16" type="datetime-local" placeholder="Date of Birth" required name="date" value="2022-12-16 T20:00"></p>
      <label class="w3-input w3-padding-16" for="cars">Choose a course:</label>
      <p><button class="w3-button w3-light-grey w3-section" type="submit">SEND MESSAGE</button></p>
      </form>
    </div>

  <hr>

  <!-- Contact Section -->
  <div class="w3-container w3-padding-64" id="contact">
    <h1>Contact</h1><br>
    <p>We offer a set of courses.  Do not hesitate to contact us.</p>
    <p class="w3-text-blue-grey w3-large"><b>Elimu School, 42nd Living St, 43043 Nairobi, Kenya</b></p>
    <p>You can also contact us by phone 00553123-2323 or email elimu@mail.com, or you can send us a message here:</p>
    <form action="/action_page.php" target="_blank">
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Name" required name="Name"></p>
      <p><input class="w3-input w3-padding-16" type="number" placeholder="Phone Number" required name="pnumber"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Message" required name="Message"></p>
      <p><button class="w3-button w3-light-grey w3-section" type="submit">SEND MESSAGE</button></p>
    </form>
  </div>
  
<!-- End page content -->
</div>

<!-- Footer -->
<footer class="w3-center w3-light-grey w3-padding-32">
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">Elimu School @2022</a></p>
</footer>

</body>
</html><?php /**PATH C:\xampp\htdocs\elimu_sms\resources\views/home.blade.php ENDPATH**/ ?>