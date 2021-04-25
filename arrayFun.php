<html>

    <head>
        <title>Array Functions</title>
    </head>

    <body>
       Name:
        <?php 

            $numbers = array(8,8,5,4,3,44,67,0);
            
            echo count($numbers);
            echo "<br />";
            echo max($numbers);
            echo "<br />";
            echo min($numbers);
            echo "<br />";
            sort($numbers);
            print_r($numbers);
            echo "<br />";
            rsort($numbers);
            print_r($numbers);
            echo "<br />";
            $string_num = implode(",",$numbers);
            print_r($string_num);
            echo "<br />";
            $reverse_of_implode = explode(",",$string_num);
            print_r($reverse_of_implode);




        ?>

<pre>
        <?php
            $mixed = array(0 => 63,"animal" => "fox",
            "pet" =>"dog","new_array"=>array("x","y","z"));
        
             print_r($mixed);
            echo $mixed[0];
            echo "<br />";
            echo $mixed[animal];
            echo "<br />";

            echo print_r ($mixed[new_array]);
            
        ?>

        </pre>

    </body>


</html>