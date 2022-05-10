<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="sending_email.php">
        User Name: <input type="text" name="name" > <br />
        User email: <input type="email" name="email" > <br />
        User Subject: <input type="text" name="subject" > <br />
        User Message: <textarea name="msg"></textarea>
        <button type="submit" name="sending_email_btn">Send</button>
      </form>
</body>
</html>
