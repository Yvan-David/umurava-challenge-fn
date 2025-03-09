<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Contact Us - Your Company</title>
    
    <?php include('topresources.php') ?>

    <style>
        /* Contact Section Customization */
        #contact {
            color: #b4bb08;
        }

        .info-item i {
            color: #007bff;
        }

        /* Button Hover Effects */
        button:hover {
            background-color: #007bff;
            color: white;
            cursor: pointer;
        }

        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }

        .loading, .sent-message, .error-message {
            display: none;
        }

        .error-message {
            color: red;
            font-size: 14px;
        }

        .sent-message {
            color: green;
            font-size: 16px;
        }

        /* Responsiveness */
        @media (max-width: 768px) {
            .col-lg-4, .col-lg-8 {
                width: 100%;
                margin-bottom: 20px;
            }
        }
    </style>
</head>

<body class="index-page">
    <?php include('header.php') ?>

    <main class="main">
        <!-- Page Title -->
        <div class="page-title" data-aos="fade">
            <div class="heading">
                <div class="container">
                    <div class="row d-flex justify-content-center text-center">
                        <div class="col-lg-8">
                            <h1>Contact Us</h1>
                            <p class="mb-0">We're here to help! Reach out to us for any inquiries or feedback.</p>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="breadcrumbs">
                <div class="container">
                    <ol>
                        <li><a href="index.php">Home</a></li>
                        <li class="current">Contact</li>
                    </ol>
                </div>
            </nav>
        </div><!-- End Page Title -->

        <!-- Contact Section -->
        <section id="contact" class="contact section">
            <!-- Google Maps -->
            <div class="mb-5" data-aos="fade-up" data-aos-delay="400">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1981.198570397285!2d30.097269390233375!3d-1.963933214945528!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19dca76a09f0d1b9%3A0xf56b272a3e56f4c6!2sKG%2014%20Ave%2C%20Gasabo%2C%20Kigali%2C%20Rwanda!5e1!3m2!1sen!2srw!4v1734934878487!5m2!1sen!2srw" style="width: 100%; height: 100%; border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div><!-- End Google Maps -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-4">
                    <div class="col-lg-4">
                        <!-- Contact Info Items -->
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-geo-alt flex-shrink-0"></i>
                            <div>
                                <h3>Address</h3>
                                <p>KG 14 Ave, Kigali, Gasabo</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-telephone flex-shrink-0"></i>
                            <div>
                                <h3>Call Us</h3>
                                <p>+250 782 079 519</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h3>Email Us</h3>
                                <p><a href="mailto:icyerekezo3@gmail.com">icyerekezo3@gmail.com</a></p>
                            </div>
                        </div><!-- End Info Item -->
                    </div>

                    <div class="col-lg-8">
                        <!-- Contact Form -->
                        <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Your Name</label>
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Your Name" required>
                                </div>

                                <div class="col-md-6">
                                    <label for="email" class="form-label">Your Email</label>
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Your Email" required>
                                </div>

                                <div class="col-md-12">
                                    <label for="subject" class="form-label">Subject</label>
                                    <input type="text" name="subject" id="subject" class="form-control" placeholder="Subject" required>
                                </div>

                                <div class="col-md-12">
                                    <label for="message" class="form-label">Message</label>
                                    <textarea name="message" id="message" class="form-control" rows="6" placeholder="Your Message" required></textarea>
                                </div>

                                <div class="col-md-12 text-center">
                                    <!-- Loading and Success/Error Messages -->
                                    <div class="loading">Sending...</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>

                                    <!-- Submit Button -->
                                    <button type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div><!-- End Contact Form -->
                </div>
            </div>
        </section><!-- End Contact Section -->
    </main>

    <?php include 'footer.php'; ?>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <?php include('bottomresources.php') ?>
</body>

</html>
