<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$session_lifetime = 60 * 1; 
session_set_cookie_params ($session_lifetime);
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="cache-control" content="max-age=0" />
        <meta http-equiv="cache-control" content="no-cache" />
        <meta http-equiv="expires" content="0" />
        <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
        <meta http-equiv="pragma" content="no-cache" />
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Accedi</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" href="css/custom.css">
        <style>
            @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap");
        </style>

    </head>

    <body>
        <div class="container mt-5 mb-5">
            <div class="row d-flex align-items-center justify-content-center">
                <form class="col-md-6" method="post" id="formLogin">
                    <div class="card px-5 py-5"> <span class="circle"><i class="fa fa-check"></i></span>
                        <h5 class="mt-3">Accedi Ora</h5> 
                        <div id="btnResponse" class="divResponseError">Credenziali Errate, <a href='/php_sql//restorer.php' class="aLink">hai dimenticato la password?</a>
                        </div>
                        <div class="form-input" id="divUser" style="margin-bottom: 5px;"> <i class="fa fa-user"></i> <input id="txtUsername" type="text" class="form-control" placeholder="Username" name="user"> </div>
                        <div style="background-color: inherit;border: none; color: #c97d7d; display:none" id="errorUser">Inserire Username</div>
                        <div class="form-input" id="divPass" style="margin-bottom: 5px;"> <i class="fa fa-lock"></i> <input id="txtPassword" type="password" class="form-control" placeholder="Password" name="password"> </div>
                        <div style="background-color: inherit;border: none; color: #c97d7d; display:none" id="errorPass">Inserire Password</div>
                        
                    <input class="btn btn-primary mt-4 signup" type="button" value="Accedi" id="btnSubmit">        
                    <div class="text-center mt-4"> <span>Non ancora un membro? </span> <a href="signup.php" class="text-decoration-none">Registrati</a> </div>
                    </div> 


                    </div>
                </form>
            </div>
        </div>
        <footer>
            <script src="js/customLogin.js"></script>
        </footer>
    </body>

</html>