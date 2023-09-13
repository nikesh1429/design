<?php
include('includes/connect.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nikesh Store</title>
    <!-- BOOTSTRAP CSS LINK-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- FONT AWES-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--JAVASCRIPT LINK-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
    <!--INTERNAL STYLE SHEET-->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!--NAVABAR-->
    <div class="container-fluid p-0">

        <!--FIRST CHILD TO DISPLAY NAVIGATIONA BAR-->
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container-fluid">
                <img src="./images/logo.png" alt="logo" class="logo">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Product</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i><sup>1</sup></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Total Price: 100/-</a>
                        </li>

                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-light" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>

        <!--SECOND CHILD TO USERNAME DISPLAY-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a href="#" class="nav-link">Welcome Guest</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Login</a>
                </li>
            </ul>
        </nav>

        <!--THIRD CHILD TO STORE NAME-->
        <div class="bg-light">
            <h3 class="text-center ">Nikesh Store</h3>
            <p class="text-center">
                Communication is at the heart of e-commerce and community.
            </p>
        </div>

        <!--FOURTH CHILD TO PRODUCT-->
        <div class="row">
            <div class="col-md-10">
                <!--PRODUCTS-->
                <div class="row">

                    <!--Product 1-->
                    <div class="col-md-4 mb-2">
                        <div class="card">
                            <img class="card-img-top" src="./images/apple_watch1.png" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-info">Add to Cart</a>
                                <a href="#" class="btn btn-secondary">View More</a>
                            </div>
                        </div>
                    </div>
                    <!--Product 2-->
                    <div class="col-md-4 mb-2">
                        <div class="card">
                            <img class="card-img-top" src="./images/pebble_watch1.png" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-info">Add to Cart</a>
                                <a href="#" class="btn btn-secondary">View More</a>
                            </div>
                        </div>
                    </div>
                    <!--Product 3-->
                    <div class="col-md-4 mb-2">
                        <div class="card">
                            <img class="card-img-top" src="./images/noice_watch1.png" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-info">Add to Cart</a>
                                <a href="#" class="btn btn-secondary">View More</a>
                            </div>
                        </div>
                    </div>
                    <!--Product 4-->
                    <div class="col-md-4 mb-2">
                        <div class="card">
                            <img class="card-img-top" src="./images/hammer_watch1.png" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-info">Add to Cart</a>
                                <a href="#" class="btn btn-secondary">View More</a>
                            </div>
                        </div>
                    </div>
                    <!--Product 5-->
                    <div class="col-md-4 mb-2">
                        <div class="card">
                            <img class="card-img-top" src="./images/apple_watch2.png" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-info">Add to Cart</a>
                                <a href="#" class="btn btn-secondary">View More</a>
                            </div>
                        </div>
                    </div>
                    <!--Product 6-->
                    <div class="col-md-4 mb-2">
                        <div class="card">
                            <img class="card-img-top" src="./images/noice_watch2.png" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-info">Add to Cart</a>
                                <a href="#" class="btn btn-secondary">View More</a>
                            </div>
                        </div>
                    </div>
                    <!--Product 7-->
                    <div class="col-md-4 mb-2">
                        <div class="card">
                            <img class="card-img-top" src="./images/mac.png" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the card's content.</p>
                                <a href="#" class="btn btn-info">Add to Cart</a>
                                <a href="#" class="btn btn-secondary">View More</a>
                            </div>
                        </div>
                    </div>
                    <!--Product 8-->
                    <div class="col-md-4 mb-2">
                        <div class="card">
                            <img class="card-img-top" src="./images/a23.png" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Samsung Galaxy A23 5G</h5>
                                < class="card-text">Samsung Galaxy A23 5G, Light Blue (6GB, 128GB Storage) with Offer
                                    10% Off
                                </p>
                                <a href="#" class="btn btn-info">Add to Cart</a>
                                <a href="#" class="btn btn-secondary">View More</a>
                            </div>
                        </div>
                    </div>
                    <!--Product 9-->
                    <div class="col-md-4 mb-2">
                        <div class="card">
                            <img class="card-img-top" src="./images/iphone14.png" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">iPhone 14</h5>
                                <p class="card-text">Apple iPhone 14 (128 GB) - Blue</p>
                                <a href="#" class="btn btn-info">Add to Cart</a>
                                <a href="#" class="btn btn-secondary">View More</a>
                            </div>
                        </div>
                    </div>
                    <!--Product 10-->
                    <div class="col-md-4 mb-2">
                        <div class="card">
                            <img class="card-img-top" src="./images/hp1.png" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">HP Core i5 13th Gen 1335U</h5>
                                <p class="card-text">HP Core i5 13th Gen 1335U - (16 GB/512 GB SSD/Windows 11 Home) 15-hr0001TU Thin and Light Laptop  (15.6 Inch, Natural Silver, 1.60 Kg, With MS Office)</p>
                                <a href="#" class="btn btn-info">Add to Cart</a>
                                <a href="#" class="btn btn-secondary">View More</a>
                            </div>
                        </div>
                    </div>
                    <!--Product 11-->
                    <div class="col-md-4 mb-2">
                        <div class="card">
                            <img class="card-img-top" src="./images/fireboltt_watch2.png" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Fire-Boltt Tank</h5>
                                <p class="card-text">Fire-Boltt Tank 1.85" Outdoor Rugged Bluetooth Calling Smart Watch, 123 Sports Mode, 8 UI Interactions, Built in Speaker & Mic, 7 Days Battery (Black)</p>
                                <a href="#" class="btn btn-info">Add to Cart</a>
                                <a href="#" class="btn btn-secondary">View More</a>
                            </div>
                        </div>
                    </div>
                    <!--Product 12-->
                    <div class="col-md-4 mb-2">
                        <div class="card">
                            <img class="card-img-top" src="./images/noice_watch3.png" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Noice Smart Watch</h5>
                                <p class="card-text">Noise ColorFit Pro 4 Alpha 1.78" AMOLED Display, Bluetooth Calling Smart Watch, Functional Crown, Metallic Build, Intelligent Gesture Control, Instacharge (Jet Black)</p>
                                <a href="#" class="btn btn-info">Add to Cart</a>
                                <a href="#" class="btn btn-secondary">View More</a>
                            </div>
                        </div>
                    </div>
                    


                </div>
            </div>

            <!--SIDE-NAV-->
            <div class="col-md-2 bg-secondary p-0">
                <!--BRANDS TO BE DISPLAY-->
                <ul class="navbar-nav me-auto text-center">
                    <li class="nav-item bg-info">
                        <a href="#" class="nav-link text-light">
                            <h5>Delivery Brands</h5>
                        </a>
                    </li>
                    <?php
                    $select_brands = "select * from brands";
                    $result_brands = mysqli_query($con, $select_brands);
                    // $row_data=mysqli_fetch_assoc($result_brands);
                    // echo $row_data['brand_title'];
                    while ($row_data = mysqli_fetch_assoc($result_brands)) {
                        $brand_title = $row_data['brand_title'];
                        $brand_id = $row_data['brand_id'];
                        echo "<li class='nav-item'>
                        <a href='index.php?brand=$brand_id' class='nav-link text-light'>$brand_title</a>
                    </li>";
                    }

                    ?>
                </ul>
                <!--CATEGORY TO BE DISPLAYED-->
                <ul class="navbar-nav me-auto text-center">
                    <li class="nav-item bg-info">
                        <a href="#" class="nav-link text-light">
                            <h5>Categories</h5>
                        </a>
                    </li>
                    <?php
                    $select_categories = "select * from categories";
                    $result_categories = mysqli_query($con, $select_categories);
                    // $row_data=mysqli_fetch_assoc($result_brands);
                    // echo $row_data['brand_title'];
                    while ($row_data = mysqli_fetch_assoc($result_categories)) {
                        $category_title = $row_data['category_title'];
                        $category_id = $row_data['category_id'];
                        echo "<li class='nav-item'>
                        <a href='index.php?category=$category_id' class='nav-link text-light'>$category_title</a>
                    </li>";
                    }

                    ?>

                </ul>
            </div>
        </div>

        <!--FOOTER-->
        <div class="bg-info p-3 text-center">
            <p>All right reserved ©- Developed by Nikesh 2023</p>
        </div>

    </div>
</body>

</html>