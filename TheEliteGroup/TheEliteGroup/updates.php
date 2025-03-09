<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Events - Mentor Bootstrap Template</title>
    <?php include('topresources.php') ?>
    <style>
    .custom-btn {
        color: #ffa500;
        border: 2px solid #ffa500;
        background-color: transparent;
        transition: all 0.3s ease;
    }

    .custom-btn:hover {
        color: #fff;
        background-color: #ffa500;
        border-color: #ffa500;
        text-decoratio n: none;
    }


    .pagination {
        display: flex;
        list-style: none;
        gap: 8px;
    }

    .pagination a {
        display: inline-block;
        padding: 10px 20px;
        color: white;
        background-color: #ffa500;
        text-decoration: none;
        border-radius: 5px;
        transition: all 0.3s ease;
        font-weight: bold;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .pagination a:hover {
        background-color: #e69500;
        color: #fff;
        transform: translateY(-3px);
        box-shadow: 0 6px 8px rgba(0, 0, 0, 0.15);
    }

    .pagination a.active {
        background-color: #ff8000;
        color: #fff;
        border: 2px solid #ffa500;
    }

    .pagination a.prev,
    .pagination a.next {
        font-size: 0.9rem;
        font-style: italic;
    }

    @media (max-width: 600px) {
        .pagination a {
            padding: 8px 12px;
            font-size: 0.9rem;
        }
    }
    </style>

</head>

<body class="index-page">

    <?php include('header.php') ?>
    <style>

    </style>
    <main class="main my-5">

        <div class="container">


            <div class="row ">
                <div class="col-lg-12">
                    <div class="row ">
                        <div class="col-12">
                            <div class="section-title d-flex justify-content-between align-items-center">
                                <h4 class="m-0 text-uppercase  fw-bold" id="latest-heading"> Updates
                                </h4>
                                <!-- <a class="text-decoration-none text-secondary fw-medium" href="updates.php">View All</a> -->
                            </div>
                        </div>
                    </div>
                    <div class="row g-4">
                        <div class="col-lg-4">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="position-relative">
                                    <img class="card-img-top rounded-top"
                                        src="https://via.placeholder.com/700x435?text=Placeholder+Image"
                                        alt="News Image">

                                    <!-- <span class="badge bg-primary position-absolute top-0 start-0 m-2 px-3 py-1 text-uppercase">Business</span> -->
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-secondary text-uppercase fw-bold">
                                        Lorem ipsum dolor sit amet elit...
                                    </h5>
                                    <p class="small text-muted mb-3"> <span class="text-dark fw-medium">Jan 01,
                                            2045</span></p>
                                    <p class="card-text text-muted mb-4">Dolor lorem eos dolor duo et eirmod sea. Dolor
                                        sit magna rebum clita rebum dolor stet amet justo...</p>
                                    <a href="single.php" class="btn custom-btn btn-sm">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="position-relative">
                                    <img class="card-img-top rounded-top"
                                        src="https://via.placeholder.com/700x435?text=Placeholder+Image"
                                        alt="News Image">
                                    <!-- <span class="badge bg-success position-absolute top-0 start-0 m-2 px-3 py-1 text-uppercase">Finance</span> -->
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-secondary text-uppercase fw-bold">
                                        Lorem ipsum dolor sit amet elit...
                                    </h5>
                                    <p class="small text-muted mb-3"> <span class="text-dark fw-medium">Jan 02,
                                            2045</span></p>
                                    <p class="card-text text-muted mb-4">Dolor lorem eos dolor duo et eirmod sea. Dolor
                                        sit magna rebum clita rebum dolor stet amet justo...</p>
                                    <a href="single.php" class="btn custom-btn btn-sm">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="position-relative">
                                    <img class="card-img-top rounded-top"
                                        src="https://via.placeholder.com/700x435?text=Placeholder+Image"
                                        alt="News Image">
                                    <!-- <span class="badge bg-success position-absolute top-0 start-0 m-2 px-3 py-1 text-uppercase">Finance</span> -->
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-secondary text-uppercase fw-bold">
                                        Lorem ipsum dolor sit amet elit...
                                    </h5>
                                    <p class="small text-muted mb-3"> <span class="text-dark fw-medium">Jan 02,
                                            2045</span></p>
                                    <p class="card-text text-muted mb-4">Dolor lorem eos dolor duo et eirmod sea. Dolor
                                        sit magna rebum clita rebum dolor stet amet justo...</p>
                                    <a href="single.php" class="btn custom-btn btn-sm">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="position-relative">
                                    <img class="card-img-top rounded-top"
                                        src="https://via.placeholder.com/700x435?text=Placeholder+Image"
                                        alt="News Image">
                                    <!-- <span class="badge bg-success position-absolute top-0 start-0 m-2 px-3 py-1 text-uppercase">Finance</span> -->
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-secondary text-uppercase fw-bold">
                                        Lorem ipsum dolor sit amet elit...
                                    </h5>
                                    <p class="small text-muted mb-3"> <span class="text-dark fw-medium">Jan 02,
                                            2045</span></p>
                                    <p class="card-text text-muted mb-4">Dolor lorem eos dolor duo et eirmod sea. Dolor
                                        sit magna rebum clita rebum dolor stet amet justo...</p>
                                    <a href="single.php" class="btn custom-btn btn-sm">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="position-relative">
                                    <img class="card-img-top rounded-top"
                                        src="https://via.placeholder.com/700x435?text=Placeholder+Image"
                                        alt="News Image">
                                    <!-- <span class="badge bg-success position-absolute top-0 start-0 m-2 px-3 py-1 text-uppercase">Finance</span> -->
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-secondary text-uppercase fw-bold">
                                        Lorem ipsum dolor sit amet elit...
                                    </h5>
                                    <p class="small text-muted mb-3"> <span class="text-dark fw-medium">Jan 02,
                                            2045</span></p>
                                    <p class="card-text text-muted mb-4">Dolor lorem eos dolor duo et eirmod sea. Dolor
                                        sit magna rebum clita rebum dolor stet amet justo...</p>
                                    <a href="single.php" class="btn custom-btn btn-sm">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="position-relative">
                                    <img class="card-img-top rounded-top"
                                        src="https://via.placeholder.com/700x435?text=Placeholder+Image"
                                        alt="News Image">
                                    <!-- <span class="badge bg-success position-absolute top-0 start-0 m-2 px-3 py-1 text-uppercase">Finance</span> -->
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-secondary text-uppercase fw-bold">
                                        Lorem ipsum dolor sit amet elit...
                                    </h5>
                                    <p class="small text-muted mb-3"> <span class="text-dark fw-medium">Jan 02,
                                            2045</span></p>
                                    <p class="card-text text-muted mb-4">Dolor lorem eos dolor duo et eirmod sea. Dolor
                                        sit magna rebum clita rebum dolor stet amet justo...</p>
                                    <a href="single.php" class="btn custom-btn btn-sm">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="position-relative">
                                    <img class="card-img-top rounded-top"
                                        src="https://via.placeholder.com/700x435?text=Placeholder+Image"
                                        alt="News Image">
                                    <!-- <span class="badge bg-success position-absolute top-0 start-0 m-2 px-3 py-1 text-uppercase">Finance</span> -->
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-secondary text-uppercase fw-bold">
                                        Lorem ipsum dolor sit amet elit...
                                    </h5>
                                    <p class="small text-muted mb-3"> <span class="text-dark fw-medium">Jan 02,
                                            2045</span></p>
                                    <p class="card-text text-muted mb-4">Dolor lorem eos dolor duo et eirmod sea. Dolor
                                        sit magna rebum clita rebum dolor stet amet justo...</p>
                                    <a href="single.php" class="btn custom-btn btn-sm">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="position-relative">
                                    <img class="card-img-top rounded-top"
                                        src="https://via.placeholder.com/700x435?text=Placeholder+Image"
                                        alt="News Image">
                                    <!-- <span class="badge bg-success position-absolute top-0 start-0 m-2 px-3 py-1 text-uppercase">Finance</span> -->
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-secondary text-uppercase fw-bold">
                                        Lorem ipsum dolor sit amet elit...
                                    </h5>
                                    <p class="small text-muted mb-3"> <span class="text-dark fw-medium">Jan 02,
                                            2045</span></p>
                                    <p class="card-text text-muted mb-4">Dolor lorem eos dolor duo et eirmod sea. Dolor
                                        sit magna rebum clita rebum dolor stet amet justo...</p>
                                    <a href="single.php" class="btn custom-btn btn-sm">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="position-relative">
                                    <img class="card-img-top rounded-top"
                                        src="https://via.placeholder.com/700x435?text=Placeholder+Image"
                                        alt="News Image">
                                    <!-- <span class="badge bg-warning text-dark position-absolute top-0 start-0 m-2 px-3 py-1 text-uppercase">Technology</span> -->
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title text-secondary text-uppercase fw-bold">
                                        Lorem ipsum dolor sit amet elit...
                                    </h5>
                                    <p class="small text-muted mb-3"> <span class="text-dark fw-medium">Jan 03,
                                            2045</span></p>
                                    <p class="card-text text-muted mb-4">Dolor lorem eos dolor duo et eirmod sea. Dolor
                                        sit magna rebum clita rebum dolor stet amet justo...</p>
                                    <a href="single.php" class="btn custom-btn btn-sm">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row p-2 my-5 " style="">

                <div class="col-lg-12 d-flex align-items-center justify-content-center">


                    <div class="pagination">
                        <a href="#" class="prev">Previous</a>
                        <a href="#">1</a>
                        <a href="#" class="active">2</a>
                        <a href="#">3</a>
                        <a href="#">4</a>
                        <a href="#">5</a>
                        <a href="#" class="next">Next</a>
                    </div>

                </div>



            </div>


        </div>


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