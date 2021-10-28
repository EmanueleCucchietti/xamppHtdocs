<?php

    function check_login($con)
    {
        if(isset($_SESSION['user_id']))
        {
            $id = $_SESSION['user_id'];
            $query = "SELECT * FROM users WHERE user_id = '$id' LIMIT 1";

            $result = mysqli_query($con,$query);
            if($result && mysqli_num_rows($result)>0)
            {
                $user_data = mysqli_fetch_assoc($result);
                return $user_data;
            }
            if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 450)) {
                // last request was more than 30 minutes ago
                session_unset();     // unset $_SESSION variable for the run-time 
                session_destroy();   // destroy session data in storage
            }
            $_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp
            
        }
        else
        {
            header("Location: login.php");
            die;
        }
    }

    function random_num($lenght){
        $text = "";
        if($lenght < 5)
        {
            $lenght = 5;
        }

        $n = rand(4,$lenght);

        for($i=0; $i<$n; $i++){
            $text .= rand(0,9);
        }

        return $text;
    }
?>