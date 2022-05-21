<?php
  
if($_POST) {
    $first = "";
    $last = "";
    $email = "";
    $number = "";
    $adate = "";
    $ddate = "";
    $noOfRooms = "";
    $email_body = "<div>";
      
    if(isset($_POST['first'])) {
        $name = filter_var($_POST['visitor_fname'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                           <label><b>Visitor Name:</b></label>&nbsp;<span>".$first."</span>
                        </div>";
    }

    if(isset($_POST['last'])) {
        $name = filter_var($_POST['visitor_lname'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                           <label><b>Visitor Name:</b></label>&nbsp;<span>".$last."</span>
                        </div>";
    }
 
    if(isset($_POST['email'])) {
        $email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['visitor_email']);
        $email = filter_var($email, FILTER_VALIDATE_EMAIL);
        $email_body .= "<div>
                           <label><b>Visitor Email:</b></label>&nbsp;<span>".$email."</span>
                        </div>";
    }
      
    if(isset($_POST['number'])) {
        $subject = filter_var($_POST['mobile_number'], FILTER_SANITIZE_STRING);
        $email_body .= "<div>
                           <label><b>Reason For Contacting Us:</b></label>&nbsp;<span>".$number."</span>
                        </div>";
    }
      
    if(isset($_POST['adate'])) {
        $message = htmlspecialchars($_POST['arrival_date']);
        $email_body .= "<div>
                           <label><b>Visitor Message:</b></label>
                           <div>".$adate."</div>
                        </div>";
    }

    if(isset($_POST['ddate'])) {
        $message = htmlspecialchars($_POST['depature_date']);
        $email_body .= "<div>
                           <label><b>Visitor Message:</b></label>
                           <div>".$ddate."</div>
                        </div>";
    }
      
      

    $recipient = "web221solution@gmail.com";
   
      
    $email_body .= "</div>";
 
    $headers  = 'MIME-Version: 1.0' . "\r\n"
    .'Content-type: text/html; charset=utf-8' . "\r\n"
    .'From: ' . $email . "\r\n";
      
    if(mail($recipient, $subject, $email_body, $headers)) {
        echo "<p>Thank you for contacting us, $name. You will get a reply within 24 hours.</p>";
    } else {
        echo '<p>We are sorry but the email did not go through.</p>';
    }
      
} else {
    echo '<p>Something went wrong</p>';
}
?>