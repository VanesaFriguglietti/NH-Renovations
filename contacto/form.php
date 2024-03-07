<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" type="icon" href="imagen/NH.ico">
    <script  type="text/javascript"></script>
    <title>New Horizon</title>
  <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- The website stylesheet -->
     <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <header>
      <div class="container">
      <nav class="navbar navbar-expand-lg-end" style="background-color:#c9c8c3">
          <a class="navbar-brand" href="#">
            <img
            class="logo"
            src="imagen/logo.png"
            alt="BootstraPro Prp"
            
            width="150"
            height="90"
            />
          </a>

        <ul class="nav justify-content-end">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="services.html">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="porfolio.html">Porfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="form.php">Contact</a>
          </li>
        </ul>
      </nav>
      </div>
      <div class="container"> 
      <div
        class="cover d-flex justify-content-center align-items-center flex-column"style="background-image:url(imagen/contact.jpg);">
      
        <h1>Contact</h1>
        
        <a class="btn btn-primary" href="about.html" role="button">About Us</a>
      </div>
    </header>
    <div class="container"> 
      <div class="centro"> 
        
        
    	
        <form class="form" method="post"  autocomplete="off">
          <h2>Contact Us</h2>
          <div class="form-group">
            <div class="form-content">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" placeholder="Name" required="">
            </div>
            <div class="form-content">
              <label for="email">Email:</label>
              <input type="email" id="email" name="email" type="email" placeholder="ejemplo@email.com" required="">
            </div>
            <div class="form-content">
              <label for="address">Address:</label>
              <input type="text" id="address" name="address" placeholder="Address" required="">
            </div>
            <div class="form-content">
              <label for="subject">Subject:</label>
              <input type="text" id="subject" name="subject" placeholder="Full renovation" required="">
            </div>
          </div>
            
              <label for="message">Message:</label>
                <textarea id="message" name="message" placeholder="Message" cols="30" rows="10" required=""></textarea>
            
                <input class="btn-form" id="submit" name="contact" type="submit" onclick="hizoClick()" value="Submit">
                  <br/>
           
        </form>
      </div>
       </div>
        </div>
            <section>
     <div class="container mb-5 mt-5"> 
     <footer class="narvar-light bg-light">
        <div class="container mt-5 mb-5">
          <div class="row">
            <div class="col-lg-4">
              <h3>Links</h3>
                <ul type="none" padding-left="0em;">
                  <li><a class="enlace" style="text-decoration: none" href="index.php">Home</a></li>
                  <li><a class="enlace" style="text-decoration: none" href="about.html">About Us</a></li>
                  <li><a class="enlace" style="text-decoration: none" href="porfolio.html">Porfolio</a></li>
                  <li><a class="enlace" style="text-decoration: none" href="form.php">Contact</a></li>
                  
                  
                </ul>
            </div>
            <div class="col-lg-4">
              <h3>Contact</h3>
              <p>Email: info@nh-renovations.com</p>
              <p>Phone: 416-970-8111</p>
            </div>
            <div class="col-lg-4">
              <h3>Privacy Policy </h3>
              <p>Website Designed by Vanesa Friguglietti</p>
            </div>
          </div>
        </div>
      </footer>
   </div>
    </section> 
    </div>  
    <?php
    include("contacto.php")

      ?> 



    
</body>
</html>