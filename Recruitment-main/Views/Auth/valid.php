<?php


$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "recruitment";

session_start();

$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);


if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $newpass = md5($password);

    $query = "SELECT * FROM user WHERE email = '$email' AND password ='$newpass'";

    $res = mysqli_query($con, $query);

    if (mysqli_num_rows($res) > 0) {


        while ($row = mysqli_fetch_assoc($res)) {
            if ($row["role"] == "con"){
                $_SESSION["prenom"] = $row["prenom"];
                $_SESSION["password"] = $row["password"];
                $_SESSION["email"] = $row["email"];
                $_SESSION["role"] = $row["role"];
                $id = $row["id"];
                $_SESSION["id"] = $row["id"];
                header("location: ../Condidate/index.php?iduser=$id");
                echo "<script>alert('Logged in successfully')</script>";

            } else if ($row["role"] == "rh"){
                $_SESSION["prenom"] = $row["prenom"];
                $_SESSION["email"] = $row["email"];
                $_SESSION["role"] = $row["role"];
                $id = $row["id"];
                $_SESSION["id"] = $row["id"];
                echo "<script>location.replace('../Condidate/index.php?iduser=$id')</script>";
                echo "<script>alert('Logged in successfully')</script>";


            }
            else if ($row["role"] == "admin"){
                $_SESSION["prenom"] = $row["prenom"];
                $_SESSION["email"] = $row["email"];
                $_SESSION["role"] = $row["role"];
                $id = $row["id"];
                header("location: ../Admin/home.php?iduser=$id");
                echo "<script>alert('Logged in successfully')</script>";


            }else {
                echo "<script>alert('Woops! Email or Password incorrect')</script>";
                echo "<script>location.replace('login.php')</script>";

            }

        }
    }else{
        echo "<script>alert('Woops!')</script>";
    }


}

