<?php
include('config.php');
$ID=$_GET['id'];
$up = mysqli_query($con, "select * from product where id=$ID");
$data = mysqli_fetch_array($up);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Comatible" content="IE=edg">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>إتمام عملية الشراء</title>
        <style>
            input{
                display: none;
            }
            .main{
                width: 40%;
                padding: 30px;
                box-shadow: 0px 0px 10px silver;
                margin-top: 60px; 
            }
        </style>
    </head>
    <body>
        <center>
            <div class="main">
                <form action="insert_card.php" method="post">
                    <h2>!إضافة المنتج الى سلة التسوق</h2>
                    <input type="text" name="id" value='<?php echo $data['id']?>'>
                    <input type="text" name="name" value='<?php echo $data['name']?>'>
                    <input type="text" name="price" value='<?php echo $data['price']?>'>
                    <button name="add" type="submit" class='btn btn-warning'>تأكيد الشراء</button>
                    <br>
                    <a href="shop.php">العودة الى قائمة المنتجات</a>
                </form>
            </div>
        </center>
    </body>
</html>