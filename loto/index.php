<?php
function cekilis($kolonSayisi){

  $kolonlar = [];
  for($i=0;$i<$kolonSayisi;$i++){
    $kolon = [];

    do {
      $sayi = rand(1,49);
      $kolon[] = $sayi;
      $kolon = array_unique($kolon);
    } while(count($kolon) < 6);

    $kolonlar[] = $kolon;
  }

  return $kolonlar;

}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Loto Yarışması</title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="well">
            <h3>Kaç Adet Kolon İstiyorsun?</h3>
            <form method="post">
              <div class="form-group">
                <input type="text" name="kolonSayisi" class="form-control">
              </div>
              <button type="submit" class="btn btn-primary">Yarışmaya Katıl</button>
            </form>
          </div>
        </div>

        <?php
        if($_POST){
          $adet = $_POST["kolonSayisi"];     
          $kolonlar = cekilis($adet);
          foreach($kolonlar as $kolon){
            echo "<h3>Kolon</h3>";
            foreach($kolon as $sayi){
              echo $sayi." ";
            }
          }    
        }
        ?>
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>