<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Marvin Dumigpe - About Me</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body>
    <div class="container">
        <nav>
            <div class="logo">MQD<b>.</b></div>
            <ul class="navItems">
            <li><a href="index.php">Home</a></li>
                <li><a href="about_me.php">About me</a></li>
                <li><a href="Contact.php">Contact</a></li>
                <li><a href="fed.php">Feedback</a></li>
                <?php
                session_start();
              // Check if user is logged in (assumes user_id is set in the session)
              if (isset($_SESSION['user_id'])) {
                  echo '<li><a href="logout.php">Logout</a></li>';
              }
              ?>
            </ul>
            <div class="links">
                <a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fwww.instagram.com%2Fmarvindomigpe%3Figsh%3DMXFtNjFjeHhvcHZidA%253D%253D%26utm_source%3Dqr%26fbclid%3DIwAR1aOibw_wUjmYjzs1QbZ7NZ6Y7faaDgOiGnBoFRb4AQGx43NFRlRbuLWN0&h=AT0anCAD3kOrIsgCg-8gRlMIhu3_Tv4P7sO2bhJGair5tHkKMgqO1nJSo8CNHig3Lf_hqN4P1JHaKxbSH4131k1YU8Zf-SqbTl-ZhN9jTdHc88WkSsLPJ8c4n62lNHX313G4dQ"><i class="fab fa-instagram"></i></a>
                <a href="https://www.facebook.com/marvin.dumigpe.7/"><i class="fab fa-facebook"></i></a>
            </div>
        </nav>

        <h2 style="background-color:powderblue;">Contact No. :</h2>
        <h3 class="centered">09617509577</h3>

        <!-- Add more content about yourself as needed -->

        <h2 style="background-color:powderblue;">Email :</h2>
        <h3 class="centered">vin73974@gmail.com</h3>

                
        </div>
    </div>
</body>
</html>