<?php
    session_start();
    if (isset($_SESSION["users"])) {
        header("Location: index.php");
    } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">

</head>
<body>

<nav>
            <div class="logo">MQD<b>.</b></div>
            <ul class="navItems">
            <li><a href="index.php">Home</a></li>
                <li><a href="about_me.php">About me</a></li>
                <li><a href="Contact.php">Contact</a></li>
                <li><a href="fed.php">Feedback</a></li>
            </ul>
            <div class="links">
                <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fwww.instagram.com%2Fmarvindomigpe%3Figsh%3DMXFtNjFjeHhvcHZidA%253D%253D%26utm_source%3Dqr%26fbclid%3DIwAR1aOibw_wUjmYjzs1QbZ7NZ6Y7faaDgOiGnBoFRb4AQGx43NFRlRbuLWN0&h=AT0anCAD3kOrIsgCg-8gRlMIhu3_Tv4P7sO2bhJGair5tHkKMgqO1nJSo8CNHig3Lf_hqN4P1JHaKxbSH4131k1YU8Zf-SqbTl-ZhN9jTdHc88WkSsLPJ8c4n62lNHX313G4dQ"><i class="fab fa-instagram"></i></a>
                <a href="https://www.facebook.com/marvin.dumigpe.7/"><i class="fab fa-facebook"></i></a>
            </div>
        </nav>

    <div class="container">
        <?php
        if(isset($_POST["login"])) {
            $email = $_POST["email"];
            $password = $_POST["password"];
            require_once "database.php";
            $sql = "SELECT * FROM usersss WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            $users = mysqli_fetch_array($result, MYSQLI_ASSOC);
            
            if ($users) {
                if(password_verify($password, $users["password"])) {
                    $_SESSION["users"] = "yes";
                    $_SESSION["user_id"] = $users["id"];
                    header("Location: index.php");
                    die();
                } else {
                    echo "<div class='alert alert-danger'> Password does not match </div>";
                }
            } else {
                echo "<div class='alert alert-danger'> Email does not match </div>";
            }
        }    
        ?>
        
        <form action="login.php" method="post">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <div class="form-btn">
                <input type="submit" value="Login" name="login" class="btn btn-primary">
            </div>
        </form>
        
        <div class="center-container">
    <p>Don't have an account? <a href="reg.php">Register Here</a></p>
  </div>

</body>
</html>
