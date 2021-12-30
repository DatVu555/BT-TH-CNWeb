<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP in php</title>
</head>

<body>
    <?php
        include "SinhVien.php";
        include "QuanLySV";

        $sv01 = new SinhVien("TTV", 2001, "cse111");
        $sv02 = new SinhVien("hehhehe", 2000, "cse111");

        
    ?>
    <script src="script_oop.js"></script>
</body>

</html>