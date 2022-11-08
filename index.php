
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" type="text/css" href="./dist/main.css" />
    <script
      src="https://kit.fontawesome.com/011545c454.js"
      crossorigin="anonymous"
    ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Machsoft Inc</title>
  </head>
  <body>
    <div class="preloader">
      <div class="box"></div>
    </div>
    <div class="main--content">
      <header>

<!--
        <nav>
          <div class="container">
            <div class="navbar--nav">
              <h2 class="brand--name">Machsoft Inc</h2>
              <ul class="nav--links">
                <li><a href="index.html">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#services--section">Services</a></li>
                <li><a href="#contact--section">Get started</a></li>
              </ul>
              <div class="hamburger">
                <div></div>
                <div></div>
                <div></div>
              </div>
            </div>
          </div>
        </nav> -->

        <!-- navigation ends here -->
<?php 
include_once("navigation.php");
?>

        <div class="container">
          <div class="header--header">
            <h1>
              IT SOLUTIONS FOR <br />
              YOUR BUSINESS
            </h1>
            <p>
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia
              velit fugiat quae totam, vitae delectus repellendus pariatur quo
              quos voluptatibus?
            </p>
            <div class="header--buttons">
              <a href="#choose--section" class="btn--full">Learn more</a>
              <a href="contact_page.php" class="btn--ghost">Get started</a>
            </div>
          </div>
        </div>
      </header>
      <main>
        <section class="section--services" id="services--section">
          <div class="container">
            <h2>What we do</h2>
            <div class="services">
              <!-- <div class="service--1">
              <p>
                <h3>Web Development</h3>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Omnis
                eligendi debitis similique magnam nostrum veritatis? Doloremque
                corporis pariatur quos unde, eos quisquam iste vero, labore
                inventore sit dolore quo praesentium.
              </p>
            </div>
            <div class="service--1">
              <p>
                <h3>IT Solutions</h3>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Omnis
                eligendi debitis similique magnam nostrum veritatis? Doloremque
                corporis pariatur quos unde, eos quisquam iste vero, labore
                inventore sit dolore quo praesentium.
              </p>
            </div> -->
              <div class="service--1">
                <ion-icon name="business-outline" class="ion--icons"></ion-icon>
                <h3>Enterprise</h3>
                <p>
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                  Omnis eligendi debitis similique magnam nostrum veritatis?
                  Doloremque corporis pariatur quos unde, eos quisquam iste
                  vero, labore inventore sit dolore quo praesentium.
                </p>
              </div>
              <div class="service--1">
                <ion-icon name="desktop-outline"></ion-icon>
                <h3>Infrastructure</h3>
                <p>
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                  Omnis eligendi debitis similique magnam nostrum veritatis?
                  Doloremque corporis pariatur quos unde, eos quisquam iste
                  vero, labore inventore sit dolore quo praesentium.
                </p>
              </div>
            </div>
            <div class="header--buttons">
              <a href="#choose--section" class="btn--full">Learn more&rarr;</a>
            </div>
          </div>
        </section>
        <section class="section--achievement">
          <div class="container">
            <div class="achievements">
              <div class="achieve--1">
                <div class="number">10+</div>
                <p>IT solutions provided</p>
              </div>
              <div class="achieve--2">
                <div class="number">20+</div>
                <p>Websites Developed</p>
              </div>
              <div class="achieve--3">
                <div class="number">50+</div>
                <p>customers served</p>
              </div>
            </div>
          </div>
        </section>
        <section class="why--choose--us" id="choose--section">
          <h2>Why Choose Us</h2>
          <div class="container">
            <img src="./dist/img/undraw_feeling_of_joy_re_cqko.svg" alt="" />
            <div class="goals">
              <div class="goal--1">
                <ion-icon name="people-outline"></ion-icon>
                <h3>Expert team</h3>
                <p>
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                  Mollitia omnis obcaecati deleniti! Nam quam sed corporis
                  adipisci incidunt odit, nobis ipsa sapiente doloribus, velit
                  vero sunt vitae, possimus id ipsum!
                </p>
              </div>
              <div class="goal--1">
                <ion-icon name="laptop-outline"></ion-icon>
                <h3>design oriented</h3>
                <p>
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                  Mollitia omnis obcaecati deleniti! Nam quam sed corporis
                  adipisci incidunt odit, nobis ipsa sapiente doloribus, velit
                  vero sunt vitae, possimus id ipsum!
                </p>
              </div>
              <div class="goal--1">
                <ion-icon name="time-outline"></ion-icon>
                <h3>ontime support</h3>
                <p>
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                  Mollitia omnis obcaecati deleniti! Nam quam sed corporis
                  adipisci incidunt odit, nobis ipsa sapiente doloribus, velit
                  vero sunt vitae, possimus id ipsum!
                </p>
              </div>
              <div class="goal--1">
                <ion-icon name="help-buoy-outline"></ion-icon>
                <h3>free consultation</h3>
                <p>
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                  Mollitia omnis obcaecati deleniti! Nam quam sed corporis
                  adipisci incidunt odit, nobis ipsa sapiente doloribus, velit
                  vero sunt vitae, possimus id ipsum!
                </p>
              </div>
            </div>
          </div>
          <div class="header--buttons">
            <a href="contact_page.php" class="btn--full">Get Started &rarr;</a>
          </div>
        </section>
        <section class="about--us">
          <div class="container">
            <h2>company</h2>
            <div class="about">
<div class="about--text">
  <h3>We help you <br/> make better decisions</h3> <br>
<p>

  Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas deserunt veniam ea est hic consequuntur sequi. Voluptate aut repudiandae omnis ipsa officiis minus, maiores ea. Voluptates incidunt repudiandae tempora quaerat!
Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus in optio illum maiores. Dolore quo eligendi
</p> 
<div class="header--buttons">
  <a href="about_page.php" class="btn--full">Learn more</a>
</div> 
</div>
              <div class="image--sec">
                <img src="./dist/img/wallpaperflare.com_wallpaper (2)-min.jpg" alt="about image">
              </div>
            </div>
          </div>
        </section>
        <section class="get--started">
          <div class="container">
            <h3>Have a project in mind?</h3>
            <div class="header--buttons">
              <a href="contact_page.php" class="btn--full">Get started &rarr;</a>
            </div>
          </div>
        </section>
      </main>
      <!-- <footer>
        <div class="container">
          <div class="footer--about">
            <h3>About us</h3>
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eligendi
              debitis accusamus ipsam molestiae ex doloremque ea itaque
              praesentium. Aliquam corporis vitae recusandae? Aspernatur vel
              illo tempore necessitatibus iure similique perferendis.
            </p>
          </div>
          <div class="quick--links">
            <h3>Quick Links</h3>
            <ul>
              <li><a href="#">About</a></li>
              <li><a href="#services--section">Services</a></li>
              <li><a href="#contact--section">contact us</a></li>
              <li><a href="#contact--section"> Get started </a></li>
            </ul>
          </div>
          <div class="social--links">
            <h3>Contact Us</h3>
            <div class="email--and--phone">
              <p>+233 24 518 1570 / +233 12 345 6789</p>
              Email:
              <a href="mailto:companyname@gmail.com">companyname@gmail.com</a>
            </div>
            <h3>Let's Connect</h3>
            <ul>
              <li>
                <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
              </li>
              <li>
                <a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
              </li>
              <li>
                <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
              </li>
              <li>
                <a href="#"><ion-icon name="logo-linkedin"></ion-icon></a>
              </li>
            </ul>
          </div>
        </div>
        <div class="copyright">
          <p>All rights reserved &copy; copyright 2022. || Machsoft Inc</p>
        </div>
      </footer> -->

      <?php
include_once("footer.php");
      ?>
    </div>
<?php
include_once("script_links.php");?>
  </body>
</html>
