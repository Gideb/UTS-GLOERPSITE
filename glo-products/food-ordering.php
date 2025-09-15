<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>GLO | Restaurant Management System</title>
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
      <div class="about-section food">
        <h2>GLO Food Ordering System</h2>
        <p>Streamlining food delivery and takeout services</p>
      </div>
    </section>

    <section id="hero-section">
      <div class="hero-section">
        <h3>
          Seamless online ordering, efficient management, and enhanced
          customer experience.
        </h3>
        <p>Serve more customers, faster and smarter!</p>

        <div class="hero-image">
          <img
            src="../images/glo-products/banners/gloposshot.png"
            alt="glo food ordering system screenshot" />
        </div>
      </div>
    </section>

    <section id="features">
      <div class="feature-grid-container">
        <div class="feature-img">
          <img
            src="../images/glo-products/glo-food-ordering-system.jpg"
            alt="glo POS with inventory management system logo" />
        </div>
        <div class="feature-text food">
          <h3>ABOUT GLO Food Ordering System</h3>
          <p>
            <strong>GLO Food Ordering System</strong> is a comprehensive,
            web-based solution designed for restaurants, cafes, and food
            delivery businesses. It streamlines the entire ordering process,
            from menu browsing to payment and delivery, making operations
            smoother and more efficient.
          </p>
          <p>
            Customers can easily place orders online, customize their meals,
            and choose delivery or pickup options. The system supports
            real-time order tracking, automated notifications, and secure
            payment processing, ensuring a hassle-free experience for both
            customers and staff.
          </p>
          <p>
            Powerful management tools allow you to update menus, manage
            inventory, track sales, and analyze customer preferences.
            Integration with POS and kitchen display systems helps reduce
            errors and speed up service.
          </p>
          <p>
            GLO Food Ordering System is scalable and secure, suitable for
            single outlets or multi-location chains. Enhance your business
            efficiency, boost sales, and deliver exceptional service with GLO.
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
      <div class="installation food">
        <p>
          GLO Restaurant Management System can be installed in two modes to
          suit your business needs:
        </p>
        <div class="installation-grid">
          <div class="installation-card online">
            <h4 class="food">Online Installation</h4>
            <p>
              Access the system from anywhere, manage data in real-time, and benefit from automatic updates and cloud backups.
            </p>
          </div>
          <div class="installation-card offline">
            <h4 class="food">Offline Installation</h4>
            <p>
              Ideal for businesses with limited internet connectivity. All features are available locally, and data is stored securely on
              your premises.
            </p>
          </div>
        </div>
      </div>
    </section> -->

   <!--  <section id="contact">
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
  <?php include '../includes/footer.php'; ?>

  <script src="../js/script.js"></script>

</body>

</html>