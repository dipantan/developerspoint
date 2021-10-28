<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('location: ../login.php');
}
?>


<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Python Tutorial | Learn Python Programming</title>
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
                        <a class="nav-link" href="../c++">C++</a>
                    </li>
                    <li class="nav-item list-group-item bg-dark">
                        <a class="nav-link" href="../java">JAVA</a>
                    </li>
                    <li class="nav-item list-group-item bg-dark">
                        <a class="nav-link" href="../python">PYTHON</a>
                    </li>
                    <li class="nav-item list-group-item bg-dark">
                        <a class="nav-link" href="../php">PHP</a>
                    </li>
                    <li class="nav-item list-group-item bg-dark">
                        <a class="nav-link" href="../html">HTML</a>
                    </li>
                    <li class="nav-item list-group-item bg-dark">
                        <a class="nav-link" href="../css">CSS</a>
                    </li>
                    <li class="nav-item list-group-item bg-dark">
                        <a class="nav-link" href="../js">JAVASCRIPT</a>
                    </li>
                    <li class="nav-item list-group-item bg-dark">
                        <a class="nav-link" href="../kotlin">KOTLIN</a>
                    </li>
                    <li class="nav-item list-group-item bg-dark">
                        <a class="nav-link" href="../react-native">REACT NATIVE</a>
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
                <a class="nav-link" href="#">Python History</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Python Features</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Python Installation</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Python Program</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Python Variables</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Python Keywords</a>
            </li>

            <!-- <button class="btn text-center p-1 btn-dark" style="height: 30px;width: 30px; margin: 15px;" id="tgl_btn"><i class="fas fa-chevron-left"></i></button> -->
        </ul>
        <!-- sidebar -->

        <!-- main content -->
        <div class="container">

            <p class="m-5">
            <h3>What is Python?</h3>
            <p>
                Python is a general purpose, dynamic, high-level, and interpreted programming language.
                It supports Object Oriented programming approach to develop applications.
                It is simple and easy to learn and provides lots of high-level data structures.
            </p>

            <p>
                Python is easy to learn yet powerful and versatile scripting language, which makes it attractive for Application Development.
            </p>

            <p>
                Python's syntax and dynamic typing with its interpreted nature make it an ideal language for scripting and rapid application development.
            </p>

            </p>

            <h3>Python 2 vs. Python 3</h3>
            <p>
                In most of the programming languages, whenever a new version releases, it supports the features and syntax of the existing version of the language, therefore, it is easier for the projects to switch in the newer version. However, in the case of Python, the two versions Python 2 and Python 3 are very much different from each other.
            </p>

            <p>
                A list of differences between Python 2 and Python 3 are given below:
            </p>

            <ol>
                <li>Python 2 uses print as a statement and used as print "something" to print some string on the console. On the other hand, Python 3 uses print as a function and used as print("something") to print something on the console.</li>
                <br>
                <li>Python 2 uses the function raw_input() to accept the user's input. It returns the string representing the value, which is typed by the user. To convert it into the integer, we need to use the int() function in Python. On the other hand, Python 3 uses input() function which automatically interpreted the type of input entered by the user. However, we can cast this value to any type by using primitive functions (int(), str(), etc.).</li>
                <br>
                <li>In Python 2, the implicit string type is ASCII, whereas, in Python 3, the implicit string type is Unicode.</li>
                <br>
                <li>Python 3 doesn't contain the xrange() function of Python 2. The xrange() is the variant of range() function which returns a xrange object that works similar to Java iterator. The range() returns a list for example the function range(0,3) contains 0, 1, 2.</li>
                <br>
                <li>Embedded System</li>
                <br>
                <li>There is also a small change made in Exception handling in Python 3. It defines a keyword as which is necessary to be used. We will discuss it in Exception handling section of Python programming tutorial.</li>

            </ol>

            <h3>Python History</h3>
            <p>
                Python was invented by Guido van Rossum in 1991 at CWI in Netherland. The idea of Python programming language has taken from the ABC programming language or we can say that ABC is a predecessor of Python language.
            </p>




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