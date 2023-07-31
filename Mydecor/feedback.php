
    

 <!DOCTYPE html>
<html>
<head>
    <title>Feedback Form</title>
    <link rel="stylesheet" type="text/css" href="feedback.css">
</head>
<body>
 
<form action="getfeedback.php" method="post" class="feedbackform">

    <h2>Feedback Form</h2>
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>
        
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        
        <label for="message">Message:</label>
        <textarea name="message" id="message" required></textarea>
        <br>
        <br>
        
        <input type="submit" value="Submit">
    </form>
   

</body> 
</html>
