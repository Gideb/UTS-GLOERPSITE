<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>GLO | Hotel Management System</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="../css/style.css" />
  <link rel="stylesheet" href="../css/singleProduct.css" />
  <link rel="stylesheet" href="../css/product-colors.css" />

</head>

<body>

  <?php include '../includes/gloProdHeader.php' ?>

  <main>
    <section id="about-section">
      <div class="about-section hotel">
        <h2>GLO Hotel Management System</h2>
        <p>Improving guest experiences</p>
      </div>
    </section>

    <section id="hero-section">
      <div class="hero-section">
        <h3>
          Elevate your hospitality business with GLO Hotel Management
          System—an all-in-one platform for managing reservations, guest
          services, billing, and more.
        </h3>
        <p>
          Deliver exceptional guest experiences and streamline hotel
          operations!
        </p>

        <div class="hero-image">
          <img
            src="../images/glo-products/banners/gloposshot.png"
            alt="glo hotel management system screenshot" />
        </div>
      </div>
    </section>

    <section id="features">
      <div class="feature-grid-container">
        <div class="feature-img">
          <img
            src="../images/glo-products/glo-hms.jpg"
            alt="glo POS with inventory management system logo" />
        </div>
        <div class="feature-text hotel">
          <h3>ABOUT GLO Hotel Management System</h3>
          <p>
            <strong>GLO Hotel Management System</strong> is a comprehensive,
            web-based solution designed to simplify and automate hotel
            operations. The system offers intuitive tools for managing
            reservations, room assignments, check-ins, check-outs, and guest
            profiles.
          </p>
          <p>
            Staff can efficiently handle billing, payments, and inventory,
            while integrated housekeeping and maintenance modules ensure rooms
            are always ready for guests. Real-time reporting and analytics
            provide valuable insights into occupancy rates, revenue, and guest
            preferences.
          </p>
          <p>
            GLO HMS supports multi-property management, making it ideal for
            both independent hotels and large chains. With secure data
            handling and customizable features, you can enhance operational
            efficiency, reduce errors, and focus on delivering outstanding
            service.
          </p>
        </div>
      </div>
    </section>

    <section id="demo">
      <h3>Watch Our Demo</h3>
      <div class="demo-video">
        <iframe
          src="https://www.youtube.com/embed/https://www.youtu.be/b1_yZDLJlA0"
          width="100%"
          height="600"
          title="demo video"
          frameborder="0"
          allowfullscreen></iframe>
      </div>
    </section>

    <?php include '../includes/installation.php' ?>
    <?php include '../includes/gotoContDemo.php' ?>

    <!--  <section id="installation">
      <h3>Installation Type</h3>
      <div class="installation hotel">
        <p>
          GLO Hotel Management System can be installed in two modes to
          suit your business needs:
        </p>
        <div class="installation-grid">
          <div class="installation-card online">
            <h4 class="hotel">Online Installation</h4>
            <p>
              Access the system from anywhere, manage data in real-time, and
              benefit from automatic updates and cloud backups.
            </p>
          </div>
          <div class="installation-card offline">
            <h4 class="hotel">Offline Installation</h4>
            <p>
              Ideal for businesses with limited internet connectivity. All
              features are available locally, and data is stored securely on
              your premises.
            </p>
          </div>
        </div>
      </div>
    </section> -->

    <!-- <section id="contact">
      <div class="contact">
        <h4>
          Do you have any questions or inquiries? Feel free to reach out to us!
        </h4>
        <div class="button-container">
          <a class="btn" href="contact.php">Request a Demo</a>
          <a class="btn" href="contact.php">Contact Us</a>
        </div>
      </div>
    </section> -->
  </main>

  <!-- Footer -->

  <?php include '../includes/footer.php' ?>

  <script src="../js/script.js"></script>
</body>

</html>