<html>

    <head>
        <title>Switch</title>
    </head>

    <body>
       
        <?php 

           $a= 1;

           switch($a)
           {
                case 0:
                    echo " a equals 0 <br />";
                    break;
                case 1:
                    echo " a equals 1 <br />";
                    break; 
                case 2:
                    echo " a equals 2 <br />";
                    break;
                case 3:
                    echo " a equals 3 <br />";
                    break;
            
                
           }

        ?>

<?php 

           $user_type= 'press';

           switch($user_type)
           {
                case 'student':
                    echo " Welcome <br />";
                    break;
                case 'press':
                case 'customers':
                    echo " Hello! <br />";
                    break;
                default:
                    echo " No Recognize <br />";
                    break;
            
                
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