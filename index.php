<html>

    <head>
        <title> Strings Functions</title>
    </head>

    <body>
        <?php 
    
            $f = " The";
            $l = " Jumped";
            $t = $f;
            $t .= $l;

            echo $t;
        ?>
        <br />

        LowerCase: <?php echo strtolower($f);?> <br />
        UpperCase: <?php echo strtoupper($f);?> <br />
        UpperCase firsl: <?php echo ucfirst($f);?> <br />
        Uppercae words: <?php echo ucwords($f);?> <br />
        <?php 
            echo 4/0;
        ?> 
    </body>

</html>