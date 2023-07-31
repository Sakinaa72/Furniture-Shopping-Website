<!DOCTYPE html>
<html>
<head>
  <title>Complaint Form</title>
  <link rel="stylesheet" href="complaint.css">
</head>
<body> 
  <form action="getcomplaint.php" method="POST" id="complaint">
  <h1>Complaint Form</h1>
  <br>
    <div class="form-group">
      <label for="name">Full Name:</label>
      <input type="text" id="name" name="name" required>
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>
    </div>
    <div class="form-group">
      <label for="phone">Phone Number:</label>
      <input type="tel" id="phone" name="phone" required>
    </div>
    <div class="form-group">
      <label for="reason">Reason for Complaint:</label>
      <input type="text" id="reason" name="reason" required>
    </div>
    <div class="form-group">
      <label for="description">Description:</label>
      <textarea id="description" name="description" required></textarea>
    </div>
    <div class="form-group">
      <input type="submit" value="Submit">
    </div>
  </form>
</body>
</html>
