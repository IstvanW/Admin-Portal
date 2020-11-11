<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Sign In</title>
</head>
<body>
    <div class="full-page">
        <div class="img-container"></div>
        <div class="container">
            <div class="signin">
                <h1>Sign In</h1>
                <form action="loginScript.php" method="POST">
                
                    <!--<label class = "user" for="username">Username:</label><br>-->
                    <input type="text" placeholder="Username" name="username"><br>
                    <!--<label class = "password" for="password">Password:</label><br>-->
                    <input type="password" placeholder="Password" name="pass"><br>
                    <button class="submit" type="submit" name="submitbtn">Sign In</button><br>
					
                </form><br><br><!--<br>-->
				
				
                
             
            </div>
        </div>
    </div>
</body>
</html>
