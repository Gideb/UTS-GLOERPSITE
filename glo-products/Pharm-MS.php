<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>GLO | Pharmacy Management System</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="../css/style.css" />
  <link rel="stylesheet" href="../css/singleProduct.css" />
  <link rel="stylesheet" href="../css/product-colors.css" />

</head>

<body>

  <!-- header section -->
  <?php include '../includes/gloProdHeader.php' ?>

  <main>
    <section id="about-section">
      <div class="about-section pharmacy">
        <h2>GLO Pharmacy Management System</h2>
        <p>Simplifying pharmacy operations and improving patient care.</p>
      </div>
    </section>

    <section id="hero-section">
      <div class="hero-section">
        <h3>
          Take control of your pharmacy with our system for inventory, sales,
          prescriptions, and customer management.
        </h3>
        <p>Deliver better service and streamline your pharmacy operations!</p>
        <div class="hero-image">
          <img
            src="../images/glo-products/banners/gloposshot.png"
            alt="glo pharmacy management system screenshot" />
        </div>

      </div>
    </section>

    <section id="features">
      <h3>ABOUT GLO Pharmacy Management System</h3>

      <div class="feature-grid-container">
        <div class="feature-img">
          <img
            src="../images/glo-products/glo-pharmacy-management-sys.jpg"
            alt="glo pharmacy management system logo" />
        </div>
        <div class="feature-text pharmacy">
          <p>
            <strong>GLO Pharmacy Management System</strong> is a
            comprehensive, web-based platform designed to automate and
            optimize pharmacy operations. The system enables efficient
            management of medicine inventory, sales, purchases, and supplier
            relationships.
          </p>
          <p>
            Pharmacists can easily process prescriptions, track stock levels,
            and manage expiry dates to ensure safe and reliable service.
            Integrated billing and accounting modules simplify financial
            transactions, while customer profiles and loyalty features help
            build lasting relationships.
          </p>
          <p>
            Advanced reporting tools provide insights into sales trends,
            inventory movement, and profitability. The system is built with
            security and compliance in mind, safeguarding sensitive data and
            supporting regulatory requirements.
          </p>
          <p>
            Whether you operate a single pharmacy or a chain, GLO adapts to
            your needs, helping you improve efficiency, reduce errors, and
            focus on delivering quality healthcare.
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

    <!-- <section id="installation">
      <h3>Installation Type</h3>
      <div class="installation pharmacy">
        <p>
          GLO Pharmacy Management System can be installed in two modes to
          suit your business needs:
        </p>
        <div class="installation-grid">
          <div class="installation-card online">
            <h4 class="pharmacy">Online Installation</h4>
            <p>
              Access the system from anywhere, manage data in real-time, and
              benefit from automatic updates and cloud backups.
            </p>
          </div>
          <div class="installation-card offline">
            <h4 class="pharmacy">Offline Installation</h4>
            <p>
              Ideal for businesses with limited internet connectivity. All features are available locally, and data is stored securely on
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