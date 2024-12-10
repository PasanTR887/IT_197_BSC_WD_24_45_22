<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Crushify | Home Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="../../../css/Home.css">
</head>
<body>
        <!--Header Section-->
      
         
          <!--Nav bar-->
  <div class="wrapper flex py-3 mb-3">
    <nav class="nav">
        <div class="nav-logo">
            <img src="../../../images/CRUSHIFY - Copy.jpg" class="img">
        </div>
        <div class="nav-menu navMenu" id="navMenu">
            <ul>
                <li><a href="#" class="link active">Home</a></li>
                <li><a href="../dashboards/FindMatch.php" class="link">Find Match</a></li>
                <li><a href="#" class="link">Inbox</a></li>
                <li><a href="#" class="link">Notifications</a></li>
            </ul>
        </div>
        <div class="nav-button">
            <button class="btn white-btn" id="loginBtn" onclick="login()">Sign In</button>
            <button class="btn" id="registerBtn" onclick="register()">Sign Up</button>
        </div>
        <div class="nav-menu-btn">
        </div>
    </nav>
  </div>  
      
      <!-- About Us logo section  -->
     
    
     <!-- grid of our company  -->
      <section class="container my-5">
        <div class="WelcomeSec">
          <div class="row">
            <div class="col-md-6   py-3 WelcomePara">
              <h3>About Us</h3>
              <br>
              <h5 class="Parah5">Our Mission :</h5>
              <p>
              At Crushify, we believe that everyone deserves to find their perfect match. Our mission is to connect hearts by creating meaningful relationships built on trust, understanding, and shared values. We are dedicated to providing a safe, inclusive, and exciting platform where love can blossom.
              </p>
              <br>
              <h5 class="Parah5">Our Story :</h5>
              <p>
              Crushify was born from the idea that traditional matchmaking needed a modern twist. Frustrated with the challenges of finding meaningful connections, our founders decided to create a space where love isn’t left to chance but guided by compatibility and technology. Today, we are proud to be a platform that has brought countless couples together.
              </p>
            </div>
            <div class="col-md-6   WelcomePic ">
              <img src="../../../images/CRUSHIFY.jpg" alt="myshopPic" style="border-radius: 20px;"  class="img-fluid">
            </div>
          </div> 
        </div>
      </section>

      <section class="container my-5">
        <div class="MissionSec">
          <div class="row">
            <div class="col-md-6   MissionImg">
              <img src="../../../images/pexels-alleksana-6478819.jpg" alt="missionpic" style="border-radius: 20px;" class="img-fluid" > 
            </div>
            <div class="col-md-6   py-3  MissionPara">
            <h3>Our Services</h3>
              <br>
              <h5 class="Parah5">Advanced Matchmaking :</h5>
              <p>
              Our advanced matchmaking algorithm goes beyond simple swipes. By analyzing your preferences, lifestyle, and interests, we recommend potential matches that align with your unique personality and values.
              </p>
              <br>
              <h5 class="Parah5">Personalized Recommendations :</h5>
              <p>
              Forget the guesswork! Our system tailors match suggestions just for you. Whether you're looking for a serious relationship or exploring new connections, our personalized approach ensures you're always one step closer to meeting someone special.
              </p>
            </div>
          </div>
        </div>
      </section>

      <section class="container my-5">
        <div class="WelcomeSec">
          <div class="row">
            <div class="col-md-6  py-3 TeamPara">
              <h3>Contact Us </h3>
              <br>
              <h5 class="Parah5">FAQs Section :</h5>
              <p>
              Got questions? We’ve got answers! Visit our FAQ page to learn more about how Crushify works, account settings, safety tips, and more.
              </p>
              <br>
              <h5 class="Parah5">Reach Out to Us :</h5>
              <p>
              E mail - CrushifySupport@gmail.com
                <br>
              Phone - +94 33 456 1123  
              </p>
              <br>
              <h5 class="Parah5">Stay Connected :</h5>
              <p>
              Follow us on social media to stay updated on new features, events, and inspiring love stories. We’re just a click away!
              </p>
            </div>
            <div class="col-md-6   TeamPic">
              <img src="../../../images/pexels-gustavo-fring-6699441.jpg" alt="TeamPic" style="border-radius: 20px;" class="img-fluid"  >
            </div>
          </div> 
        </div>
      </section>


     <!-- Footer -->
      <div class="container py-5">
          
        
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <div class=" col-6 offset-md-1 mb-3" >
              <form id="subscribeForm">
                <h5>Subscribe to us :</h5>
                <p> Hey! Drop your E-mail address and join the Community. :</p>
                <div class="d-block  flex-sm-row gap-2">
                  <label  class="visually-hidden">Email address</label>
                  <input  type="email" class="form-control" placeholder="Email address" id="emailInput" >
                  <br>
                  <button class="btn btn-danger " type="submit" id="Subscribe" >Subscribe</button>
                </div>
              </form>
              <script>
                document.getElementById("Subscribe").addEventListener("click", function(event) {
                event.preventDefault(); // Prevent default form submission behavior
                alert("You have successfully subscribed!");
                });
              </script>
            </div>
          </div>
        <br><br>
          <div class="d-flex flex-column  " style="background-color:rgb(0, 0, 0);" >
            <p style="color:rgb(255, 255, 255);padding-top: 10px;" class="text-center">Copyright © 2024 FEETsy.com , Inc. All Rights Reserved.</p>
          </div>
        </footer>
      </div> 
        </main>
        <script src="../../../js/Script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>