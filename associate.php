<html>

    <head>
        <title>Asociate Arrays</title>
    </head>

    <body>
       Name:
        <?php  


            $assoc =array("f_name" => "Abdul","l_name" => "Rafey"); 

            echo $assoc["f_name"];
            echo " ";
            echo $assoc["l_name"];


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