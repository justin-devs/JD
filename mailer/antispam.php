<?php
   // error_reporting(0);
	session_start();
	$datetime = date("Y-m-d H:i:s");
	$date_today = date("Y-m-d");
	$today = date("d-m-Y");
    $response = "";
    $cv ="test";
	//-- anti-spam--//
	if(isset($_POST['message'])){
				    require 'PHPMailerAutoload.php';

                    $mail = new PHPMailer;
                    
                    $mail->isSMTP();
                    $mail->SMTPDebug = 0;
                    $mail->Debugoutput = 'html';
                    $mail->Host = "mail.justindevs.co.za";
                    $mail->Port = 465;
                    $mail->SMTPSecure = 'ssl';
                    $mail->SMTPAuth = true;
                    $mail->Username = "mailer@justindevs.co.za";
                    $mail->Password = "Phpm@iler1";
                    $mail->setFrom('mailer@justindevs.co.za', 'JD Contact');
                    $mail->addAddress('justin@justindevs.co.za', 'To');
                    
                    $mail->isHTML(true); 
                    $mail->Subject = "New web message!";
                    $mail->Body    = "
                            <html>
                            <body>
                              ".$_POST['name'].".".$_POST['email'].".".$_POST['message']."  
                            </body>
                            </html>";
                    if ($mail->send()) {
				    $response = 'Thank you, We will be in touch';
                    } else {
                        $response = "Something went wrong";
                    };
				};
                if(isset($_POST['cv'])){
                    require 'PHPMailerAutoload.php';

                    $mail = new PHPMailer;
                    
                    $mail->isSMTP();
                    $mail->SMTPDebug = 0;
                    $mail->Debugoutput = 'html';
                    $mail->Host = "mail.justindevs.co.za";
                    $mail->Port = 465;
                    $mail->SMTPSecure = 'ssl';
                    $mail->SMTPAuth = true;
                    $mail->Username = "mailer@justindevs.co.za";
                    $mail->Password = "Phpm@iler1";
                    $email = $_POST['cv'];
                    $mail->setFrom('mailer@justindevs.co.za', 'JD Contact');
                    $mail->addAddress($email, 'To');
                    $mail->addAttachment('../Justin_Resume.pdf');
                    $mail->isHTML(true); 
                    $mail->Subject = "New web message!";
                    $mail->Body    = "
                            <html>
                            <body>
                              Thank you for showing interest, Attached is my resume!  
                            </body>
                            </html>";
                    if ($mail->send()) {
                    $cv = 'Thank you, Check your inbox!';
                    } else {
                        $cv = "Something went wrong";
                    };
                }
			 
?>	

