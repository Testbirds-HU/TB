<?php
  if($lang == 'Slovak'){
    // To send HTML mail, the Content-type header must be set
    $headers = 'MIME-Version: 1.0' . PHP_EOL .
        'Content-type: text/html; charset=utf-8' . PHP_EOL .
        'From: Testbirds.sk <no-reply@testbirds.hu>' . PHP_EOL .
        'Reply-To: Testbirds <no-reply@testbirds.hu>';

          if(!empty($_POST)){
            // multiple recipients
            $to = 'sales@testbirds.sk';

            // subject
            $subject = 'Message from the website';

            // message
            $message = '
            <html>
            <head>
              <title>Message from the website!</title>
            </head>
            <body>
              <p>Someone filled out the contact form on the Testbirds site</p>
              <table>
                <tr>
                  <td>Name</td><td>'.$_POST['nev'].'</td>
                </tr>
              <tr>
                  <td>E-mail</td><td>'.$_POST['email'].'</td>
                </tr>
                <tr>
                  <td>Phone number</td><td>'.$_POST['telefonszam'].'</td>
                </tr>
                <tr>
                  <td>Company name</td><td>'.$_POST['cegnev'].'</td>
                </tr>
                <tr>
                  <td>About the project</td><td>'.$_POST['projekt'].'</td>
                </tr>
              </table>
            </body>
            </html>
        ';}
  }elseif($lang == 'Czech'){
    // To send HTML mail, the Content-type header must be set
    $headers = 'MIME-Version: 1.0' . PHP_EOL .
        'Content-type: text/html; charset=utf-8' . PHP_EOL .
        'From: Testbirds.cz <no-reply@testbirds.hu>' . PHP_EOL .
        'Reply-To: Testbirds <no-reply@testbirds.hu>';

          if(!empty($_POST)){
            // multiple recipients
            $to = 'sales@testbirds.cz';

            // subject
            $subject = 'Message from the website';

            // message
            $message = '
            <html>
            <head>
              <title>Message from the website!</title>
            </head>
            <body>
              <p>Someone filled out the contact form on the Testbirds site</p>
              <table>
                <tr>
                  <td>Name</td><td>'.$_POST['nev'].'</td>
                </tr>
              <tr>
                  <td>E-mail</td><td>'.$_POST['email'].'</td>
                </tr>
                <tr>
                  <td>Phone number</td><td>'.$_POST['telefonszam'].'</td>
                </tr>
                <tr>
                  <td>Company name</td><td>'.$_POST['cegnev'].'</td>
                </tr>
                <tr>
                  <td>About the project</td><td>'.$_POST['projekt'].'</td>
                </tr>
              </table>
            </body>
            </html>
        ';}
  }else{
    // To send HTML mail, the Content-type header must be set
    $headers = 'MIME-Version: 1.0' . PHP_EOL .
        'Content-type: text/html; charset=utf-8' . PHP_EOL .
        'From: Testbirds.hu <no-reply@testbirds.hu>' . PHP_EOL .
        'Reply-To: Testbirds <no-reply@testbirds.hu>';

          if(!empty($_POST)){
            $to = 'sales@testbirds.hu';
            $subject = 'Üzenet a Testbirds weboldalról';
            $message = '
            <html>
            <head>
              <title>Üzenet a Testbirds weboldalról!</title>
            </head>
            <body>
              <p>Új üzeneted érkezett a Testbirds oldaláról!</p>
              <table>
                <tr>
                  <td>Név</td><td>'.$_POST['nev'].'</td>
                </tr>
              <tr>
                  <td>Email</td><td>'.$_POST['email'].'</td>
                </tr>
                <tr>
                  <td>Telefonszám</td><td>'.$_POST['telefonszam'].'</td>
                </tr>
                <tr>
                  <td>Cégnév</td><td>'.$_POST['cegnev'].'</td>
                </tr>
                <tr>
                  <td>Projektről</td><td>'.$_POST['projekt'].'</td>
                </tr>
              </table>
            </body>
            </html>
        ';}
  }

  if(!empty($_POST)){
    // Mail it
    mail($to, $subject, $message, $headers);
}

?>