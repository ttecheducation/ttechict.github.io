<?php include "email.php"; ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">
<script src="script.js" defer></script>
</head>
<body>
<!--Part 1-->
<section style="background-image: url(images/w.jpg);" id="home"> 
  <div class="topnav" id="myTopnav">
    <div class="title">
      
      <h2>TTech ICT Center</h2>
    </div>
    <a href="#home" ><i class="fa-solid fa-house"></i>Home</a>
    <a href="#about">About Us</a>
    <a href="#course"><i class="fa-solid fa-book"></i>Courses</a>
    <a href="#service"><i class="fa-regular fa-briefcase"></i>Services</a>
    <a href="#contact" ><i class="fa-solid fa-address-book"></i>Contact Us</a>
    <div  class="search-container" >
      <form class="in" action="">
        <button onclick="w3page()">Learn W3-School</button>
        <button style="background-color: rgb(255, 255, 255); color:black;" href="javascript:void(0)"  onclick="openNav()"   type="submit">Register Here!</button>
      </form>
    </div>
   
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776</a>
  </div>
  
  <div id="sidebar" class="sidebar">
    <form  method="post" id="register">
      <div class="container">
        <a style="text-align: right; margin-right:20px " href="javascript:void(0)"  onclick="closeNav()">X</a>
        <h1>Register to Courses</h1>
        <p>Please fill in this form to register to a course.</p>
        <hr>
        <fieldset>
          <label for="name"><b>Full Name</b></label>
          <input type="text" placeholder="Enter Your full name" name="name" required>
        </fieldset>
       
         <fieldset>
          <label for="email"><b>Email</b></label>
          <input type="text" placeholder="Enter your email" name="email">
         </fieldset>
        
         <fieldset>
          <label for="location"><b>Location</b></label>
          <input type="text" placeholder="Enter your current location" name="location" >  
         </fieldset>
      
         <fieldset>
          <label style="font-weight: bold;" for="course">Course</label>
          <select id="course" name="course">
             <option value="C">C Programming</option>
             <option value="C++">C++ Programming</option>
             <option value="Java">Java Programming</option>
             <option value="python">Python Programming</option>
             <option value="ai">Artificial Intelligence</option>
             <option value="ml">Machine Learning</option>
             <option value="fs">Full-Stack Web Development</option>
             <option value="ms">Mern-Stack Development</option>
             <option value="data">Database(SQL No-SQL)</option>
             <option value="other">Other Course</option>
          </select>
         </fieldset>
        
        <fieldset>
          <label for="phone1"><b>Phone 1</b></label>
          <input type="text" placeholder="Enter your phone number 1" name="phone1" required>
        </fieldset>
        
        <fieldset>
          <label for="phone2"><b>Phone 2</b></label>
          <input type="text" placeholder="Enter your phone number 1" name="phone2" >
        </fieldset>
       
        <hr>
        <fieldset>
          <button type="submit" name="submit" class="registerbtn">Register</button>
        </fieldset>
        
      </div>
      <p style="text-align: center;">Best Educational services !</p>
      <p style="text-align: center;">With decades of experience in the tranining area!</p>
    </form>
  </div>
  
  <div style="background-image: url(images/w.jpg);   background-repeat: no-repeat;" id="mainside" class="main">
    <div class="sec">
    <h1>Upgrade Your Skills!</h1>
    <h1>Upgrade Your Knowledge!</h1>
    <h2> Get to the latest!</h2>
    <h2>Learn and be competent with the world!</h2>
    <h3>Do  you  want  to  become  full  time  programmer  or  full  time  IT  person ?</h3>
    <h3 style="padding-top: 5%;">If your answer is <b style="color: orange;"> 'Yes' </b> , We are here for you!</h3>
    <button type="submit" class="knowmore">Browse Courses</button>
    </div>
  </div>  
</section>

<!--Part 2-->
<section style="background-color:rgb(255, 255, 255); padding-top:5px; padding-left:30px; padding-right:30px" id="course">

  <div class="row">
    <h1 style="text-align: center; ">Popular Courses</h1>
    
    <div class="column">
      <div class="card">
        <img src="images/a.jpg" alt="Jane" style="width:100%">
        <div class="container2">
          <p>Adobe Photoshop, Illustrator, Indesign, Autocad, SEO......... </p>
          <p><button class="button2">Graphics Design & Digital Marketing</button></p>
        </div>
      </div>
    </div>

    <div class="column">
      <div class="card">
        <img src="images/pngaaa.com-4417258.png" alt="Jane" style="border-radius:0%; width:100%">
        <div class="container2">
          <p>C, C++, Python, Java, Javascript, Database, Machine Learning, Artificial Intelligence,  Full stack, MERN stack....... </p>
          <p><button class="button2">Programming Courses</button></p>
        </div>
      </div>
    </div>

    <div class="column">
      <div class="card">
        <img src="images/pexels-luis-gomes-546819.jpg" alt="Jane" style="width:100%">
        <div class="container2">
          <p>"What ever happens Believe in Your self!"" </p>
          <p><button class="button2">Full Stack Development</button></p>
        </div>
      </div>
    </div>
    
  </div>
</section>

<!--part 3-->
<section style="background-color:rgb(255, 255, 255);" id="service">
  <!-- MAIN (Center website) -->
<style>

  /* Center website */
.ma {
  max-width: 1000px;
  margin: auto;
}

h1 {
  font-size: 50px;
  word-break: break-all;
}

.roww {
  margin: 8px -16px;
}

/* Add padding BETWEEN each column (if you want) */
.roww,
.roww > .columnn {
  padding: 8px;
}

/* Create four equal columns that floats next to each other */
.columnn {
  float: left;
  width: 25%;
}
.contentt p{
  font-size: 20px;
  text-align:center;
}

/* Clear floats after rows */
.roww:after {
  content: "";
  display: table;
  clear: both;
}

/* Content */
.contentt {
  background-color: white;
  padding: 10px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.3);
  margin-bottom: 20px;
}

.contentt img{
  border-radius: 10%; 
}

.contentt img:hover{
  -ms-transform: scale(1.5); /* IE 9 */
  -webkit-transform: scale(1.5); /* Safari 3-8 */
  transform: scale(1.5);
  transition: 0.5s;
}
.ma p{
  font-size: 20px;
  text-align: center;
}


/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 600px) {
  .columnn {
    width: 50%;
  }
  .ma h1,h2{
    font-size: 15px;
  }
  .ma p{
    font-size: 10px;
  }

  .contentt p{
    font-size: 10px;
    text-align:center;
  }
}

@media screen and (max-width: 600px) {
  .columnn {
    width: 100%;
  }
}
</style>
  <div class="ma">

<h1 style="text-align: center;">TTech Education</h1>
<hr>

<h2>Our Students</h2>
<p>It is great and lovely experience to teach all the kids and adults about computer and programming the new technology!</p>
<p>Here are some of our experiences! </p>


<div class="roww">
  <div class="columnn">
    <div class="contentt">
      <img src="images/11.jpg" alt="students" style="width:100%">
      <h3>Student Project Presentation</h3>
      <p> Software Programming Language
        Programming languages are instructions or commands that
        usually consist of many lines that can be understood by
        computers. </p>
    </div>
  </div>

  <div class="columnn">
    <div class="contentt">
      <img src="images/14.jpg" alt="students" style="width:100%">
      <h3>Students Learning how to code</h3>
      <p>With a variety of different complexes and purposes, the most
        commonly used programming languages are; Java, C, C ++, C
        #, Python, PHP, JavaScript, Ruby, Perl, Visual Basic .NET,
        Delphi, Assembly, Visual Basic, Objective-C, Swift, R, Groovy,
        Matlab, SQL and D.</p>
    </div>
  </div>
  <div class="columnn">
    <div class="contentt">
      <img src="images/15.jpg" alt="students" style="width:100%">
      <h3>Introduction to Coding</h3>
      <p>Computers have been applied for different things, from
        controlling nuclear power plants to providing video games on
        cellphones. Because of diversity, programming languages
        have different goals according to their development.</p>
    </div>
  </div>
  <div class="columnn">
    <div class="contentt">
      <img src="images/16.jpg" alt="students" style="width:100%">
      <h3>Kids Programming Session</h3>
      <p>Like anything you try for the first time, it's always best to start
        with the basics, so begin with the first chapters and resist the urge
        to skip ahead to the later chapters. No one can play an orchestral
        symphony the first time they pick up an instrument. </p>
    </div>
  </div>
</div>

<div class="contentt" >
  <img src="images/12.jpg" alt="students" style="width:100%;border-radius:0%">
  <h3>Summer Bootcamp</h3>
  <p>Programming fosters creativity, reasoning, and
    problem solving. The programmer gets the opportunity
    to create something from nothing, use logic to turn
    programming constructs into a form that a computer
    can run, and, when things don't work quite as well
    as expected, use problem solving to figure out what
    has gone wrong. Programming is a fun, sometimes
    www.it-ebooks.info
    xx Introduction
    challenging (and occasionally frustrating) activity, and the skills
    learned from it can be useful both in school and at work . . . even if
    your career has nothing to do with computers.
    And, if nothing else, programming is a great way to spend an
    afternoon when the weather outside is dreary.</p>
</div>
</div>
</section>

<!--Part 4-->
<section style="background-image: url(images/n.jpg); padding-top:5px; padding-left:30px; padding-right:30px" id="about">

  <div class="row">
    <h1 style="text-align: center; ">Meet Us!</h1>
    <div class="column">
      <div class="card">
        <img src="images/FB_IMG_14426454701640162.jpg" alt="Mariamawit" style=" display: block;
        margin-left: auto;
        margin-right: auto;width:50%; height:20%">
        <div class="container2">
          <h2>Ms.Mariamawit</h2>
          <p class="title">Senior Full Stack Developer</p>
          <p>"What ever happens Believe in Your self!"" </p>
        </div>
      </div>
    </div>
  
    <div class="column">
      <div class="card">
        <img src="images/FB_IMG_14426451333919237.jpg" alt="Temesgan" style="display: block;
        margin-left: auto;
        margin-right: auto;width:50%">
        <div class="container2">
          <h2>Mr.Temesgan</h2>
          <p class="title">CEO & Founder </p>
          <p class="title">Senior Full Stack Developer</p>
          <p>"Always try your Best! The rest belongs to God!"</p>
          <p>temu1537@gmail.com</p>
          <p><button class="button2">Contact</button></p>
        </div>
      </div>
    </div>
    
    <div class="column">
      <div class="card">
        <img src="images/FB_IMG_14426454889709895.jpg" alt="Yosef" style="display: block;
        margin-left: auto;
        margin-right: auto;width:50%">
        <div class="container2">
          <h2>Mr.Yosef</h2>
          <p class="title">Senior Software Developer</p>
          <p>"God is Good!"</p>
        </div>
      </div>
    </div>
  </div>
<div class="about" style="margin-left:auto; margin-right:auto; display:block">
  <button type="button" class="collapsible">Our Goal</button>
  <div class="collapsecontent">
    <p>Our main goal is ceating a modernized and creative society in all aspects of modern technology!</p>
  </div>
  <button type="button" class="collapsible">Our Vision</button>
  <div class="collapsecontent">
   <p>Our vision is to become top technological instituition in Africa, that solve the difficulties and problems of the society in simple and modernized way!</p> 
   </div>
  <button type="button" class="collapsible">Our Mission</button>
  <div style="text-align: center;"  class="collapsecontent">
   <p>Our mission is to support peoples who interests in making things simple and who have the interest to solve problem of the society in creative ways!</p>
   </div>
</div> 

<div class="callout" style=" box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.3);">
  <div style="font-weight: bold;" class="callout-header">TTech Message</div>
  <span class="closebtn2" onclick="this.parentElement.style.display='none';">X</span>
  <div class="callout-container">
    <video autoplay muted loop style="margin-left:2px; width: 100%; height:100%" id="myVideo">
      <source src="images/The_Beauty_of_Computer_Science___Computer_Science_Motivational_Video(720p).mp4" type="video/mp4">
      Your browser does not support HTML5 video.
    </video>
    <p>We have made <b style="color: orange ">50%</b> discount on our courses! <a style="color:orange;" href="#home" href="javascript:void(0)"  onclick="openNav()">Register</a> to our courses earlier to learn! We have few places!</p>
    <p style="font-weight: bold;">Call Us!</p>
    <p>+251964196866</p>
    <p>+251713789510</p>
    
  </div>
</div>
</section>


<!--Part 5-->
<section id="contact" style="background-image:url(images/w.jpg); width:100%; margin-top:5%">
  <div class="row">
    <h1 style="text-align: center; ">Meet Us!</h1>
    <div class="column3" style="padding-top:0%;">
      <div class="card">
        <div class="container2">
          <h2 style=" color: aliceblue;">Get Connected on social Media with Us!</h2>
          <button class="btn"><i class="fa-brands fa-facebook"></i> Facebook</button>
          <button class="btn"><i class="fa-brands fa-linkedin"></i> Linkedin</button>
          <button class="btn"><i class="fa-brands fa-telegram"></i> Telegram</button>          
        </div>
      </div>
    </div>
  
    <div class="column3">
      <div class="card">
        <div class="container2">
          <h2 style=" color: aliceblue; font-weight:bold;">Explore More!</h2>
          <div class="downnav">
            <a href="#home" >Home</a>
            <a href="#about">About Us</a>
            <a href="#course">Courses</a>
            <a href="#service">Services</a>
          </div>
          <p><button class="knowmore">Browse Courses</button></p>
        </div>
      </div>
    </div>
  
    <div class="column3">
      <div class="card">
        <div class="container2">
        <iframe src= 
"https://www.google.com/maps/@8.9980928,38.7678208,11z?entry=ttu"
                    width="400"
                    height="300"
                    frameborder="0"
                    style="border:0;"
                    allowfullscreen=""
                    aria-hidden="false"
                    tabindex="0"> 
            </iframe> 
        </div>
      </div>
    </div>
    
  </div>
  

  <div style="text-align:center;background-color: orange; color:black; padding:5px;bottom:20%">Copyright 2023 TTech ICT Center</div>
</section>
</body>
</html>
