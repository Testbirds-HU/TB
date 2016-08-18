<?php
  include('include/lang.php');

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
    <!DOCTYPE html>
    <?php include('include/html-head.php'); ?>
        <?php include('include/navigation.php'); ?>
            <div class="container">
                <div class="articlebody_g kapcsolat">
                    <div class="container">
                        <?php if(empty($_POST) ){?>
                            <h1>{{kapcsolat_cim1}}</h1>
                            <h2>{{kapcsolat_cim2}}</h2>
                            <p>
                                {{kapcsolat_cim3}}
                            </p>
                            <form method="post" action="#" accept-charset="UTF-8">
                                <div class="row form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input name="nev" placeholder="{{kapcsolat_form1}}" required class="form-control"> </div>
                                        <div class="form-group">
                                            <input type="email" name="email" placeholder="{{kapcsolat_form2}}" required class="form-control"> </div>
                                        <div class="form-group">
                                            <input type="tel" name="telefonszam" placeholder="{{kapcsolat_form3}}" required class="form-control"> </div>
                                        <div class="form-group">
                                            <input name="cegnev" placeholder="{{kapcsolat_form4}}" required class="form-control"> </div>
                                    </div>
                                    <div class="col-md-6 message">
                                        <div class="form-horizontal">
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <textarea rows="3" placeholder="{{kapcsolat_form5}}" required name="projekt" class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row send col-md-12">
                                        <input class="btn-primary" type="submit" value="{{kapcsolat_form6}}"> </div>
                                </div>
                            </form>
                            <div style="border-top:1px solid rgba(255,255,255,.49);margin-right:15px;margin-top:40px;padding-top:40px;text-align:center;opacity:.5" class="row">
                                <p>
                                    {{kapcsolat_kapcsolat1}}
                                </p>
                                <p>
                                    {{kapcsolat_kapcsolat2}}
                                </p>
                                <p>
                                    {{kapcsolat_kapcsolat3}}
                                </p>
                                <p>
                                    {{kapcsolat_kapcsolat4}}
                                </p>
                            </div>
                            <?php } else {
        ?>
                                <p class="thankyou">
                                    {{kapcsolat_kapcsolat5}}
                                </p>
                                <?php } ?>
                    </div>
                </div>
            </div>
            <?php
            include('include/footer.php');
            include('include/analytics.php');
            include('include/bottom-components.php');
        ?>
                </body>

                </html>
