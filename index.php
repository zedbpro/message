<?php




$file = "./taha.txt";
$zed = file_get_contents($file);










/*require 'phpmailer/PHPMailerAutoload.php';

$mail = new PHPMailer();

$mail->isSMTP();
$mail->Host = "smtp.gmail.com";
$mail->SMTPSecure = "ssl";
$mail->Port = 465;
$mail->SMTPAuth = true;
$mail->Username = 'zedblqpam@gmail.com';
$mail->Password = 'taha159357';
$mail->Subject = 'taha';
$mail->Body = 'taha is the best';


//$mail->setFrom('zedbpro@gmail.com', 'Senaid Bacinovic');
$mail->addAddress('kralouat@gmail.com');


if ($mail->send())
    echo "Mail sent";
    else {
      echo "Mail is not sent";
      <input id="pop" type="text" name="kraloua" value=<?php echo $zed; ?>>

    }*/

    ?>


    <!DOCTYPE html>
    <html>
      <head>
        <link rel="stylesheet" href="index.css">
        <meta charset="utf-8">
        <title>taha</title>


      </head>
      <body>

        <div class="hade">

        <a href="#"><h1 class="h1">home</h1></a>

        <a href="main.php"><h1 class="h2">change</h1></a>

        </div>
        <form  action="index.html" method="post">


          <h1 class="taha">taha is the best</h1>


        <img class="ime"  id="ime" src="<?php echo $zed; ?>" alt="">


    </form>
    <script type="text/javascript" src="index.js">

    </script>
      </body>
    </html>
