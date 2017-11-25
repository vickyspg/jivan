<?php 
// contact us form ajax file

    include_once("classes/PHPMailerAutoload.php");
    include_once("classes/class.phpmailer.php");

    $responce = array();

    if(isset($_POST)){

        $ContactEmail = (isset($_POST['email']) && $_POST['email'] != '') ? $_POST['email'] : '';
        

        if($ContactEmail != ''){

            $email = new PHPMailer();
            $email->From      = $ContactEmail;
            $email->FromName  = $ContactName;
            $email->Subject   = "Newletter Subscriber";
            
            $email->addAddress('viki@eternalsoftsolutions.com');
            $email->isHTML(true);

            $email->Body =
            "<html>
                <head>
                    <title>Newletter Subscriber</title>
                </head>
                <style type='text/css'>
                    td{
                        max-width: 330px;
                    }
                </style>
                <body>  
                    <table border=1 cellpadding=5 cellspacing=0>
                        <tr bgcolor=#3366FF>
                            <td colspan=2 align=center><font size=+1 color=#FFFFFF><strong>Newletter Subscriber</strong></font></td>
                        </tr>
                        <tr>
                            <td><strong>Email ID :</strong></td>
                            <td>$ContactEmail</td>
                        </tr>
                    </table>
                </body>
            </html>";

            if(!$email->send()) {
                $responce['status'] = 'error';
                $responce['text'] = $email->ErrorInfo;
                
            } else {
                $responce['status'] = 'success';
                $responce['text'] = "Your message has been sent successfully ";
            }

        }else{
            $responce['status'] = 'error';
            $responce['text'] = 'Please check contact Email';
        }

    }else{
        $responce['status'] = 'error';
        $responce['text'] = 'Opps..! Something went wrong.';
    }

    echo json_encode($responce);
    exit;

?>