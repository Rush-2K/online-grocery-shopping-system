<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NyumNyum Grocery Store | Product Closeup</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="../nyumstyle.css">
    <link href="../hamburgers.css" rel="stylesheet">
</head>

<body style="background-color: #f2f2f2;">
    <header class="py-3" style="background-color: #92D050;">
        <div class="container gap-3">
            <div class="d-flex align-items-center flex-wrap flex-sm-nowrap justify-content-between">
                <!-- <button class="btn btn-warning d-sm-none order-1" type="button" data-bs-toggle="collapse"
                    data-bs-target="#categoriesToggle" aria-controls="categoriesToggle" aria-expanded="true"
                    aria-label="Toggle navigation">
                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor"
                        class="bi bi-list" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                    </svg>
                </button> -->
                <button class="hamburger hamburger--spring d-sm-none order-1" type="button" data-bs-toggle="collapse"
                    data-bs-target="#categoriesToggle" aria-controls="categoriesToggle" aria-expanded="true"
                    aria-label="Toggle navigation" onclick="burgerAnimate()">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>

                <a href="../index.html" class="navbar-brand order-2">
                    <img src="../img/nyumnyumlogo.png" alt="logo" width="150" class="mx-2">
                </a>

                <div class="input-group order-4 order-sm-3">
                    <input type="search" class="form-control" placeholder="Search" aria-label="search"
                        aria-describedby="button-addon2" style="border-radius: 20px 0 0 20px;">
                    <button class="btn btn-success" type="button" id="button-addon2"
                        style="border-radius: 0 20px 20px 0;"><span class="material-icons pt-1">
                            search
                        </span></button>
                </div>


                <ul class="navbar-nav order-3 order-sm-4 ms-3 mb-2 mb-md-0 d-flex flex-row">
                    <li class="nav-item mx-1">
                        <a href="user.html" class="nav-link text-dark"><svg xmlns="http://www.w3.org/2000/svg"
                                width="25" height="25" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                <path
                                    d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                            </svg></a>
                    </li>
                    <li class="nav-item mx-1">
                        <a href="list1.html" class="nav-link text-dark"><svg xmlns="http://www.w3.org/2000/svg"
                                width="23" height="23" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                <path
                                    d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                            </svg></a>
                    </li>
                    <li class="nav-item mx-1">
                        <a href="cart.html" class="nav-link text-dark"><svg xmlns="http://www.w3.org/2000/svg"
                                width="25" height="25" fill="currentColor" class="bi bi-basket2" viewBox="0 0 16 16">
                                <path
                                    d="M4 10a1 1 0 0 1 2 0v2a1 1 0 0 1-2 0v-2zm3 0a1 1 0 0 1 2 0v2a1 1 0 0 1-2 0v-2zm3 0a1 1 0 1 1 2 0v2a1 1 0 0 1-2 0v-2z" />
                                <path
                                    d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15.5a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-.623l-1.844 6.456a.75.75 0 0 1-.722.544H3.69a.75.75 0 0 1-.722-.544L1.123 8H.5a.5.5 0 0 1-.5-.5v-1A.5.5 0 0 1 .5 6h1.717L5.07 1.243a.5.5 0 0 1 .686-.172zM2.163 8l1.714 6h8.246l1.714-6H2.163z" />
                            </svg></a>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog signin_dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <img src="../img/nyumnyumlogo.png" alt="">
                </div>
                <div class="modal-body signin_modal">
                    <ul class="nav nav-tabs tab" id="myTab" role="tablist">
                        <li class="nav-item1">
                            <a class="nav-link " id="home-tab" data-bs-toggle="tab" data-bs-target="#signin"
                                href="#signin" type="button" role="tab" aria-controls="home" aria-selected="true">Sign
                                In</a>
                        </li>
                        <li class="nav-item1" role="presentation">
                            <a class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#signup"
                                href="#signup" type="button" role="tab" aria-controls="profile"
                                aria-selected="false">Sign Up</a>
                        </li>

                    </ul>

                    <div class="social-login">
                        <ul class="social_log">
                            <li>
                                <a href="https://www.facebook.com/" class="fa fa-facebook"></a>
                                <a href="https://www.facebook.com/" class="fa fa-google"></a>
                            </li>

                        </ul>

                    </div>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="signin" role="tabpanel" aria-labelledby="home-tab">
                            <form>

                                <div class="mb-3">
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Email">
                                </div>
                                <div class="mb-3">
                                    <input type="password" class="form-control" id="exampleInputPassword1"
                                        placeholder="Password">
                                </div>
                                <button type="submit" class="btn btn-primary btn-block">Login</button>
                            </form>
                            <p class="forgot_link">
                                <a href="#">Forgot your password ?</a>
                            </p>
                            <p class="signin_link">Don't have an Account ?
                                <a id="profile-tab" data-bs-toggle="tab" data-bs-target="#signup" href="#signup"
                                    type="button" role="tab" aria-controls="profile" aria-selected="false">Sign Up</a>
                            </p>


                        </div>
                        <div class="tab-pane fade" id="signup" role="tabpanel" aria-labelledby="profile-tab">
                            <form>
                                <div class="mb-3">
                                    <input type="text" class="form-control" id="exampleInputText1"
                                        aria-describedby="textHelp" placeholder="Username">
                                </div>
                                <div class="mb-3">
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Email">
                                </div>
                                <div class="mb-3">
                                    <input type="password" class="form-control" id="exampleInputPassword1"
                                        placeholder="Password">
                                </div>
                                <button type="submit" class="btn btn-primary btn-block">Create An Account</button>
                            </form>
                            <p class="signin_link">Already have an Account ?
                                <a id="home-tab" data-bs-toggle="tab" data-bs-target="#signin" href="#signin"
                                    type="button" role="tab" aria-controls="home" aria-selected="true">Sign In</a>
                            </p>

                        </div>
                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    </header>

    <nav class="navbar sticky-top navbar-expand-sm shadow py-2 justify-content-center"
        style="background-color: #FD6C5D;">
        <div class="collapse navbar-collapse" id="categoriesToggle">
            <div class="container">
                <ul class="navbar-nav mb-2 mb-md-0 w-100 justify-content-between next" style="font-weight: bold;">
                    <li class="nav-item dropdown active1">
                        <a class="nav-link dropdown-toggle text-reset text-decoration-none" href="#" id="navbarDropdown"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Browse Category
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Fresh Fruits</a></li>
                            <li><a class="dropdown-item" href="#">Fresh Meat</a></li>
                            <li><a class="dropdown-item" href="#">Fresh Vegetables</a></li>
                            <li><a class="dropdown-item" href="#">Seafood</a></li>
                            <li><a class="dropdown-item" href="#">Dairy & Cheese</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a href="products.html" class="nav-link text-dark">Food Essentials</a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-dark">Chilled & Frozen</a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-dark">Beverages</a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-dark">Cookies & Snacks</a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-dark">Bakery</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container pt-5">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb fw-bold">
                <li class="breadcrumb-item"><a href="/index.html" class="text-dark text-decoration-none">Home</a></li>
                <li class="breadcrumb-item"><a href="products.html" class="text-dark text-decoration-none">Category</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Product</li>
            </ol>
        </nav>
    </div>

    <main class="container pb-5">
        <button type="button" class="btn rounded-circle" id="scrollUp" onclick="goUp()">
            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="46" fill="currentColor"
                class="bi bi-caret-up-fill" viewBox="0 0 16 16">
                <path
                    d="m7.247 4.86-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 0 0 .753-1.659l-4.796-5.48a1 1 0 0 0-1.506 0z" />
            </svg>
        </button>

        <div class="card">
            <div class="card-body m-3">
                <div class="row row-cols-1 row-cols-lg-2 g-4 pb-4">
                    <div class="col">
                        <div class="card shadow-sm p-5">
                            <img src="../img/banana.jpg" alt="pise">
                        </div>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <div class="card shadow-sm p-2 mb-4">
                                    <div class="card-body">
                                        <h1 class="card-title">Pise Gomo</h1>
                                        <hr>
                                        <div class="d-flex flex-column">
                                            <div class="d-flex flex-row align-items-center gap-5 pb-3">
                                                <label for="price" class="fs-5 pb-3">Price:</label>
                                                <p class="fs-3">RM 9999.99</p>
                                            </div>
                                            <div class="d-flex flex-row align-items-center gap-3 pb-3">
                                                <label for="quantity" class="fs-5">Quantity:</label>
                                                <div class="dropdown">
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10+">10+</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="d-flex flex-row gap-3">
                                                <a href="#" class="btn btn-success rounded-pill">Add to List</a>
                                                <a href="#" class="btn btn-warning rounded-pill">Add to Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card shadow-sm p-2">
                                    <div class="card-body">
                                        <h1 class="card-title pb-3">Description</h1>
                                        <p class="fs-5">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                            Corrupti aut adipisci
                                            magni ad,
                                            nesciunt deleniti maxime voluptatibus inventore debitis vel tenetur
                                            explicabo aspernatur,
                                            voluptas unde sunt consectetur cumque pariatur totam?</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="card shadow-sm p-2">
                    <div class="card-body">
                        <div class="d-flex flex-row">
                            <h1 class="card-title pb-3 me-auto">Payment & Security</h1>
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                class="bi bi-lock-fill mt-3" viewBox="0 0 16 16">
                                <path
                                    d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z" />
                            </svg>
                        </div>

                        <p class="fs-5">Your payment information is processed securely. We do not store credit card
                            details nor have
                            access to your credit card information.</p>
                    </div>
                </div>

            </div>
        </div>
    </main>

    <footer class="footer container-fluid mt-auto pt-3" style="background-color: #006600; color: whitesmoke;">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-5">
                    <h3>NyumNyum Grocery Store</h4>
                </div>
                <div class="col-6 col-md">
                    <h5>About</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-reset text-decoration-none footer-link">Services</a></li>
                        <li><a href="#" class="text-reset text-decoration-none">Portfolio</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h5>Company</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-reset text-decoration-none footer-link">Career with Us</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h5>Policies</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-reset text-decoration-none footer-link">Refund Policy</a></li>
                        <li><a href="#" class="text-reset text-decoration-none footer-link">Privacy Policy</a></li>
                        <li><a href="#" class="text-reset text-decoration-none footer-link">Shipping Policy</a></li>
                        <li><a href="#" class="text-reset text-decoration-none footer-link">Terms of Policies</a></li>
                    </ul>
                </div>
                <hr>
                <div class="container text-center font-italic text-muted">
                    <p>&copy; 2021 NyumNyum Yummy Menjilat Jari</p>
                </div>
            </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"></script>
    <script src="../nyumscript.js"></script>
</body>

</html>