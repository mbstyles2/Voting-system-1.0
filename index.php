<html>
    <head>
        <title>Online voting system - Home</title>
        <link rel="stylesheet" href="../css/stylesheet.css">
        <style>
            input,select,button{
                padding: 15px;
            }
            a{
                text-decoration: none;
                color:white
            }
            form{
                box-shadow: 10px 12px 15px black;
                width: 50%;
                background-color: teal;
                padding: 20px;
            }
            @media screen and (max-width: 798px) and (min-width:300px){
                form{
                    width:90%;
                }
                
            }
        </style>
    </head>
    <body style="background-color: #b8e994; font-family: fantasy";>
        
            <center>
            <div id="headerSection">
            <h2>Login</h2> 
            </div>
            <hr>

            <div id="loginSection">
                
                <form action="api/login.php" method="POST">
                    <input type="number" name="mob" placeholder="Enter mobile" required><br><br>
                    <input type="password" name="pass" placeholder="Enter password" required><br><br>
                    <select name="role" style="width: 15%; border: 2px solid black">
                        <option value="1">Contestant</option>
                        <a href="admin.php">Admin</a>
                        
                    </select><br><br>                  
                    <button id="loginbtn" type="submit" style="background-color:green;border: none; 
                    border-radius:20px; padding: 25px;" name="loginbtn">Login</button><br><br>
                    New user? <a href="routes/register.php" >Register here</a>
                    <br><br>
                    <a href="routes/admin.php">Admin</a>
                </form>
            </div>

            </center> 
    </body>
</html>