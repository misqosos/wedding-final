
<style type="text/css">
    <?php
        include("app.component.css");
    ?>
</style>
<div class="border-app">
    <img src="../assets/images/flower.png" alt="Flower" class="flower-app top-left-app">
    <img src="../assets/images/flower.png" alt="Flower" class="flower-app top-right-app">
</div>
<!-- <router-outlet> -->
<?php
    include("router/router.php")
?>
<!-- </router-outlet> -->
<?php
    include("names-header/names-header.component.php");
?>

<form action="m/uploads/photos.php" method="post" enctype="multipart/form-data" style="top: 10vw; left: 20vw; position: relative; border-style: dashed;">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form>