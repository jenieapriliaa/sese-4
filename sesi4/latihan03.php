<?php
   $path= "upgambar/";

   if(isset($_POST["kirim"])){
        echo"<pre>";
        print_r($_FILES);
        echo"</pre>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upload file </title>
</head>
<body>

    <form method="POST" action="latihan03.php" enctype="multipart/form-data">
<div>
    upload file gambar 1
    <input type="file" name="upGAMBAR">
</div>
<div>
    <button type="submit"> Upload Gambar </button>
    <input type="hidden" name="kirim" value="OK">
</div>
    </form>
</body>
</html>