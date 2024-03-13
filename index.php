<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>toyin ajiboye web portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Toyin Ajiboye portfolio, web developer, Software, mobile developer, IT Support" name="keyword">
    <meta content="Toyin Ajiboye web portfolio" name="description">
    <meta content="TOYIN AJIBOYE" name="author">

    <link href="img/favicon.ico" rel="icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="lib/owlcarousel/assets/owl.carousel.min.css">
    <link href="css/normalize.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!--header sectin-->
    <header>
        <?php require_once("./component/navbar.php") ?>
        <?php require_once("./component/carousel.php") ?>
    </header>
    <!--main section-->
    <main class="main">
        <!-- About us --> <?php require_once("./component/about-us.php") ?>
        <!-- Services Start -->
        <?php require_once("./component/service-start.php") ?>
        <!-- Features plan -->
        <?php require_once("./component/feature-plan.php") ?>
        <!-- Pricing Plan -->
        <?php require_once("./component/pricing-plan.php") ?>
        <!-- Testimonial-->
        <?php require_once("./component/testimony.php") ?>
        <!-- Blog-->
        <?php require_once("./component/blog.php") ?>
    </main>
    <!--footer section-->
    
    <!-- <?php require_once("./component/footer.php") ?> -->
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-up"></i></a>
    
   
    </script>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" async></script>
    <script src="lib/easing/easing.min.js" ></script>
    <script src="lib/waypoints/waypoints.min.js" ></script>
    <script src="lib/counterup/counterup.min.js" ></script>
    <script src="lib/owlcarousel/owl.carousel.min.js" ></script>
    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js" ></script>
    <script src="mail/contact.js" ></script>
    <!-- Template Javascript -->
    <script src="js/lazysizes.min.js" ></script>
    <script src="js/main.js" ></script>
 
</body>
</html>