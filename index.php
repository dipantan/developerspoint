<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('location: login.php');
}
?>


<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Developers Point | Your one stop place to learn</title>
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
                        <a class="nav-link" href="#">C</a>
                    </li>
                    <li class="nav-item list-group-item bg-dark">
                        <a class="nav-link" href="c++">C++</a>
                    </li>
                    <li class="nav-item list-group-item bg-dark">
                        <a class="nav-link" href="java">JAVA</a>
                    </li>
                    <li class="nav-item list-group-item bg-dark">
                        <a class="nav-link" href="python">PYTHON</a>
                    </li>
                    <li class="nav-item list-group-item bg-dark">
                        <a class="nav-link" href="php">PHP</a>
                    </li>
                    <li class="nav-item list-group-item bg-dark">
                        <a class="nav-link" href="html">HTML</a>
                    </li>
                    <li class="nav-item list-group-item bg-dark">
                        <a class="nav-link" href="css">CSS</a>
                    </li>
                    <li class="nav-item list-group-item bg-dark">
                        <a class="nav-link" href="js">JAVASCRIPT</a>
                    </li>
                    <li class="nav-item list-group-item bg-dark">
                        <a class="nav-link" href="kotlin">KOTLIN</a>
                    </li>
                    <li class="nav-item list-group-item bg-dark">
                        <a class="nav-link" href="react-native">REACT NATIVE</a>
                    </li>


                    <div class="nav-item list-group-item bg-dark " style="margin-left: 5rem;">
                        <div class="mt-2 dropdown">
                            <a style="text-decoration: none;" href="#" class="dropdown-toggle" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class=" mt-2">Dipantan</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuLink" style="overflow: hidden;max-width: 20px!important;">
                                <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="logout.php">Logout</a></li>

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
        <ul class="nav flex-column bg-dark " style="width: 25%;" id="sidebar">
            <li class="nav-item">
                <a class="nav-link" href="#">What is c language</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">History of C</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Feature of C</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">How to install C</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">First C Program</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Variables in C</a>
            </li>

            <button class="btn text-center p-1 btn-dark" style="height: 30px;width: 30px; margin: 15px;" id="tgl_btn"><i class="fas fa-chevron-left"></i></button>
        </ul>
        <!-- sidebar -->

        <!-- main content -->
        <div class="container">

            <p class="m-5">
            <h3>Introduction</h3>
            The C Language is developed by Dennis Ritchie for creating system applications that directly interact
            with
            the hardware devices such as drivers, kernels, etc.

            C programming is considered as the base for other programming languages, that is why it is known as
            mother
            language.
            </p>


            <p>
                It can be defined by the following ways:
            <ol>
                <li>Mother language</li>
                <li>System programming language</li>
                <li>Procedure-oriented programming language</li>
                <li>Structured programming language</li>
                <li>Mid-level programming language</li>
            </ol>

            </p>



            <h3> 1) C as a mother language</h3>
            <p> C language is considered as the mother language of all the modern programming languages because most of
                the
                compilers, JVMs, Kernels, etc. are written in C language, and most of the programming languages follow C
                syntax, for example, C++, Java, C#, etc.

                It provides the core concepts like the array, strings, functions, file handling, etc. that are being
                used in
                many languages like C++, Java, C#, etc. </p>

            <h3> 2) C as a system programming language</h3>
            <p> A system programming language is used to create system software. C language is a system programming
                language because it can be used to do low-level programming (for example driver and kernel). It is
                generally used to create hardware devices, OS, drivers, kernels, etc. For example, Linux kernel is
                written in C.

                It can't be used for internet programming like Java, .Net, PHP, etc. </p>

            <h3>3) C as a procedural language </h3>
            <p></p> A procedure is known as a function, method, routine, subroutine, etc. A procedural language
            specifies a series of steps for the program to solve the problem.

            A procedural language breaks the program into functions, data structures, etc.

            C is a procedural language. In C, variables and function prototypes must be declared before being used. </p>

            <h3> 4) C as a structured programming language</h3>
            <p> A structured programming language is a subset of the procedural language. Structure means to break a
                program into parts or blocks so that it may be easy to understand.

                In the C language, we break the program into parts using functions. It makes the program easier to
                understand and modify. </p>

            <h3> 5) C as a mid-level programming language</h3>
            <p> C is considered as a middle-level language because it supports the feature of both low-level and
                high-level languages. C language program is converted into assembly code, it supports pointer arithmetic
                (low-level), but it is machine independent (a feature of high-level).

                A Low-level language is specific to one machine, i.e., machine dependent. It is machine dependent, fast
                to run. But it is not easy to understand.

                A High-Level language is not specific to one machine, i.e., machine independent. It is easy to
                understand. </p>

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