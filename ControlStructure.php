<html>

    <head>
        <title>Control Structures</title>
    </head>

    <body>
       
        <?php 

           $a=4;
           $b=4;

           if($a>$b)
           {
               echo "A is greater than B!! <br />";
           }
           elseif($a<$b)
           {
            echo "A is less than B!! <br />";
           }
           else
           {
            echo "A is equal B!! <br />";
           }

           $user = true;

           if($user)
           {
               echo"<h1> Welcome!!</h1>";
               echo"<p> We are glad that you choose us!!</p>";
           }



        ?>




        <br />
        <br />
        <br />
        <br />


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