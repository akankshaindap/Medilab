<?php

    
    
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    
    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';


    $mail = new PHPMailer(true);                             
    
        
        $mail->SMTPDebug = 2;                                 
        $mail->isSMTP();                                      
        $mail->Host = 'smtp.gmail.com';  
        $mail->SMTPAuth = true;                              
        $mail->Username = 'medilabinfo11@gmail.com';                 
        $mail->Password = 'medilab@123';                          
        $mail->SMTPSecure = 'ssl';                            
        $mail->Port = 465;                                    
        
        
        $mail->setFrom('medilabinfo11@gmail.com', 'Mailer');
        $mail->addAddress('medilabinfo11@gmail.com', 'Medilab');     
        
        
        
        
        
        $mail->isHTML(true);
        $mail->Subject = $_POST["subject"];
        $mail->Body = "\nName :
        ";
        $mail->Body    .= $_POST["name"];
        $mail->Body .= "\nEmail :
         ";
        $mail->Body    .= $_POST["email"];
        $mail->Body .= "\nMessage :
         ";
        $mail->Body    .= $_POST["message"];

         
        if(!$mail->send()){
        echo 'Somethig is wrong';
    }
    else
    {
        echo 'Thanks'.$_POST['name'].'for cotacting us. We will get back to you soon!';
    }
    
    

				$user = 'root';
                $password = '';
                $db = 'medilab';
                $host = 'localhost';
                $link = mysqli_connect( $host,$user, $password,$db);

                if($link === false){
                die("ERROR: Could not connect. " . mysqli_connect_error());
                  }
                 
 
// Escape user inputs for security
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$subject = mysqli_real_escape_string($link, $_REQUEST['subject']);
$message = mysqli_real_escape_string($link, $_REQUEST['message']);

// attempt insert query execution
$sql = "INSERT INTO contact (c_name, c_email,c_subject,c_message) VALUES ('$name', '$email', '$subject','$message')";
if(mysqli_query($link, $sql)){

    echo "<script>window.open('index.php','_self')</script>";    
    
 }
else { 
    echo "ERROR: Could not able to execute $sql. "
                                .mysqli_error($link); 
} 
 
 
 
// close connection
mysqli_close($link);
?>
