<?php
include "server/connection.php";
session_start();

$id = $_SESSION['id'];

$sql = "SELECT * FROM users WHERE id='$id'";
$result = mysqli_query($conn, $sql);
if ($result) {
    $row = mysqli_fetch_assoc($result);
    $email = $row['email'];
    $name = $row['username'];
} else {
    die(mysqli_error($conn));
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="favicon.ico" />
    <!-- jquery cdn -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- fontawesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            height: 100vh;
            /* background: rgb(34, 193, 195); */
            background: linear-gradient(90deg, rgba(34, 193, 195, 1) 0%, rgba(253, 187, 45, 1) 100%);
        }

        .row-color {
            /* height: 100vh; */
            /* background: rgb(34, 193, 195); */
            background: linear-gradient(90deg, rgba(34, 193, 195, 1) 0%, rgba(253, 187, 45, 1) 100%) !important;
            border-width: 1px;
            border-style: solid;
            border-color: rgb(0, 0, 0);
        }

        @media (max-width: 991px) {

            .name,
            .email {
                height: 40px !important;
            }

            .body,
            .footer {
                margin-left: 15px !important;
                margin-right: 15px !important;
                margin-bottom: 25px !important;
            }
        }


        @media (min-width: 992px) {
            .card {
                width: 50vw !important;
                height: 50vh !important;
            }

            .body,
            .footer {
                margin-left: 15px !important;
                margin-right: 15px !important;
                margin-bottom: 45px !important;
            }
        }
    </style>
</head>

<body>



    <div class="container d-flex  flex-column justify-content-center align-items-center h-100">
        <p class="text-center fw-bold" style="font-size: 24px;">Profile</p>
        <div class="card row-color shadow-lg border border-0" style="width: 75vw;border-radius: 20px;">
            <div class="head mt-5 mx-1" style="align-self: center">
                <div class="mb-3">
                    <label for="formFile" class="form-label">Choose file to set profile picture</label>
                    <input class="form-control" hidden type="file" id="formFile">
                </div>
            </div>
            <div class="body mx-1">

                <input type="text" class="form-control row-color name" id="name" value="<?php echo $name ?>" placeholder="Name">

            </div>
            <div class="footer mx-1">

                <input type="email" readonly class="form-control row-color email" value="<?php echo $email ?>" id="email" placeholder="Email">

            </div>
            <button class="btn btn-primary mb-3" id="update" style="width: 100px;align-self: center;">Update</button>
        </div>

    </div>
    <script>
        document.getElementById('update').addEventListener('click', function() {
            var name = document.getElementById('name').value;
            if (name === "") {
                alert("Enter name");
                return;
            }

            var fd = new FormData();
            fd.append("username", name);
            fd.append("case", "update");

            fetch('server/api.php', {
                    method: 'post',
                    body: fd
                })
                .then(resp => resp.json())
                .then(data => {
                    
                    document.getElementById('name').value = data;
                })
        })
    </script>
</body>

</html>