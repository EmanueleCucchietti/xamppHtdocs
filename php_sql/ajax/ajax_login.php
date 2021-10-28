<?php
$session_lifetime = 60 * 1; 
session_set_cookie_params ($session_lifetime);
session_start();
    include("../connection.php");
    include("../function.php");

    if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['user']) && isset($_POST['password']))
    {
        $user = $_POST['user'];
        $password = $_POST['password'];
        $query = "SELECT * FROM users WHERE user = '$user' AND password = '$password' LIMIT 1";
        $result = mysqli_query($con,$query);

        if(mysqli_num_rows($result)>0){
            $user_data = mysqli_fetch_assoc($result);
            $_SESSION['user_id'] = $user_data['user_id'];
            echo json_encode(array('response'=>'success',"user_id"=>$user_data['user_id']));
        }
        else
        {
            echo json_encode(array('response'=>'failed'));
        }
    }
    else
        echo json_encode(array('response'=>'error'));

    
    

?>