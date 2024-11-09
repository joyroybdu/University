<html> 
    <head> 
        <style> 
            .container{ 
                margin-left: 35%; 
                width: 500px; 
                border: 2px solid brown; 
                background-color: antiquewhite; 
                border-radius: 10px; 
            } 
            h2{ 
                text-align: center; 
            } 
            .pd{ 
                padding: 10px; 
            } 
            input{ 
                width: 100%; 
            } 
        </style> 
    </head> 
    <body> 
        <div class="container"> 
            <h2>Sign Up page</h2><hr> 
            <form action="reg.php" method="POST" class="pd"> 
                Name: <br> <input type="text" name = "name"><br><br> 
                Username: <br> <input type="text" name="Uname"><br><br> 
                Email: <br> <input type="email" name="email"><br><br> 
                <button type="submit">Submit</button> 
            </form> 
        </div> 
    </body> 
</html>