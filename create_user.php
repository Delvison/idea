<html>
<head>
</head>
<body>
  <form action="controllers/create_login.php" method="POST">
    <p>Username:<input type="text" name="username"></input> </p>
    <p>Email:<input type="text" name="email"></input> </p>
    <p>Password:<input type="password" name="password"></input> </p>
    <input style="display:none" name="action" value="create_user"></input>
    <button type="submit">signup</button>
  </form>
  </body>
</html>
