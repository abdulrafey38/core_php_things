<?php

$name = "test";
$value = 45;
$expire = time() + (60*60*24*7);

setcookie($name,$value,$expire);

?>
<html>

    <head>

        <title>Cookies</title>

    </head>

    <body>

        <pre>
            <?php
            print_r($_COOKIE);
            ?>
        </pre>

    </body>

</html.