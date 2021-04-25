<html>

    <head>
        <title>Booleans</title>
    </head>

    <body>
       
        <?php 
            $res = true;
            $res1 = false;

            echo $res;
            echo "<br />";
            echo $res1;
            
        ?> 

<pre>
        <?php
            $mixed = array(0 => 63,"animal" => "fox",
            "pet" =>"dog","new_array"=>array("x","y","z"));
        
            echo print_r($mixed);
            echo $mixed[0];
            echo "<br />";
            echo $mixed[animal];
            echo "<br />";

            echo print_r ($mixed[new_array]);
            
        ?>

        </pre>

    </body>


</html>