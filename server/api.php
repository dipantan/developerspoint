<?php
include "connection.php";
session_start();
$case = $_POST['case'];

switch ($case) {
    case 'login':
        $username = $_POST['username'];
        $password = $_POST['password'];
        $select = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $result = mysqli_query($conn, $select);
        if ($result) {
            $num_rows = mysqli_num_rows($result);
            if ($num_rows > 0) {
                $row = mysqli_fetch_assoc($result);
                $_SESSION['id'] = $row['id'];
                $_SESSION['username'] = $row['username'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['password'] = $row['password'];
                echo json_encode($row);
            } else {
                echo json_encode(array('error' => "Wrong username or password"));
            }
        } else {
            echo json_encode(array('error' => "Wrong username or password"));
        }


        break;

    case 'signup':

        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $insert = "INSERT INTO users (username,email,password) VALUES ('$username','$email','$password')";
        $result = mysqli_query($conn, $insert);
        if ($result) {
            echo "inserted";
        } else {
            echo "username already taken";
        }
        break;

    case 'update':
        $username = $_POST['username'];

        $update = "UPDATE users SET username='$username' WHERE id='" . $_SESSION['id'] . "' ";

        $result = mysqli_query($conn, $update);

        if ($result) {
            echo json_encode(array("name" => $username));
        } 
        
        else {
            echo json_encode(array("error" => mysqli_error($conn)));
        }
        break;

    default:
        # code...
        break;
}
