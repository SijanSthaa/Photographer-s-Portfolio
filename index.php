<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link rel="stylesheet" href="styles.css" />
  <title>Web Design </title>
</head>

<body>
  <header class="header" id="home">
    <nav>
      <div class="nav__header">
        <div class="nav__logo">
          <a href="#">
            <img src="assets/logo-white.png" alt="logo" />
          </a>
        </div>
        <div class="nav__menu__btn" id="menu-btn">
          <i class="ri-menu-line"></i>
        </div>
      </div>
      <ul class="nav__links" id="nav-links">
        <li><a href="#home">HOME</a></li>
        <li><a href="#about">ABOUT US</a></li>

        <li class="nav__logo">
          <a href="#">
            <img src="assets/logo-white.png" alt="logo" />
          </a>
        </li>
        <li><a href="#contact">CONTACT US</a></li>
        <li><a href="#service">SERVICES</a></li>
      </ul>
    </nav>
  </header>

  <div class="section__container about__container" id="about">
  <?php
  include 'connection.php';
  $query = "SELECT Description FROM home";
  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_assoc($result);
      $description = $row['Description'];
  } else {
      $description = "Default description"; // Provide a default if no description is found
  }
  mysqli_close($conn);
  ?>

  <div class="col-12 col-lg-8 col-xl-6">
    <div class="welcome-text">
      <h2 class="section__header">WE CAPTURE THE MOMENTS</h2>
      <p data-animation="bounceInUp" data-delay="500ms"><?php echo $description; ?></p>
      <p class="section__description">
      Whether it's a milestone event, a candid portrait, or the breathtaking
      beauty of nature, we strive to encapsulate the essence of every moment,
      ensuring that your cherished memories last a lifetime. Trust us to
      capture the magic of your life's journey, one frame at a time.
    </p>
    <img src="assets/logo-dark.png" alt="logo" />
    </div>
  </div>
</div>



  <div class="section__container portfolio__container">
    <h2 class="section__header">~ SERVICE OPTIONS ~</h2>
    <div class="portfolio__grid">
      <div class="portfolio__card">
        <a href="https://ibb.co/P4W4qvv"><img src="https://i.ibb.co/k0D0Nss/potrait.jpg" alt="potrait" border="0"></a>
        <div class="portfolio__content">

        </div>
      </div>
      <div class="portfolio__card">
        <a href="https://ibb.co/Swd1TWG"><img src="https://i.ibb.co/k29rnkv/a1d5726e2d6db066bdc953eb4f152ae7.jpg"
            alt="a1d5726e2d6db066bdc953eb4f152ae7" border="0"></a>
        <div class="portfolio__content">

        </div>
      </div>
      <div class="portfolio__card">
        <a href="https://ibb.co/DC9syvr"><img src="https://i.ibb.co/4T89GX1/d2430f3d89355d6ca5f6ed77389f04b6.jpg"
            alt="d2430f3d89355d6ca5f6ed77389f04b6" border="0"></a>
        <div class="portfolio__content">

        </div>
      </div>
    </div>
  </div>

  <section class="service" id="service">
    <div class="section__container service__container">
      <h2 class="section__header">~ SERVICES ~</h2>
      <p class="section__description">
        At Capturer, we offer a range of professional photography services
        tailored to meet your unique needs. With a commitment to excellence
        and creativity, we strive to exceed your expectations, delivering
        captivating visuals that tell your story with authenticity and
        passion.
      </p>
      <div class="service__grid">
        <div class="service__card">
          <h4>Portrait Sessions</h4>
          <p>
            Our portrait sessions are designed to showcase your personality
            and style in stunning imagery.
          </p>
        </div>
        <div class="service__card">
          <h4>Maternity Sessions</h4>
          <p>
            Embrace the beauty and miracle of new life with our maternity and
            newborn photography sessions.
          </p>
        </div>
        <div class="service__card">
          <h4>Family Sessions</h4>
          <p>
            Cherish the bond of family with our custom-designed playful candid
            moments and portrait sessions.
          </p>
        </div>
      </div>
    </div>
  </section>
  <section class="section__container gallery__container">
    <div class="container">
      <h1 class="mt-5">Our Work</h1>
      <div class="row">
        <div class="gallery">
        <?php
include 'connection.php';
$query = "SELECT img_name FROM image";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
  echo '<div style="display: flex; flex-wrap: wrap; justify-content: space-around;">'; // Container with flexbox
  while ($row = mysqli_fetch_assoc($result)) {
      echo '<div style="width: 30%; margin: 10px; text-align: center;">'; // Adjust width to fit 3 in a row
      echo '<img src="images/' . $row['img_name'] . '" alt="Image" style="width: 100%;">'; // Adjust image size to fit container
      echo '</div>';
  }
  echo '</div>'; // End of container
} else {
  echo '<p>No images found in the database.</p>';
}
?>

        </div>
      </div>
  </section>

  <section class="blog" id="blog">
    <div class="section__container blog__container">
      <div class="blog__content">
        <h2 class="section__header">~ LATEST BLOG ~</h2>
        <h4>Capturing Emotion in Every Frame</h4>
        <p>
          This blog post delves into the importance of storytelling in
          photography and how Capturer approaches capturing emotion and
          narrative in their work. Readers will discover the techniques and
          strategies used by professional photographers to evoke emotion,
          convey meaning, and create compelling visual narratives that
          resonate with viewers on a deep level.
        </p>
        <div class="blog__btn">
          <button class="btn">Read More</button>
        </div>
      </div>
    </div>
  </section>

  <section class="section__container instagram__container">
    <h2 class="section__header">~ INSTAGRAM ~</h2>
    <div class="instagram__flex">
      <img src="assets/image-1.jpg" alt="instagram" />
      <img src="assets/image-2.jpg" alt="instagram" />
      <img src="assets/image-3.jpg" alt="instagram" />
      <img src="assets/image-4.jpg" alt="instagram" />
      <img src="assets/image-5.jpg" alt="instagram" />
      <img src="assets/image-6.jpg" alt="instagram" />
      <img src="assets/image-7.jpg" alt="instagram" />
      <img src="assets/image-8.jpg" alt="instagram" />
    </div>
  </section>

  <footer id="contact">
    <div class="section__container footer__container">
      <div class="footer__col">
        <img src="assets/logo-dark.png" alt="logo" />
        <div class="footer__socials">
          <a href="#"><i class="ri-facebook-fill"></i></a>
          <a href="#"><i class="ri-instagram-line"></i></a>
          <a href="#"><i class="ri-twitter-fill"></i></a>
          <a href="#"><i class="ri-youtube-fill"></i></a>
          <a href="#"><i class="ri-pinterest-line"></i></a>
        </div>
      </div>
      <!-- contact section -->
      <section id="contact" class="py-7">
        <div class="container">
          <div class="contact-content flex">
            <div class="contact-left">
              <div class="title">
                <h2>Contact Us</h2>
              </div>
              <p class="lead"><i class="fas fa-phone-alt"></i> +977 9867186706</p>
              <p class="lead"><i class="fas fa-envelope"></i> contact@gmail.com</p>
              <form action="contact_form.php" method="POST">
                <input type="text" name="name" placeholder="Your name here ..." required>
                <input type="email" name="email" placeholder="Your email here" required>
                <input type="submit" class="btn-submit btn" value="Submit">
              </form>
              <?php
              include 'connection.php';  // Include the database connection file
              
              if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = $_POST['name'];
                $email = $_POST['emsil'];

                // Sanitize inputs to prevent SQL injection
                $name = mysqli_real_escape_string($conn, $name);
                $email = mysqli_real_escape_string($conn, $email);

                // Insert data into database
                $sql = "INSERT INTO contact (Name, Emsil) VALUES ('$name', '$email')";

                if ($conn->query($sql) === TRUE) {
                  echo "New record created successfully";
                } else {
                  echo "Error: " . $sql . "<br>" . $conn->error;
                }
              }

              // Close database connection
              $conn->close();
              ?>
              </form>
            </div>
          </div>
      </section>
      <!-- end of contact section -->


      <div class="footer__col">
        <h4>STAY IN TOUCH</h4>
        <p>
          Keep up-to-date with all things Capturer! Join our community and
          never miss a moment!
        </p>
      </div>
    </div>
    <div class="footer__bar">
      Copyright © 2024 Sijan Web Design. All rights reserved.
    </div>
  </footer>

  <script src="https://unpkg.com/scrollreveal"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="main.js"></script>
</body>

</html>