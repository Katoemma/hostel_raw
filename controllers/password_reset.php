<?php 
    $basePath = $_SERVER['DOCUMENT_ROOT'] . '/hostel_raw/';
    include($basePath . 'database/db.php'); 
    include($basePath . 'helpers/validateUser.php');

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require 'mail/Exception.php';
    require 'mail/PHPMailer.php';
    require 'mail/SMTP.php';
    

    if (isset($_POST['reset'])) {
        $errors = validateEmail($_POST);

        if (count($errors)===0) {
            $email = $_POST['email'];
        
            // Instantiation and passing `true` enables exceptions
            $mail = new PHPMailer(true);
            
            try {
                //Server settings
                $mail->isSMTP();                                            // Send using SMTP
                $mail->Host       = 'smtp-relay.brevo.com';                    // Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
                $mail->Username   = 'emmanuelkato39@gmail.com';                     // SMTP username
                $mail->Password   = 'DWRCGVgE5TYvNfsK';                               // SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
                $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
            
                //Recipients
                $mail->setFrom('emmanuelkato39@gmail.com', 'StuStay Hostels');
                $mail->addAddress($email);     // Add a recipient

                $code = substr(str_shuffle('1234567890QWERTYUIOPASDFGHJKLZXCVBNM'),0,10);
            
                // Content
                $mail->isHTML(true);                                  // Set email format to HTML
                $mail->Subject = 'Password Reset';
                $mail->Body    = 'To reset your password click <a href="http://localhost/hostel_raw/update_password.php?code='.$code.'">here </a>. </br>Reset your password in a day.';


                $verifyQuery = $conn->query("SELECT * FROM users WHERE email = '$email'");

                if($verifyQuery->num_rows) {
                    $codeQuery = $conn->query("UPDATE users SET code = '$code' WHERE email = '$email'");
                        
                    $mail->send();
                    $_SESSION['message'] = "Password reset Link sent. Please check your Email";
                    header('location:password.php');
                    exit();

                }
                $conn->close();
            
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }    
        }
    }

    if (isset($_GET['code'])) {
        
        $user = selectAll('users',['code'=> $_GET['code']]);
    }

    
    if (isset($_POST['update_password'])) {
        $errors = validatePass($_POST);
    
        if (count($errors) === 0) {
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $code = $_POST['code'];
            unset($_POST['confirm_password'], $_POST['update_password']);
    
            $stmt = $conn->prepare("UPDATE users SET password = ?, code = '' WHERE code = ?");
            $stmt->bind_param("ss", $password, $code);
            $stmt->execute();
    
            if ($stmt->affected_rows > 0) {
                header('location: login.php');
                $_SESSION['message'] = "Password updated successfully";
                exit();
            } else {
                array_push($errors, "Update password not successful");
            }
    
            $stmt->close();
        }
    }
    