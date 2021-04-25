
<html>

    <head>
        <title>Validations Errors<title>
    </head>

    <body>
        <?php

            $error = array();

            $value = "";

            if(!isset($value) || $value === "")
            {
                $error['value'] ="Value cant be empty";
            }
        ?>

        <?php
            function show_error($error)
            {
                $output ="";
                
                if(!empty($error))
                {
                    $output .= "<div class=\"error\">";
                    $output .= "These errors must be resolved";
                    $output .= "<ul>";
                    foreach ($error as $key => $value)
                    {
                        $output .= "<li> {$value}</li>";

                    }
                    $output .= "</ul>";
                    $output .= "</div>";


                }          

                return $output;

            }

            echo show_error($error);


        ?>



    </body>

</html>