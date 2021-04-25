<html>

    <head>
        <title>Loops</title>
    </head>

    <body>
       
        <?php 

        //    $num = [1,2,4,55,67,53,32,2,46];

        //    foreach($num as $num)
        //    {
        //        echo $num;
        //        echo " ";
        //    }

        //    echo "<br />";

        //    $count=0;

        //    while($count<=10)
        //    {
        //        echo $count;
        //        echo "\r\n";
        //        $count++;
        //    }

        $array = array(0=>1,1=>2,2=>3,3=>4,4=>5);
        foreach($array as $key => $value)
        {
            echo "{$key} => {$value} <br />";
        }

        ?>

        <br />

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