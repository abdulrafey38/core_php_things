<html>

    <head>
        <title>Forms Processing</title>
    </head>

    <body>
        <pre>
            <?php
                print_r($_POST);
            ?>
        </pre>

        <br />

        <?php
            $user = $_POST["username"];
            $pass = $_POST["password"];

            echo "UserName Is : {$user}  and Password Is: {$pass}"
        ?>
    </body>



</html>