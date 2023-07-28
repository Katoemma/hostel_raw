<?php 
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require 'mail/Exception.php';
    require 'mail/PHPMailer.php';
    require 'mail/SMTP.php';
    
            $email = $_POST['email'];
        
            // Instantiation and passing `true` enables exceptions
            $mail = new PHPMailer(true);
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
            $mail->addAddress($email, $_POST['fname'] . ' ' . $_POST['lname']);// Add a recipient
        
            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Welcome To Hostels Savvy';
            $mail->Body    = '

                        <!DOCTYPE html>
                        <html>
                        <head>
                        </head>
                        <body style="font-family: Arial, sans-serif; line-height: 1.6; max-width: 600px;margin: 0 auto;padding: 20px;background-color: black;">
                            <div style="text-align: center; margin-bottom: 20px;">
                                <img src="https://i.imgur.com/Q4huFgc.png" alt="Hostels Savvy Logo" style="max-width: 100%;">
                            </div>

                            <h2 style="color: #e50f0b; font-size: 40px;"> Welcome to Hostels Savvy!</h2>

                            <p style="margin: 10px 0;color: #ffffff;">Dear'  . $_POST['fname'] ." ".$_POST['lname'].',</p>

                            <p style="margin: 10px 0;color: #ffffff;">Congratulations and a warm welcome to Hostels Savvy! We are thrilled to be a part of your journey in finding the perfect accommodation.</p>

                            <p style="margin: 10px 0;color: #ffffff;">We understand the importance of having a comfortable and safe place to stay during your academic journey. Our team has worked diligently to curate a list of top-notch hostels that meet your preferences and requirements.</p>

                            <p style="margin: 10px 0;color: #ffffff;"><strong>Hostels Savvy</strong> is more than just a platform for booking hostels; it is a community of like-minded students seeking enriching experiences. As you prepare for your journey, we encourage you to take advantage of the following resources:</p>

                            <ol style="margin-top: 0;margin-bottom: 20px;color: #ffffff;">
                                <li><strong>Customer Support:</strong> Our friendly support team is available to assist you with any questions or concerns you may have. Feel free to reach out at [Customer Support Email] or [Customer Support Phone Number].</li>
                                <li><strong>Reviews:</strong> After your stay, we would love to hear about your experience. Your feedback will help other students make informed decisions when booking their hostels.</li>
                            </ol>
                            <div style="display: flex; justify-content: center;">
                                <a href="http://hostelssavvy.ezyro.com/" style="display: inline-block; background-color: #f10303;color: #fff;padding: 10px 20px;text-decoration: none;border-radius: 5px;">Login to Continue</a><br>
                            </div>
                            <p style="margin: 10px 0;color: #ffffff;">As you embark on this new adventure, if there is anything we can assist you with, please donot hesitate to contact us. We are here to ensure your booking process and stay are seamless.</p>

                            <p style="margin: 10px 0;color: #ffffff;">Thank you for choosing Hostels Savvy. We wish you a fantastic and enriching stay!</p>

                            <p style="margin-top: 40px;text-align: center;color: #888;">Best regards,<br>
                                Hostels Savvy Team<br>
                                hostelssavvy@yahoo.com
                            </p>

                        </body>
                        </html>';

            
            
              