<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Events - Mentor Bootstrap Template</title>
    <?php include('topresources.php') ?>

</head>

<body class="index-page">

    <style>
    .section-title {
        padding: 15px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        background: #ffffff;
        border: 1px solid #dee2e6;
        border-left: 5px solid #ffcc00;

    }

    .tranding-carousel .owl-nav {
        position: absolute;
        width: auto;
        height: 30px;
        top: calc(50% - 15px);
        right: -7px;
        display: flex;
        align-items: center;
        justify-content: flex-end;
        z-index: 1;
        padding: 10px;
    }

    .tranding-carousel .owl-nav .owl-prev,
    .tranding-carousel .owl-nav .owl-next {
        position: relative;
        width: 30px;
        height: 30px;
        margin: 0 7px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #FFFFFF;
        background: transparent;
        border: 1px solid #FFFFFF;
        font-size: 16px;
        transition: .3s;

    }


    .tranding-carousel.bg-white .owl-nav .owl-prev,
    .tranding-carousel.bg-white .owl-nav .owl-next {
        color: #31404B;
        border-color: #31404B;
    }

    .back-to-top {
        position: fixed;
        display: none;
        right: 30px;
        bottom: 30px;
        z-index: 99;
    }

    p {
        text-align: justify;
    }
    </style>

    <?php include('header.php') ?>
    <style>

    </style>
    <main class="main my-5">





        <!-- News With Sidebar Start -->
        <div class="container-fluid mt-5">
            <div class="container">
                <style>
                /* Default styling for responsiveness */
                .news-detail-img {
                    width: 100%;
                    /* Ensure full width for mobile */
                    height: auto;
                    /* Maintain aspect ratio */
                }

                /* Adjust size for large screens */
                /* @media (min-width: 992px) {
              .news-detail-img {
                max-width: 80%;
                margin: 0 auto;
         

              }
            } */
                </style>

                <div class="row">
                    <div class="col-lg-8 p-5">
                        <!-- News Detail Start -->
                        <div class="position-relative mb-3">
                            <img class="img-fluid w-100 news-detail-img"
                                src="https://via.placeholder.com/700x435?text=Placeholder+Image" alt="News Image"
                                style="object-fit: cover;" />
                            <div class="bg-white border-top-0">
                                <div class="mb-3 pt-3">
                                    <a class="text-body text-decoration-none" href="">Jan 01, 2045</a>
                                </div>
                                <h1 class="mb-3 text-secondary text-uppercase font-weight-bold">
                                    Lorem ipsum dolor sit amet elit vitae porta diam...
                                </h1>
                                <p>
                                    Sadipscing labore amet rebum est et justo gubergren. Et eirmod ipsum sit diam ut
                                    magna lorem. Nonumy vero labore lorem sanctus rebum et lorem magna kasd, stet amet
                                    magna accusam consetetur eirmod. Kasd accusam sit ipsum sadipscing et at at sanctus
                                    et. Ipsum sit gubergren dolores et, consetetur justo invidunt at et aliquyam ut et
                                    vero clita. Diam sea sea no sed dolores diam nonumy, gubergren sit stet no diam kasd
                                    vero.
                                </p>
                                <p>
                                    Voluptua est takimata stet invidunt sed rebum nonumy stet, clita aliquyam dolores
                                    vero stet consetetur elitr takimata rebum sanctus. Sit sed accusam stet sit nonumy
                                    kasd diam dolores, sanctus lorem kasd duo dolor dolor vero sit et. Labore ipsum duo
                                    sanctus amet eos et. Consetetur no sed et aliquyam ipsum justo et, clita lorem sit
                                    vero amet amet est dolor elitr, stet et no diam sit. Dolor erat justo dolore sit
                                    invidunt.
                                </p>
                            </div>
                        </div>
                        <!-- News Detail End -->
                    </div>
                </div>

                <div class="row">

                    <a href="index.php"> <i class="fa fa-arrow-left"></i> back</a>

                </div>

            </div>
        </div>
        <!-- News With Sidebar End -->

        <!-- Back to Top -->
        <!-- <a href="#" class="btn btn-primary btn-square back-to-top"><i class="fa fa-arrow-up"></i></a> -->

    </main>

    <?php include 'footer.php'; ?>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <?php include('bottomresources.php') ?>

</body>

</html>