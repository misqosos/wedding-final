<?php
  include("backend/database.class.php");
?>
<?php
  function isMobileDevice() { 
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo 
  |fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i" 
  , $_SERVER["HTTP_USER_AGENT"]); 
  } 

  if(isMobileDevice()){
    header('Location: /m/');
    exit;
  }
?>

<?php
function checkPost($pass) {
  if (isset($pass)) {
    $sql = 'SELECT * FROM wedding.dishes WHERE lunch = :lunch';
        
    $stmt = DbConnection::getDatabaseConnection()->prepare($sql);

    $stmt->bindParam(':lunch', $lunchParam, PDO::PARAM_STR);
    $lunchParam = $pass;

    $stmt->execute();

    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $result = json_decode(json_encode($row));

    if ($result) {
      if ($pass == $result->lunch) {
        setcookie('cake', $result->id, time() + (86400 * 30), "/"); // 86400 = 1 day
        header('Location: /');
        return true;
      }
    }
  }
}

function checkCookie($pass) {
  if (isset($pass)) {
    $sql = 'SELECT * FROM wedding.dishes WHERE id = :lunch';
        
    $stmt = DbConnection::getDatabaseConnection()->prepare($sql);

    $stmt->bindParam(':lunch', $lunchParam, PDO::PARAM_STR);
    $lunchParam = $pass;

    $stmt->execute();

    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $result = json_decode(json_encode($row));

    if ($result) {
      if ($pass == $result->id) {
        return true;
      }
    }
  }
}
?>

<?php if (!isset($_COOKIE['cake'])) : ?>

  <!doctype html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Gate</title>
    <base href="/">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="heart.ico">
    <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <?php
      include("gate/gate.php");
    ?>
  </body>
  </html>
  
<?php endif; ?>

<?php if (isset($_POST['pass'])) : ?>
  <?php if (checkPost($_POST['pass'])) : ?>

    <!doctype html>
    <html lang="en">
    <head>
      <meta charset="utf-8">
      <title>Stakčínska svadbička</title>
      <base href="/">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="icon" type="image/x-icon" href="heart.ico">
      <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet'>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
      <?php
        include("app.component.php");
      ?>
    </body>
    </html>

  <?php endif; ?>
<?php elseif (isset($_COOKIE['cake'])) : ?>
  <?php if (checkCookie($_COOKIE['cake'])) : ?>

    <!doctype html>
    <html lang="en">
    <head>
      <meta charset="utf-8">
      <title>Stakčínska svadbička</title>
      <base href="/">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="icon" type="image/x-icon" href="heart.ico">
      <link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet'>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
      <?php
        include("app.component.php");
      ?>
    </body>
    </html>

  <?php endif; ?>
<?php endif; ?>