<html>

    <head>
        <title>Pointers</title>
    </head>

    <body>
       
        <?php 

         $age = array(4,8,15,16,23,42);

         while ($a = current($age))
         {
             echo "{$a},";
             next($age);
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



    </body>


</html>