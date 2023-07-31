 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log IN</title>
    <link rel="stylesheet" href="feedback.css">
</head>
<body>
<form action="getsignin.php" method="post" class="feedbackform">
        <h2>LOG IN</h2>

        <label for="name">Email Address</label>
        <input type="email" name="name" class="name" required>

        <label for="message">Password</label>
        <input type="password" name="name" class="password" required>

        <br>
        <br>
       <a href="index.html"> <input type="submit" value="LOG IN"> </a>
        <h5>Don't have an account yet? <a href="signup.php">SIGN IN</a> </h5>
    </form>

</body>
</html> 


