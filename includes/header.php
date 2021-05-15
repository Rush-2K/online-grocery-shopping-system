<?php

include("../functions/function.php");


?>



<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NyumNyum Grocer Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Noto+Sans' rel='stylesheet'>
    <link rel="stylesheet" href="../nyumstyle.css?version=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://unpkg.com/@pqina/flip/dist/flip.min.css" rel="stylesheet">
    <link href="../hamburgers.css" rel="stylesheet">
    <link rel="icon" href="/img/nyumicon.ico">
    
</head>

<body>
    <header class="py-3" style="background-color: #92D050;">
        <div class="container gap-3">
            <div class="d-flex align-items-center flex-wrap flex-sm-nowrap justify-content-between">
                <button class="btn btn-warning d-sm-none order-1" type="button" data-bs-toggle="collapse" data-bs-target="#categoriesToggle" aria-controls="categoriesToggle" aria-expanded="true" aria-label="Toggle navigation">
                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                    </svg>
                </button>

                <a href="index.php" class="navbar-brand order-2">
                    <img src="../img/nyumnyumlogo.png" alt="logo" width="150" class="mx-2">
                </a>

                <div class="input-group order-4 order-sm-3">
                    <input type="search" class="form-control" placeholder="Search" aria-label="search" aria-describedby="button-addon2" style="border-radius: 20px 0 0 20px;">
                    <button class="btn btn-success" type="button" id="button-addon2" style="border-radius: 0 20px 20px 0;"><span class="material-icons pt-1">
                            search
                        </span></button>
                </div>


                <ul class="navbar-nav order-3 order-sm-4 ms-3 mb-2 mb-md-0 d-flex flex-row">
                    <li class="nav-item mx-1">
                        <?php 
                          
                            if(isset($_SESSION['success'])){
                                $userid = $_SESSION['user'];
                                $query = "select * from user where id=".$userid;
                                $run_query = mysqli_query($db,$query);
                                $row_name=mysqli_fetch_array($run_query);
                                $name = $row_name['username'];
                                echo "
                                <a href='../src/user.php?id=$userid' . class='nav-link text-dark' data-bs-toggle='tooltip' data-bs-placement='top' title = '$name'><svg xmlns='http://www.w3.org/2000/svg' width='25' height='25' fill='currentColor' class='bi bi-person' viewBox='0 0 16 16'>
                                    <path d='M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z' />
                                </svg></a>
                                
                                ";
                            } else{
                                echo "
                                <a href='' class='nav-link text-dark' data-bs-toggle='modal' data-bs-target='#exampleModal'><svg xmlns='http://www.w3.org/2000/svg' width='25' height='25' fill='currentColor' class='bi bi-person' viewBox='0 0 16 16'>
                                    <path d='M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z' />
                                </svg></a>
                                ";
                            }
                        ?>
                        
                    </li>
                    <li class="nav-item mx-1">
                    <?php 
                        if(isset($_SESSION['success'])){
                            $userid = $_SESSION['user'];
                            echo "
                                <a href='../src/list1.php?id=$userid'. class='nav-link text-dark'><svg xmlns='http://www.w3.org/2000/svg' width='23' height='23' fill='currentColor' class='bi bi-heart' viewBox='0 0 16 16'>
                                <path d='m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z' />
                                </svg></a>
                            "
                            ;
                        }
                        else{
                            echo "
                                <a href='../src/list1.php'. class='nav-link text-dark'><svg xmlns='http://www.w3.org/2000/svg' width='23' height='23' fill='currentColor' class='bi bi-heart' viewBox='0 0 16 16'>
                                <path d='m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z' />
                                </svg></a>
                            "
                        ;
                        }
                    ?>
                    </li>
                    <li class="nav-item mx-1">
                    <?php 
                        if(isset($_SESSION['success'])){
                            $userid = $_SESSION['user'];
                            echo "
                                <a href='../src/cart.php?id=$userid' class='nav-link text-dark'><svg xmlns='http://www.w3.org/2000/svg' width='25' height='25' fill='currentColor' class='bi bi-basket2' viewBox='0 0 16 16'>
                                <path d='M4 10a1 1 0 0 1 2 0v2a1 1 0 0 1-2 0v-2zm3 0a1 1 0 0 1 2 0v2a1 1 0 0 1-2 0v-2zm3 0a1 1 0 1 1 2 0v2a1 1 0 0 1-2 0v-2z' />
                                <path d='M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15.5a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-.623l-1.844 6.456a.75.75 0 0 1-.722.544H3.69a.75.75 0 0 1-.722-.544L1.123 8H.5a.5.5 0 0 1-.5-.5v-1A.5.5 0 0 1 .5 6h1.717L5.07 1.243a.5.5 0 0 1 .686-.172zM2.163 8l1.714 6h8.246l1.714-6H2.163z' />
                                </svg></a>
                            "
                            ;
                        }
                        else{
                            echo "
                                <a href='../src/cart.php' class='nav-link text-dark'><svg xmlns='http://www.w3.org/2000/svg' width='25' height='25' fill='currentColor' class='bi bi-basket2' viewBox='0 0 16 16'>
                                <path d='M4 10a1 1 0 0 1 2 0v2a1 1 0 0 1-2 0v-2zm3 0a1 1 0 0 1 2 0v2a1 1 0 0 1-2 0v-2zm3 0a1 1 0 1 1 2 0v2a1 1 0 0 1-2 0v-2z' />
                                <path d='M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15.5a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-.623l-1.844 6.456a.75.75 0 0 1-.722.544H3.69a.75.75 0 0 1-.722-.544L1.123 8H.5a.5.5 0 0 1-.5-.5v-1A.5.5 0 0 1 .5 6h1.717L5.07 1.243a.5.5 0 0 1 .686-.172zM2.163 8l1.714 6h8.246l1.714-6H2.163z' />
                                </svg></a>
                            "
                        ;
                        }
                    
                    ?>
                    </li>
                </ul>
            </div>
        </div>
    </header>

    <nav class="navbar sticky-top navbar-expand-sm shadow py-2 justify-content-center" style="background-color: #FD6C5D;">
        <div class="collapse navbar-collapse" id="categoriesToggle">
            <div class="container">
                <ul class="navbar-nav mb-2 mb-md-0 w-100 justify-content-between next" style="font-weight: bold;">
                <?php 
                    if(isset($_SESSION['success'])){
                        $userid = $_SESSION['user'];
                        echo "
                            <li class='nav-item'><a href='../src/products.php?id=$userid' class='nav-link text-dark'>Fruits</a></li>
                            <li class='nav-item'><a href='#' class='nav-link text-dark'>Vegetables</a></li>
                            <li class='nav-item'><a href='#' class='nav-link text-dark'>Meat</a></li>
                            <li class='nav-item'><a href='#' class='nav-link text-dark'>Cookies & Snacks</a></li>
                            <li class='nav-item'><a href='#' class='nav-link text-dark'>Beverages</a></li>
                        "
                        ;
                    }
                    else{
                        echo "
                        <li class='nav-item'><a href='../src/products.php' class='nav-link text-dark'>Fruits</a></li>
                        <li class='nav-item'><a href='#' class='nav-link text-dark'>Vegetables</a></li>
                        <li class='nav-item'><a href='#' class='nav-link text-dark'>Meat</a></li>
                        <li class='nav-item'><a href='#' class='nav-link text-dark'>Cookies & Snacks</a></li>
                        <li class='nav-item'><a href='#' class='nav-link text-dark'>Beverages</a></li>
                        "
                    ;
                    }
                ?>
                </ul>
            </div>
        </div>
    </nav>
    
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered signin_dialog">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #70AD47;">
                    <img src="../img/nyumnyumlogo.png" alt="">
                </div>
                <div class="modal-body signin_modal">
                    <ul class="nav nav-tabs tab" id="myTab" role="tablist">
                        <li class="nav-item1">
                            <a class="nav-link active" style="color: black;" id="home-tab" data-bs-toggle="tab" data-bs-target="#signin" href="#signin" type="button" role="tab" aria-controls="home" aria-selected="true">Sign
                                In</a>
                        </li>
                        <li class="nav-item1" role="presentation">
                            <a class="nav-link" style="color: black;" id="profile-tab" data-bs-toggle="tab" data-bs-target="#signup" href="#signup" type="button" role="tab" aria-controls="profile" aria-selected="false">Sign Up</a>
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
                            <form  method="post" enctype="multipart/form-data">

                                <div class="mb-3">
                                    <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username/Email" required>
                                </div>
                                <div class="mb-3">
                                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                                </div>
                                <button type="submit" name="loginbtn" class="btn btn-primary btn-block">Login</button>
                            </form>
                            <p class="forgot_link">
                                <a class="text-decoration-none" style="color: black;" href="#">Forgot your password ?</a>
                            </p>
                           


                        </div>
                        <div class="tab-pane fade" id="signup" role="tabpanel" aria-labelledby="profile-tab">
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                            <form  method="post" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <input type="text" name="username" value="" onBlur="checkAvailability()" class="form-control" id="user" aria-describedby="textHelp" placeholder="Username" required>
                                    <div id="msg"></div>
                                </div>
                                <div class="mb-3">
                                    <input type="email" name="email1" value="<?php echo $email; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" required>
                                </div>
                                
                                <div class="mb-3">
                                    <input type="password" name="password1" class="form-control" id="Password1" placeholder="Password" required>
                                </div>
                                <div class="mb-3">
                                    <input type="password" name="password2" class="form-control" id="Password2" placeholder="Re-Enter Password" required>
                                    <span id="message"></span>
                                </div>
                                
                                
                                <div class="mb-3">
                                <input class="form-check-input" type="checkbox" name="user_type" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Admin
                                </label>
                                </div>
                                <button type="submit" name="submit_Register" class="btn btn-primary btn-block">Create An Account</button>
                            </form>
                           

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
        

    <button type="button" class="btn rounded-circle" id="scrollUp" onclick="goUp()">
        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="46" fill="currentColor" class="bi bi-caret-up-fill" viewBox="0 0 16 16">
            <path d="m7.247 4.86-4.796 5.481c-.566.647-.106 1.659.753 1.659h9.592a1 1 0 0 0 .753-1.659l-4.796-5.48a1 1 0 0 0-1.506 0z" />
        </svg>
    </button>
    <script>
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
    })
    </script>
    <script>
        $('#Password1, #Password2').on('keyup', function () {
        if ($('#Password1').val() == $('#Password2').val()) {
            $('#message').html('Password Match').css('color', 'green');
        } else 
            $('#message').html('Password Not Match').css('color', 'red');
        });
    </script>
    <script type="text/javascript">
    function checkAvailability(){
        var username = $("#user").val().trim();
        $.ajax({
            type:"post",
            url:"../includes/check_availability.php",
            data:{
                username:username
            },
            success:function(response){
                $("#msg").html(response);
            }
        });
    }
    </script>
    
    
    