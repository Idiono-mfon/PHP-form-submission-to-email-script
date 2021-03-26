<?php


/*
  //Caveat//
  **Add the above code to the script that contains the form you intend submitting to the server.
  **Also include the fuction scripts to the form submission script
  ** You can also decide to add some validations before calling the sendEmail function
  **Script will execute on a remote server


    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $post = sanitize_html($_POST);
        if(!empty($post)){
            $message = contactMessage($post);
            $success = sendEmail('info@kiasisventures.com.ng','Kasisventures contact form',$message);
        }
    }


*/

function h($str){
  return htmlspecialchars($str);
}

  function sanitize_html($data = []){
    $sanitize_array = [];
  if(!empty($data)){
    foreach($data as $key => $value){
        $sanitize_array[$key] = trim(h($value));
    }
    return $sanitize_array;
  }
  return $data;

  }
    function Emailmessage($arg=[]){
    $message = "
                       <html>
                       <head>
                       <title>Kiasisventures entrepreneurial development training</title>
                       </head>
                       <body>
                           <div style=\"text-align:center;\">
                             <img src=\"https://kiasisventures.com.ng/assets/images/logo.png\"/>
                           </div>
                           <h3 style=\"text-align:center;\">Registration for Entrepreuerial Development training </h3>
                           <div>

                            <p style=\"font-weight:bold; font-size:14px;\">Hello Kiasisventures Admin,  </p>

                             <strong>".$arg["fname"]." ".$arg["lname"]." </strong> has indicated interest for Kiasisventures Entreprenuerial development training. The user details are as follows;

                             <p>Name: <strong>".$arg["fname"]." ".$arg["lname"]."</strong></p>

                              <p>Email: <strong>".$arg["email"]."</strong></p>
                              
                              <p>Program of Interest: <strong>".$arg["program"]."</strong></p>

                              <p>User Brief Bio.: <strong>".$arg["message"]."</strong></p>

                              <p>Kindly reach out to the user via the above-highlighted details.

                              </p>
                                <br>
                               <strong>Best Regards.</strong><br>
                              <span style=\"font-weight:200; font-size:16px;\">(Kiasisventures ".date('Y').")</span>
                           </div>
                       </body>
                       </html>

               ";

       return $message;


}

function contactMessage($arg=[]){
  $message = "
                     <html>
                     <head>
                     <title>Kiasisventures Contact form</title>
                     </head>
                     <body>
                         <div style=\"text-align:center;\">
                           <img src=\"https://kiasisventures.com.ng/assets/images/logo.png\"/>
                         </div>
                         <h3 style=\"text-align:center;\">Enquiry from Kiasisventures contact form </h3>
                         <div>

                          <p style=\"font-weight:bold; font-size:14px;\">Hello Kiasisventures Admin,  </p>

                           <strong>".$arg["name"]." </strong> contact you from kiasisventures website contact form. The user enquiry details are as follows;

                           <p>Name: <strong>".$arg["name"]."</strong></p>

                            <p>Email: <strong>".$arg["email"]."</strong></p>
                            
                            <p>Email Subject : <strong>".$arg["subject"]."</strong></p>

                            <p>Message.: <strong>".$arg["message"]."</strong></p>

                            <p>Kindly reach out and respond to the user via the above-highlighted details.

                            </p>
                              <br>
                             <strong>Best Regards.</strong><br>
                            <span style=\"font-weight:200; font-size:16px;\">(Kiasisventures ".date('Y').")</span>
                         </div>
                     </body>
                     </html>

             ";

     return $message;


}

function sendEmail($email, $subject, $message){
    $to = $email;
    // $message = wordwrap($message, 70, "\r\n");
    // $message = "<body>".$message."</body>";
    $headers = 'Content-type: text/html; charset=iso-8859-1; charset=utf-8'."\r\n".
            'From: Kiasisventures training page <info@kiasisventures.com.ng>' . "\r\n" .
        'Reply-To: info@kiasisventures.com.ng' . "\r\n" .
        'Return-Path: info@kiasisventures.com.ng' . "\r\n" .
        'Organization: Kiasisventures' . "\r\n" .
        'MIME-Version: 1.0' . "\r\n" .
        'X-Priority: 3' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

   return mail($to, $subject, $message, $headers);
}


?>