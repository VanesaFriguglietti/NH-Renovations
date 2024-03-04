<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" type="icon" href="imagen/NH.ico">
    <title>New Horizon</title>
  <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />

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
            
            width="210"
            height=" 90"
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
        class="cover d-flex justify-content-center align-items-center flex-column"style="background-image:url(imagen/portada.jpg);">
      
        <h1>NH|New Horizon</h1>
        <p>Renovations-Detail professionals</p>
        <a class="btn btn-primary" href="about.html" role="button">About Us</a>
      </div>
    </header>
    

    <section>
      <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 mt-2">
            <div class="card">
              <div
                title="meeting initial"
                class="cover cover-small"
                style="background-image:url(imagen/meeting.jpg);">
              </div>

              <div class="card-body">
                <h5 class="card-title">Initial Consultation</h5>
                <p class="card-text">
                  In our first meeting with you, we’ll discuss your vision and work together on creating a plan to turn your vision into a
                  reality.
                </p>
              </div>
            </div>
          </div> 
          <div class="col-12 col-sm-6 col-md-4 col-lg-3 mt-2">
            <div class="card">
              <div
                title="Design project"
                class="cover cover-small"
                style="background-image:url(imagen/design.jpg);">
                  
                </div>
              <div class="card-body">
                <h5 class="card-title">The Design Process</h5>
                <p class="card-text">
                  Any new build, addition, as well as many renovations, require
                  proper construction and design plans.
                </p>
              </div>
            </div>
          </div>

          <div class="col-12 col-sm-6 col-md-4 col-lg-3 mt-2">
            <div class="card">
              <div
                title="project pricing"
                class="cover cover-small"
                style="background-image:url(imagen/contrato.jpg);">
                  
                </div>

              <div class="card-body">
                <h5 class="card-title">Project Pricing</h5>
                <p class="card-text">
                  Once we have all of the final approvals on your floor plans
                  and interior designs, our estimating team will price your
                  project to include all of your ideas.
                </p>
              </div>
            </div>
          </div>

          <div class="col-12 col-sm-6 col-md-4 col-lg-3 mt-2">
            <div class="card">
              <div
                title="during the project"
                class="cover cover-small"
                style="background-image:url(imagen/during.jpg);">
                  
              </div>
              <div class="card-body">
                <h5 class="card-title">During The Project</h5>
                <p class="card-text">
                  Seeing the progress of your build or renovation can be very
                  exciting. We aim to meet with you on site monthly and keep you
                  updated along the way!
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    
    <!--carrusel-->
    <section>
      <div class="container mt-5 mb-5">
        <div class="carrusel">
          <div class="stripe-container">
            <div class="card">
              <div
                title="Bathroom"
                class="cover cover-small"
                style="background-image:url(imagen/carrusel/bano.jpg);"></div>

              <div class="card-body">
                <h5 class="card-title">Full renovation Bathroom</h5>
                <span class="badge text-bg-info">Project 2023-Oct</span>
              </div>
            </div>
            <div class="card">
              <div
                title="Basement"
                class="cover cover-small"
                style="background-image:url(imagen/carrusel/basement.jpg);"></div>

              <div class="card-body">
                <h5 class="card-title">Full renovation Basement</h5>
                <span class="badge text-bg-info">Project 2023-Dec</span>
              </div>
            </div>
            <div class="card">
              <div
                title="Demolition"
                class="cover cover-small"
                style="background-image:url(imagen/carrusel/demolicion.jpg);"></div>

              <div class="card-body">
                <h5 class="card-title">Demolition</h5>
                <span class="badge text-bg-info">Project 2024-Jan</span>
              </div>
            </div>
            <div class="card">
              <div
                title="worker"
                class="cover cover-small"
                style="background-image:url(imagen/carrusel/structure.jpg);"></div>

              <div class="card-body">
                <h5 class="card-title">Development</h5>
                <span class="badge text-bg-info">Project 2024-Jan</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
    <!--map-->
    <section>
    <div class="container mt-5 mb text-center" id="mapa">
      <h4>
        Our office location
      </h4>
      <p>
        250 Regina Rd, Woodbridge, ON L4L 8N1
      </p>
      <div class="responsive-iframe">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2881.2405496477236!2d-79.61462632433651!3d43.767865245007876!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b3b2ed8ee68d3%3A0xa98cc89c739b1f1!2s250%20Regina%20Rd%2C%20Woodbridge%2C%20ON%20L4L%208N1!5e0!3m2!1ses-419!2sca!4v1707765708080!5m2!1ses-419!2sca" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      
      </div>
    </section>
    <section>
     <div class="container mb-5 mt-5"> 
     <footer class="narvar-light bg-light">
        <div class="container mt-5 mb-5">
          <div class="row">
            <div class="col-lg-4">
              <h3>Enlaces</h3>
                <ul type="none">
                  <li><a class="enlace" style="text-decoration: none" href="index.php">Home</a></li>
                  <li><a class="enlace" style="text-decoration: none" href="about.html">About Us</a></li>
                  <li><a class="enlace" style="text-decoration: none" href="form.php">Contact</a></li>
                </ul>
            </div>
            <div class="col-lg-4">
              <h3>Contact</h3>
              <p>Email: info@nh-renovations.com</p>
              <p>Phone: 416-970-8111</p>
            </div>
            <div class="col-lg-4">
              <h3>Derechos de autor</h3>
              <p>(c) 2024 Mi Sitio Web. Todos los derechos reservados.</p>
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
