<?php
    if(isset($_POST["submit"]))
    {
        if($_POST["username"]== "Rafey" && $_POST["password"] == "123")
        {
            header("Location:index.php");
            exit;
        }
        else
        {

            $user = $_POST["username"];
            //$pass = $_POST["password"];
            $message = "Invalid Credentials";
        }
    }   
    else
    {
        $user ="";
        $pass = "";
        $message = "Please Log In";
    }
?> 

<html>

    <head>
        <title>Forms</title>
    </head>

    <body>

        <?php
            echo $message;
        ?>


        <form action="form_single.php" method="post">
            UserName : <input type="text" name="username" value="<?php echo htmlentities($_POST["username"]); ?>" /> 
            <br />
            Password :  <input type="password" name="password" value="" /> 
            <br />
            <br />
            <input type="submit" name="submit" value="Submit" />
        </form>



        
    </body>



</html> 