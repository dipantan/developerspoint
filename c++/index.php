<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('location: login.html');
}
?>


<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>C++ Tutorial | Learn C++ Programming</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="favicon.ico" />
    <!-- jquery cdn -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- fontawesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        #ul_topbar li:hover {
            background-color: rgb(27, 27, 24) !important;
        }

        #ul_topbar div:hover {
            background-color: rgb(27, 27, 24) !important;
        }


        @media (max-width: 991px) {
            #tgl_btn {
                display: none;
            }
        }

        @media (min-width: 992px) {

            #sidebar {
                display: block;
            }
        }
    </style>
</head>

<body>




    <!-- top navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <button class="navbar-toggler pull-start" style=" float: left" type="button" id="toggle_button" data-bs-toggle="collapse" data-bs-target="#sidebar" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="navbar-brand" href="#">Hidden brand</a>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 list-group list-group-horizontal" id="ul_topbar">

                    <li class="nav-item list-group-item bg-dark">
                        <a class="nav-link" href="../index.php">C</a>
                    </li>
                    <li class="nav-item list-group-item bg-dark">
                        <a class="nav-link" href="#">C++</a>
                    </li>
                    <li class="nav-item list-group-item bg-dark">
                        <a class="nav-link" href="../java/">JAVA</a>
                    </li>
                    <li class="nav-item list-group-item bg-dark">
                        <a class="nav-link" href="../python/">PYTHON</a>
                    </li>
                    <li class="nav-item list-group-item bg-dark">
                        <a class="nav-link" href="../php/">PHP</a>
                    </li>
                    <li class="nav-item list-group-item bg-dark">
                        <a class="nav-link" href="../html/">HTML</a>
                    </li>
                    <li class="nav-item list-group-item bg-dark">
                        <a class="nav-link" href="../css/">CSS</a>
                    </li>
                    <li class="nav-item list-group-item bg-dark">
                        <a class="nav-link" href="../js/">JAVASCRIPT</a>
                    </li>
                    <li class="nav-item list-group-item bg-dark">
                        <a class="nav-link" href="../kotlin/">KOTLIN</a>
                    </li>
                    <li class="nav-item list-group-item bg-dark">
                        <a class="nav-link" href="../react-native/">REACT NATIVE</a>
                    </li>


                    <div class="nav-item list-group-item bg-dark " style="margin-left: 5rem;">
                        <div class="mt-2 dropdown">
                            <a style="text-decoration: none;" href="#" class="dropdown-toggle" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class=" mt-2">Dipantan</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink" style="overflow: hidden;max-width: 20px!important;">
                                <li><a class="dropdown-item" href="../profile.php">Profile</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="../logout.php">Logout</a></li>

                            </ul>
                        </div>
                    </div>


                </ul>

            </div>
        </div>
    </nav>
    <!-- top navbar -->



    <div class="d-flex">


        <!-- sidebar -->
        <ul class="nav flex-column bg-dark " style="width: 15%;" id="sidebar">
            <li class="nav-item">
                <a class="nav-link" href="#">C++ History</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">C++ Features</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">C++ Installation</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">C++ Program</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">C++ Variables</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">C++ Keywords</a>
            </li>

            <!-- <button class="btn text-center p-1 btn-dark" style="height: 30px;width: 30px; margin: 15px;" id="tgl_btn"><i class="fas fa-chevron-left"></i></button> -->
        </ul>
        <!-- sidebar -->

        <!-- main content -->
        <div class="container">

            <p class="m-5">
            <h3>Introduction</h3>
            C++ is a general purpose, case-sensitive, free-form programming language that supports object-oriented, procedural and generic programming.

            C++ is a middle-level language, as it encapsulates both high and low level language features.
            </p>

            <h3>Object-Oriented Programming (OOPs)</h3>
            <p> C++ supports the object-oriented programming, the four major pillar of object-oriented programming (OOPs) used in C++ are: </p>
            <ol>
                <li>Inheritance</li>
                <li>Polymorphism</li>
                <li>Encapsulation</li>
                <li>Abstraction</li>
            </ol>

            <h3>C++ Standard Libraries</h3>
            <p> Standard C++ programming is divided into three important parts:</p>
            <ul>
                <li>The core library includes the data types, variables and literals, etc.</li>
                <li>The standard library includes the set of functions manipulating strings, files, etc.</li>
                <li>The Standard Template Library (STL) includes the set of methods manipulating a data structure.</li>
            </ul>

            <h3>Usage of C++ </h3>
            <p>By the help of C++ programming language, we can develop different types of secured and robust applications: </p>

            <ul>
                <li>Window application</li>
                <li>Client-Server application</li>
                <li>Device drivers</li>
                <li>Device drivers</li>
            </ul>

        </div>
        <!-- main content -->
    </div>
    <script>
        $(document).ready(function() {

            var screensize = $(window).width();
            // alert(screensize);
            if (screensize <= 576) {
                $('#sidebar').addClass('collapse');


            }
            // $(document).on('click', '#toggle_button', function () {
            //     ('##sidebar').addClass('show');
            // })

            $(document).on('click', '#tgl_btn', function() {
                var ul_width = $('#sidebar')[0].style.width;
                if (ul_width == '25%') {
                    $(this).empty();
                    $('#sidebar').css('width', '10%');
                    $(this).html('<i class="fas fa-chevron-right" id = "tgl_btn" ></i >');
                } else if (ul_width == '10%') {
                    $(this).empty();
                    $('#sidebar').css('width', '25%');
                    $(this).html('<i class="fas fa-chevron-left" id = "tgl_btn" ></i >');
                }

            })
        })
    </script>
</body>

</html>