<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Toyin Ajiboye - Web Portfolio</title>
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
    <header>
    <?php require_once("./component/navbar.php") ?>
    <div class="container-fluid page-header d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5 mb-5">
        <h1 class="display-4 text-white mb-3 mt-0 mt-lg-5">Contact</h1>
        <div class="d-inline-flex text-white">
            <p class="m-0"><a class="text-white" href="">Home</a></p>
            <p class="m-0 px-2">/</p>
            <p class="m-0">Contact</p>
        </div>
    </div>
    </header>

    <main>
        <!-- Contact Start -->
        <div class="container-fluid py-5">
            <div class="container">
                <div class="text-center">
                    <small class="bg-primary text-white text-uppercase font-weight-bold text-center px-1">Get In Touch</small>
                    <h1 class="mt-2 mb-5">Contact For Any Queries</h1>
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <div class="d-flex align-items-center border mb-3 p-4">
                            <i class="fa fa-2x fa-map-marker-alt text-primary mr-3"></i>
                            <div class="d-flex flex-column">
                                <h5 class="font-weight-bold">Our Office</h5>
                                <p class="m-0">123 Street, New York, USA</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center border mb-3 p-4">
                            <i class="fa fa-2x fa-envelope-open text-primary mr-3"></i>
                            <div class="d-flex flex-column">
                                <h5 class="font-weight-bold">Email Us</h5>
                                <p class="m-0">info@toyinajiboye.com</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center border mb-3 mb-md-0 p-4">
                            <i class="fas fa-2x fa-phone-alt text-primary mr-3"></i>
                            <div class="d-flex flex-column">
                                <h5 class="font-weight-bold">Call Us</h5>
                                <p class="m-0">+234 7068801993</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="contact-form">
                            <div id="success"></div>
                            <form name="sentMessage" id="contactForm" novalidate="novalidate">
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="control-group">
                                            <input type="text" class="form-control p-4" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="control-group">
                                            <input type="email" class="form-control p-4" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                                            <p class="help-block text-danger"></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <input type="text" class="form-control p-4" id="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <textarea class="form-control" rows="5" id="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div>
                                    <button class="btn btn-primary font-weight-semi-bold px-4" style="height: 50px;" type="submit" id="sendMessageButton">Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->    
    </main>

    <?php require_once("./component/footer.php") ?>

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>