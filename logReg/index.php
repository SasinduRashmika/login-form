<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>User Dashboard</title>
</head>
<body>
    <div class="container">
        <h1>Welcome to Dashboard</h1><br>
        <p >
            
          We appreciate your presence and are thrilled to welcome you to our community.
           Your commitment to our platform is truly valued, and we are dedicated to providing you with 
           an exceptional experience. As you embark on this journey, expect
            a seamless and user-friendly environment tailored to meet your needs.
             Our team is here to support you every step of the way, ensuring that your time 
             with us is enjoyable and productive. Feel free to explore our diverse range of 
             features and services designed to enhance your experience. We look forward to being part
              of your digital adventure and creating lasting connections. Welcome aboard!
        </p>
        <a href="logout.php" class="btn btn-danger">Logout</a>
    </div>
</body>
</html>