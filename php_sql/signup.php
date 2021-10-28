<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$session_lifetime = 60 * 1; 
session_set_cookie_params ($session_lifetime);
session_start();

    include("connection.php");
    include("function.php");
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $email = $_POST['email'];
        $user = $_POST['user'];
        $nome = $_POST['nome'];
        $cognome = $_POST['cognome'];
        $password = $_POST['password'];

        $user_id = random_num(20);
        $query = "INSERT INTO users (user, password, nome, cognome, email, user_id) VALUES ('$user', '$password', '$nome', '$cognome', '$email', '$user_id')";

        mysqli_query($con,$query);

        $_SESSION['user_id'] = $user_id;
        header("Location: index.php");
    }
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrati</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap");

body {
    background-color: #535fe6;
    font-family: "Poppins", sans-serif;
    font-weight: 300
}

.height {
    height: 100vh
}

.card {
    border: none;
    padding: 20px;
    background-color: #1c1e21;
    color: #fff
}

.circle {
    height: 20px;
    width: 20px;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #5855e7;
    color: #fff;
    font-size: 10px;
    border-radius: 50%
}

.form-input {
    position: relative;
    margin-bottom: 10px;
    margin-top: 10px
}

.form-input i {
    position: absolute;
    font-size: 18px;
    top: 15px;
    left: 10px
}

.form-control {
    height: 50px;
    background-color: #1c1e21;
    text-indent: 24px;
    font-size: 15px
}

.form-control:focus {
    background-color: #25272a;
    box-shadow: none;
    color: #fff;
    border-color: #4f63e7
}

.form-check-label {
    margin-top: 2px;
    font-size: 14px
}

.signup {
    height: 50px;
    font-size: 14px
}

.social {
    height: 50px;
    width: 50px;
    display: flex;
    justify-content: center;
    align-items: center;
    border: 1px solid #eee;
    border-radius: 50%;
    margin-right: 10px;
    cursor: pointer
}

.social:hover {
    background-color: #0d6efd;
    border-color: #0d6efd
}
</style>                                
</head>

<body>
<div class="container mt-5 mb-5">
    <div class="row d-flex align-items-center justify-content-center">
        <form method="POST" class="col-md-6" id="formLogin">
            <div class="card px-5 py-5"> <span class="circle"><i class="fa fa-check"></i></span>
                <h5 class="mt-3">Registrati Ora</h5> 
                <div class="form-input"> <i class="fa fa-envelope"></i> <input type="text" class="form-control" placeholder="Email" name="email"> </div>
                <div class="form-input"> <i class="fa fa-user"></i> <input type="text" class="form-control" placeholder="Username" name="user"> </div>
                <div class="form-input"> <i class="fa fa-user"></i> <input type="text" class="form-control" placeholder="Nome" name="nome"> </div>
                <div class="form-input"> <i class="fa fa-user"></i> <input type="text" class="form-control" placeholder="Cognome" name="cognome"> </div>
                <div class="form-input"> <i class="fa fa-lock"></i> <input type="password" class="form-control" placeholder="Password" name="password"> </div>
                
                <div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked> <label class="form-check-label" for="flexCheckChecked"> Ho letto ed accetto i termini di servizio</label> 
            </div> 

            <input class="btn btn-primary mt-4 signup" type="submit" value="Sign up" onclick="verificaCampi()">        
            <div class="text-center mt-4"> <span>Già un membro? </span> <a href="login.php" class="text-decoration-none">Accedi</a> </div>

            </div>
        </form>
    </div>
</div>
<footer>
    <script src="custom.js"></script>
</footer>
</body>

</html>