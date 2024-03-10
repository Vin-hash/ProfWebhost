<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fed.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title>Feedback Form</title>
</head>
<body>
    
    <nav>
            <div class="logo">MQD<b>.</b></div>
            <ul class="navItems">
                <li><a href="index.php">Home</a></li>
                <li><a href="about_me.php">About me</a></li>
                <li><a href="Contact.php">Contact</a></li>
                <li><a href="fed.php">Feedback</a></li>
                <li><a href="login.php">Login</a></li>
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
        <h1>Feedback Form</h1>
        <p class="centered">Note: You need to log in first to give feedback. Otherwise, if you write something, it will redirect you to the login section.</p>
    <form action="feed.php" method="post">
        <label for="feedback">Write your feedback:</label>
        <textarea name="feedback" id="feedback" rows="4" cols="50"></textarea><br>

        <input type="submit" value="Submit Feedback">
        <div><p>Don't have an account? <a href="reg.php"> Register Here</a></div>
    </form>
</body>
</html>