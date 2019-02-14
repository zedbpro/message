<?php





if(isset($_POST['kraloua'])){
  $lol = $_POST['kok'];

  $file = "./taha.txt";
$write = $lol;
  file_put_contents($file , $write );


}








 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="post">




      <h1>taha is the best</h1>

      <input type="text" name="kok">

  <input type="submit" name="kraloua" value="ok bb">

    </form>


  </body>
</html>
