<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Form</title>
</head>
<body>
<form action="mail_success.php" method="post">
    <label for="name">Name</label>
    <input type="text" id="name" name="name" placeholder="Your name.." class="form-color" required>

    <label for="email">E-mail</label>
    <input type="text" id="email" name="email" placeholder="Your e-mail.." class="form-color" required>

    <label for="comment">Comment</label>
    <textarea id="comment" name="comment" placeholder="Write your message here!" class="form-color" required></textarea>
    <br>
    <input type="submit" value="Submit" class="form-color">
</form>
</body>
</html>