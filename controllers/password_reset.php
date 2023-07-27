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
                $mail->Body    ='<!DOCTYPE html>
				<html lang="en" xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:v="urn:schemas-microsoft-com:vml">
				<head>
				<title></title>
				<meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
				<meta content="width=device-width, initial-scale=1.0" name="viewport"/><!--[if mso]><xml><o:OfficeDocumentSettings><o:PixelsPerInch>96</o:PixelsPerInch><o:AllowPNG/></o:OfficeDocumentSettings></xml><![endif]-->
				<style>
						* {
							box-sizing: border-box;
						}

						body {
							margin: 0;
							padding: 0;
						}

						a[x-apple-data-detectors] {
							color: inherit !important;
							text-decoration: inherit !important;
						}

						#MessageViewBody a {
							color: inherit;
							text-decoration: none;
						}

						p {
							line-height: inherit
						}

						.desktop_hide,
						.desktop_hide table {
							mso-hide: all;
							display: none;
							max-height: 0px;
							overflow: hidden;
						}

						.image_block img+div {
							display: none;
						}
                        .alignment {
                            text-align: center;
                        }
                
                        .reset-button {
                            display: inline-block;
                            text-decoration: none;
                            color: #091548;
                            background-color: #ffffff;
                            border: 2px solid #091548;
                            border-radius: 24px;
                            padding: 5px 25px;
                            font-family: "Varela Round", "Trebuchet MS", Helvetica, sans-serif;
                            font-size: 15px;
                            text-align: center;
                            line-height: 30px;
                        }
                
                        .reset-button:hover {
                            background-color: #f2f2f2;
                        }
                
                        .reset-button strong {
                            font-weight: bold;
                        }

						@media (max-width:620px) {
							.desktop_hide table.icons-inner {
								display: inline-block !important;
							}

							.icons-inner {
								text-align: center;
							}

							.icons-inner td {
								margin: 0 auto;
							}

							.social_block.desktop_hide .social-table {
								display: inline-block !important;
							}

							.row-content {
								width: 100% !important;
							}

							.stack .column {
								width: 100%;
								display: block;
							}

							.mobile_hide {
								max-width: 0;
								min-height: 0;
								max-height: 0;
								font-size: 0;
								display: none;
								overflow: hidden;
							}

							.desktop_hide,
							.desktop_hide table {
								max-height: none !important;
								display: table !important;
							}
						}
					</style>
				</head>
				<body style="text-size-adjust: none; background-color: #091548; margin: 0; padding: 0;">
				<table border="0" cellpadding="0" cellspacing="0" class="nl-container" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #091548;" width="100%">
				<tbody>
				<tr>
				<td>
				<table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-1" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #091548; background-image: url(https://i.imgur.com/ZidNtG5.png); background-position: center top; background-repeat: repeat;" width="100%">
				<tbody>
				<tr>
				<td>
				<table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000; width: 600px; margin: 0 auto;" width="600">
				<tbody>
				<tr>
				<td class="column column-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; text-align: left; font-weight: 400; padding-bottom: 15px; padding-left: 10px; padding-right: 10px; padding-top: 5px; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="100%">
				<div class="spacer_block block-1" style="height:8px;line-height:8px;font-size:1px;"> </div>
				<table border="0" cellpadding="0" cellspacing="0" class="image_block block-2" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
				<tr>
				<td class="pad" style="width:100%;padding-right:0px;padding-left:0px;">
				<div align="center" class="alignment" style="line-height:10px"><img alt="Main Image" src="https://i.imgur.com/EJlQAOe.png" style="height: auto; display: block; border: 0; max-width: 232px; width: 100%;" title="Main Image" width="232"/></div>
				</td>
				</tr>
				</table>
				<table border="0" cellpadding="0" cellspacing="0" class="text_block block-3" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;" width="100%">
				<tr>
				<td class="pad" style="padding-bottom:15px;padding-top:10px;">
				<div style="font-family: sans-serif">
				<div class="" style="font-size: 14px; font-family: "Varela Round", "Trebuchet MS", Helvetica, sans-serif; mso-line-height-alt: 16.8px; color: #ffffff; line-height: 1.2;">
				<p style="margin: 0; font-size: 14px; text-align: center; mso-line-height-alt: 16.8px;"><span style="font-size:30px; color:white;">Reset Your Password</span></p>
				</div>
				</div>
				</td>
				</tr>
				</table>
				<table border="0" cellpadding="5" cellspacing="0" class="text_block block-4" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;" width="100%">
				<tr>
				<td class="pad">
				<div style="font-family: sans-serif">
				<div class="" style="font-size: 14px; font-family: "Varela Round", "Trebuchet MS", Helvetica, sans-serif; mso-line-height-alt: 21px; color: #ffffff; line-height: 1.5;">
				<p style="margin: 0; font-size: 14px; text-align: center; mso-line-height-alt: 21px; color:white;">We received a request to reset your password. Don’t worry,</p>
				<p style="margin: 0; font-size: 14px; text-align: center; mso-line-height-alt: 21px; color:white;">we are here to help you.</p>
				</div>
				</div>
				</td>
				</tr>
				</table>
				<table border="0" cellpadding="0" cellspacing="0" class="button_block block-5" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
				<tr>
				<td class="pad" style="padding-bottom:20px;padding-left:15px;padding-right:15px;padding-top:20px;text-align:center;">
				<div class="alignment">
                    <a href="http://localhost/hostel_raw/update_password.php?code=<?php echo $code; ?>" class="reset-button" target="_blank">
                        <strong>RESET MY PASSWORD</strong>
                    </a>
                </div>
				</td>
				</tr>
				</table>
				<table border="0" cellpadding="0" cellspacing="0" class="divider_block block-6" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
				<tr>
				<td class="pad" style="padding-bottom:15px;padding-left:10px;padding-right:10px;padding-top:10px;">
				<div align="center" class="alignment">
				<table border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="60%">
				<tr>
				<td class="divider_inner" style="font-size: 1px; line-height: 1px; border-top: 1px solid #5A6BA8;"><span> </span></td>
				</tr>
				</table>
				</div>
				</td>
				</tr>
				</table>
				<table border="0" cellpadding="0" cellspacing="0" class="text_block block-7" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;" width="100%">
				<tr>
				<td class="pad" style="padding-bottom:10px;padding-left:25px;padding-right:25px;padding-top:10px;">
				<div style="font-family: sans-serif">
				<div class="" style="font-size: 14px; font-family: "Varela Round", "Trebuchet MS", Helvetica, sans-serif; mso-line-height-alt: 21px; color: #7f96ef; line-height: 1.5;">
				<p style="margin: 0; font-size: 14px; text-align: center; mso-line-height-alt: 21px;"><strong>Didn’t request a password reset?</strong></p>
				<p style="margin: 0; font-size: 14px; text-align: center; mso-line-height-alt: 21px;">You can safely ignore this message.</p>
				</div>
				</div>
				</td>
				</tr>
				</table>
				<div class="spacer_block block-8" style="height:30px;line-height:30px;font-size:1px;"> </div>
				</td>
				</tr>
				</tbody>
				</table>
				</td>
				</tr>
				</tbody>
				</table>
				<table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-2" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
				<tbody>
				<tr>
				<td>
				<table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000; width: 600px; margin: 0 auto;" width="600">
				<tbody>
				<tr>
				<td class="column column-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; text-align: left; font-weight: 400; padding-bottom: 15px; padding-left: 10px; padding-right: 10px; padding-top: 15px; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="100%">
				<table border="0" cellpadding="5" cellspacing="0" class="image_block block-1" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
				<tr>
				<td class="pad">
				<div align="center" class="alignment" style="line-height:10px"><img alt="Your Logo" src="https://i.imgur.com/Q4huFgc.png" style="height: auto; display: block; border: 0; max-width: 145px; width: 100%;" title="Your Logo" width="145"/></div>
				</td>
				</tr>
				</table>
				<table border="0" cellpadding="0" cellspacing="0" class="divider_block block-2" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
				<tr>
				<td class="pad" style="padding-bottom:15px;padding-left:10px;padding-right:10px;padding-top:15px;">
				<div align="center" class="alignment">
				<table border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="60%">
				<tr>
				<td class="divider_inner" style="font-size: 1px; line-height: 1px; border-top: 1px solid #5A6BA8;"><span> </span></td>
				</tr>
				</table>
				</div>
				</td>
				</tr>
				</table>
				<table border="0" cellpadding="10" cellspacing="0" class="social_block block-3" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
				<tr>
				<td class="pad">
				<div align="center" class="alignment">
				<table border="0" cellpadding="0" cellspacing="0" class="social-table" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; display: inline-block;" width="156px">
				<tr>
				<td style="padding:0 10px 0 10px;"><a href="https://www.facebook.com" target="_blank"><img alt="Facebook" height="32" src="https://i.imgur.com/MokeRo3.png" style="height: auto; display: block; border: 0;" title="Facebook" width="32"/></a></td>
				<td style="padding:0 10px 0 10px;"><a href="https://www.instagram.com" target="_blank"><img alt="Instagram" height="32" src="https://i.imgur.com/TQFFa5G.png" style="height: auto; display: block; border: 0;" title="Instagram" width="32"/></a></td>
				<td style="padding:0 10px 0 10px;"><a href="https://www.twitter.com" target="_blank"><img alt="Twitter" height="32" src="https://i.imgur.com/CkcQaUV.png" style="height: auto; display: block; border: 0;" title="Twitter" width="32"/></a></td>
				</tr>
				</table>
				</div>
				</td>
				</tr>
				</table>
				<table border="0" cellpadding="15" cellspacing="0" class="text_block block-4" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;" width="100%">
				<tr>
				<td class="pad">
				<div style="font-family: sans-serif">
				<div class="" style="font-size: 12px; font-family: "Varela Round", "Trebuchet MS", Helvetica, sans-serif; mso-line-height-alt: 14.399999999999999px; color: #4a60bb; line-height: 1.2;">
				<p style="margin: 0; font-size: 12px; text-align: center; mso-line-height-alt: 14.399999999999999px; color:white;"><span style="">Copyright © 2021 HostelsSavvy, All rights reserved.</span></p>
				</div>
				</div>
				</td>
				</tr>
				</table>
				<table border="0" cellpadding="0" cellspacing="0" class="html_block block-5" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
				<tr>
				<td class="pad">
				<div align="center" style="font-family:"Varela Round", "Trebuchet MS", Helvetica, sans-serif;text-align:center;"><div style="height-top: 20px;"> </div></div>
				</td>
				</tr>
				</table>
				</td>
				</tr>
				</tbody>
				</table>
				</td>
				</tr>
				</tbody>
				</table>
				<table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-3" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
				<tbody>
				<tr>
				<td>
				<table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000; width: 600px; margin: 0 auto;" width="600">
				<tbody>
				<tr>
				<td class="column column-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; text-align: left; font-weight: 400; padding-bottom: 5px; padding-top: 5px; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="100%">
				<table border="0" cellpadding="0" cellspacing="0" class="icons_block block-1" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
				<tr>
				<td class="pad" style="vertical-align: middle; color: #9d9d9d; font-family: inherit; font-size: 15px; padding-bottom: 5px; padding-top: 5px; text-align: center;">
				<table cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
				<tr>
				<td class="alignment" style="vertical-align: middle; text-align: center;"><!--[if vml]><table align="left" cellpadding="0" cellspacing="0" role="presentation" style="display:inline-block;padding-left:0px;padding-right:0px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;"><![endif]-->
				<!--[if !vml]><!-->
				<table cellpadding="0" cellspacing="0" class="icons-inner" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; display: inline-block; margin-right: -4px; padding-left: 0px; padding-right: 0px;"><!--<![endif]-->
				<tr>
				</tr>
				</table>
				</td>
				</tr>
				</table>
				</td>
				</tr>
				</table>
				</td>
				</tr>
				</tbody>
				</table>
				</td>
				</tr>
				</tbody>
				</table>
				</td>
				</tr>
				</tbody>
				</table><!-- End -->
				</body>
				</html>';


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
    