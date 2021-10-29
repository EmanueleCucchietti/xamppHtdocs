<?php
    include("../connection.php");
    include("../function.php");

    //Include PHPMailer
    include("../class/phpMailer/Exception.php");
    include("../class/phpMailer/PHPMailer.php");
    include("../class/phpMailer/SMTP.php");
    //Define NameSpaces
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    //echo json_encode(array('response'=>'success'));
    if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['email']))
    {
        $email = $_POST['email'];
        
        if($email != "")
        {
            $templateMail = file_get_contents($_SERVER["DOCUMENT_ROOT"]."/php_sql/class/template-mail.html");

            $queryVerificaEmail = "SELECT * FROM users WHERE email = '$email'";
            $result = mysqli_query($con,$queryVerificaEmail);/*
            var_dump($result);*/
            if(mysqli_num_rows($result)>0)
            {
                $userData = mysqli_fetch_assoc($result);

                if($userData['email'] == $email){
                    $senderEmail = $email;/*
                    var_dump($email);
                    var_dump($senderEmail);/*/
                    $subject = "Tentativo di ripristino Password";
    
                    
                    $mail = new PHPMailer();
                    $mail -> isSMTP();
                    $mail -> Host = "smtp.gmail.com";
                    $mail -> SMTPAuth = "true";
                    $mail -> Port = "25";
                    $mail -> Username = 'provadb1245@gmail.com';
                    $mail -> Password = 'Q2@Z!J2rvT';
                    $mail -> Subject = $subject;
                    //se si imposta destinatario sè stessi, gmail metterà come nome "me" anche se si cambia da qua il setFrom
                    //$mail -> setFrom($email,$email);
                    $mail -> setFrom('provadb1245@gmail.com',"Restorer Email");
                    $templateMail = file_get_contents($_SERVER["DOCUMENT_ROOT"]."/php_sql/class/template-mail.html");
                    //$templateMail = str_replace( "__NOME__", $nome, $templateMail );
                    //$templateMail = str_replace( "__COGNOME__", $cognome, $templateMail );
                    $mail -> Body = "test";
                    $mail -> isHTML(true);
                    $mail -> addAddress($email);
                    $mail->SMTPDebug = 2;
                    $mail->Debugoutput = 'html';
                    $mail->SMTPOptions = array(
                        'ssl' => array(
                        'verify_peer' => false, // peer = certificato
                        'verify_peer_name' => false, // inutile
                        'allow_self_signed' => true // inutile
                        )
                        );
                        
                    var_dump($mail);
                    if (!$mail->send())
                        echo "Mailer Error -> " . $mail->ErrorInfo;
                    else
                        echo "Message sent!";
                    echo 'test';
                    
                    echo json_encode(array('response'=>'success'));
                }
                else
                    echo json_encode(array('response'=>'failedEmailNotFound'));
                
                
            }
            else
                echo json_encode(array('response'=>'failedEmailNotFound'));



        }
        else
            echo json_encode(array('response'=>'failed'));
    }
    else
        echo json_encode(array('response'=>'failed'));
?>