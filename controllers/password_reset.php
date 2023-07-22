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
                $mail->Username   = 'hostelssavvy@yahoo.com';                     // SMTP username
                $mail->Password   = 'EyXkrI7qVF1GwYh5';                               // SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
                $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
            
                //Recipients
                $mail->setFrom('hostelssavvy@yahoo.com', 'Hostel Savvy Gulu');
                $mail->addAddress($email);     // Add a recipient

                $code = substr(str_shuffle('1234567890QWERTYUIOPASDFGHJKLZXCVBNM'),0,10);
            
                // Content
                $mail->isHTML(true);                                  // Set email format to HTML
                $mail->Subject = 'Password Reset';
                $mail->Body    = '<div style="font-family: Arial, sans-serif; line-height: 1.6; max-width: 600px; margin: 0 auto; padding: 20px;">

                                    <h1 style="text-align: center; color: #ffffff; padding: 10px 0; background-color: #3b82f6;">Password Reset</h1>
                                
                                    <p>We understand that you have encountered difficulties accessing your account on Hostels Savvy account. In order to assist you with resetting your password and regaining access to your account, we have provided a password reset link below:</p>
                                
                                    <!-- Add the image below using the <img> tag -->
                                    <div style="text-align: center; margin-bottom: 20px;">
                                    <img src="http://hostelssavvy.ezyro.com/users/logo.png" alt="Hostels savvy Logo" style="max-width: 100%; height: auto; background-color: #383635;">
                                    </div>
                                
                                    <p style="text-align: center; font-weight: 700;">To reset your password click <a href="http://localhost/hostel_raw/update_password.php?code='.$code.'" style="color: #3b82f6;">here</a>. Reset your password within a day.</p>
                                
                                    <p>Please ensure that you complete the password reset process within 24 hours of receiving this email. After this time, the link will expire, and you will need to initiate the reset process again.</p>
                                
                                    <p style="color: #ef4444;">If you did not request this password reset, please disregard this email. Rest assured that your account remains secure.</p>
                                
                                    <p style="text-align: center; color: #999;">This email is automatically generated. Please do not reply.</p>
                                    <div class="footer">
                                    <p style=" background-color: #ef4444; padding: 10px 0; text-align: center; color: #ffffff;">&copy; <?php echo date("Y"); ?> Hostels Savvy. All rights reserved.</p>
                                    </div>
                                
                                </div>';


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
    