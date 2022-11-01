<!DOCTYPE html>
<html lang="en">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Comatible" content="IE=edg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BroStore Online | اضافة منتجات</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <center>
        <div class="main">
            <form action="insert.php" method="post" enctype="multipart/form-data">
                <h2>متجر بروشوب تسويقي</h2>
                <img src="logo.jpg" alt="logo" width="450px">
                <input type="text" name='name'>
                <br>
                <input type="text" name='price'>
                <br>
                <input type="file" id="file" name='image' style='display:none;'>
                <label for="file">اختيار صورة المنتج</label>
                <button name='upload'>رفع المنتج</button>
                <br><br>
                <a href="products.php">عرض كل المنتجات</a>
            </form>
        </div>
        <p>Developer By Alarabi</p>
    </center>
</body>
</html>