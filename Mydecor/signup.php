<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign UP</title>
    <link rel="stylesheet" href="feedback.css">
</head>

<body>
    
    <form action="getsignin.php" method="post" class="feedbackform" id="SIGNIN">
        <h2>SIGN IN</h2>

        <label for="name">Username</label>
        <input type="text" name="name" class="name" required>

        <label for="email">Email-ID</label>
        <input type="email" name="email" class="name" required>

        <label for="phone">Phone no.</label>
        <input type="number" name="phone" class="password" required>

        <label for="password">Password</label>
        <input type="password" name="password" class="password" required>

        <label for="confirmpassword">Confirm Password</label>
        <input type="password" name="confirmpassword" class="password" required>


        <br>
        <br>
        <button type="submit" id="sign_in">Sign In</button>
       <!-- <a href="index.html"> <input type="submit" value="LOG IN"></a> -->
        <h5>Have an account? <a href="login.php">LOG IN</a> </h5>
    </form>




    <!-- <div class="signcontainer">
        <div id="email">
            <h4>Email Address</h4>
            <input type="text" class="inputbox" name="email" >
        </div>
        <div id="password">
            <h4>Password</h4>
            <input type="text" class="inputbox" name="password">
        </div>
        <input type="submit" placeholder="LOG IN">
         
</div>
    -->

    </form>
</body>

</html>