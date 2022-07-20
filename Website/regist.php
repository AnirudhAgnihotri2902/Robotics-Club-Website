<?php
$name = $_POST['name'];
$email = $_POST['email'];
$contact = $_POST['contact'];
$studentno = $_POST['studentno'];
$branch = $_POST['branch'];
$gender = $_POST['gender'];
$hostler = $_POST['hostler'];
$hardskill = $_POST['hardskill'];
$softskill = $_POST['softskill'];
$projects = $_POST['projects'];
$society = $_POST['society'];
$domain = $_POST['domain'];
$idea = $_POST['idea'];

if($name == '' || $email == '' || $contact == '' || $studentno == '' || $branch == '' || $gender == '' || $hostler == '' || $idea == '' || $domain==''){
    header("Location: http://www.akgecrobotics.com/regist_error.html");
}
else {
//crendential to be filled inside it.
$conn = mysqli_connect("mysql.hostinger.in","u572544975_akgecrobotics","Prajwal@123","u572544975_akgecrobotics");

$query = mysqli_query($conn,"
         INSERT INTO regist_test (name, email, contact, studentno, branch, gender, hostler, projects, softskill, hardskill, domain, society, idea) VALUES ('$name','$email', '$contact', '$studentno', '$branch', '$gender', '$hostler', '$projects', '$softskill', '$hardskill', '$domain', '$society', '$idea')
         ");
    
if($query)
{
        
        $from='admin@akgecrobotics.com';
        
        $subject = "Registered Successfully for Robotics 1O1 Recruitment Drive";
        
        $headers  = 'MIME-Version: 1.0' . "\r\n";

        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

 

        // Create email headers

        $headers .= 'From: '.$from."\r\n".

                    'Reply-To: '.$from."\r\n" .

                    'X-Mailer: PHP/' . phpversion();

 

        // Compose a simple HTML email message

        $message = '<html><body>';

        $message .= '<h4 style="color:#f4cd2a;">'.$name.'</h4>';

        $message .= '<p>You are successfully registered for Robotics 1O1 Workshop presented by Robotics Club AKGEC and Team Robocon. <br>
        <h4 style="color:#f4cd2a;">Student Number :'.$studentno.'<br></h4>
        <h4 style="color:#f4cd2a;">Contact Number :'.$contact.'<br></h4>
        <h4 style="color:#f4cd2a;">Branch :'.$branch.'<br><br></h4>
        
       These details can not be edited by website. To make any changes email to <b><i>contact@akgecrobotics.com or contact us on our <a href="https://www.facebook.com/roboticclubakgec/">facebook</a> or <a href="https://www.instagram.com/akgecrobotics/">instagram</a></i></b><br>
        
        <h4 style="color:#800080;">Selected students will be notified via email or WhatsApp for their entry pass. Stay tuned on our website and social platforms for further details.</h4></p><br><br>

Robotics Club<br>
AKGEC</p>
        ';

        $message .= '</body></html>';

        $retval = mail ($email,$subject,$message, $headers);
        if($retval){
            session_start();
            $_SESSION['email'] = $email;
            header("Location: http://www.akgecrobotics.com/suc_regist.php");
            
        }
        else {
            header("Location: http://www.akgecrobotics.com/regist_error.html");
        }
}
else header("Location: http://www.akgecrobotics.com/regist_error.html");
}
?>
